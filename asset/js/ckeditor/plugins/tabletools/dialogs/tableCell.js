// /*
//  Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
//  CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
// */
// CKEDITOR.dialog.add("cellProperties",function(g){function k(a){return{isSpacer:!0,type:"html",html:"\x26nbsp;",requiredContent:a?a:void 0}}function r(){return{type:"vbox",padding:0,children:[]}}function t(a){return{requiredContent:"td{"+a+"}",type:"hbox",widths:["70%","30%"],children:[{type:"text",id:a,width:"100px",label:e[a],validate:p.number(d["invalid"+CKEDITOR.tools.capitalize(a)]),onLoad:function(){var b=this.getDialog().getContentElement("info",a+"Type").getElement(),c=this.getInputElement(),
// d=c.getAttribute("aria-labelledby");c.setAttribute("aria-labelledby",[d,b.$.id].join(" "))},setup:f(function(b){var c=parseFloat(b.getAttribute(a),10);b=parseFloat(b.getStyle(a),10);if(!isNaN(b))return b;if(!isNaN(c))return c}),commit:function(b){var c=parseFloat(this.getValue(),10),d=this.getDialog().getValueOf("info",a+"Type")||u(b,a);isNaN(c)?b.removeStyle(a):b.setStyle(a,c+d);b.removeAttribute(a)},"default":""},{type:"select",id:a+"Type",label:g.lang.table[a+"Unit"],labelStyle:"visibility:hidden;display:block;width:0;overflow:hidden",
// "default":"px",items:[[q.widthPx,"px"],[q.widthPc,"%"]],setup:f(function(b){return u(b,a)})}]}}function f(a){return function(b){for(var c=a(b[0]),d=1;d<b.length;d++)if(a(b[d])!==c){c=null;break}"undefined"!=typeof c&&(this.setValue(c),CKEDITOR.env.gecko&&"select"==this.type&&!c&&(this.getInputElement().$.selectedIndex=-1))}}function u(a,b){var c=/^(\d+(?:\.\d+)?)(px|%)$/.exec(a.getStyle(b)||a.getAttribute(b));if(c)return c[2]}function v(a,b){g.getColorFromDialog(function(c){c&&a.getDialog().getContentElement("info",
// b).setValue(c);a.focus()},a)}function w(a,b,c){(a=a.getValue())?b.setStyle(c,a):b.removeStyle(c);"background-color"==c?b.removeAttribute("bgColor"):"border-color"==c&&b.removeAttribute("borderColor")}var q=g.lang.table,d=q.cell,e=g.lang.common,p=CKEDITOR.dialog.validate,z="rtl"==g.lang.dir,m=g.plugins.colordialog,l=t("width"),A=t("height"),B=k(["td{width}","td{height}"]),C={type:"select",id:"wordWrap",requiredContent:"td{white-space}",label:d.wordWrap,"default":"yes",items:[[d.yes,"yes"],[d.no,"no"]],
// setup:f(function(a){var b=a.getAttribute("noWrap");if("nowrap"==a.getStyle("white-space")||b)return"no"}),commit:function(a){"no"==this.getValue()?a.setStyle("white-space","nowrap"):a.removeStyle("white-space");a.removeAttribute("noWrap")}},D=k("td{white-space}"),E={type:"select",id:"hAlign",requiredContent:"td{text-align}",label:d.hAlign,"default":"",items:[[e.notSet,""],[e.left,"left"],[e.center,"center"],[e.right,"right"],[e.justify,"justify"]],setup:f(function(a){var b=a.getAttribute("align");
// return a.getStyle("text-align")||b||""}),commit:function(a){var b=this.getValue();b?a.setStyle("text-align",b):a.removeStyle("text-align");a.removeAttribute("align")}},F={type:"select",id:"vAlign",requiredContent:"td{vertical-align}",label:d.vAlign,"default":"",items:[[e.notSet,""],[e.alignTop,"top"],[e.alignMiddle,"middle"],[e.alignBottom,"bottom"],[d.alignBaseline,"baseline"]],setup:f(function(a){var b=a.getAttribute("vAlign");a=a.getStyle("vertical-align");switch(a){case "top":case "middle":case "bottom":case "baseline":break;
// default:a=""}return a||b||""}),commit:function(a){var b=this.getValue();b?a.setStyle("vertical-align",b):a.removeStyle("vertical-align");a.removeAttribute("vAlign")}},G=k(["td{text-align}","td{vertical-align}"]),H=d.cellType,x;x=g.config.tabletools_scopedHeaders?[[d.data,"td"],[d.columnHeader,"thc"],[d.rowHeader,"thr"]]:[[d.data,"td"],[d.header,"th"]];var l=[l,A,B,C,D,E,F,G,{type:"select",id:"cellType",requiredContent:"th[scope]",label:H,"default":"td",items:x,setup:f(function(a){var b=a.getName();
// a=a.getAttribute("scope");if("td"===b)return"td";switch(a){case "row":return"thr";case "col":return"thc";default:return"th"}}),commit:function(a){var b={td:{name:"td"},th:{name:"th"},thc:{name:"th",scope:"col"},thr:{name:"th",scope:"row"}}[this.getValue()];a.renameNode(b.name);b.scope?a.setAttribute("scope",b.scope):a.removeAttribute("scope")}},k("th"),{type:"text",id:"rowSpan",requiredContent:"td[rowspan]",label:d.rowSpan,"default":"",validate:p.integer(d.invalidRowSpan),setup:f(function(a){if((a=
// parseInt(a.getAttribute("rowSpan"),10))&&1!=a)return a}),commit:function(a){var b=parseInt(this.getValue(),10);b&&1!=b?a.setAttribute("rowSpan",this.getValue()):a.removeAttribute("rowSpan")}},{type:"text",id:"colSpan",requiredContent:"td[colspan]",label:d.colSpan,"default":"",validate:p.integer(d.invalidColSpan),setup:f(function(a){if((a=parseInt(a.getAttribute("colSpan"),10))&&1!=a)return a}),commit:function(a){var b=parseInt(this.getValue(),10);b&&1!=b?a.setAttribute("colSpan",this.getValue()):
// a.removeAttribute("colSpan")}},k(["td[colspan]","td[rowspan]"]),{type:"hbox",padding:0,widths:m?["60%","40%"]:["100%"],requiredContent:"td{background-color}",children:function(){var a=[{type:"text",id:"bgColor",label:d.bgColor,"default":"",setup:f(function(a){var c=a.getAttribute("bgColor");return a.getStyle("background-color")||c}),commit:function(a){w(this,a,"background-color")}}];m&&a.push({type:"button",id:"bgColorChoose","class":"colorChooser",label:d.chooseColor,onLoad:function(){this.getElement().getParent().setStyle("vertical-align",
// "bottom")},onClick:function(){v(this,"bgColor")}});return a}()},{type:"hbox",padding:0,widths:m?["60%","40%"]:["100%"],requiredContent:"td{border-color}",children:function(){var a=[{type:"text",id:"borderColor",label:d.borderColor,"default":"",setup:f(function(a){var c=a.getAttribute("borderColor");return a.getStyle("border-color")||c}),commit:function(a){w(this,a,"border-color")}}];m&&a.push({type:"button",id:"borderColorChoose","class":"colorChooser",label:d.chooseColor,style:(z?"margin-right":
// "margin-left")+": 10px",onLoad:function(){this.getElement().getParent().setStyle("vertical-align","bottom")},onClick:function(){v(this,"borderColor")}});return a}()}],n=0,y=-1,h=[r()],l=CKEDITOR.tools.array.filter(l,function(a){var b=a.requiredContent;delete a.requiredContent;(b=g.filter.check(b))&&!a.isSpacer&&n++;return b});5<n&&(h=h.concat([k(),r()]));CKEDITOR.tools.array.forEach(l,function(a){a.isSpacer||y++;5<n&&y>=n/2?h[2].children.push(a):h[0].children.push(a)});CKEDITOR.tools.array.forEach(h,
// function(a){a.isSpacer||(a=a.children,a[a.length-1].isSpacer&&a.pop())});return{title:d.title,minWidth:1===h.length?205:410,minHeight:50,contents:[{id:"info",label:d.title,accessKey:"I",elements:[{type:"hbox",widths:1===h.length?["100%"]:["40%","5%","40%"],children:h}]}],getModel:function(a){return CKEDITOR.plugins.tabletools.getSelectedCells(a.getSelection())},onShow:function(){var a=this.getModel(this.getParentEditor());this.setupContent(a)},onOk:function(){for(var a=this._.editor.getSelection(),
// b=a.createBookmarks(),c=this.getParentEditor(),d=this.getModel(c),e=0;e<d.length;e++)this.commitContent(d[e]);c.forceNextSelectionCheck();a.selectBookmarks(b);c.selectionChange()},onLoad:function(){var a={};this.foreach(function(b){b.setup&&b.commit&&(b.setup=CKEDITOR.tools.override(b.setup,function(c){return function(){c.apply(this,arguments);a[b.id]=b.getValue()}}),b.commit=CKEDITOR.tools.override(b.commit,function(c){return function(){a[b.id]!==b.getValue()&&c.apply(this,arguments)}}))})}}});


CKEDITOR.dialog.add("cellProperties", function(editor) {
    // Helper function to create a spacer element
    function createSpacer(requiredContent) {
        return {
            isSpacer: true,
            type: "html",
            html: "&#160;", // Non-breaking space
            requiredContent: requiredContent ? requiredContent : undefined,
        };
    }

    // Helper function to create a vbox container
    function createVboxContainer() {
        return {
            type: "vbox",
            padding: 0,
            children: [],
        };
    }

    // Helper function to create a hbox container for cell properties
    function createCellPropertiesHbox(id, label, requiredContent) {
        return {
            type: "hbox",
            widths: ["70%", "30%"],
            children: [
                createTextInput(id, label),
                createSelectInput(id + "Type", editor.lang.table[id + "Unit"]),
            ],
        };
    }

    // Helper function to create a text input element
    function createTextInput(id, label) {
        return {
            type: "text",
            id: id,
            width: "100px",
            label: label,
            validate: getValidationFunction(id),
            onLoad: function() {
                setupAriaLabel(this);
            },
            setup: overrideSetupFunction(function(cell) {
                var value = parseFloat(cell.getAttribute(id), 10);
                return isNaN(value) ? parseFloat(cell.getStyle(id), 10) : value;
            }),
            commit: overrideCommitFunction(function(cell) {
                var value = parseFloat(this.getValue(), 10);
                var unit = this.getDialog().getValueOf("info", id + "Type") || getUnit(cell, id);
                isNaN(value) ? cell.removeStyle(id) : cell.setStyle(id, value + unit);
                cell.removeAttribute(id);
            }, ""),
            "default": "",
        };
    }

    // Helper function to create a select input element
    function createSelectInput(id, label) {
        return {
            type: "select",
            id: id,
            label: label,
            labelStyle: "visibility:hidden;display:block;width:0;overflow:hidden",
            "default": "px",
            items: [
                [editor.lang.common.widthPx, "px"],
                [editor.lang.common.widthPc, "%"]
            ],
            setup: overrideSetupFunction(function(cell) {
                return getUnit(cell, id);
            }),
        };
    }

    // Helper function to create a spacer element for background and border color sections
    function createColorSpacer(requiredContent) {
        return createSpacer(["td{background-color}", "td{border-color}"]);
    }

    // Helper function to create a text input element for background and border colors
    function createColorTextInput(id, label, style) {
        return {
            type: "text",
            id: id,
            label: label,
            "default": "",
            setup: overrideSetupFunction(function(cell) {
                var attributeValue = cell.getAttribute(style);
                return cell.getStyle(style) || attributeValue;
            }),
            commit: overrideCommitFunction(function(cell) {
                setStyleValue(this, cell, style);
            }),
        };
    }

    // Helper function to create a color chooser button
    function createColorChooserButton(id, label, style) {
        return {
            type: "button",
            id: id,
            "class": "colorChooser",
            label: label,
            style: getButtonStyle(),
            onLoad: function() {
                setVerticalAlign(this);
            },
            onClick: function() {
                openColorDialog(this, style);
            },
        };
    }

    // Helper function to set the vertical-align style for color chooser buttons
    function setVerticalAlign(button) {
        button.getElement().getParent().setStyle("vertical-align", "bottom");
    }

    // Helper function to create hbox container for background and border colors
    function createColorHbox(id, label, style) {
        return {
            type: "hbox",
            padding: 0,
            widths: editor.plugins.colordialog ? ["60%", "40%"] : ["100%"],
            requiredContent: "td{" + style + "}",
            children: [
                createColorTextInput(id, label, style),
                editor.plugins.colordialog ? createColorChooserButton(id + "Choose", label, style) : null
            ],
        };
    }

    // Helper function to get the validation function based on the property id
    function getValidationFunction(id) {
        return p.number(d["invalid" + CKEDITOR.tools.capitalize(id)]);
    }

    // Helper function to set up ARIA label for accessibility
    function setupAriaLabel(input) {
        var dialog = input.getDialog();
        var labelElement = dialog.getContentElement("info", input.id + "Type").getElement();
        var inputElement = input.getInputElement();
        var ariaLabelledBy = inputElement.getAttribute("aria-labelledby");
        inputElement.setAttribute("aria-labelledby", [ariaLabelledBy, labelElement.$.id].join(" "));
    }

    // Helper function to override the setup function with additional logic
    function overrideSetupFunction(callback) {
        return function(cell) {
            var value = callback(cell[0]);
            for (var i = 1; i < cell.length; i++) {
                if (callback(cell[i]) !== value) {
                    value = null;
                    break;
                }
            }
            if (typeof value !== "undefined") {
                this.setValue(value);
                if (CKEDITOR.env.gecko && this.type === "select" && !value) {
                    this.getInputElement().$.selectedIndex = -1;
                }
            }
        };
    }

    // Helper function to override the commit function with additional logic
    function overrideCommitFunction(callback, defaultValue) {
        return function(cell) {
            var value = this.getValue();
            value !== this.getDialog().getModel()["td" + this.id] && callback.apply(this, arguments);
        };
    }

    // Helper function to get the unit for a cell property
    function getUnit(cell, property) {
        var match = /^(\d+(?:\.\d+)?)(px|%)$/.exec(cell.getStyle(property) || cell.getAttribute(property));
        return match ? match[2] : undefined;
    }

    // Helper function to set the value of a style property
    function setStyleValue(input, cell, style) {
        var value = input.getValue();
        value ? cell.setStyle(style, value) : cell.removeStyle(style);
        style === "background-color" ? cell.removeAttribute("bgColor") : style === "border-color" && cell.removeAttribute("borderColor");
    }

    // Helper function to open the color dialog for choosing colors
    function openColorDialog(input, style) {
        g.getColorFromDialog(function(color) {
            color && input.getDialog().getContentElement("info", style).setValue(color);
            input.focus();
        }, input);
    }

    // Helper function to get the button style based on language direction
    function getButtonStyle() {
        return z ? "margin-right: 10px" : "margin-left: 10px";
    }

    // Main configuration object for the cell properties dialog
    var dialogConfig = {
        title: d.title,
        minWidth: 410,
        minHeight: 50,
        contents: [{
            id: "info",
            label: d.title,
            accessKey: "I",
            elements: [
                createVboxContainer()
            ],
        }],
        getModel: function(editor) {
            return CKEDITOR.plugins.tabletools.getSelectedCells(editor.getSelection());
        },
        onShow: function() {
            var selectedCells = this.getModel(this.getParentEditor());
            this.setupContent(selectedCells);
        },
        onOk: function() {
            var selection = this._.editor.getSelection();
            var bookmarks = selection.createBookmarks();
            var parentEditor = this.getParentEditor();
            var selectedCells = this.getModel(parentEditor);

            for (var i = 0; i < selectedCells.length; i++) {
                this.commitContent(selectedCells[i]);
            }

            parentEditor.forceNextSelectionCheck();
            selection.selectBookmarks(bookmarks);
            parentEditor.selectionChange();
        },
        onLoad: function() {
            // Override setup and commit functions for each element
            var overriddenFunctions = {};
            this.foreach(function(element) {
                if (element.setup && element.commit) {
                    element.setup = CKEDITOR.tools.override(element.setup, function(callback) {
                        return function() {
                            callback.apply(this, arguments);
                            overriddenFunctions[element.id] = element.getValue();
                        };
                    });
                    element.commit = CKEDITOR.tools.override(element.commit, function(callback) {
                        return function() {
                            if (overriddenFunctions[element.id] !== element.getValue()) {
                                callback.apply(this, arguments);
                            }
                        };
                    });
                }
            });
        },
    };

    // Add cell properties elements to the dialog configuration
    addCellPropertiesElements(dialogConfig.contents[0].children[0]);

    // Return the final dialog configuration object
    return dialogConfig;

    // Helper function to add cell properties elements to the dialog
    function addCellPropertiesElements(vboxContainer) {
        // Define cell properties elements
        var cellPropertiesElements = [
            createCellPropertiesHbox("width", d.width, "td{" + d.width + "}"),
            createCellPropertiesHbox("height", d.height, "td{" + d.height + "}"),
            createCellPropertiesHbox("colSpan", d.colSpan, "td[colspan]"),
            createCellPropertiesHbox("rowSpan", d.rowSpan, "td[rowspan]"),
            createSelectInput("wordWrap", d.wordWrap),
            createSelectInput("hAlign", d.hAlign, "td{text-align}"),
            createSelectInput("vAlign", d.vAlign, "td{vertical-align}"),
            createSelectInput("cellType", d.cellType, "th[scope]"),
            createColorSpacer(),
            createColorHbox("bgColor", d.bgColor, "background-color"),
            createColorHbox("borderColor", d.borderColor, "border-color"),
        ];

        // Add cell properties elements to the vbox container
        for (var i = 0; i < cellPropertiesElements.length; i++) {
            vboxContainer.children.push(cellPropertiesElements[i]);
        }
    }
});
