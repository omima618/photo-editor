// /*
//  Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
//  CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
// */
// (function(){function g(b){return""===b?!1:b}function h(b){if(!/(o|u)l/i.test(b.parent.name))return b;d.elements.replaceWithChildren(b);return!1}function k(b){function d(a,f){var b,c;if(a&&"tr"===a.name){b=a.children;for(c=0;c<f.length&&b[c];c++)b[c].attributes.width=f[c];d(a.next,f)}}var c=b.parent;b=function(a){return CKEDITOR.tools.array.map(a,function(a){return Number(a.attributes.width)})}(b.children);var a=function(a){return CKEDITOR.tools.array.reduce(a,function(a,b){return a+b},0)}(b);c.attributes.width=
// a;d(function(a){return(a=CKEDITOR.tools.array.find(a.children,function(a){return a.name&&("tr"===a.name||"tbody"===a.name)}))&&a.name&&"tbody"===a.name?a.children[0]:a}(c),b)}var e=CKEDITOR.plugins.pastetools,d=e.filters.common,c=d.styles;CKEDITOR.plugins.pastetools.filters.gdocs={rules:function(b,e,l){return{elementNames:[[/^meta/,""]],comment:function(){return!1},attributes:{id:function(a){return!/^docs\-internal\-guid\-/.test(a)},dir:function(a){return"ltr"===a?!1:a},style:function(a,b){return g(c.normalizedStyles(b,
// e))},"class":function(a){return g(a.replace(/kix-line-break/ig,""))}},elements:{div:function(a){var b=1===a.children.length,c="table"===a.children[0].name;"div"===a.name&&b&&c&&delete a.attributes.align},colgroup:k,span:function(a){c.createStyleStack(a,l,e,/vertical-align|white-space|font-variant/);var b=/vertical-align:\s*sub/,d=a.attributes.style;/vertical-align:\s*super/.test(d)?a.name="sup":b.test(d)&&(a.name="sub");a.attributes.style=d.replace(/vertical-align\s*.+?;?/,"")},b:function(a){d.elements.replaceWithChildren(a);
// return!1},p:function(a){if(a.parent&&"li"===a.parent.name)return d.elements.replaceWithChildren(a),!1},ul:function(a){c.pushStylesLower(a);return h(a)},ol:function(a){c.pushStylesLower(a);return h(a)},li:function(a){c.pushStylesLower(a);var b=a.children,e=/(o|u)l/i;1===b.length&&e.test(b[0].name)&&(d.elements.replaceWithChildren(a),a=!1);return a}}}}};CKEDITOR.pasteFilters.gdocs=e.createFilter({rules:[d.rules,CKEDITOR.plugins.pastetools.filters.gdocs.rules]})})();



(function () {
    // Helper function to check if a string is empty
    function isNotEmpty(str) {
        return str !== "";
    }

    // Handle specific cases for list items and table rows
    function handleSpecialCases(element) {
        if (!/(o|u)l/i.test(element.parent.name)) {
            // If the parent is not a ul or ol, replace the element with its children
            d.elements.replaceWithChildren(element);
            return false;
        }
        return element;
    }

    // Handle table-related logic
    function handleTableLogic(element) {
        var parent = element.parent;
        var widths = CKEDITOR.tools.array.map(element.children, function (child) {
            return Number(child.attributes.width);
        });

        var totalWidth = CKEDITOR.tools.array.reduce(widths, function (sum, width) {
            return sum + width;
        }, 0);

        parent.attributes.width = totalWidth;

        // Handle columns in tr element
        function processColumns(rowElement, columnWidths) {
            var columns = rowElement.children;
            for (var i = 0; i < columns.length && columns[i]; i++) {
                columns[i].attributes.width = columnWidths[i];
            }
        }

        // Apply widths to columns
        processColumns(parent, widths);
    }

    // Define filters for Google Docs pasted content
    CKEDITOR.plugins.pastetools.filters.gdocs = {
        rules: function (element, editor, listType) {
            return {
                elementNames: [
                    [/^meta/, ""]
                ],
                comment: function () {
                    return false;
                },
                attributes: {
                    id: function (value) {
                        return !/^docs\-internal\-guid\-/.test(value);
                    },
                    dir: function (value) {
                        return value === "ltr" ? false : value;
                    },
                    style: function (value, element) {
                        return isNotEmpty(c.normalizedStyles(value, editor))
                            ? false
                            : value;
                    },
                    "class": function (value) {
                        return isNotEmpty(value.replace(/kix-line-break/ig, ""));
                    },
                },
                elements: {
                    div: function (element) {
                        var isSingleChild = element.children.length === 1;
                        var isTableChild = element.children[0].name === "table";

                        if (element.name === "div" && isSingleChild && isTableChild) {
                            delete element.attributes.align;
                        }
                    },
                    colgroup: handleTableLogic,
                    span: function (element) {
                        c.createStyleStack(element, listType, editor, /vertical-align|white-space|font-variant/);

                        var verticalAlignSub = /vertical-align:\s*sub/;
                        var verticalAlignSuper = /vertical-align:\s*super/;
                        var style = element.attributes.style;

                        if (verticalAlignSuper.test(style)) {
                            element.name = "sup";
                        } else if (verticalAlignSub.test(style)) {
                            element.name = "sub";
                        }

                        element.attributes.style = style.replace(/vertical-align\s*.+?;?/, "");
                    },
                    b: function (element) {
                        // Replace <b> with its children
                        d.elements.replaceWithChildren(element);
                        return false;
                    },
                    p: function (element) {
                        if (element.parent && element.parent.name === "li") {
                            // If the parent is an li, replace <p> with its children
                            d.elements.replaceWithChildren(element);
                            return false;
                        }
                        return element;
                    },
                    ul: handleSpecialCases,
                    ol: handleSpecialCases,
                    li: function (element) {
                        // Handle styles for list items
                        c.pushStylesLower(element);
                        var children = element.children;
                        var isListElement = (children.length === 1 && /(o|u)l/i.test(children[0].name));

                        if (isListElement) {
                            // Replace list item with its children
                            d.elements.replaceWithChildren(element);
                            return false;
                        }
                        return element;
                    },
                }
            };
        },
    };

    // Create a filter for Google Docs pasted content
    CKEDITOR.pasteFilters.gdocs = CKEDITOR.plugins.pastetools.createFilter({
        rules: [d.rules, CKEDITOR.plugins.pastetools.filters.gdocs.rules]
    });
})();
