// /*
//  Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
//  CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
// */
// (function(){function k(b,c){if(!(b.previous&&g(b.previous)&&b.getFirst().children.length&&1===b.children.length&&g(b.getFirst().getFirst())))return!1;for(var d=l(b.previous),a=0,f=d,r=q();f=f.getAscendant(r);)a++;return(a=m(b,a))?(d.add(a),a.filterChildren(c),!0):!1}function l(b){var c=b.children[b.children.length-1];return g(c)||"li"===c.name?l(c):b}function q(){var b=!1;return function(c){return b?!1:g(c)||"li"===c.name?g(c):(b=!0,!1)}}function m(b,c){return c?m(b.getFirst().getFirst(),--c):b}function g(b){return"ol"===
// b.name||"ul"===b.name}function h(){return!1}var n=CKEDITOR.plugins.pastetools,p=n.filters.common,e=p.styles;CKEDITOR.plugins.pastetools.filters.libreoffice={rules:function(b,c,d){return{root:function(a){a.filterChildren(d)},comment:function(){return!1},elementNames:[[/^head$/i,""],[/^meta$/i,""],[/^strike$/i,"s"]],elements:{"!doctype":function(a){a.replaceWithChildren()},span:function(a){a.attributes.style&&(a.attributes.style=e.normalizedStyles(a,c),e.createStyleStack(a,d,c));CKEDITOR.tools.object.entries(a.attributes).length||
// a.replaceWithChildren()},p:function(a){var f=CKEDITOR.tools.parseCssText(a.attributes.style);if(c.plugins.pagebreak&&("always"===f["page-break-before"]||"page"===f["break-before"])){var b=CKEDITOR.plugins.pagebreak.createElement(c),b=CKEDITOR.htmlParser.fragment.fromHtml(b.getOuterHtml()).children[0];b.insertBefore(a)}a.attributes.style=CKEDITOR.tools.writeCssText(f);a.filterChildren(d);e.createStyleStack(a,d,c)},div:function(a){e.createStyleStack(a,d,c)},a:function(a){if(a.attributes.style){var c=
// a.attributes;a=CKEDITOR.tools.parseCssText(a.attributes.style);"#000080"===a.color&&delete a.color;"underline"===a["text-decoration"]&&delete a["text-decoration"];a=CKEDITOR.tools.writeCssText(a);c.style=a}},h1:function(a){e.createStyleStack(a,d,c)},h2:function(a){e.createStyleStack(a,d,c)},h3:function(a){e.createStyleStack(a,d,c)},h4:function(a){e.createStyleStack(a,d,c)},h5:function(a){e.createStyleStack(a,d,c)},h6:function(a){e.createStyleStack(a,d,c)},pre:function(a){e.createStyleStack(a,d,c)},
// font:function(a){var c;c="a"===a.parent.name&&"#000080"===a.attributes.color?!0:1!==a.parent.children.length||"sup"!==a.parent.name&&"sub"!==a.parent.name||"2"!==a.attributes.size?!1:!0;c&&a.replaceWithChildren();c=CKEDITOR.tools.parseCssText(a.attributes.style);var b=a.getFirst();a.attributes.size&&b&&b.type===CKEDITOR.NODE_ELEMENT&&/font-size/.test(b.attributes.style)&&a.replaceWithChildren();c["font-size"]&&(delete a.attributes.size,a.name="span",b&&b.type===CKEDITOR.NODE_ELEMENT&&b.attributes.size&&
// b.replaceWithChildren())},ul:function(a){if(k(a,d))return!1},ol:function(a){if(k(a,d))return!1},img:function(a){if(!a.attributes.src)return!1},table:function(a){var c=a.attributes;a=a.attributes.style;var b=CKEDITOR.tools.parseCssText(a);b["border-collapse"]||(b["border-collapse"]="collapse",a=CKEDITOR.tools.writeCssText(b));c.style=a}},attributes:{style:function(a,b){return e.normalizedStyles(b,c)||!1},align:function(a,b){if("img"!==b.name){var c=CKEDITOR.tools.parseCssText(b.attributes.style);c["text-align"]=
// b.attributes.align;b.attributes.style=CKEDITOR.tools.writeCssText(c);return!1}},cellspacing:h,cellpadding:h,border:h}}}};CKEDITOR.pasteFilters.libreoffice=n.createFilter({rules:[p.rules,CKEDITOR.plugins.pastetools.filters.libreoffice.rules]})})();


(function () {
    // Helper function to check if an element is an ordered or unordered list
    function isList(element) {
        return element && (element.name === "ol" || element.name === "ul");
    }

    // Helper function to find the last child that is not a list or list item
    function findLastNonListChild(element) {
        var lastChild = element.children[element.children.length - 1];
        return isList(lastChild) || lastChild.name === "li" ? findLastNonListChild(lastChild) : element;
    }

    // Helper function to count the number of ancestor list elements
    function countListAncestors(element) {
        var count = 0;
        var ancestor = element;
        while (ancestor && isList(ancestor)) {
            count++;
            ancestor = ancestor.parent;
        }
        return count;
    }

    // Function to handle special cases related to lists
    function handleListCases(element, filter) {
        if (!element.previous || !isList(element.previous) || !element.getFirst().children.length || element.children.length !== 1 || !isList(element.getFirst().getFirst())) {
            return false;
        }

        var lastNonListChild = findLastNonListChild(element.previous);
        var listAncestorCount = countListAncestors(element);

        // Add the found list ancestor and filter its children
        if (listAncestorCount) {
            lastNonListChild.add(element);
            element.filterChildren(filter);
            return true;
        }

        return false;
    }

    // Function to create a function that returns true for the first element and false for subsequent elements
    function isFirstElement() {
        var isFirst = true;
        return function () {
            if (isFirst) {
                isFirst = false;
                return false;
            }
            return true;
        };
    }

    // Helper function to reduce the indentation level
    function reduceIndentationLevel(element, levelsToReduce) {
        if (levelsToReduce) {
            return reduceIndentationLevel(element.getFirst().getFirst(), --levelsToReduce);
        }
        return element;
    }

    // Helper function to check if an element is an ordered or unordered list
    function isListElement(element) {
        return element && (isList(element) || element.name === "li");
    }

    // Function to handle table-related styles
    function handleTableStyles(element) {
        var elementStyle = CKEDITOR.tools.parseCssText(element.attributes.style);
        var borderCollapseStyle = elementStyle["border-collapse"];

        if (!borderCollapseStyle) {
            elementStyle["border-collapse"] = "collapse";
            element.attributes.style = CKEDITOR.tools.writeCssText(elementStyle);
        }
    }

    // Function to handle font-related styles
    function handleFontStyles(element) {
        var parent = element.parent;

        if (parent && parent.name === "a" && element.attributes.color === "#000080") {
            // If it's a link and has blue color, remove the font element
            return true;
        }

        if (parent && parent.children.length === 1 && (parent.name === "sup" || parent.name === "sub") && element.attributes.size === "2") {
            // If it's a sup or sub element with size 2, remove the font element
            element.replaceWithChildren();
            return true;
        }

        return false;
    }

    // Define filters for LibreOffice pasted content
    CKEDITOR.plugins.pastetools.filters.libreoffice = {
        rules: function (element, editor, filter) {
            return {
                root: function (rootElement) {
                    rootElement.filterChildren(filter);
                },
                comment: function () {
                    return false;
                },
                elementNames: [
                    [/^head$/i, ""],
                    [/^meta$/i, ""],
                    [/^strike$/i, "s"]
                ],
                elements: {
                    "!doctype": function (element) {
                        element.replaceWithChildren();
                    },
                    span: function (element) {
                        if (element.attributes.style) {
                            element.attributes.style = e.normalizedStyles(element, editor);
                            e.createStyleStack(element, filter, editor);
                        }

                        // Remove span if it has no attributes
                        if (CKEDITOR.tools.object.entries(element.attributes).length === 0) {
                            element.replaceWithChildren();
                        }
                    },
                    p: function (element) {
                        var style = CKEDITOR.tools.parseCssText(element.attributes.style);

                        if (editor.plugins.pagebreak && (style["page-break-before"] === "always" || style["break-before"] === "page")) {
                            var pageBreakElement = CKEDITOR.plugins.pagebreak.createElement(editor);
                            pageBreakElement = CKEDITOR.htmlParser.fragment.fromHtml(pageBreakElement.getOuterHtml()).children[0];
                            pageBreakElement.insertBefore(element);
                        }

                        element.attributes.style = CKEDITOR.tools.writeCssText(style);
                        element.filterChildren(filter);
                        e.createStyleStack(element, filter, editor);
                    },
                    div: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    a: function (element) {
                        if (element.attributes.style) {
                            var attributes = element.attributes;
                            var styles = CKEDITOR.tools.parseCssText(attributes.style);

                            // Remove blue color and underline styles
                            if (styles.color === "#000080") {
                                delete styles.color;
                            }
                            if (styles["text-decoration"] === "underline") {
                                delete styles["text-decoration"];
                            }

                            attributes.style = CKEDITOR.tools.writeCssText(styles);
                        }
                    },
                    h1: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    h2: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    h3: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    h4: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    h5: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    h6: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    pre: function (element) {
                        e.createStyleStack(element, filter, editor);
                    },
                    font: function (element) {
                        if (handleFontStyles(element)) {
                            return;
                        }

                        var fontStyles = CKEDITOR.tools.parseCssText(element.attributes.style);
                        var firstChild = element.getFirst();

                        if (element.attributes.size && firstChild && firstChild.type === CKEDITOR.NODE_ELEMENT && /font-size/.test(firstChild.attributes.style)) {
                            element.replaceWithChildren();
                        }

                        if (fontStyles["font-size"]) {
                            delete element.attributes.size;
                            element.name = "span";

                            if (firstChild && firstChild.type === CKEDITOR.NODE_ELEMENT && firstChild.attributes.size) {
                                firstChild.replaceWithChildren();
                            }
                        }
                    },
                    ul: function (element) {
                        if (handleListCases(element, filter)) {
                            return false;
                        }
                    },
                    ol: function (element) {
                        if (handleListCases(element, filter)) {
                            return false;
                        }
                    },
                    img: function (element) {
                        // Remove the image if it has no source attribute
                        if (!element.attributes.src) {
                            return false;
                        }
                    },
                    table: function (element) {
                        handleTableStyles(element);
                    }
                },
                attributes: {
                    style: function (attribute, element) {
                        return e.normalizedStyles(attribute, editor) || false;
                    },
                    align: function (attribute, element) {
                        if (element.name !== "img") {
                            var styles = CKEDITOR.tools.parseCssText(element.attributes.style);
                            styles["text-align"] = element.attributes.align;
                            element.attributes.style = CKEDITOR.tools.writeCssText(styles);
                            return false;
                        }
                    },
                    cellspacing: function () {
                        return false;
                    },
                    cellpadding: function () {
                        return false;
                    },
                    border: function () {
                        return false;
                    }
                }
            };
        }
    };

    // Create a filter for LibreOffice pasted content
    CKEDITOR.pasteFilters.libreoffice = CKEDITOR.plugins.pastetools.createFilter({
        rules: [p.rules, CKEDITOR.plugins.pastetools.filters.libreoffice.rules]
    });
})();
