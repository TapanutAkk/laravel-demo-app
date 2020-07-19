<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $__env->yieldContent('title'); ?></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet" />
<link href="/css/fonts.css" rel="stylesheet" />
<link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet" />
<?php echo $__env->yieldContent('head'); ?>
</head>
<body>

    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="<?php echo e(Request::path() === '/' ? 'current_page_item' : ''); ?>"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="<?php echo e(Request::path() === 'clients' ? 'current_page_item' : ''); ?>"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <li class="<?php echo e(Request::path() === 'about' ? 'current_page_item' : ''); ?>"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="<?php echo e(Request::path() === 'articles' ? 'current_page_item' : ''); ?>"><a href="/articles" accesskey="4" title="">Articles</a></li>
                    <li class="<?php echo e(Request::path() === 'contact' ? 'current_page_item' : ''); ?>"><a href="#" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <?php echo $__env->yieldContent('header'); ?>

    </div>

    <?php echo $__env->yieldContent('content'); ?>

    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>
<?php /**PATH /Users/tapanut/code/freshproject/resources/views/layout.blade.php ENDPATH**/ ?>