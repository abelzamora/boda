<?php
session_start();
if($_SESSION["logeado"] != "SI"){ 
	$error = '<p class="error">Acceso sin codigo no permitido</p>';
	include('login.php');
	exit;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://sarahlovesbradley.com/d/sites/default/files/favicon.ico" type="image/vnd.microsoft.icon" />
<meta content="width=720; maximum-scale=1.0;" name="viewport" />
<meta content="RSVP" about="/d/rsvp" property="dc:title" />
<link rel="shortlink" href="/d/node/1" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
<link rel="canonical" href="/d/rsvp" />
  <title>RSVP | rsvp</title>
  <style type="text/css" media="all">@import url("http://sarahlovesbradley.com/d/modules/system/system.base.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/system/system.menus.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/system/system.messages.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/system/system.theme.css?mowwhq");</style>
<style type="text/css" media="all">@import url("http://sarahlovesbradley.com/d/modules/comment/comment.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/field/theme/field.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/node/node.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/search/search.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/modules/user/user.css?mowwhq");</style>
<style type="text/css" media="all">@import url("http://sarahlovesbradley.com/d/sites/all/modules/webform/css/webform.css?mowwhq");</style>
<style type="text/css" media="screen">@import url("http://sarahlovesbradley.com/d/sites/all/themes/rsvp/reset.css?mowwhq");
@import url("http://sarahlovesbradley.com/d/sites/all/themes/rsvp/style.css?mowwhq");</style>

<!--[if lte IE 8]>
<link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie.css?mowwhq" media="all" />
<![endif]-->

<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie7.css?mowwhq" media="all" />
<![endif]-->

<!--[if lte IE 6]>
<link type="text/css" rel="stylesheet" href="http://sarahlovesbradley.com/d/sites/all/themes/rsvp/ie6.css?mowwhq" media="all" />
<![endif]-->
  <script type="text/javascript" src="http://sarahlovesbradley.com/d/misc/jquery.js?v=1.4.4"></script>
<script type="text/javascript" src="http://sarahlovesbradley.com/d/misc/jquery.once.js?v=1.2"></script>
<script type="text/javascript" src="http://sarahlovesbradley.com/d/misc/drupal.js?mowwhq"></script>
<script type="text/javascript" src="http://sarahlovesbradley.com/d/misc/form.js?v=7.21"></script>
<script type="text/javascript" src="http://sarahlovesbradley.com/d/sites/all/modules/webform/js/webform.js?mowwhq"></script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
jQuery.extend(Drupal.settings, {"basePath":"\/d\/","pathPrefix":"","ajaxPageState":{"theme":"rsvp","theme_token":"OyN5smuhuWheaSxA3yK84SzI5w7zUZtxK9EmZHZdyHg","js":{"misc\/jquery.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"misc\/form.js":1,"sites\/all\/modules\/webform\/js\/webform.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/webform\/css\/webform.css":1,"sites\/all\/themes\/rsvp\/reset.css":1,"sites\/all\/themes\/rsvp\/style.css":1,"sites\/all\/themes\/rsvp\/ie.css":1,"sites\/all\/themes\/rsvp\/ie7.css":1,"sites\/all\/themes\/rsvp\/ie6.css":1}}});
//--><!]]>
</script>
</head>
<body onload="resize();" class="html front not-logged-in no-sidebars page-node page-node- page-node-1 node-type-webform" >
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    
  <div id="page">
  

    <div id="content" class="clearfix">
      <div class="element-invisible"><a id="main-content"></a></div>
      
      
        <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    

<div id="node-1" class="node node-webform node-promoted" about="/d/rsvp" typeof="sioc:Item foaf:Document">

  <div class="content clearfix">
    <div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><div class="title">Por favor, responder antes de</div>
<div class="sub">el uno de Julio</div>
</div></div></div><form class="webform-client-form" enctype="multipart/form-data" action="rsvp_email.php" method="post" id="webform-client-form-1" accept-charset="UTF-8"><div><div class="form-item webform-component webform-component-textfield webform-container-inline" id="webform-component-name">
  <label for="edit-submitted-name">Nombre <span class="form-required" title="This field is required.">*</span></label>
 <input type="text" id="name" name="name" value="<?php echo $_SESSION["name"];?>" size="30" maxlength="128" class="form-text required" />
</div>
<div class="form-item webform-component webform-component-email webform-container-inline" id="webform-component-email">
  <label for="edit-submitted-email">Email <span class="form-required" title="This field is required.">*</span></label>
 <input class="email form-text form-email required" type="email" id="email" value="<?php echo $_SESSION["email"];?>" name="email" size="50" />
</div>
 <fieldset class="webform-component-fieldset form-wrapper" id="webform-component-label-entree"><legend><span class="fieldset-legend">Dinos si vas a venir</span></legend><div class="fieldset-wrapper"><div class="form-item webform-component webform-component-radios" id="webform-component-label-entree--entree">
 <div id="edit-submitted-attendance" class="form-radios"><div class="form-item form-type-radio form-item-submitted-attendance">
 <input type="radio" id="voy" name="voy" value="voy" class="form-radio"/>  <label class="option" for="voy">Si, voy a ir </label>
</div>
<div class="form-item form-type-radio form-item-submitted-attendance">
 <input type="radio" id="noVoy" name="noVoy" value="noVoy" class="form-radio" />  <label class="option" for="noVoy">No, no voy a ir </label>

</div>
</div>
</div></div></fieldset>
<fieldset class="webform-component-fieldset form-wrapper" id="webform-component-label-entree"><legend><span class="fieldset-legend">Color del vestido de la mujer?</span></legend><div class="fieldset-wrapper"><div class="form-item webform-component webform-component-radios" id="webform-component-label-entree--entree">
 <input class="email form-text form-email" type="text" id="color" value="" name="color" size="15" />
</div>
</div></fieldset>
<fieldset class="webform-component-fieldset form-wrapper" id="webform-component-label-accommodations"><legend><span class="fieldset-legend">Talla calzado mujer?</span></legend><div class="fieldset-wrapper"><div class="form-item webform-component webform-component-radios" id="webform-component-label-accommodations--accommodations">
	<input class="email form-text form-email" type="text" id="talla" value="" name="talla" size="10" autocomplete="off"/>
</div>
</div></fieldset>
<div class="form-item webform-component webform-component-markup" id="webform-component-bg">
 
</div>
<div class="form-item webform-component webform-component-textarea" id="webform-component-message">
  <label for="edit-submitted-message">&nbsp; </label>
 <div class="form-textarea-wrapper"><textarea id="edit-submitted-message" name="mensaje" cols="10" rows="5" class="form-textarea"></textarea></div>
 <div class="description">Envianos tu mensaje!.</div>
</div>

<div class="form-actions form-wrapper" id="edit-actions"><input type="submit" id="edit-submit" name="op" value="Submit" class="form-submit" /></div></div></form>  </div>


</div>
  </div>
</div>
  </div>
    </div>

  </div>
  </body>
  <script type="text/javascript">
function resize(){
	window.resizeTo(500, 700);
	window.focus();
}
</script>
</html>
