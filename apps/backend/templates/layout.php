<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!--[if lt IE 7]>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->

<!--[if IE 7]>
<html class="lt-ie9 lt-ie8" lang="en">
<![endif]-->

<!--[if IE 8]>
<html class="lt-ie9" lang="en">
<![endif]-->

  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
  </head>
  <body>
    <?php include_partial('global/header'); ?>
    <?php echo $sf_content ?>
    <?php include_javascripts() ?>
  </body>
</html>
