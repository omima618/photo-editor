/*
 Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 CKEditor 4 LTS ("Long Term Support") is available under the terms of the Extended Support Model.
*/
// (function(a){if("undefined"==typeof a)throw Error("jQuery should be loaded before CKEditor jQuery adapter.");if("undefined"==typeof CKEDITOR)throw Error("CKEditor should be loaded before CKEditor jQuery adapter.");CKEDITOR.config.jqueryOverrideVal="undefined"==typeof CKEDITOR.config.jqueryOverrideVal?!0:CKEDITOR.config.jqueryOverrideVal;a.extend(a.fn,{ckeditorGet:function(){var a=this.eq(0).data("ckeditorInstance");if(!a)throw"CKEditor is not initialized yet, use ckeditor() with a callback.";return a},
// ckeditor:function(g,e){if(!CKEDITOR.env.isCompatible)throw Error("The environment is incompatible.");if("function"!==typeof g){var m=e;e=g;g=m}var k=[];e=e||{};this.each(function(){var b=a(this),c=b.data("ckeditorInstance"),f=b.data("_ckeditorInstanceLock"),h=this,l=new a.Deferred;k.push(l.promise());if(c&&!f)g&&g.apply(c,[this]),l.resolve();else if(f)c.once("instanceReady",function(){setTimeout(function d(){c.element?(c.element.$==h&&g&&g.apply(c,[h]),l.resolve()):setTimeout(d,100)},0)},null,null,
// 9999);else{if(e.autoUpdateElement||"undefined"==typeof e.autoUpdateElement&&CKEDITOR.config.autoUpdateElement)e.autoUpdateElementJquery=!0;e.autoUpdateElement=!1;b.data("_ckeditorInstanceLock",!0);c=a(this).is("textarea")?CKEDITOR.replace(h,e):CKEDITOR.inline(h,e);b.data("ckeditorInstance",c);c.on("instanceReady",function(e){var d=e.editor;setTimeout(function n(){if(d.element){e.removeListener();d.on("dataReady",function(){b.trigger("dataReady.ckeditor",[d])});d.on("setData",function(a){b.trigger("setData.ckeditor",
// [d,a.data])});d.on("getData",function(a){b.trigger("getData.ckeditor",[d,a.data])},999);d.on("destroy",function(){b.trigger("destroy.ckeditor",[d])});d.on("save",function(){a(h.form).trigger("submit");return!1},null,null,20);if(d.config.autoUpdateElementJquery&&b.is("textarea")&&a(h.form).length){var c=function(){b.ckeditor(function(){d.updateElement()})};a(h.form).on("submit",c);a(h.form).on("form-pre-serialize",c);b.on("destroy.ckeditor",function(){a(h.form).off("submit",c);a(h.form).off("form-pre-serialize",
// c)})}d.on("destroy",function(){b.removeData("ckeditorInstance")});b.removeData("_ckeditorInstanceLock");b.trigger("instanceReady.ckeditor",[d]);g&&g.apply(d,[h]);l.resolve()}else setTimeout(n,100)},0)},null,null,9999)}});var f=new a.Deferred;this.promise=f.promise();a.when.apply(this,k).then(function(){f.resolve()});this.editor=this.eq(0).data("ckeditorInstance");return this}});CKEDITOR.config.jqueryOverrideVal&&(a.fn.val=CKEDITOR.tools.override(a.fn.val,function(g){return function(e){if(arguments.length){var m=
// this,k=[],f=this.each(function(){var b=a(this),c=b.data("ckeditorInstance");if(b.is("textarea")&&c){var f=new a.Deferred;c.setData(e,function(){f.resolve()});k.push(f.promise());return!0}return g.call(b,e)});if(k.length){var b=new a.Deferred;a.when.apply(this,k).done(function(){b.resolveWith(m)});return b.promise()}return f}var f=a(this).eq(0),c=f.data("ckeditorInstance");return f.is("textarea")&&c?c.getData():g.call(f)}}))})(window.jQuery);

"use strict";

(function ($, CKEDITOR) {
    if (typeof $ === 'undefined') {
        throw new Error("CKEditor jQuery adapter requires jQuery to be loaded.");
    }

    if (typeof CKEDITOR === 'undefined') {
        throw new Error("CKEditor jQuery adapter requires CKEditor to be loaded.");
    }

    CKEDITOR.config.jqueryOverrideVal = (typeof CKEDITOR.config.jqueryOverrideVal === 'undefined') ? true : CKEDITOR.config.jqueryOverrideVal;

    $.extend($.fn, {
        ckeditorGet: function () {
            const instance = this.eq(0).data("ckeditorInstance");

            if (!instance) {
                throw "CKEditor is not initialized yet; use ckeditor() with a callback.";
            }

            return instance;
        },

        ckeditor: async function (callback, options) {
            if (!CKEDITOR.env.isCompatible) {
                throw new Error("The environment is incompatible.");
            }

            const promises = [];

            await this.each(async function () {
                const $this = $(this);
                const instance = $this.data("ckeditorInstance");

                if (!instance || $this.data("_ckeditorInstanceLock")) {
                    $this.data("_ckeditorInstanceLock", true);
                } else {
                    promises.push(new Promise(resolve => {
                        instance.on("instanceReady", function (event) {
                            resolve();
                        });
                    }));
                }
            });

            await Promise.all(promises);

            if (options && (options.autoUpdateElement || (typeof options.autoUpdateElement === 'undefined' && CKEDITOR.config.autoUpdateElement))) {
                options.autoUpdateElementJquery = true;
            }

            options.autoUpdateElement = false;

            this.each(function () {
                const $this = $(this);
                const instance = $this.is("textarea") ? CKEDITOR.replace(this, options) : CKEDITOR.inline(this, options);

                $this.data("ckeditorInstance", instance);

                instance.on("instanceReady", function (event) {
                    const editor = event.editor;

                    editor.on("dataReady", function () {
                        $this.trigger("dataReady.ckeditor", [editor]);
                    });

                    editor.on("setData", function (event) {
                        $this.trigger("setData.ckeditor", [editor, event.data]);
                    });

                    editor.on("getData", function (event) {
                        $this.trigger("getData.ckeditor", [editor, event.data]);
                    }, 999);

                    editor.on("destroy", function () {
                        $this.trigger("destroy.ckeditor", [editor]);
                    });

                    editor.on("save", function () {
                        $(this.form).trigger("submit");
                        return false;
                    }, null, null, 20);

                    if (editor.config.autoUpdateElementJquery && $this.is("textarea") && $(this.form).length) {
                        const updateElement = function () {
                            $this.ckeditor(function () {
                                editor.updateElement();
                            });
                        };

                        $(this.form).on("submit", updateElement);
                        $(this.form).on("form-pre-serialize", updateElement);

                        $this.on("destroy.ckeditor", function () {
                            $(this.form).off("submit", updateElement);
                            $(this.form).off("form-pre-serialize", updateElement);
                        });
                    }

                    editor.on("destroy", function () {
                        $this.removeData("ckeditorInstance");
                    });

                    $this.removeData("_ckeditorInstanceLock");
                    $this.trigger("instanceReady.ckeditor", [editor]);

                    if (callback && typeof callback === 'function') {
                        callback.apply(editor, [this]);
                    }
                });
            });

            return this;
        }
    });

    CKEDITOR.config.jqueryOverrideVal && ($.fn.val = CKEDITOR.tools.override($.fn.val, function (originalVal) {
        return function (value) {
            if (arguments.length) {
                const $this = this.eq(0);
                const instance = $this.data("ckeditorInstance");

                if ($this.is("textarea") && instance) {
                    const deferred = new $.Deferred();
                    instance.setData(value, function () {
                        deferred.resolve();
                    });
                    return deferred.promise();
                }
                return originalVal.call($this, value);
            }

            const $this = this.eq(0);
            const instance = $this.data("ckeditorInstance");

            return $this.is("textarea") && instance ? instance.getData() : originalVal.call($this);
        };
    }));

})(window.jQuery, window.CKEDITOR);
