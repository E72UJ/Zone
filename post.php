

<html>
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>" />
        <link rel="alternate" type="application/atom+xml" href="/atom.xml" title="Atom feed">
        <link rel="shortcut icon" href="https://www.yinwang.org/images/Yc.jpg">

        <title><?php $this->title() ?></title>
    </head>

    <body>
        <script>
            if (/mobile/i.test(navigator.userAgent) || /android/i.test(navigator.userAgent))
            {
               document.body.classList.add('mobile');
            }
        </script>

        <div class="inner">
            <h2><?php $this->title() ?></h2>
            <p>
            <?php $this->content(); ?>
        </p>
        </div>
    </body>

</html>
