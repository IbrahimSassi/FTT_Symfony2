<?php

/* FTTAdminBundle:Archive:archive.html.twig */
class __TwigTemplate_5dc695cf152bf84f1f8771fd8f0adb73bbec63be06f3dc9eb634efcb28183378 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FTTAdminBundle::layoutAdmin.html.twig", "FTTAdminBundle:Archive:archive.html.twig", 1);
        $this->blocks = array(
            'bodyAdmin' => array($this, 'block_bodyAdmin'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FTTAdminBundle::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_bodyAdmin($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"container\"style=\"width:800px;height: 800px;\">
        <div class=\"row\">

            <div class=\"col-md-4\" style=\"width:800px;height: 800px;\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <p class=\"lead\">
                            <strong>Evenements</strong></p>
                        <section id=\"mainSection\" class=\"container\">

                            <section id=\"example\">
                                <section class=\"pull-left\" id=\"canvasSection\">

                                </section>
                                <aside class=\"btn-group pull-right\" id=\"downloadSection\">
                                    <button class=\"btn btn-primary\" type=\"button\" style=\"cursor: auto\">export</button>
                                    <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\" type=\"button\">
                                        <span class=\"caret\"></span>

                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                    </button>
                                    <ul role=\"menu\" class=\"dropdown-menu\" id=\"selectDownloadType\">
                                        <li><a id=\"btnExport\" id=\"downloadAsPNG\" href=\"#xls\"> Export vers .xls </a> </li>
                                        <li><a class=\"word-export\" href=\"javascript:void(0)\"> Export vers .doc </a> </li>
                                    </ul>
                                </aside>

                            </section>
                        </section>

                    </div>
                    <div class=\"panel-body text-center\">
                        <p class=\"lead\">
                            <strong></strong></p>
                    </div>
                    <ul class=\"list-group list-group-flush text-center\">
                        <div id=\"page-content\"> 
                            <div id=\"table_wrapper\" >

                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evenements"]) ? $context["evenements"] : $this->getContext($context, "evenements")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 47
            echo "

                                    <legend>
                                        <strong> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nomEvenement", array()), "html", null, true);
            echo "</strong>  <br/>

                                        Type : ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "typeEvenement", array()), "html", null, true);
            echo "</br> 
                                        Date Début: ";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "&nbsp;&nbsp;
                                        Date Fin: ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "</br>




                                    </legend>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "



                            </div>  
                        </div>      
                    </ul>
                    <div class=\"panel-footer\">
                        <a class=\"btn btn-lg btn-block btn-info\">
                            <section style=\"clear:both\" id=\"message\"></section>\t

                        </a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>

</div>        
<style>.lead { font-size: 33px;margin-bottom:0px; }</style>
<br/>







<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script> 
<script src=\"FileSaver.js\"></script> 
<script src=\"jquery.wordexport.js\"></script> 
<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {
        \$(\"a.word-export\").click(function (event) {
            \$(\"#page-content\").wordExport();
        });
    });
</script>
</body>
<script type=\"text/javascript\">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
<script>
    /*! FileSaver.js
     *  A saveAs() FileSaver implementation.
     *  2014-01-24
     *
     *  By Eli Grey, http://eligrey.com
     *  License: X11/MIT
     *    See LICENSE.md
     */

    /*global self */
    /*jslint bitwise: true, indent: 4, laxbreak: true, laxcomma: true, smarttabs: true, plusplus: true */

    /*! @source http://purl.eligrey.com/github/FileSaver.js/blob/master/FileSaver.js */

    var saveAs = saveAs
            // IE 10+ (native saveAs)
            || (typeof navigator !== \"undefined\" &&
                    navigator.msSaveOrOpenBlob && navigator.msSaveOrOpenBlob.bind(navigator))
            // Everyone else
            || (function (view) {
                \"use strict\";
                // IE <10 is explicitly unsupported
                if (typeof navigator !== \"undefined\" &&
                        /MSIE [1-9]\\./.test(navigator.userAgent)) {
                    return;
                }
                var
                        doc = view.document
                        // only get URL when necessary in case BlobBuilder.js hasn't overridden it yet
                        , get_URL = function () {
                            return view.URL || view.webkitURL || view;
                        }
                , URL = view.URL || view.webkitURL || view
                        , save_link = doc.createElementNS(\"http://www.w3.org/1999/xhtml\", \"a\")
                        , can_use_save_link = !view.externalHost && \"download\" in save_link
                        , click = function (node) {
                            var event = doc.createEvent(\"MouseEvents\");
                            event.initMouseEvent(
                                    \"click\", true, false, view, 0, 0, 0, 0, 0
                                    , false, false, false, false, 0, null
                                    );
                            node.dispatchEvent(event);
                        }
                , webkit_req_fs = view.webkitRequestFileSystem
                        , req_fs = view.requestFileSystem || webkit_req_fs || view.mozRequestFileSystem
                        , throw_outside = function (ex) {
                            (view.setImmediate || view.setTimeout)(function () {
                                throw ex;
                            }, 0);
                        }
                , force_saveable_type = \"application/octet-stream\"
                        , fs_min_size = 0
                        , deletion_queue = []
                        , process_deletion_queue = function () {
                            var i = deletion_queue.length;
                            while (i--) {
                                var file = deletion_queue[i];
                                if (typeof file === \"string\") { // file is an object URL
                                    URL.revokeObjectURL(file);
                                } else { // file is a File
                                    file.remove();
                                }
                            }
                            deletion_queue.length = 0; // clear queue
                        }
                , dispatch = function (filesaver, event_types, event) {
                    event_types = [].concat(event_types);
                    var i = event_types.length;
                    while (i--) {
                        var listener = filesaver[\"on\" + event_types[i]];
                        if (typeof listener === \"function\") {
                            try {
                                listener.call(filesaver, event || filesaver);
                            } catch (ex) {
                                throw_outside(ex);
                            }
                        }
                    }
                }
                , FileSaver = function (blob, name) {
                    // First try a.download, then web filesystem, then object URLs
                    var
                            filesaver = this
                            , type = blob.type
                            , blob_changed = false
                            , object_url
                            , target_view
                            , get_object_url = function () {
                                var object_url = get_URL().createObjectURL(blob);
                                deletion_queue.push(object_url);
                                return object_url;
                            }
                    , dispatch_all = function () {
                        dispatch(filesaver, \"writestart progress write writeend\".split(\" \"));
                    }
                    // on any filesys errors revert to saving with object URLs
                    , fs_error = function () {
                        // don't create more object URLs than needed
                        if (blob_changed || !object_url) {
                            object_url = get_object_url(blob);
                        }
                        if (target_view) {
                            target_view.location.href = object_url;
                        } else {
                            window.open(object_url, \"_blank\");
                        }
                        filesaver.readyState = filesaver.DONE;
                        dispatch_all();
                    }
                    , abortable = function (func) {
                        return function () {
                            if (filesaver.readyState !== filesaver.DONE) {
                                return func.apply(this, arguments);
                            }
                        };
                    }
                    , create_if_not_found = {create: true, exclusive: false}
                    , slice
                            ;
                    filesaver.readyState = filesaver.INIT;
                    if (!name) {
                        name = \"download\";
                    }
                    if (can_use_save_link) {
                        object_url = get_object_url(blob);
                        // FF for Android has a nasty garbage collection mechanism
                        // that turns all objects that are not pure javascript into 'deadObject'
                        // this means `doc` and `save_link` are unusable and need to be recreated
                        // `view` is usable though:
                        doc = view.document;
                        save_link = doc.createElementNS(\"http://www.w3.org/1999/xhtml\", \"a\");
                        save_link.href = object_url;
                        save_link.download = name;
                        var event = doc.createEvent(\"MouseEvents\");
                        event.initMouseEvent(
                                \"click\", true, false, view, 0, 0, 0, 0, 0
                                , false, false, false, false, 0, null
                                );
                        save_link.dispatchEvent(event);
                        filesaver.readyState = filesaver.DONE;
                        dispatch_all();
                        return;
                    }
                    // Object and web filesystem URLs have a problem saving in Google Chrome when
                    // viewed in a tab, so I force save with application/octet-stream
                    // http://code.google.com/p/chromium/issues/detail?id=91158
                    if (view.chrome && type && type !== force_saveable_type) {
                        slice = blob.slice || blob.webkitSlice;
                        blob = slice.call(blob, 0, blob.size, force_saveable_type);
                        blob_changed = true;
                    }
                    // Since I can't be sure that the guessed media type will trigger a download
                    // in WebKit, I append .download to the filename.
                    // https://bugs.webkit.org/show_bug.cgi?id=65440
                    if (webkit_req_fs && name !== \"download\") {
                        name += \".download\";
                    }
                    if (type === force_saveable_type || webkit_req_fs) {
                        target_view = view;
                    }
                    if (!req_fs) {
                        fs_error();
                        return;
                    }
                    fs_min_size += blob.size;
                    req_fs(view.TEMPORARY, fs_min_size, abortable(function (fs) {
                        fs.root.getDirectory(\"saved\", create_if_not_found, abortable(function (dir) {
                            var save = function () {
                                dir.getFile(name, create_if_not_found, abortable(function (file) {
                                    file.createWriter(abortable(function (writer) {
                                        writer.onwriteend = function (event) {
                                            target_view.location.href = file.toURL();
                                            deletion_queue.push(file);
                                            filesaver.readyState = filesaver.DONE;
                                            dispatch(filesaver, \"writeend\", event);
                                        };
                                        writer.onerror = function () {
                                            var error = writer.error;
                                            if (error.code !== error.ABORT_ERR) {
                                                fs_error();
                                            }
                                        };
                                        \"writestart progress write abort\".split(\" \").forEach(function (event) {
                                            writer[\"on\" + event] = filesaver[\"on\" + event];
                                        });
                                        writer.write(blob);
                                        filesaver.abort = function () {
                                            writer.abort();
                                            filesaver.readyState = filesaver.DONE;
                                        };
                                        filesaver.readyState = filesaver.WRITING;
                                    }), fs_error);
                                }), fs_error);
                            };
                            dir.getFile(name, {create: false}, abortable(function (file) {
                                // delete file if it already exists
                                file.remove();
                                save();
                            }), abortable(function (ex) {
                                if (ex.code === ex.NOT_FOUND_ERR) {
                                    save();
                                } else {
                                    fs_error();
                                }
                            }));
                        }), fs_error);
                    }), fs_error);
                }
                , FS_proto = FileSaver.prototype
                        , saveAs = function (blob, name) {
                            return new FileSaver(blob, name);
                        }
                ;
                FS_proto.abort = function () {
                    var filesaver = this;
                    filesaver.readyState = filesaver.DONE;
                    dispatch(filesaver, \"abort\");
                };
                FS_proto.readyState = FS_proto.INIT = 0;
                FS_proto.WRITING = 1;
                FS_proto.DONE = 2;

                FS_proto.error =
                        FS_proto.onwritestart =
                        FS_proto.onprogress =
                        FS_proto.onwrite =
                        FS_proto.onabort =
                        FS_proto.onerror =
                        FS_proto.onwriteend =
                        null;

                view.addEventListener(\"unload\", process_deletion_queue, false);
                saveAs.unload = function () {
                    process_deletion_queue();
                    view.removeEventListener(\"unload\", process_deletion_queue, false);
                };
                return saveAs;
            }(
                    typeof self !== \"undefined\" && self
                    || typeof window !== \"undefined\" && window
                    || this.content
                    ));
// `self` is undefined in Firefox for Android content script context
// while `this` is nsIContentFrameMessageManager
// with an attribute `content` that corresponds to the window

    if (typeof module !== \"undefined\" && module !== null) {
        module.exports = saveAs;
    } else if ((typeof define !== \"undefined\" && define !== null) && (define.amd != null)) {
        define([], function () {
            return saveAs;
        });
    }

</script>
<script>if (typeof jQuery !== \"undefined\" && typeof saveAs !== \"undefined\") {
        (function (\$) {
            \$.fn.wordExport = function (fileName) {
                fileName = typeof fileName !== 'undefined' ? fileName : \"FTT évenements\";
                var static = {
                    mhtml: {
                        top: \"Mime-Version: 1.0\\nContent-Base: \" + location.href + \"\\nContent-Type: Multipart/related; boundary=\\\"NEXT.ITEM-BOUNDARY\\\";type=\\\"text/html\\\"\\n\\n--NEXT.ITEM-BOUNDARY\\nContent-Type: text/html; charset=\\\"utf-8\\\"\\nContent-Location: \" + location.href + \"\\n\\n<!DOCTYPE html>\\n<html>\\n_html_</html>\",
                        head: \"<head>\\n<meta http-equiv=\\\"Content-Type\\\" content=\\\"text/html; charset=utf-8\\\">\\n<style>\\n_styles_\\n</style>\\n</head>\\n\",
                        body: \"<body>_body_</body>\"
                    }
                };
                var options = {
                    maxWidth: 624
                };
                // Clone selected element before manipulating it
                var markup = \$(this).clone();

                // Remove hidden elements from the output
                markup.each(function () {
                    var self = \$(this);
                    if (self.is(':hidden'))
                        self.remove();
                });

                // Embed all images using Data URLs
                var images = Array();
                var img = markup.find('img');
                for (var i = 0; i < img.length; i++) {
                    // Calculate dimensions of output image
                    var w = Math.min(img[i].width, options.maxWidth);
                    var h = img[i].height * (w / img[i].width);
                    // Create canvas for converting image to data URL
                    \$('<canvas>').attr(\"id\", \"jQuery-Word-export_img_\" + i).width(w).height(h).insertAfter(img[i]);
                    var canvas = document.getElementById(\"jQuery-Word-export_img_\" + i);
                    canvas.width = w;
                    canvas.height = h;
                    // Draw image to canvas
                    var context = canvas.getContext('2d');
                    context.drawImage(img[i], 0, 0, w, h);
                    // Get data URL encoding of image
                    var uri = canvas.toDataURL();
                    \$(img[i]).attr(\"src\", img[i].src);
                    img[i].width = w;
                    img[i].height = h;
                    // Save encoded image to array
                    images[i] = {
                        type: uri.substring(uri.indexOf(\":\") + 1, uri.indexOf(\";\")),
                        encoding: uri.substring(uri.indexOf(\";\") + 1, uri.indexOf(\",\")),
                        location: \$(img[i]).attr(\"src\"),
                        data: uri.substring(uri.indexOf(\",\") + 1)
                    };
                    // Remove canvas now that we no longer need it
                    canvas.parentNode.removeChild(canvas);
                }

                // Prepare bottom of mhtml file with image data
                var mhtmlBottom = \"\\n\";
                for (var i = 0; i < images.length; i++) {
                    mhtmlBottom += \"--NEXT.ITEM-BOUNDARY\\n\";
                    mhtmlBottom += \"Content-Location: \" + images[i].contentLocation + \"\\n\";
                    mhtmlBottom += \"Content-Type: \" + images[i].contentType + \"\\n\";
                    mhtmlBottom += \"Content-Transfer-Encoding: \" + images[i].contentEncoding + \"\\n\\n\";
                    mhtmlBottom += images[i].contentData + \"\\n\\n\";
                }
                mhtmlBottom += \"--NEXT.ITEM-BOUNDARY--\";

                //TODO: load css from included stylesheet
                var styles = \"\";

                // Aggregate parts of the file together 
                var fileContent = static.mhtml.top.replace(\"_html_\", static.mhtml.head.replace(\"_styles_\", styles) + static.mhtml.body.replace(\"_body_\", markup.html())) + mhtmlBottom;

                // Create a Blob with the file contents
                var blob = new Blob([fileContent], {
                    type: \"application/msword;charset=utf-8\"
                });
                saveAs(blob, fileName + \".doc\");
            };
        })(jQuery);
    } else {
        if (typeof jQuery === \"undefined\") {
            console.error(\"jQuery Word Export: missing dependency (jQuery)\");
        }
        if (typeof saveAs === \"undefined\") {
            console.error(\"jQuery Word Export: missing dependency (FileSaver.js)\");
        }
        ;
    }
</script>


<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
</head>




<script>\$(document).ready(function () {
       \$(\"#btnExport\").click(function (e) {
           e.preventDefault();

           //getting data from our table
           var data_type = 'data:application/vnd.ms-excel';
           var table_div = document.getElementById('table_wrapper');
           var table_html = table_div.outerHTML.replace(/ /g, '%20');

           var a = document.createElement('a');
           a.href = data_type + ', ' + table_html;
           a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
           a.click();
       });
   });</script>






<div id=\"jquery-script-menu\">
    <div class=\"jquery-script-center\">

        <div class=\"jquery-script-ads\"><script type=\"text/javascript\"><!--
        google_ad_client = \"ca-pub-2783044520727903\";
            /* jQuery_demo */
            google_ad_slot = \"2780937993\";
            google_ad_width = 728;
            google_ad_height = 90;
        //-->
            </script>
            <script type=\"text/javascript\"
                    src=\"http://pagead2.googlesyndication.com/pagead/show_ads.js\">
            </script></div>
        <div class=\"jquery-script-clear\"></div>
    </div>
</div>


<script type=\"text/javascript\">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>


<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script> 

<script src=\"core/export-canvas.js\"></script>
<script>
\$(\"document\").ready(function () {

var exampleCanvasID = \"myCanvas\";
//var ctx = document.getElementById(exampleCanvasID).getContext(\"2d\");
//ctx.fillStyle = \"rgb(200,0,0)\";
//ctx.fillRect (10, 10, 55, 50);
//\tctx.fillStyle = \"rgba(0, 0, 200, 0.5)\";
//\tctx.fillRect (30, 30, 55, 50);

var exportCanvas = new ExportCanvas();
exportCanvas.loadConfigFile(\"core/config/config.js\");
exportCanvas.loadLanguageFile(\"core/language/en.js\");
exportCanvas.setExportQuality(1.0);

\$(\"ul#selectDownloadType li a\").click(function () {

    \$(\"html, body\").animate({scrollTop: \$(document).height()}, 800);

    var getIDofSelectedDownloadType = \$(this).attr(\"id\");
    if (getIDofSelectedDownloadType == \"downloadAsPNG\") {

        exportCanvas.setMimeType(\"image/png\");

    } else if (getIDofSelectedDownloadType == \"downloadAsJPEG\") {

        exportCanvas.setMimeType(\"image/jpeg\");

    } else if (getIDofSelectedDownloadType == \"downloadAsBMP\") {

        exportCanvas.setMimeType(\"image/bmp\");

    } else if (getIDofSelectedDownloadType == \"downloadAsGIF\") {

        exportCanvas.setMimeType(\"image/gif\");

    } else if (getIDofSelectedDownloadType == \"downloadAsWEBP\") {

        exportCanvas.setMimeType(\"image/webp\");

    } else {

        \$(\"section#message\").html('<div class=\"alert alert-danger\" role=\"alert\">Export autorisée</div>').show(1000);

    }

    exportCanvas.export(exampleCanvasID, function () {

        \$(\"\").html(\"\").css(\"display\", \"none\");
        \$(\"\").html('<div class=\"alert.alert-danger\" role=\"alert\">' + DOWNLOAD_HAS_STARTED + '</div>').show(1000);

    }, function (getLastReport) {

        \$(\"\").html(\"\").css(\"display\", \"none\");
        \$(\"\").html('<div class=\"alert.alert-danger\" role=\"alert\">' + getLastReport + '</div>').show(1000);

    });

});

\$(\"a#showTutorial\").click(function () {
    \$(\"html, body\").animate({scrollTop: \$(document).height()}, 800);
    \$.ajax({
        url: \"example/example.txt\",
        dataType: \"text\",
        success: function (data) {
            \$(\"section#tutorial\").css(\"display\", \"none\");
            \$(\"section#tutorial\").html('<h2>HTML-Einbindung (HEAD)</h2><code>&#x3C;script src=&#x22;PFAD_ZUR_BIBLIOTHEK/core/export-canvas.js&#x22;&#x3E;&#x3C;/script&#x3E;</code><br /><h2>HTML-Einbindung (BODY)</h2><code>&#x3C;canvas id=&#x22;myCanvas&#x22;&#x3E;Ihr Browser unterstützt das Canvas-Objekt nicht!&#x3C;/canvas&#x3E;</code><br /><h2>Javascript-Einbindung</h2><br /><code>' + data + '</code>');
            \$(\"section#tutorial\").slideDown(1000);
        },
        error: function () {
            alert(\"Konnte die Ajax-Anfrage lokal nicht durchführen! Am Besten mit Firefox öffnen um die Anleitung zu sehen! Das Bibliothek sollte in allen Browsern funktioneren!\");
        }
    });
});

});
</script>
</head>
<body>

</body>

<script>
    MAX_CANVAS_WIDTH_FOR_EXPORT = 1920;
    MAX_CANVAS_HEIGHT_FOR_EXPORT = 1280;
    MIN_EXPORT_QUALITY = 0.1;
    MAX_EXPORT_QUALITY = 1.0;
    SCRIPT_NAME = \"ExportCanvas\";
    FIRST_PARAM_NO_FUNC = \"Erster Parameter ist keine Funktion\";
    SECOND_PARAM_NO_FUNC = \"Zweiter Parameter ist keine Funktion\";
    NO_MIMETYPE_SUPPORT_FOR = \"Dein Browser unterstützt folgenden MimeType nicht\";
    THESE_MIMETYPES_ARE_ALLOWED = \"Diese MimeTypes sind erlaubt\";
    DOWNLOAD_HAS_STARTED = \"Der Download wurde gestartet!\";
    EXPORT_FILENAME = \"mein-mosaik\";
    CANVAS_NOT_EXPORTABLE = \"Dieses Canvas-Bild lässt sich nicht exportieren! Bitte überprüfen Sie die Größe des ausgewählten Hauptbildes! Maximale Bildgröße: \" + MAX_CANVAS_WIDTH_FOR_EXPORT + \" x \" + MAX_CANVAS_HEIGHT_FOR_EXPORT;
    CANVAS_EXPORT_QUALITY_NOT_VALID = \"Die Qualitätseinstellung des Exports ist nicht korrekt! Werte von \" + MIN_EXPORT_QUALITY + \" - \" + MAX_EXPORT_QUALITY + \" sind erlaubt!\";
    SCRIPT_NAME = \"ExportCanvas\";
    FIRST_PARAM_NO_FUNC = \"First parameter is not a function\";
    SECOND_PARAM_NO_FUNC = \"Second parameter is not a function\";
    NO_MIMETYPE_SUPPORT_FOR = \"Your Browser doesn't support following MimeType\";
    THESE_MIMETYPES_ARE_ALLOWED = \"These MimeTypes are allowed\";
    DOWNLOAD_HAS_STARTED = \"The download has started!\";
    EXPORT_FILENAME = \"my-mosaic\";
    CANVAS_NOT_EXPORTABLE = \"This canvas is not exportable! Please check the dimension of your selected main-picture! Max-dimension are: \" + MAX_CANVAS_WIDTH_FOR_EXPORT + \" x \" + MAX_CANVAS_HEIGHT_FOR_EXPORT;
    CANVAS_EXPORT_QUALITY_NOT_VALID = \"The quality-setting of the export is not valid! Only values of \" + MIN_EXPORT_QUALITY + \" - \" + MAX_EXPORT_QUALITY + \" are allowed!\";

    /**
     
     * Author: Onur Sahin
     * Date: 30. September 2014
     * Version: 1.6.5
     
     Versionierungs-Verlauf
     * 1.0.0 Start-Version (25. Juli 2014)
     * * * * Bisher kein Vermerk
     * 1.0.1 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (23. September 2014)
     * * * * Export ist nun auch über den Internet-Explorer möglich, jedoch nur als HTML-Dokument welches das Canvas-Element beinhaltet (Technisch bisher keine andere Möglichkeit)
     * 1.0.2 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (24. September 2014)
     * * * * Die Browserspezifische WhiteList bezüglich der MimeTypes wurde hinzugefügt (Infos siehe hier: bit.ly/1uWDqIj)
     * 1.1.2 Erhöhung der Nebenversionsnummer um +1 (Funktionelle Erweiterung) (24. September 2014)
     * * * * Es ist jetzt möglich Sprachdateien für die ExportCanvas-Bibliothek zu erstellen
     * 1.1.3 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (26. September 2014)
     * * * * Die Methode \"initBrowserSpecificMimeTypeWhiteList\" wurde gegen die Methode \"getBrowserSpecificMimeTypeWhiteList\" ausgetauscht um 
     * * * * Zugriffe außerhalb ebenfalls zu ermöglichen. Vorher wurde die Browser-spezifische MimeType-Liste bei der export-Methode initialisiert, 
     * * * * jedoch waren diese Informationen bei einem Produktiveinsatz vorher schon notwendig
     * 1.5.3 Erhöhung der Nebenversionsnummer um +4 (Funktionelle Erweiterung) (27. September 2014)
     * * * * Die Methode \"isCanvasExportable\" wurde hinzugefügt
     * * * * Die Konstante CANVAS_NOT_EXPORTABLE, CANVAS_EXPORT_QUALITY_NOT_VALID  wurde in die Sprachdateien mitübernommen
     * * * * Es wurde eine config.js für die Bibliothek hinzugefügt welches erstmalig die Konstanten MAX_CANVAS_WIDTH_FOR_EXPORT, MAX_CANVAS_HEIGHT_FOR_EXPORT, MIN_EXPORT_QUALITY, MAX_EXPORT_QUALITY beinhalten
     * * * * Die Methode \"setExportQuality\" wurde hinzugefügt und deren Überprüfung
     * 1.6.3 Erhöhung der Nebenversionsnummer um +1 (Funktionelle Erweiterung) (28. September 2014)
     * * * * Die Methode \"isImgExportable\" wurde hinzugefügt
     * 1.6.5 Erhöhung der Revisionsnummer um +2 (Fehlerbehebung) (30. September 2014)
     * * * * Safari unterstützt nicht das HTML5-Download-Attribut, Alternative im Form eines Octet-Stream implementiert (siehe export-Methode)
     * * * * Erzeugter Download-Link welches die Canvas-Daten enthält, wird nachdem Download direkt wieder gelöscht um DOM nicht zu belasten \"link.parentNode.removeChild(link)\"
     
     */

    function ExportCanvas() {

        // Eigenschaften bezüglich des Canvas-Exports
        var canvasToExport;
        var canvasDataURL;
        var lastReport;
        var mimeType = \"image/png\";
        var mimeTypeForImageDownload = \"image/octet-stream\";
        var mimeTypeWhiteList = new Array(\"image/png\", \"image/jpeg\");
        var exportQuality = 1.0;

        // Browserspezifische Eigenschaften
        // Für weitere Browser-Ermittlungen siehe hier: bit.ly/1pqTR9m
        var isIE = false || !!document.documentMode;
        var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
        var isFirefox = typeof InstallTrigger !== 'undefined';
        var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
        var isChrome = !!window.chrome && !isOpera;
        var ieSaveAsDialogFileName = \"my-canvas\";

        // Überprüft ob ein Canvas-Element exportierbar ist
        this.isCanvasExportable = function (canvasID) {
            var canvasContext = document.getElementById(canvasID).getContext(\"2d\");
            if (canvasContext.canvas.width > MAX_CANVAS_WIDTH_FOR_EXPORT || canvasContext.canvas.height > MAX_CANVAS_HEIGHT_FOR_EXPORT)
                throw SCRIPT_NAME + \": \" + CANVAS_NOT_EXPORTABLE;
        }

        // Überprüft ob ein IMG-Element exportierbar ist
        this.isImgExportable = function (imgID) {
            var imageElement = document.getElementById(imgID);
            if (imageElement.naturalWidth > MAX_CANVAS_WIDTH_FOR_EXPORT || imageElement.naturalHeight > MAX_CANVAS_HEIGHT_FOR_EXPORT)
                throw SCRIPT_NAME + \": \" + CANVAS_NOT_EXPORTABLE;
        }

        // Setze die Qualitätsstufe für den Export fest
        this.setExportQuality = function (getExportQuality) {
            exportQuality = getExportQuality;
        }

        // Hole die Dateiendung der Mimetypes
        this.getExtensionOfMimeType = function (getMimeType) {
            var extensionArr = getMimeType.split(\"/\");
            var extension = extensionArr[extensionArr.length - 1];
            return extension;
        }

        // Hole die browserspezifischen Whitelist-Angaben bezüglich der MimeTypes
        // Informationen welche WhiteList man für welchen Browser setzt findet man hier: bit.ly/1uWDqIj
        this.getBrowserSpecificMimeTypeWhiteList = function () {
            if (isFirefox)
                return new Array(\"image/png\", \"image/jpeg\", \"image/bmp\");
            if (isOpera || isChrome)
                return new Array(\"image/png\", \"image/jpeg\", \"image/webp\");
            if (isSafari)
                return new Array(\"image/png\", \"image/jpeg\", \"image/gif\");
            if (isIE)
                return new Array(\"image/png\", \"image/jpeg\");
        }

        // Gebe WhiteList als Array zurück
        this.getMimeTypeWhiteList = function () {
            return mimeTypeWhiteList;
        }

        // Überprüfung der Whitelist bezüglich der MimeTypes
        this.isMimeTypeValid = function () {
            for (var i = 0; i < mimeTypeWhiteList.length; i++)
                if (mimeTypeWhiteList[i] == mimeType)
                    return true;
            return false;
        }

        // Lädt JS-Dateien in den Head-Bereich
        this.loadJS = function (getPathOfLangFile) {
            var script = document.createElement('script');
            script.src = getPathOfLangFile;
            document.getElementsByTagName(\"head\")[0].appendChild(script);
        }

        // Lädt die Sprachdatei
        this.loadLanguageFile = function (getPathOfLangFile) {
            this.loadJS(getPathOfLangFile);
        }

        // Lad die Configdatei
        this.loadConfigFile = function (getPathOfLangFile) {
            this.loadJS(getPathOfLangFile);
        }

        // Die Methode welches den Export des Canvas-Objektes durchführt
        this.export = function (getCanvasID, successCallback, errorCallback) {

            try {

                // Falls unser Canvas nicht exportiert werden kann wird eine Exception geworden
                this.isCanvasExportable(getCanvasID);

                // Überprüfe ob die Qualitätsstufe des Exports gültig ist
                if (!(exportQuality >= MIN_EXPORT_QUALITY && exportQuality <= MAX_EXPORT_QUALITY))
                    throw SCRIPT_NAME + \": \" + CANVAS_EXPORT_QUALITY_NOT_VALID;

                // Setze die browser-spezifische Whitelist bezüglich der MimeTypes
                mimeTypeWhiteList = this.getBrowserSpecificMimeTypeWhiteList();

                // Nur gültige Mimetypes verarbeiten
                if (this.isMimeTypeValid()) {

                    canvasToExport = document.getElementById(getCanvasID);
                    canvasDataURL = canvasToExport.toDataURL(mimeType, exportQuality);

                    /*
                     Da der \"image/octet-stream\" für die base64-erzeugte URL ( & das HTML5-Download-Attribut) beim IE keine Wirkung hat (sprich kein Download-Dialog erzeugt wird)
                     musste eine Alternative her. Die bisher einzig bekannte Alternative für den IE war der Befehl \"execCommand\" welches
                     aber nur ein HTML-Dokument speichern lässt. In diesem Dokument wird die base64-URL in einen img-Tag reingeladen um es beim
                     Abspeichern des HTML-Dokumntes zu behalten. MimeTypes werden mit in das zu speichernde HTML-Dokument mitübernommen.
                     */
                    if (isIE) {
                        // IE-Alternative welches das Canvas in ein HTML-Dokument speichert
                        var win = window.open();
                        win.document.write(\"<img src='\" + canvasDataURL + \"'></img>\");
                        win.document.execCommand(\"saveAs\", true, ieSaveAsDialogFileName);
                        win.document.close();
                        win.close();
                    } else if (isSafari) {
                        // Safari unterstützt kein HTML5-Download-Attribut 
                        top.location.href = canvasDataURL.replace(mimeType, mimeTypeForImageDownload);
                    } else {
                        // Für alle anderen, modernen Browser sollte die Simulation des HTML5-Download-Attributes funktionieren (sprich der Klick darauf)
                        var link = document.createElement(\"a\");
                        document.getElementsByTagName(\"body\")[0].appendChild(link);
                        link.download = EXPORT_FILENAME + \".\" + this.getExtensionOfMimeType(mimeType);
                        link.href = canvasDataURL;
                        link.click();
                        link.parentNode.removeChild(link);
                    }

                    if (successCallback && typeof (successCallback) === \"function\") {
                        successCallback();
                    } else {
                        console.log(SCRIPT_NAME + \": \" + FIRST_PARAM_NO_FUNC);
                    }

                } else {
                    throw SCRIPT_NAME + \": \" + NO_MIMETYPE_SUPPORT_FOR + \": \" + this.getMimeType() + \". \" + THESE_MIMETYPES_ARE_ALLOWED + \": \" + this.getMimeTypeWhiteList().join(\",\");
                }

            } catch (Exception) {

                // Fange zuerst das was wir \"geworfen\" haben und danach können wir auf die eigentliche Exception aus dem try-Block abfangen \"Exception.message\"
                if (Exception != \"undefined\") {
                    this.setReport(Exception);
                } else {
                    this.setReport(Exception.message);
                }

                if (errorCallback && typeof (errorCallback) === \"function\") {
                    errorCallback(lastReport);
                } else {
                    console.log(SCRIPT_NAME + \": \" + SECOND_PARAM_NO_FUNC);
                }

            }

        }

        // Report setzen
        this.setReport = function (getMessage) {
            lastReport = getMessage;
        }

        // Report abholen
        this.setMimeType = function (getMimeType) {
            mimeType = getMimeType;
        }

        // Aktuell ausgewählten MimeType holen
        this.getMimeType = function () {
            return mimeType;
        }

    }
</script>

<br/><br/><br/><br/><br/><br/>

";
    }

    public function getTemplateName()
    {
        return "FTTAdminBundle:Archive:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 61,  95 => 54,  91 => 53,  87 => 52,  82 => 50,  77 => 47,  73 => 46,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FTTAdminBundle::layoutAdmin.html.twig" %}*/
/* */
/* */
/* */
/* {% block bodyAdmin %}*/
/* */
/*     <div class="container"style="width:800px;height: 800px;">*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-4" style="width:800px;height: 800px;">*/
/*                 <div class="panel panel-info">*/
/*                     <div class="panel-heading">*/
/*                         <p class="lead">*/
/*                             <strong>Evenements</strong></p>*/
/*                         <section id="mainSection" class="container">*/
/* */
/*                             <section id="example">*/
/*                                 <section class="pull-left" id="canvasSection">*/
/* */
/*                                 </section>*/
/*                                 <aside class="btn-group pull-right" id="downloadSection">*/
/*                                     <button class="btn btn-primary" type="button" style="cursor: auto">export</button>*/
/*                                     <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">*/
/*                                         <span class="caret"></span>*/
/* */
/*                                         <span class="sr-only">Toggle Dropdown</span>*/
/*                                     </button>*/
/*                                     <ul role="menu" class="dropdown-menu" id="selectDownloadType">*/
/*                                         <li><a id="btnExport" id="downloadAsPNG" href="#xls"> Export vers .xls </a> </li>*/
/*                                         <li><a class="word-export" href="javascript:void(0)"> Export vers .doc </a> </li>*/
/*                                     </ul>*/
/*                                 </aside>*/
/* */
/*                             </section>*/
/*                         </section>*/
/* */
/*                     </div>*/
/*                     <div class="panel-body text-center">*/
/*                         <p class="lead">*/
/*                             <strong></strong></p>*/
/*                     </div>*/
/*                     <ul class="list-group list-group-flush text-center">*/
/*                         <div id="page-content"> */
/*                             <div id="table_wrapper" >*/
/* */
/*                                 {% for evenement in evenements %}*/
/* */
/* */
/*                                     <legend>*/
/*                                         <strong> {{evenement.nomEvenement}}</strong>  <br/>*/
/* */
/*                                         Type : {{evenement.typeEvenement}}</br> */
/*                                         Date Début: {{evenement.dateDebut|date("d/m/Y")}}&nbsp;&nbsp;*/
/*                                         Date Fin: {{evenement.dateFin|date("d/m/Y")}}</br>*/
/* */
/* */
/* */
/* */
/*                                     </legend>*/
/*                                 {% endfor %}*/
/* */
/* */
/* */
/* */
/*                             </div>  */
/*                         </div>      */
/*                     </ul>*/
/*                     <div class="panel-footer">*/
/*                         <a class="btn btn-lg btn-block btn-info">*/
/*                             <section style="clear:both" id="message"></section>	*/
/* */
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* </div>        */
/* <style>.lead { font-size: 33px;margin-bottom:0px; }</style>*/
/* <br/>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> */
/* <script src="FileSaver.js"></script> */
/* <script src="jquery.wordexport.js"></script> */
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function ($) {*/
/*         $("a.word-export").click(function (event) {*/
/*             $("#page-content").wordExport();*/
/*         });*/
/*     });*/
/* </script>*/
/* </body>*/
/* <script type="text/javascript">*/
/* */
/*     var _gaq = _gaq || [];*/
/*     _gaq.push(['_setAccount', 'UA-36251023-1']);*/
/*     _gaq.push(['_setDomainName', 'jqueryscript.net']);*/
/*     _gaq.push(['_trackPageview']);*/
/* */
/*     (function () {*/
/*         var ga = document.createElement('script');*/
/*         ga.type = 'text/javascript';*/
/*         ga.async = true;*/
/*         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';*/
/*         var s = document.getElementsByTagName('script')[0];*/
/*         s.parentNode.insertBefore(ga, s);*/
/*     })();*/
/* */
/* </script>*/
/* <script>*/
/*     /*! FileSaver.js*/
/*      *  A saveAs() FileSaver implementation.*/
/*      *  2014-01-24*/
/*      **/
/*      *  By Eli Grey, http://eligrey.com*/
/*      *  License: X11/MIT*/
/*      *    See LICENSE.md*/
/*      *//* */
/* */
/*     /*global self *//* */
/*     /*jslint bitwise: true, indent: 4, laxbreak: true, laxcomma: true, smarttabs: true, plusplus: true *//* */
/* */
/*     /*! @source http://purl.eligrey.com/github/FileSaver.js/blob/master/FileSaver.js *//* */
/* */
/*     var saveAs = saveAs*/
/*             // IE 10+ (native saveAs)*/
/*             || (typeof navigator !== "undefined" &&*/
/*                     navigator.msSaveOrOpenBlob && navigator.msSaveOrOpenBlob.bind(navigator))*/
/*             // Everyone else*/
/*             || (function (view) {*/
/*                 "use strict";*/
/*                 // IE <10 is explicitly unsupported*/
/*                 if (typeof navigator !== "undefined" &&*/
/*                         /MSIE [1-9]\./.test(navigator.userAgent)) {*/
/*                     return;*/
/*                 }*/
/*                 var*/
/*                         doc = view.document*/
/*                         // only get URL when necessary in case BlobBuilder.js hasn't overridden it yet*/
/*                         , get_URL = function () {*/
/*                             return view.URL || view.webkitURL || view;*/
/*                         }*/
/*                 , URL = view.URL || view.webkitURL || view*/
/*                         , save_link = doc.createElementNS("http://www.w3.org/1999/xhtml", "a")*/
/*                         , can_use_save_link = !view.externalHost && "download" in save_link*/
/*                         , click = function (node) {*/
/*                             var event = doc.createEvent("MouseEvents");*/
/*                             event.initMouseEvent(*/
/*                                     "click", true, false, view, 0, 0, 0, 0, 0*/
/*                                     , false, false, false, false, 0, null*/
/*                                     );*/
/*                             node.dispatchEvent(event);*/
/*                         }*/
/*                 , webkit_req_fs = view.webkitRequestFileSystem*/
/*                         , req_fs = view.requestFileSystem || webkit_req_fs || view.mozRequestFileSystem*/
/*                         , throw_outside = function (ex) {*/
/*                             (view.setImmediate || view.setTimeout)(function () {*/
/*                                 throw ex;*/
/*                             }, 0);*/
/*                         }*/
/*                 , force_saveable_type = "application/octet-stream"*/
/*                         , fs_min_size = 0*/
/*                         , deletion_queue = []*/
/*                         , process_deletion_queue = function () {*/
/*                             var i = deletion_queue.length;*/
/*                             while (i--) {*/
/*                                 var file = deletion_queue[i];*/
/*                                 if (typeof file === "string") { // file is an object URL*/
/*                                     URL.revokeObjectURL(file);*/
/*                                 } else { // file is a File*/
/*                                     file.remove();*/
/*                                 }*/
/*                             }*/
/*                             deletion_queue.length = 0; // clear queue*/
/*                         }*/
/*                 , dispatch = function (filesaver, event_types, event) {*/
/*                     event_types = [].concat(event_types);*/
/*                     var i = event_types.length;*/
/*                     while (i--) {*/
/*                         var listener = filesaver["on" + event_types[i]];*/
/*                         if (typeof listener === "function") {*/
/*                             try {*/
/*                                 listener.call(filesaver, event || filesaver);*/
/*                             } catch (ex) {*/
/*                                 throw_outside(ex);*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                 }*/
/*                 , FileSaver = function (blob, name) {*/
/*                     // First try a.download, then web filesystem, then object URLs*/
/*                     var*/
/*                             filesaver = this*/
/*                             , type = blob.type*/
/*                             , blob_changed = false*/
/*                             , object_url*/
/*                             , target_view*/
/*                             , get_object_url = function () {*/
/*                                 var object_url = get_URL().createObjectURL(blob);*/
/*                                 deletion_queue.push(object_url);*/
/*                                 return object_url;*/
/*                             }*/
/*                     , dispatch_all = function () {*/
/*                         dispatch(filesaver, "writestart progress write writeend".split(" "));*/
/*                     }*/
/*                     // on any filesys errors revert to saving with object URLs*/
/*                     , fs_error = function () {*/
/*                         // don't create more object URLs than needed*/
/*                         if (blob_changed || !object_url) {*/
/*                             object_url = get_object_url(blob);*/
/*                         }*/
/*                         if (target_view) {*/
/*                             target_view.location.href = object_url;*/
/*                         } else {*/
/*                             window.open(object_url, "_blank");*/
/*                         }*/
/*                         filesaver.readyState = filesaver.DONE;*/
/*                         dispatch_all();*/
/*                     }*/
/*                     , abortable = function (func) {*/
/*                         return function () {*/
/*                             if (filesaver.readyState !== filesaver.DONE) {*/
/*                                 return func.apply(this, arguments);*/
/*                             }*/
/*                         };*/
/*                     }*/
/*                     , create_if_not_found = {create: true, exclusive: false}*/
/*                     , slice*/
/*                             ;*/
/*                     filesaver.readyState = filesaver.INIT;*/
/*                     if (!name) {*/
/*                         name = "download";*/
/*                     }*/
/*                     if (can_use_save_link) {*/
/*                         object_url = get_object_url(blob);*/
/*                         // FF for Android has a nasty garbage collection mechanism*/
/*                         // that turns all objects that are not pure javascript into 'deadObject'*/
/*                         // this means `doc` and `save_link` are unusable and need to be recreated*/
/*                         // `view` is usable though:*/
/*                         doc = view.document;*/
/*                         save_link = doc.createElementNS("http://www.w3.org/1999/xhtml", "a");*/
/*                         save_link.href = object_url;*/
/*                         save_link.download = name;*/
/*                         var event = doc.createEvent("MouseEvents");*/
/*                         event.initMouseEvent(*/
/*                                 "click", true, false, view, 0, 0, 0, 0, 0*/
/*                                 , false, false, false, false, 0, null*/
/*                                 );*/
/*                         save_link.dispatchEvent(event);*/
/*                         filesaver.readyState = filesaver.DONE;*/
/*                         dispatch_all();*/
/*                         return;*/
/*                     }*/
/*                     // Object and web filesystem URLs have a problem saving in Google Chrome when*/
/*                     // viewed in a tab, so I force save with application/octet-stream*/
/*                     // http://code.google.com/p/chromium/issues/detail?id=91158*/
/*                     if (view.chrome && type && type !== force_saveable_type) {*/
/*                         slice = blob.slice || blob.webkitSlice;*/
/*                         blob = slice.call(blob, 0, blob.size, force_saveable_type);*/
/*                         blob_changed = true;*/
/*                     }*/
/*                     // Since I can't be sure that the guessed media type will trigger a download*/
/*                     // in WebKit, I append .download to the filename.*/
/*                     // https://bugs.webkit.org/show_bug.cgi?id=65440*/
/*                     if (webkit_req_fs && name !== "download") {*/
/*                         name += ".download";*/
/*                     }*/
/*                     if (type === force_saveable_type || webkit_req_fs) {*/
/*                         target_view = view;*/
/*                     }*/
/*                     if (!req_fs) {*/
/*                         fs_error();*/
/*                         return;*/
/*                     }*/
/*                     fs_min_size += blob.size;*/
/*                     req_fs(view.TEMPORARY, fs_min_size, abortable(function (fs) {*/
/*                         fs.root.getDirectory("saved", create_if_not_found, abortable(function (dir) {*/
/*                             var save = function () {*/
/*                                 dir.getFile(name, create_if_not_found, abortable(function (file) {*/
/*                                     file.createWriter(abortable(function (writer) {*/
/*                                         writer.onwriteend = function (event) {*/
/*                                             target_view.location.href = file.toURL();*/
/*                                             deletion_queue.push(file);*/
/*                                             filesaver.readyState = filesaver.DONE;*/
/*                                             dispatch(filesaver, "writeend", event);*/
/*                                         };*/
/*                                         writer.onerror = function () {*/
/*                                             var error = writer.error;*/
/*                                             if (error.code !== error.ABORT_ERR) {*/
/*                                                 fs_error();*/
/*                                             }*/
/*                                         };*/
/*                                         "writestart progress write abort".split(" ").forEach(function (event) {*/
/*                                             writer["on" + event] = filesaver["on" + event];*/
/*                                         });*/
/*                                         writer.write(blob);*/
/*                                         filesaver.abort = function () {*/
/*                                             writer.abort();*/
/*                                             filesaver.readyState = filesaver.DONE;*/
/*                                         };*/
/*                                         filesaver.readyState = filesaver.WRITING;*/
/*                                     }), fs_error);*/
/*                                 }), fs_error);*/
/*                             };*/
/*                             dir.getFile(name, {create: false}, abortable(function (file) {*/
/*                                 // delete file if it already exists*/
/*                                 file.remove();*/
/*                                 save();*/
/*                             }), abortable(function (ex) {*/
/*                                 if (ex.code === ex.NOT_FOUND_ERR) {*/
/*                                     save();*/
/*                                 } else {*/
/*                                     fs_error();*/
/*                                 }*/
/*                             }));*/
/*                         }), fs_error);*/
/*                     }), fs_error);*/
/*                 }*/
/*                 , FS_proto = FileSaver.prototype*/
/*                         , saveAs = function (blob, name) {*/
/*                             return new FileSaver(blob, name);*/
/*                         }*/
/*                 ;*/
/*                 FS_proto.abort = function () {*/
/*                     var filesaver = this;*/
/*                     filesaver.readyState = filesaver.DONE;*/
/*                     dispatch(filesaver, "abort");*/
/*                 };*/
/*                 FS_proto.readyState = FS_proto.INIT = 0;*/
/*                 FS_proto.WRITING = 1;*/
/*                 FS_proto.DONE = 2;*/
/* */
/*                 FS_proto.error =*/
/*                         FS_proto.onwritestart =*/
/*                         FS_proto.onprogress =*/
/*                         FS_proto.onwrite =*/
/*                         FS_proto.onabort =*/
/*                         FS_proto.onerror =*/
/*                         FS_proto.onwriteend =*/
/*                         null;*/
/* */
/*                 view.addEventListener("unload", process_deletion_queue, false);*/
/*                 saveAs.unload = function () {*/
/*                     process_deletion_queue();*/
/*                     view.removeEventListener("unload", process_deletion_queue, false);*/
/*                 };*/
/*                 return saveAs;*/
/*             }(*/
/*                     typeof self !== "undefined" && self*/
/*                     || typeof window !== "undefined" && window*/
/*                     || this.content*/
/*                     ));*/
/* // `self` is undefined in Firefox for Android content script context*/
/* // while `this` is nsIContentFrameMessageManager*/
/* // with an attribute `content` that corresponds to the window*/
/* */
/*     if (typeof module !== "undefined" && module !== null) {*/
/*         module.exports = saveAs;*/
/*     } else if ((typeof define !== "undefined" && define !== null) && (define.amd != null)) {*/
/*         define([], function () {*/
/*             return saveAs;*/
/*         });*/
/*     }*/
/* */
/* </script>*/
/* <script>if (typeof jQuery !== "undefined" && typeof saveAs !== "undefined") {*/
/*         (function ($) {*/
/*             $.fn.wordExport = function (fileName) {*/
/*                 fileName = typeof fileName !== 'undefined' ? fileName : "FTT évenements";*/
/*                 var static = {*/
/*                     mhtml: {*/
/*                         top: "Mime-Version: 1.0\nContent-Base: " + location.href + "\nContent-Type: Multipart/related; boundary=\"NEXT.ITEM-BOUNDARY\";type=\"text/html\"\n\n--NEXT.ITEM-BOUNDARY\nContent-Type: text/html; charset=\"utf-8\"\nContent-Location: " + location.href + "\n\n<!DOCTYPE html>\n<html>\n_html_</html>",*/
/*                         head: "<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n<style>\n_styles_\n</style>\n</head>\n",*/
/*                         body: "<body>_body_</body>"*/
/*                     }*/
/*                 };*/
/*                 var options = {*/
/*                     maxWidth: 624*/
/*                 };*/
/*                 // Clone selected element before manipulating it*/
/*                 var markup = $(this).clone();*/
/* */
/*                 // Remove hidden elements from the output*/
/*                 markup.each(function () {*/
/*                     var self = $(this);*/
/*                     if (self.is(':hidden'))*/
/*                         self.remove();*/
/*                 });*/
/* */
/*                 // Embed all images using Data URLs*/
/*                 var images = Array();*/
/*                 var img = markup.find('img');*/
/*                 for (var i = 0; i < img.length; i++) {*/
/*                     // Calculate dimensions of output image*/
/*                     var w = Math.min(img[i].width, options.maxWidth);*/
/*                     var h = img[i].height * (w / img[i].width);*/
/*                     // Create canvas for converting image to data URL*/
/*                     $('<canvas>').attr("id", "jQuery-Word-export_img_" + i).width(w).height(h).insertAfter(img[i]);*/
/*                     var canvas = document.getElementById("jQuery-Word-export_img_" + i);*/
/*                     canvas.width = w;*/
/*                     canvas.height = h;*/
/*                     // Draw image to canvas*/
/*                     var context = canvas.getContext('2d');*/
/*                     context.drawImage(img[i], 0, 0, w, h);*/
/*                     // Get data URL encoding of image*/
/*                     var uri = canvas.toDataURL();*/
/*                     $(img[i]).attr("src", img[i].src);*/
/*                     img[i].width = w;*/
/*                     img[i].height = h;*/
/*                     // Save encoded image to array*/
/*                     images[i] = {*/
/*                         type: uri.substring(uri.indexOf(":") + 1, uri.indexOf(";")),*/
/*                         encoding: uri.substring(uri.indexOf(";") + 1, uri.indexOf(",")),*/
/*                         location: $(img[i]).attr("src"),*/
/*                         data: uri.substring(uri.indexOf(",") + 1)*/
/*                     };*/
/*                     // Remove canvas now that we no longer need it*/
/*                     canvas.parentNode.removeChild(canvas);*/
/*                 }*/
/* */
/*                 // Prepare bottom of mhtml file with image data*/
/*                 var mhtmlBottom = "\n";*/
/*                 for (var i = 0; i < images.length; i++) {*/
/*                     mhtmlBottom += "--NEXT.ITEM-BOUNDARY\n";*/
/*                     mhtmlBottom += "Content-Location: " + images[i].contentLocation + "\n";*/
/*                     mhtmlBottom += "Content-Type: " + images[i].contentType + "\n";*/
/*                     mhtmlBottom += "Content-Transfer-Encoding: " + images[i].contentEncoding + "\n\n";*/
/*                     mhtmlBottom += images[i].contentData + "\n\n";*/
/*                 }*/
/*                 mhtmlBottom += "--NEXT.ITEM-BOUNDARY--";*/
/* */
/*                 //TODO: load css from included stylesheet*/
/*                 var styles = "";*/
/* */
/*                 // Aggregate parts of the file together */
/*                 var fileContent = static.mhtml.top.replace("_html_", static.mhtml.head.replace("_styles_", styles) + static.mhtml.body.replace("_body_", markup.html())) + mhtmlBottom;*/
/* */
/*                 // Create a Blob with the file contents*/
/*                 var blob = new Blob([fileContent], {*/
/*                     type: "application/msword;charset=utf-8"*/
/*                 });*/
/*                 saveAs(blob, fileName + ".doc");*/
/*             };*/
/*         })(jQuery);*/
/*     } else {*/
/*         if (typeof jQuery === "undefined") {*/
/*             console.error("jQuery Word Export: missing dependency (jQuery)");*/
/*         }*/
/*         if (typeof saveAs === "undefined") {*/
/*             console.error("jQuery Word Export: missing dependency (FileSaver.js)");*/
/*         }*/
/*         ;*/
/*     }*/
/* </script>*/
/* */
/* */
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>*/
/* </head>*/
/* */
/* */
/* */
/* */
/* <script>$(document).ready(function () {*/
/*        $("#btnExport").click(function (e) {*/
/*            e.preventDefault();*/
/* */
/*            //getting data from our table*/
/*            var data_type = 'data:application/vnd.ms-excel';*/
/*            var table_div = document.getElementById('table_wrapper');*/
/*            var table_html = table_div.outerHTML.replace(/ /g, '%20');*/
/* */
/*            var a = document.createElement('a');*/
/*            a.href = data_type + ', ' + table_html;*/
/*            a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';*/
/*            a.click();*/
/*        });*/
/*    });</script>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* <div id="jquery-script-menu">*/
/*     <div class="jquery-script-center">*/
/* */
/*         <div class="jquery-script-ads"><script type="text/javascript"><!--*/
/*         google_ad_client = "ca-pub-2783044520727903";*/
/*             /* jQuery_demo *//* */
/*             google_ad_slot = "2780937993";*/
/*             google_ad_width = 728;*/
/*             google_ad_height = 90;*/
/*         //-->*/
/*             </script>*/
/*             <script type="text/javascript"*/
/*                     src="http://pagead2.googlesyndication.com/pagead/show_ads.js">*/
/*             </script></div>*/
/*         <div class="jquery-script-clear"></div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/* */
/*     var _gaq = _gaq || [];*/
/*     _gaq.push(['_setAccount', 'UA-36251023-1']);*/
/*     _gaq.push(['_setDomainName', 'jqueryscript.net']);*/
/*     _gaq.push(['_trackPageview']);*/
/* */
/*     (function () {*/
/*         var ga = document.createElement('script');*/
/*         ga.type = 'text/javascript';*/
/*         ga.async = true;*/
/*         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';*/
/*         var s = document.getElementsByTagName('script')[0];*/
/*         s.parentNode.insertBefore(ga, s);*/
/*     })();*/
/* */
/* </script>*/
/* */
/* */
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> */
/* */
/* <script src="core/export-canvas.js"></script>*/
/* <script>*/
/* $("document").ready(function () {*/
/* */
/* var exampleCanvasID = "myCanvas";*/
/* //var ctx = document.getElementById(exampleCanvasID).getContext("2d");*/
/* //ctx.fillStyle = "rgb(200,0,0)";*/
/* //ctx.fillRect (10, 10, 55, 50);*/
/* //	ctx.fillStyle = "rgba(0, 0, 200, 0.5)";*/
/* //	ctx.fillRect (30, 30, 55, 50);*/
/* */
/* var exportCanvas = new ExportCanvas();*/
/* exportCanvas.loadConfigFile("core/config/config.js");*/
/* exportCanvas.loadLanguageFile("core/language/en.js");*/
/* exportCanvas.setExportQuality(1.0);*/
/* */
/* $("ul#selectDownloadType li a").click(function () {*/
/* */
/*     $("html, body").animate({scrollTop: $(document).height()}, 800);*/
/* */
/*     var getIDofSelectedDownloadType = $(this).attr("id");*/
/*     if (getIDofSelectedDownloadType == "downloadAsPNG") {*/
/* */
/*         exportCanvas.setMimeType("image/png");*/
/* */
/*     } else if (getIDofSelectedDownloadType == "downloadAsJPEG") {*/
/* */
/*         exportCanvas.setMimeType("image/jpeg");*/
/* */
/*     } else if (getIDofSelectedDownloadType == "downloadAsBMP") {*/
/* */
/*         exportCanvas.setMimeType("image/bmp");*/
/* */
/*     } else if (getIDofSelectedDownloadType == "downloadAsGIF") {*/
/* */
/*         exportCanvas.setMimeType("image/gif");*/
/* */
/*     } else if (getIDofSelectedDownloadType == "downloadAsWEBP") {*/
/* */
/*         exportCanvas.setMimeType("image/webp");*/
/* */
/*     } else {*/
/* */
/*         $("section#message").html('<div class="alert alert-danger" role="alert">Export autorisée</div>').show(1000);*/
/* */
/*     }*/
/* */
/*     exportCanvas.export(exampleCanvasID, function () {*/
/* */
/*         $("").html("").css("display", "none");*/
/*         $("").html('<div class="alert.alert-danger" role="alert">' + DOWNLOAD_HAS_STARTED + '</div>').show(1000);*/
/* */
/*     }, function (getLastReport) {*/
/* */
/*         $("").html("").css("display", "none");*/
/*         $("").html('<div class="alert.alert-danger" role="alert">' + getLastReport + '</div>').show(1000);*/
/* */
/*     });*/
/* */
/* });*/
/* */
/* $("a#showTutorial").click(function () {*/
/*     $("html, body").animate({scrollTop: $(document).height()}, 800);*/
/*     $.ajax({*/
/*         url: "example/example.txt",*/
/*         dataType: "text",*/
/*         success: function (data) {*/
/*             $("section#tutorial").css("display", "none");*/
/*             $("section#tutorial").html('<h2>HTML-Einbindung (HEAD)</h2><code>&#x3C;script src=&#x22;PFAD_ZUR_BIBLIOTHEK/core/export-canvas.js&#x22;&#x3E;&#x3C;/script&#x3E;</code><br /><h2>HTML-Einbindung (BODY)</h2><code>&#x3C;canvas id=&#x22;myCanvas&#x22;&#x3E;Ihr Browser unterstützt das Canvas-Objekt nicht!&#x3C;/canvas&#x3E;</code><br /><h2>Javascript-Einbindung</h2><br /><code>' + data + '</code>');*/
/*             $("section#tutorial").slideDown(1000);*/
/*         },*/
/*         error: function () {*/
/*             alert("Konnte die Ajax-Anfrage lokal nicht durchführen! Am Besten mit Firefox öffnen um die Anleitung zu sehen! Das Bibliothek sollte in allen Browsern funktioneren!");*/
/*         }*/
/*     });*/
/* });*/
/* */
/* });*/
/* </script>*/
/* </head>*/
/* <body>*/
/* */
/* </body>*/
/* */
/* <script>*/
/*     MAX_CANVAS_WIDTH_FOR_EXPORT = 1920;*/
/*     MAX_CANVAS_HEIGHT_FOR_EXPORT = 1280;*/
/*     MIN_EXPORT_QUALITY = 0.1;*/
/*     MAX_EXPORT_QUALITY = 1.0;*/
/*     SCRIPT_NAME = "ExportCanvas";*/
/*     FIRST_PARAM_NO_FUNC = "Erster Parameter ist keine Funktion";*/
/*     SECOND_PARAM_NO_FUNC = "Zweiter Parameter ist keine Funktion";*/
/*     NO_MIMETYPE_SUPPORT_FOR = "Dein Browser unterstützt folgenden MimeType nicht";*/
/*     THESE_MIMETYPES_ARE_ALLOWED = "Diese MimeTypes sind erlaubt";*/
/*     DOWNLOAD_HAS_STARTED = "Der Download wurde gestartet!";*/
/*     EXPORT_FILENAME = "mein-mosaik";*/
/*     CANVAS_NOT_EXPORTABLE = "Dieses Canvas-Bild lässt sich nicht exportieren! Bitte überprüfen Sie die Größe des ausgewählten Hauptbildes! Maximale Bildgröße: " + MAX_CANVAS_WIDTH_FOR_EXPORT + " x " + MAX_CANVAS_HEIGHT_FOR_EXPORT;*/
/*     CANVAS_EXPORT_QUALITY_NOT_VALID = "Die Qualitätseinstellung des Exports ist nicht korrekt! Werte von " + MIN_EXPORT_QUALITY + " - " + MAX_EXPORT_QUALITY + " sind erlaubt!";*/
/*     SCRIPT_NAME = "ExportCanvas";*/
/*     FIRST_PARAM_NO_FUNC = "First parameter is not a function";*/
/*     SECOND_PARAM_NO_FUNC = "Second parameter is not a function";*/
/*     NO_MIMETYPE_SUPPORT_FOR = "Your Browser doesn't support following MimeType";*/
/*     THESE_MIMETYPES_ARE_ALLOWED = "These MimeTypes are allowed";*/
/*     DOWNLOAD_HAS_STARTED = "The download has started!";*/
/*     EXPORT_FILENAME = "my-mosaic";*/
/*     CANVAS_NOT_EXPORTABLE = "This canvas is not exportable! Please check the dimension of your selected main-picture! Max-dimension are: " + MAX_CANVAS_WIDTH_FOR_EXPORT + " x " + MAX_CANVAS_HEIGHT_FOR_EXPORT;*/
/*     CANVAS_EXPORT_QUALITY_NOT_VALID = "The quality-setting of the export is not valid! Only values of " + MIN_EXPORT_QUALITY + " - " + MAX_EXPORT_QUALITY + " are allowed!";*/
/* */
/*     /***/
/*      */
/*      * Author: Onur Sahin*/
/*      * Date: 30. September 2014*/
/*      * Version: 1.6.5*/
/*      */
/*      Versionierungs-Verlauf*/
/*      * 1.0.0 Start-Version (25. Juli 2014)*/
/*      * * * * Bisher kein Vermerk*/
/*      * 1.0.1 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (23. September 2014)*/
/*      * * * * Export ist nun auch über den Internet-Explorer möglich, jedoch nur als HTML-Dokument welches das Canvas-Element beinhaltet (Technisch bisher keine andere Möglichkeit)*/
/*      * 1.0.2 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (24. September 2014)*/
/*      * * * * Die Browserspezifische WhiteList bezüglich der MimeTypes wurde hinzugefügt (Infos siehe hier: bit.ly/1uWDqIj)*/
/*      * 1.1.2 Erhöhung der Nebenversionsnummer um +1 (Funktionelle Erweiterung) (24. September 2014)*/
/*      * * * * Es ist jetzt möglich Sprachdateien für die ExportCanvas-Bibliothek zu erstellen*/
/*      * 1.1.3 Erhöhung der Revisionsnummer um +1 (Fehlerbehebung) (26. September 2014)*/
/*      * * * * Die Methode "initBrowserSpecificMimeTypeWhiteList" wurde gegen die Methode "getBrowserSpecificMimeTypeWhiteList" ausgetauscht um */
/*      * * * * Zugriffe außerhalb ebenfalls zu ermöglichen. Vorher wurde die Browser-spezifische MimeType-Liste bei der export-Methode initialisiert, */
/*      * * * * jedoch waren diese Informationen bei einem Produktiveinsatz vorher schon notwendig*/
/*      * 1.5.3 Erhöhung der Nebenversionsnummer um +4 (Funktionelle Erweiterung) (27. September 2014)*/
/*      * * * * Die Methode "isCanvasExportable" wurde hinzugefügt*/
/*      * * * * Die Konstante CANVAS_NOT_EXPORTABLE, CANVAS_EXPORT_QUALITY_NOT_VALID  wurde in die Sprachdateien mitübernommen*/
/*      * * * * Es wurde eine config.js für die Bibliothek hinzugefügt welches erstmalig die Konstanten MAX_CANVAS_WIDTH_FOR_EXPORT, MAX_CANVAS_HEIGHT_FOR_EXPORT, MIN_EXPORT_QUALITY, MAX_EXPORT_QUALITY beinhalten*/
/*      * * * * Die Methode "setExportQuality" wurde hinzugefügt und deren Überprüfung*/
/*      * 1.6.3 Erhöhung der Nebenversionsnummer um +1 (Funktionelle Erweiterung) (28. September 2014)*/
/*      * * * * Die Methode "isImgExportable" wurde hinzugefügt*/
/*      * 1.6.5 Erhöhung der Revisionsnummer um +2 (Fehlerbehebung) (30. September 2014)*/
/*      * * * * Safari unterstützt nicht das HTML5-Download-Attribut, Alternative im Form eines Octet-Stream implementiert (siehe export-Methode)*/
/*      * * * * Erzeugter Download-Link welches die Canvas-Daten enthält, wird nachdem Download direkt wieder gelöscht um DOM nicht zu belasten "link.parentNode.removeChild(link)"*/
/*      */
/*      *//* */
/* */
/*     function ExportCanvas() {*/
/* */
/*         // Eigenschaften bezüglich des Canvas-Exports*/
/*         var canvasToExport;*/
/*         var canvasDataURL;*/
/*         var lastReport;*/
/*         var mimeType = "image/png";*/
/*         var mimeTypeForImageDownload = "image/octet-stream";*/
/*         var mimeTypeWhiteList = new Array("image/png", "image/jpeg");*/
/*         var exportQuality = 1.0;*/
/* */
/*         // Browserspezifische Eigenschaften*/
/*         // Für weitere Browser-Ermittlungen siehe hier: bit.ly/1pqTR9m*/
/*         var isIE = false || !!document.documentMode;*/
/*         var isOpera = !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;*/
/*         var isFirefox = typeof InstallTrigger !== 'undefined';*/
/*         var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;*/
/*         var isChrome = !!window.chrome && !isOpera;*/
/*         var ieSaveAsDialogFileName = "my-canvas";*/
/* */
/*         // Überprüft ob ein Canvas-Element exportierbar ist*/
/*         this.isCanvasExportable = function (canvasID) {*/
/*             var canvasContext = document.getElementById(canvasID).getContext("2d");*/
/*             if (canvasContext.canvas.width > MAX_CANVAS_WIDTH_FOR_EXPORT || canvasContext.canvas.height > MAX_CANVAS_HEIGHT_FOR_EXPORT)*/
/*                 throw SCRIPT_NAME + ": " + CANVAS_NOT_EXPORTABLE;*/
/*         }*/
/* */
/*         // Überprüft ob ein IMG-Element exportierbar ist*/
/*         this.isImgExportable = function (imgID) {*/
/*             var imageElement = document.getElementById(imgID);*/
/*             if (imageElement.naturalWidth > MAX_CANVAS_WIDTH_FOR_EXPORT || imageElement.naturalHeight > MAX_CANVAS_HEIGHT_FOR_EXPORT)*/
/*                 throw SCRIPT_NAME + ": " + CANVAS_NOT_EXPORTABLE;*/
/*         }*/
/* */
/*         // Setze die Qualitätsstufe für den Export fest*/
/*         this.setExportQuality = function (getExportQuality) {*/
/*             exportQuality = getExportQuality;*/
/*         }*/
/* */
/*         // Hole die Dateiendung der Mimetypes*/
/*         this.getExtensionOfMimeType = function (getMimeType) {*/
/*             var extensionArr = getMimeType.split("/");*/
/*             var extension = extensionArr[extensionArr.length - 1];*/
/*             return extension;*/
/*         }*/
/* */
/*         // Hole die browserspezifischen Whitelist-Angaben bezüglich der MimeTypes*/
/*         // Informationen welche WhiteList man für welchen Browser setzt findet man hier: bit.ly/1uWDqIj*/
/*         this.getBrowserSpecificMimeTypeWhiteList = function () {*/
/*             if (isFirefox)*/
/*                 return new Array("image/png", "image/jpeg", "image/bmp");*/
/*             if (isOpera || isChrome)*/
/*                 return new Array("image/png", "image/jpeg", "image/webp");*/
/*             if (isSafari)*/
/*                 return new Array("image/png", "image/jpeg", "image/gif");*/
/*             if (isIE)*/
/*                 return new Array("image/png", "image/jpeg");*/
/*         }*/
/* */
/*         // Gebe WhiteList als Array zurück*/
/*         this.getMimeTypeWhiteList = function () {*/
/*             return mimeTypeWhiteList;*/
/*         }*/
/* */
/*         // Überprüfung der Whitelist bezüglich der MimeTypes*/
/*         this.isMimeTypeValid = function () {*/
/*             for (var i = 0; i < mimeTypeWhiteList.length; i++)*/
/*                 if (mimeTypeWhiteList[i] == mimeType)*/
/*                     return true;*/
/*             return false;*/
/*         }*/
/* */
/*         // Lädt JS-Dateien in den Head-Bereich*/
/*         this.loadJS = function (getPathOfLangFile) {*/
/*             var script = document.createElement('script');*/
/*             script.src = getPathOfLangFile;*/
/*             document.getElementsByTagName("head")[0].appendChild(script);*/
/*         }*/
/* */
/*         // Lädt die Sprachdatei*/
/*         this.loadLanguageFile = function (getPathOfLangFile) {*/
/*             this.loadJS(getPathOfLangFile);*/
/*         }*/
/* */
/*         // Lad die Configdatei*/
/*         this.loadConfigFile = function (getPathOfLangFile) {*/
/*             this.loadJS(getPathOfLangFile);*/
/*         }*/
/* */
/*         // Die Methode welches den Export des Canvas-Objektes durchführt*/
/*         this.export = function (getCanvasID, successCallback, errorCallback) {*/
/* */
/*             try {*/
/* */
/*                 // Falls unser Canvas nicht exportiert werden kann wird eine Exception geworden*/
/*                 this.isCanvasExportable(getCanvasID);*/
/* */
/*                 // Überprüfe ob die Qualitätsstufe des Exports gültig ist*/
/*                 if (!(exportQuality >= MIN_EXPORT_QUALITY && exportQuality <= MAX_EXPORT_QUALITY))*/
/*                     throw SCRIPT_NAME + ": " + CANVAS_EXPORT_QUALITY_NOT_VALID;*/
/* */
/*                 // Setze die browser-spezifische Whitelist bezüglich der MimeTypes*/
/*                 mimeTypeWhiteList = this.getBrowserSpecificMimeTypeWhiteList();*/
/* */
/*                 // Nur gültige Mimetypes verarbeiten*/
/*                 if (this.isMimeTypeValid()) {*/
/* */
/*                     canvasToExport = document.getElementById(getCanvasID);*/
/*                     canvasDataURL = canvasToExport.toDataURL(mimeType, exportQuality);*/
/* */
/*                     /**/
/*                      Da der "image/octet-stream" für die base64-erzeugte URL ( & das HTML5-Download-Attribut) beim IE keine Wirkung hat (sprich kein Download-Dialog erzeugt wird)*/
/*                      musste eine Alternative her. Die bisher einzig bekannte Alternative für den IE war der Befehl "execCommand" welches*/
/*                      aber nur ein HTML-Dokument speichern lässt. In diesem Dokument wird die base64-URL in einen img-Tag reingeladen um es beim*/
/*                      Abspeichern des HTML-Dokumntes zu behalten. MimeTypes werden mit in das zu speichernde HTML-Dokument mitübernommen.*/
/*                      *//* */
/*                     if (isIE) {*/
/*                         // IE-Alternative welches das Canvas in ein HTML-Dokument speichert*/
/*                         var win = window.open();*/
/*                         win.document.write("<img src='" + canvasDataURL + "'></img>");*/
/*                         win.document.execCommand("saveAs", true, ieSaveAsDialogFileName);*/
/*                         win.document.close();*/
/*                         win.close();*/
/*                     } else if (isSafari) {*/
/*                         // Safari unterstützt kein HTML5-Download-Attribut */
/*                         top.location.href = canvasDataURL.replace(mimeType, mimeTypeForImageDownload);*/
/*                     } else {*/
/*                         // Für alle anderen, modernen Browser sollte die Simulation des HTML5-Download-Attributes funktionieren (sprich der Klick darauf)*/
/*                         var link = document.createElement("a");*/
/*                         document.getElementsByTagName("body")[0].appendChild(link);*/
/*                         link.download = EXPORT_FILENAME + "." + this.getExtensionOfMimeType(mimeType);*/
/*                         link.href = canvasDataURL;*/
/*                         link.click();*/
/*                         link.parentNode.removeChild(link);*/
/*                     }*/
/* */
/*                     if (successCallback && typeof (successCallback) === "function") {*/
/*                         successCallback();*/
/*                     } else {*/
/*                         console.log(SCRIPT_NAME + ": " + FIRST_PARAM_NO_FUNC);*/
/*                     }*/
/* */
/*                 } else {*/
/*                     throw SCRIPT_NAME + ": " + NO_MIMETYPE_SUPPORT_FOR + ": " + this.getMimeType() + ". " + THESE_MIMETYPES_ARE_ALLOWED + ": " + this.getMimeTypeWhiteList().join(",");*/
/*                 }*/
/* */
/*             } catch (Exception) {*/
/* */
/*                 // Fange zuerst das was wir "geworfen" haben und danach können wir auf die eigentliche Exception aus dem try-Block abfangen "Exception.message"*/
/*                 if (Exception != "undefined") {*/
/*                     this.setReport(Exception);*/
/*                 } else {*/
/*                     this.setReport(Exception.message);*/
/*                 }*/
/* */
/*                 if (errorCallback && typeof (errorCallback) === "function") {*/
/*                     errorCallback(lastReport);*/
/*                 } else {*/
/*                     console.log(SCRIPT_NAME + ": " + SECOND_PARAM_NO_FUNC);*/
/*                 }*/
/* */
/*             }*/
/* */
/*         }*/
/* */
/*         // Report setzen*/
/*         this.setReport = function (getMessage) {*/
/*             lastReport = getMessage;*/
/*         }*/
/* */
/*         // Report abholen*/
/*         this.setMimeType = function (getMimeType) {*/
/*             mimeType = getMimeType;*/
/*         }*/
/* */
/*         // Aktuell ausgewählten MimeType holen*/
/*         this.getMimeType = function () {*/
/*             return mimeType;*/
/*         }*/
/* */
/*     }*/
/* </script>*/
/* */
/* <br/><br/><br/><br/><br/><br/>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
