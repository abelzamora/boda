<?php
session_start();
if ($_SESSION ["logeado"] != "SI") {
    $error = '<p class="error">Acceso sin codigo no permitido</p>';
    include('login.php');
    exit ();
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head profile="http://www.w3.org/1999/xhtml/vocab">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon"
          href="http://sarahlovesbradley.com/d/sites/default/files/favicon.ico"
          type="image/vnd.microsoft.icon"/>
    <meta content="width=720; maximum-scale=1.0;" name="viewport"/>
    <meta content="RSVP" about="/d/rsvp" property="dc:title"/>
    <link rel="shortlink" href="/d/node/1"/>
    <meta name="Generator" content="Drupal 7 (http://drupal.org)"/>
    <link rel="canonical" href="/d/rsvp"/>
    <title>RSVP | rsvp</title>
    <style type="text/css" media="all">
        @import url("http://sarahlovesbradley.com/d/modules/system/system.base.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/system/system.menus.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/system/system.messages.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/system/system.theme.css?mowwhq");
    </style>
    <style type="text/css" media="all">
        @import url("http://sarahlovesbradley.com/d/modules/comment/comment.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/field/theme/field.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/node/node.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/search/search.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/modules/user/user.css?mowwhq");
    </style>
    <style type="text/css" media="all">
        @import url("http://sarahlovesbradley.com/d/sites/all/modules/webform/css/webform.css?mowwhq");
    </style>
    <style type="text/css" media="screen">
        @import url("http://sarahlovesbradley.com/d/sites/all/themes/rsvp/reset.css?mowwhq");
        @import url("http://sarahlovesbradley.com/d/sites/all/themes/rsvp/style.css?mowwhq");
    </style>

    <!--[if lte IE 8]>
    <link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie.css?mowwhq"
          media="all"/>
    <![endif]-->

    <!--[if lte IE 7]>
    <link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie7.css?mowwhq"
          media="all"/>
    <![endif]-->

    <!--[if lte IE 6]>
    <link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie6.css?mowwhq"
          media="all"/>
    <![endif]-->
    <script type="text/javascript"
            src="http://sarahlovesbradley.com/d/misc/jquery.js?v=1.4.4"></script>
    <script type="text/javascript"
            src="http://sarahlovesbradley.com/d/misc/jquery.once.js?v=1.2"></script>
    <script type="text/javascript"
            src="http://sarahlovesbradley.com/d/misc/drupal.js?mowwhq"></script>
    <script type="text/javascript"
            src="http://sarahlovesbradley.com/d/misc/form.js?v=7.21"></script>
    <script type="text/javascript"
            src="http://sarahlovesbradley.com/d/sites/all/modules/webform/js/webform.js?mowwhq"></script>
    <script type="text/javascript">
        <!--//-->
        <![CDATA[//><!--
        jQuery.extend(Drupal.settings, {
            "basePath": "\/d\/",
            "pathPrefix": "",
            "ajaxPageState": {
                "theme": "rsvp",
                "theme_token": "OyN5smuhuWheaSxA3yK84SzI5w7zUZtxK9EmZHZdyHg",
                "js": {
                    "misc\/jquery.js": 1,
                    "misc\/jquery.once.js": 1,
                    "misc\/drupal.js": 1,
                    "misc\/form.js": 1,
                    "sites\/all\/modules\/webform\/js\/webform.js": 1
                },
                "css": {
                    "modules\/system\/system.base.css": 1,
                    "modules\/system\/system.menus.css": 1,
                    "modules\/system\/system.messages.css": 1,
                    "modules\/system\/system.theme.css": 1,
                    "modules\/comment\/comment.css": 1,
                    "modules\/field\/theme\/field.css": 1,
                    "modules\/node\/node.css": 1,
                    "modules\/search\/search.css": 1,
                    "modules\/user\/user.css": 1,
                    "sites\/all\/modules\/webform\/css\/webform.css": 1,
                    "sites\/all\/themes\/rsvp\/reset.css": 1,
                    "sites\/all\/themes\/rsvp\/style.css": 1,
                    "sites\/all\/themes\/rsvp\/ie.css": 1,
                    "sites\/all\/themes\/rsvp\/ie7.css": 1,
                    "sites\/all\/themes\/rsvp\/ie6.css": 1
                }
            }
        });
        //--><!
        ]]>
    </script>
</head>
<body
    class="html front not-logged-in no-sidebars page-node page-node- page-node-1 node-type-webform" onload="resize();">
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip
        to main content</a>
</div>

<div id="page">


    <div id="content" class="clearfix">
        <div class="element-invisible">
            <a id="main-content"></a>
        </div>


        <div class="region region-content">
            <div id="block-system-main" class="block block-system">


                <div class="content">


                    <div id="node-1" class="node node-webform node-promoted"
                         about="/d/rsvp" typeof="sioc:Item foaf:Document">

                        <div class="content clearfix">
                            <div
                                class="field field-name-body field-type-text-with-summary field-label-hidden">
                                <div class="field-items">
                                    <div class="field-item even" property="content:encoded">
                                        <div class="title">Muchas gracias por tu respuesta!</div>
                                        <div class="sub">Abel y Maria</div>

                                        <div class="form-actions form-wrapper" id="edit-actions"></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php include_once("analyticstracking.php") ?>
<script type="text/javascript">
    function resize() {
        window.resizeTo(500, 250);
        window.focus();
    }
</script>
</html>
