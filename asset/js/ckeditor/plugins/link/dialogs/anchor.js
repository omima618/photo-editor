/*
 Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
*/
// CKEDITOR.dialog.add("anchor",function(c){function f(b,a){return b.createFakeElement(b.document.createElement("a",{attributes:a}),"cke_anchor","anchor")}return{title:c.lang.link.anchor.title,minWidth:300,minHeight:60,getModel:function(b){var a=b.getSelection();b=a.getRanges()[0];a=a.getSelectedElement();b.shrink(CKEDITOR.SHRINK_ELEMENT);(a=b.getEnclosedNode())&&a.type===CKEDITOR.NODE_TEXT&&(a=a.getParent());a&&!a.is("a")&&(a=a.getAscendant("a")||a);b=a&&a.type===CKEDITOR.NODE_ELEMENT&&("anchor"===
// a.data("cke-real-element-type")||a.is("a"))?a:void 0;return b||null},onOk:function(){var b=CKEDITOR.tools.trim(this.getValueOf("info","txtName")),b={id:b,name:b,"data-cke-saved-name":b},a=this.getModel(c);if(a)a.data("cke-realelement")?(b=f(c,b),b.replace(a),CKEDITOR.env.ie&&c.getSelection().selectElement(b)):a.setAttributes(b);else if(a=(a=c.getSelection())&&a.getRanges()[0],a.collapsed)b=f(c,b),a.insertNode(b);else{CKEDITOR.env.ie&&9>CKEDITOR.env.version&&(b["class"]="cke_anchor");var d=a.clone();
// d.enlarge(CKEDITOR.ENLARGE_ELEMENT);for(var e=new CKEDITOR.dom.walker(d),d=d.collapsed?d.startContainer:e.next(),g=a.createBookmark();d;)d.type===CKEDITOR.NODE_ELEMENT&&d.getAttribute("data-cke-saved-name")&&(d.remove(!0),e.reset()),d=e.next();a.moveToBookmark(g);b=new CKEDITOR.style({element:"a",attributes:b});b.type=CKEDITOR.STYLE_INLINE;b.applyToRange(a)}},onShow:function(){var b=c.getSelection(),a=this.getModel(c),d=a&&a.data("cke-realelement");if(a=d?CKEDITOR.plugins.link.tryRestoreFakeAnchor(c,
// a):CKEDITOR.plugins.link.getSelectedLink(c)){var e=a.data("cke-saved-name");this.setValueOf("info","txtName",e||"");!d&&b.selectElement(a)}this.getContentElement("info","txtName").focus()},contents:[{id:"info",label:c.lang.link.anchor.title,accessKey:"I",elements:[{type:"text",id:"txtName",label:c.lang.link.anchor.name,required:!0,validate:function(){var b=this.getValue();return b?/[\u0020\u0009\u000a\u000c\u000d]/g.test(b)?(alert(c.lang.link.anchor.errorWhitespace),!1):!0:(alert(c.lang.link.anchor.errorName),
// !1)}}]}]}});


CKEDITOR.dialog.add("anchor", function (editor) {
    // Function to create a fake anchor element
    function createFakeAnchorElement(editor, attributes) {
        return editor.createFakeElement(
            editor.document.createElement("a", { attributes: attributes }),
            "cke_anchor",
            "anchor"
        );
    }

    return {
        title: editor.lang.link.anchor.title,
        minWidth: 300,
        minHeight: 60,

        getModel: function (editor) {
            var selection = editor.getSelection();
            var range = selection.getRanges()[0];
            range.shrink(CKEDITOR.SHRINK_ELEMENT);

            var selectedElement = range.getSelectedElement();

            // Check if the selected element is an anchor or has an anchor ancestor
            if (
                selectedElement &&
                (selectedElement.is("a") || selectedElement.getAscendant("a"))
            ) {
                return selectedElement.is("a")
                    ? selectedElement
                    : selectedElement.getAscendant("a");
            }

            return null;
        },

        onOk: function () {
            var anchorName = CKEDITOR.tools.trim(
                this.getValueOf("info", "txtName")
            );
            var attributes = {
                id: anchorName,
                name: anchorName,
                "data-cke-saved-name": anchorName,
            };

            var model = this.getModel(editor);

            if (model) {
                // If the anchor is a fake element, replace it
                if (model.data("cke-realelement")) {
                    var fakeAnchor = createFakeAnchorElement(editor, attributes);
                    fakeAnchor.replace(model);
                    if (CKEDITOR.env.ie) {
                        editor.getSelection().selectElement(fakeAnchor);
                    }
                } else {
                    // If the anchor is a real element, update its attributes
                    model.setAttributes(attributes);
                }
            } else {
                // If no anchor found, insert a new one
                var selection = editor.getSelection();
                var range = selection.getRanges()[0];

                if (range.collapsed) {
                    var fakeAnchor = createFakeAnchorElement(editor, attributes);
                    range.insertNode(fakeAnchor);
                } else {
                    // Handle non-collapsed selection
                    if (CKEDITOR.env.ie && CKEDITOR.env.version < 9) {
                        attributes["class"] = "cke_anchor";
                    }

                    var cloneRange = range.clone();
                    cloneRange.enlarge(CKEDITOR.ENLARGE_ELEMENT);

                    var walker = new CKEDITOR.dom.walker(cloneRange);
                    var node = cloneRange.collapsed
                        ? cloneRange.startContainer
                        : walker.next();

                    var bookmark = range.createBookmark();

                    while (node) {
                        if (
                            node.type === CKEDITOR.NODE_ELEMENT &&
                            node.getAttribute("data-cke-saved-name")
                        ) {
                            node.remove(true);
                            walker.reset();
                        }

                        node = walker.next();
                    }

                    selection.moveToBookmark(bookmark);

                    var anchorStyle = new CKEDITOR.style({
                        element: "a",
                        attributes: attributes,
                    });

                    anchorStyle.type = CKEDITOR.STYLE_INLINE;
                    anchorStyle.applyToRange(range);
                }
            }
        },

        onShow: function () {
            var selection = editor.getSelection();
            var model = this.getModel(editor);

            if (!model && CKEDITOR.plugins.link.getSelectedLink(editor)) {
                // If no model, but a link is selected, get its saved name
                var anchorName = CKEDITOR.plugins.link.tryRestoreFakeAnchor(
                    editor,
                    CKEDITOR.plugins.link.getSelectedLink(editor)
                ).data("cke-saved-name");

                this.setValueOf("info", "txtName", anchorName || "");
                selection.selectElement(CKEDITOR.plugins.link.getSelectedLink(editor));
            } else if (model) {
                // If a model exists, get its saved name
                var anchorName = model.data("cke-saved-name");
                this.setValueOf("info", "txtName", anchorName || "");
            }

            // Focus on the anchor name text field
            this.getContentElement("info", "txtName").focus();
        },

        contents: [
            {
                id: "info",
                label: editor.lang.link.anchor.title,
                accessKey: "I",
                elements: [
                    {
                        type: "text",
                        id: "txtName",
                        label: editor.lang.link.anchor.name,
                        required: true,
                        validate: function () {
                            var value = this.getValue();
                            if (!value) {
                                alert(editor.lang.link.anchor.errorName);
                                return false;
                            }
                            if (/[\u0020\u0009\u000a\u000c\u000d]/g.test(value)) {
                                alert(editor.lang.link.anchor.errorWhitespace);
                                return false;
                            }
                            return true;
                        },
                    },
                ],
            },
        ],
    };
});
