<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title><?php echo $title ?></title>
  <link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon"/>
  <meta name="description" content="<?php echo isset($description) ? $description : ''; ?>" />
  <meta name="keyword" content="<?php echo isset($keyword) ? $keyword : ''; ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo base_url('assets/js/jPlayer/jplayer.flat.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/simple-line-icons.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/font.css'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/app.css'); ?>" type="text/css" />  

  <!-- Mobile Metas -->
  <meta property="fb:app_id" content="939573566083113"/>
  <meta property="og:title" content="<?php echo isset($title) ? $title : ''; ?>"/>
  <meta property="og:site_name" content="<?php echo base_url(); ?>"/>
  <meta property="og:description" content="<?php echo isset($description) ? $description : ''; ?>" />
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="<?php echo isset($url) ? $url : ''; ?>"/>
  <meta property="og:image" content="<?php echo isset($image) ? $image : base_url("assets/images/m22.jpg"); ?>"/>

    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/ie/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('assets/js/ie/respond.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/ie/excanvas.js');?>"></script>
  <![endif]-->
  <script>
  window.fbAsyncInit = function() {
        FB.init({
          appId      : '939573566083113',
          xfbml      : true,
          version    : 'v2.1'
        });
      };


  (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
  </script>
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
  <!-- App -->
  <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>  
  <script src="<?php echo base_url('assets/js/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.plugin.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jPlayer/jquery.jplayer.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jPlayer/add-on/jplayer.playlist.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jPlayer/demo.js'); ?>"></script>
</head>
<body class="<?php echo isset($class) ? $class : ''; ?>">
<section class="vbox">