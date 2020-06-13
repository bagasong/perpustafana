<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php bloginfo();?></title>

    <?php wp_head();?>

</head>
<body <?php body_class('test');?>>
<header>
    <div class="container">
    
    <nav class="nav-bar">
    
        <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.jpg" alt="logo" class="nav-logo"></a>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="nav-menu">
            <ul>
                <li><a href="<?php bloginfo('url');?>">Beranda</a></li>
                <li><a href="<?php bloginfo('url');?>/index.php/koleksi">Koleksi</a></li>
            </ul>
        </div>
    
    </nav>

    <!-- <div class="row">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                
        <div class="topnavbar">
            <nav class="navbar navbar-expand-md navbar-light bg-light justify-content-end" style="padding:0rem 0.5rem">
                <a href="<?php bloginfo('url');?>" class="navbar-brand col-6">
                    <img src="<?php bloginfo('template_directory');?>/images/logo.jpg" class="img-fluid logo">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse col-6 justify-content-end" style="padding:0" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="<?php bloginfo('url');?>" class="nav-item nav-link">HomeY</a>
                        <a href="<?php bloginfo('url');?>/index.php/koleksi" class="nav-item nav-link">Koleksi</a>
                        <a href="<?php bloginfo('url');?>/index.php/category/blog/" class="nav-item nav-link">Blog</a>
                        <a href="<?php bloginfo('url');?>/index.php/my-account/" class="nav-item nav-link">Akun</a>
                    </div>
                </div>
            </nav>
        </div>

        </div>

    </div> -->
    </div>
</header>

