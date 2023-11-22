/*
 Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
*/
// CKEDITOR.dialog.add("paste",function(c){function k(a){var b=new CKEDITOR.dom.document(a.document),g=b.getBody(),d=b.getById("cke_actscrpt");d&&d.remove();g.setAttribute("contenteditable",!0);g.on(e.mainPasteEvent,function(a){a=e.initPasteDataTransfer(a);f?a!=f&&(f=e.initPasteDataTransfer()):f=a});if(CKEDITOR.env.ie&&8>CKEDITOR.env.version)b.getWindow().on("blur",function(){b.$.selection.empty()});b.on("keydown",function(a){a=a.data;var b;switch(a.getKeystroke()){case 27:this.hide();b=1;break;case 9:case CKEDITOR.SHIFT+
// 9:this.changeFocus(1),b=1}b&&a.preventDefault()},this);c.fire("ariaWidget",new CKEDITOR.dom.element(a.frameElement));b.getWindow().getFrame().removeCustomData("pendingFocus")&&g.focus()}var h=c.lang.clipboard,e=CKEDITOR.plugins.clipboard,f;c.on("pasteDialogCommit",function(a){a.data&&c.fire("paste",{type:"auto",dataValue:a.data.dataValue,method:"paste",dataTransfer:a.data.dataTransfer||e.initPasteDataTransfer()})},null,null,1E3);return{title:h.paste,minWidth:CKEDITOR.env.ie&&CKEDITOR.env.quirks?370:
// 350,minHeight:CKEDITOR.env.quirks?250:245,onShow:function(){this.parts.dialog.$.offsetHeight;this.setupContent();this._.committed=!1},onLoad:function(){(CKEDITOR.env.ie7Compat||CKEDITOR.env.ie6Compat)&&"rtl"==c.lang.dir&&this.parts.contents.setStyle("overflow","hidden")},onOk:function(){this.commitContent()},contents:[{id:"general",label:c.lang.common.generalTab,elements:[{type:"html",id:"pasteMsg",html:'\x3cdiv style\x3d"white-space:normal;width:340px"\x3e'+h.pasteMsg+"\x3c/div\x3e"},{type:"html",
// id:"editing_area",style:"width:100%;height:100%",html:"",focus:function(){var a=this.getInputElement(),b=a.getFrameDocument().getBody();!b||b.isReadOnly()?a.setCustomData("pendingFocus",1):b.focus()},setup:function(){var a=this.getDialog(),b='\x3chtml dir\x3d"'+c.config.contentsLangDirection+'" lang\x3d"'+(c.config.contentsLanguage||c.langCode)+'"\x3e\x3chead\x3e\x3cstyle\x3ebody{margin:3px;height:95%;word-break:break-all;}\x3c/style\x3e\x3c/head\x3e\x3cbody\x3e\x3cscript id\x3d"cke_actscrpt" type\x3d"text/javascript"\x3ewindow.parent.CKEDITOR.tools.callFunction('+
// CKEDITOR.tools.addFunction(k,a)+",this);\x3c/script\x3e\x3c/body\x3e\x3c/html\x3e",g=CKEDITOR.env.air?"javascript:void(0)":CKEDITOR.env.ie&&!CKEDITOR.env.edge?"javascript:void((function(){"+encodeURIComponent("document.open();("+CKEDITOR.tools.fixDomain+")();document.close();")+'})())"':"",d=CKEDITOR.dom.element.createFromHtml('\x3ciframe class\x3d"cke_pasteframe" frameborder\x3d"0"  allowTransparency\x3d"true" src\x3d"'+g+'" aria-label\x3d"'+h.pasteArea+'" aria-describedby\x3d"'+a.getContentElement("general",
// "pasteMsg").domId+'"\x3e\x3c/iframe\x3e');f=null;d.on("load",function(a){a.removeListener();a=d.getFrameDocument();a.write(b);c.focusManager.add(a.getBody());CKEDITOR.env.air&&k.call(this,a.getWindow().$)},a);d.setCustomData("dialog",a);a=this.getElement();a.setHtml("");a.append(d);if(CKEDITOR.env.ie&&!CKEDITOR.env.edge){var e=CKEDITOR.dom.element.createFromHtml('\x3cspan tabindex\x3d"-1" style\x3d"position:absolute" role\x3d"presentation"\x3e\x3c/span\x3e');e.on("focus",function(){setTimeout(function(){d.$.contentWindow.focus()})});
// a.append(e);this.focus=function(){e.focus();this.fire("focus")}}this.getInputElement=function(){return d};CKEDITOR.env.ie&&(a.setStyle("display","block"),a.setStyle("height",d.$.offsetHeight+2+"px"))},commit:function(){var a=this.getDialog().getParentEditor(),b=this.getInputElement().getFrameDocument().getBody(),c=b.getBogus();c&&c.remove();b=b.getHtml();this.getDialog()._.committed=!0;a.fire("pasteDialogCommit",{dataValue:b,dataTransfer:f||e.initPasteDataTransfer()})}}]}]}});


CKEDITOR.dialog.add("paste", function (editor) {
    function handleFrameLoad(frame) {
        var doc = frame.getDocument(),
            body = doc.getBody();

        // Remove any existing script element
        var existingScript = doc.getById("cke_actscrpt");
        existingScript && existingScript.remove();

        body.setAttribute("contenteditable", true);

        // Handle paste events
        body.on(pasteEvents.main, function (event) {
            event = pasteEvents.initPasteDataTransfer(event);
            if (f) {
                event !== f && (f = pasteEvents.initPasteDataTransfer());
            } else {
                f = event;
            }
        });

        // Handle IE-specific behavior
        if (CKEDITOR.env.ie && CKEDITOR.env.version < 8) {
            frame.getWindow().on("blur", function () {
                frame.$.selection.empty();
            });
        }

        // Handle keydown events
        doc.on("keydown", function (event) {
            var data = event.data;
            var preventDefault = false;

            switch (data.getKeystroke()) {
                case 27: // ESC key
                    this.hide();
                    preventDefault = true;
                    break;
                case 9: // TAB key
                case CKEDITOR.SHIFT + 9:
                    this.changeFocus(1);
                    preventDefault = true;
                    break;
            }

            preventDefault && data.preventDefault();
        }, this);

        // Trigger ARIA widget
        editor.fire("ariaWidget", new CKEDITOR.dom.element(frame.getFrameElement()));
        // Focus the body content
        doc.getWindow().getFrame().removeCustomData("pendingFocus") && body.focus();
    }

    var pasteEvents = CKEDITOR.plugins.clipboard;
    var pasteLang = editor.lang.clipboard;

    // Dialog definition
    return {
        title: pasteLang.paste,
        minWidth: CKEDITOR.env.ie && CKEDITOR.env.quirks ? 370 : 350,
        minHeight: CKEDITOR.env.quirks ? 250 : 245,
        onShow: function () {
            this.parts.dialog.$.offsetHeight;
            this.setupContent();
            this._.committed = false;
        },
        onLoad: function () {
            // Adjust styles for IE7 and IE6 in RTL
            if ((CKEDITOR.env.ie7Compat || CKEDITOR.env.ie6Compat) && editor.lang.dir === "rtl") {
                this.parts.contents.setStyle("overflow", "hidden");
            }
        },
        onOk: function () {
            this.commitContent();
        },
        contents: [{
            id: "general",
            label: editor.lang.common.generalTab,
            elements: [{
                type: "html",
                id: "pasteMsg",
                html: '<div style="white-space:normal;width:340px">' + pasteLang.pasteMsg + '</div>'
            }, {
                type: "html",
                id: "editing_area",
                style: "width:100%;height:100%",
                html: "",
                focus: function () {
                    var inputElement = this.getInputElement(),
                        frameDocument = inputElement.getFrameDocument(),
                        body = frameDocument.getBody();

                    // Focus only if the body is not read-only
                    !body || body.isReadOnly() ? inputElement.setCustomData("pendingFocus", 1) : body.focus();
                },
                setup: function () {
                    var dialog = this.getDialog();
                    var html = '<html dir="' + editor.config.contentsLangDirection + '" lang="' +
                        (editor.config.contentsLanguage || editor.langCode) + '">' +
                        '<head><style>body{margin:3px;height:95%;word-break:break-all;}</style></head>' +
                        '<body><script id="cke_actscrpt" type="text/javascript">' +
                        'window.parent.CKEDITOR.tools.callFunction(' +
                        CKEDITOR.tools.addFunction(handleFrameLoad, dialog) +
                        ',this);</script></body></html>';

                    var src = CKEDITOR.env.air ? "javascript:void(0)" :
                        CKEDITOR.env.ie && !CKEDITOR.env.edge ?
                        "javascript:void((function(){" +
                        encodeURIComponent("document.open();(" + CKEDITOR.tools.fixDomain + ")();document.close();") +
                        "})())" : "";

                    var frame = CKEDITOR.dom.element.createFromHtml(
                        '<iframe class="cke_pasteframe" frameborder="0" allowTransparency="true" ' +
                        'src="' + src + '" aria-label="' + pasteLang.pasteArea + '" ' +
                        'aria-describedby="' + dialog.getContentElement("general", "pasteMsg").domId + '"></iframe>'
                    );

                    f = null;

                    frame.on("load", function () {
                        frame.removeListener("load");
                        handleFrameLoad.call(this, frame.getWindow().$);
                    }, dialog);

                    frame.setCustomData("dialog", dialog);
                    this.getElement().setHtml("");
                    this.getElement().append(frame);

                    // IE-specific adjustments
                    if (CKEDITOR.env.ie) {
                        this.getElement().setStyle("display", "block");
                        this.getElement().setStyle("height", frame.$.offsetHeight + 2 + "px");
                    }
                },
                commit: function () {
                    var dataValue = this.getDialog().getParentEditor().getDataTransferDataValue(this),
                        dataTransfer = f || pasteEvents.initPasteDataTransfer();

                    this.getDialog()._committed = true;
                    editor.fire("pasteDialogCommit", {
                        dataValue: dataValue,
                        dataTransfer: dataTransfer
                    });
                }
            }]
        }]
    };
});
