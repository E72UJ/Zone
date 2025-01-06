

<html>
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>" />
        <link rel="alternate" type="application/atom+xml" href="/atom.xml" title="Atom feed">
        <link rel="shortcut icon" href="https://www.yinwang.org/images/Yc.jpg">
        <!-- 引入 highlight.js 的样式文件 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/dark.min.css">
        <!-- 引入 highlight.js 的脚本文件 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
        <title><?php $this->title() ?></title>
    </head>

    <body>
        <script>
            if (/mobile/i.test(navigator.userAgent) || /android/i.test(navigator.userAgent))
            {
               document.body.classList.add('mobile');
            }
            // 初始化代码高亮
            hljs.highlightAll();
        </script>

        <div class="inner">
            <h2><?php $this->title() ?></h2>
            <p>
            <?php $this->content(); ?>
        </p>
        </div>
    </body>

</html>
