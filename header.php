<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html>
  <head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap-theme.min.css'); ?>" />
    <!-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
    <link rel="alternate" type="application/atom+xml" href="/atom.xml" title="Atom feed">
    <link rel="shortcut icon" href="https://www.yinwang.org/images/Yc.jpg">

    <title><?php $this->options->title(); ?></title>
  </head>
  　　
  <body>
     <script>
        if (/mobile/i.test(navigator.userAgent) || /android/i.test(navigator.userAgent))
        {
            document.body.classList.add('mobile');
        }
     </script>

    <nav class="navbar navbar-default navbar-fixed-top" style="opacity: .9" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                Furau
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">博客</a></li>
                <li><a href="#">菜单2</a></li>
                <li><a href="#">菜单3</a></li>
            </ul>
        </div>
    </div>
</nav>
    
    
