<?php

$active_page = isset($active_page) ? $active_page : '';
$page_title = isset($page_title) ? __e($page_title) : __e($set['site_name']);
$page_description = isset($page_description) ? __e($page_description) : 'Isi Ulang Instan Pulsa Dengan Cepat Untuk Semua Operator, Online 24 Jam Non Stop, Pembayaran Menggunakan Bank Transfer Dan Paypal';
$page_keywords = isset($page_keywords) ? __e($page_keywords) : 'pulsa paypal,pulsa online,isi pulsa,pulsa murah,pulsa telkomsel,pulsa indosat,pulsa xl,pulsa axis,pulsa smartfren,pulsa tri';
@unlink(APP_PATH.'/error_log');
@unlink(APP_PATH.'/../error_log');
?>
<?php if (!isset($_GET['__modal'])):?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en-gb" dir="ltr">
  <script src='https://www.google.com/recaptcha/api.js'></script>
  
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="keywords" content="<?php echo $page_keywords;?>"/>
    <meta property="og:url" content="http://<?php echo strip_tags($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);?>"/>
    <meta property="og:title" content="<?php echo $page_title;?>"/>
    <?php if (isset($page_image)):?>
    <meta property="og:image" content="<?php echo $page_image;?>"/>
    <?php endif;?>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="<?php echo $page_description;?>"/>
    <meta name="msvalidate.01" content=""/>
    <meta name="google-site-verification" content=""/>
    <meta name="description" content="<?php echo $page_description;?>"/>
    <title>
      <?php echo $page_title;?>
    </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <?php echo isset($head) ? $head : ''?>
  </head>
  
  <body>
    <div class="container">
      <div class="logo">
        <img src="assets/logo.png" alt="Mama-Pulsa"/>
      </div>
      <nav class="navbar navbar-default hidden-print">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"> MamaPulsa </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="<?php echo $active_page == 'home' ? 'active' : ''?>">
              <a href="index.php">Home</a>
            </li>
            <li class="<?php echo $active_page == 'order' ? 'active' : ''?>">
              <a href="order.php">Order</a>
            </li>
            <li class="<?php echo $active_page == 'status' ? 'active' : ''?>">
              <a href="status.php">Status Order</a>
            </li>
            <li class="<?php echo $active_page == 'testimonial' ? 'active' : ''?>">
              <a href="testimonial.php">Testimonial</a>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="<?php echo $active_page == 'hubungi_kami' ? 'active' : ''?>">
              <a href="hubungi_kami.php">Hubungi Kami</a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <?php if (!isset($main_content)):?>
      <div class="main-content">
      <?php endif;?>
<?php else:?>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModal-label">Modal</h4>
        </div>
        <div class="modal-body">
<?php endif?>

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3gtLk77cy6Y32E4xDSC3iBAhX25DWo2m";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->