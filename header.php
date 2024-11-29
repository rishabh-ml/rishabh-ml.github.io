<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?> | Syed Rizvi Technical Services L.L.C</title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="Syed Rizvi Technical Services L.L.C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo $page_title; ?> | Syed Rizvi Technical Services L.L.C">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?> | Syed Rizvi Technical Services L.L.C">
    <meta name="twitter:description" content="<?php echo $meta_description; ?>">
    <meta name="twitter:image" content="<?php echo $twitter_image; ?>">

    <!-- Favicon -->
    <link rel="icon" href="favicon.ico">

    <!-- CSS Links -->
    <link rel="stylesheet" href="styles.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <!-- Scroll to Top Button -->
    <div id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></div>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Syed Rizvi Technical Services Logo" title="Syed Rizvi Technical Services L.L.C">
        </div>
        <nav>
            <div class="menu-icon" id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul id="nav-links">
                <li><a href="index.php" class="<?php echo ($active_page == 'home') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo ($active_page == 'about') ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="services.php" class="<?php echo ($active_page == 'services') ? 'active' : ''; ?>">Services</a></li>
                <li><a href="projects.php" class="<?php echo ($active_page == 'projects') ? 'active' : ''; ?>">Projects</a></li>
                <li><a href="contact.php" class="<?php echo ($active_page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </header>
