<?php
// $Id: page.tpl.php,v 1.18.2.1 2009/04/30 00:13:31 goba Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
		<?php print $head ?>
    <title><?php print $head_title."This is head title" ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  <style type="text/css">object,embed{visibility:hidden !important;}</style>
   </head>
  <body>

<!--clearsenses-->
<?php $path_to_theme = base_path().path_to_theme(); ?>
<div id="container">
<div id="main">
<div class="logo"><img src="<?php print($path_to_theme); ?>/images/logo.gif" alt="logo"/></div>
<div class="punchwords"><img src="<?php print($path_to_theme); ?>/images/punchwords.jpg" alt="punchwords" width="425" height="152" border="0" /><a href="mailto:hi@clearsenses.com"><img src="<?php print($path_to_theme); ?>/images/email.jpg" alt="email" /></a></div>
</div>

          <div class="content">

<div class="menu">
<a href="<?php print base_path();?>"><img src="<?php print($path_to_theme); ?>/images/home.jpg" alt="home" />
<a href="<?php print base_path(); ?>node/team"><img src="<?php print($path_to_theme); ?>/images/team.jpg" alt="team" /></a>
<a href="<?php print base_path(); ?>node/8"><img src="<?php print($path_to_theme); ?>/images/contact_us.jpg" alt="contact us" /></a></div>
<div class="cholder">
<div class="center">

</div>

<div class="footer"><?php print "All rights are reserved" ?></div>
</div>
<?php print $content ?>


          </div>

  <?php print $closure ?>
</div>
  </body>
</html>
