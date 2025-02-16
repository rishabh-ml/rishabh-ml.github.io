<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : ''; ?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) ? $meta_keywords : ''; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : ''; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : ''; ?>">
    <meta property="og:image" content="<?php echo isset($og_image) ? $og_image : ''; ?>">
    <meta property="og:url" content="<?php echo isset($og_url) ? $og_url : ''; ?>">
    <meta property="og:type" content="website">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : ''; ?>">
    <meta name="twitter:description" content="<?php echo isset($meta_description) ? $meta_description : ''; ?>">
    <meta name="twitter:image" content="<?php echo isset($twitter_image) ? $twitter_image : ''; ?>">

    <!-- Title -->
    <title><?php echo isset($page_title) ? $page_title : 'Syed Rizvi Technical Services'; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">

    <!-- Global and Page-Specific CSS -->
    <link rel="stylesheet" href="assets/styles.css">
    <?php
    // Optionally include page-specific CSS if required, for example:
    if ($active_page == 'home') echo '<link rel="stylesheet" href="assets/index.css">';
    if ($active_page == 'about') echo '<link rel="stylesheet" href="assets/about.css">';
    if ($active_page == 'services') echo '<link rel="stylesheet" href="assets/services.css">';
    if ($active_page == 'projects') echo '<link rel="stylesheet" href="assets/projects.css">';
    if ($active_page == 'contact') echo '<link rel="stylesheet" href="assets/contact.css">';
    if ($active_page == 'ac-work') echo '<link rel="stylesheet" href="assets/ac-work.css">';
    if ($active_page == 'carpentry') echo '<link rel="stylesheet" href="assets/carpentry.css">';
    if ($active_page == 'cleaning') echo '<link rel="stylesheet" href="assets/cleaning.css">';
    if ($active_page == 'false-ceiling') echo '<link rel="stylesheet" href="assets/false-ceiling.css">';
    if ($active_page == 'interior') echo '<link rel="stylesheet" href="assets/interior.css">';
    if ($active_page == 'partition') echo '<link rel="stylesheet" href="assets/partition.css">';
    if ($active_page == 'plumbing') echo '<link rel="stylesheet" href="assets/plumbing.css">';
    if ($active_page == 'rope-access') echo '<link rel="stylesheet" href="assets/rope-access.css">';
    if ($active_page == 'thank-you') echo '<link rel="stylesheet" href="assets/thank-you.css">';
    if ($active_page == 'tiling') echo '<link rel="stylesheet" href="assets/tiling.css">';
    if ($active_page == 'wallpaper') echo '<link rel="stylesheet" href="assets/wallpaper.css">';
    // Add similar conditions for other pages as needed.
    ?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- GSAP Libraries for Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollToPlugin.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/script.js" defer></script>
</head>
<body>

<!-- Scroll to Top Button -->
<button id="scrollToTopBtn"><i class="fas fa-arrow-up"></i></button>

<header>
    <div class="logo">
        <img src="assets/images/logo.png" alt="Syed Rizvi Technical Services Logo" title="Syed Rizvi Technical Services L.L.C">
    </div>
    <nav>
        <div class="menu-icon" id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul id="nav-links">
            <li><a href="index.php" class="<?php echo (isset($active_page) && $active_page == 'home') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo (isset($active_page) && $active_page == 'about') ? 'active' : ''; ?>">About Us</a></li>
            <li><a href="services.php" class="<?php echo (isset($active_page) && $active_page == 'services') ? 'active' : ''; ?>">Services</a></li>
            <li><a href="projects.php" class="<?php echo (isset($active_page) && $active_page == 'projects') ? 'active' : ''; ?>">Projects</a></li>
            <li><a href="contact.php" class="<?php echo (isset($active_page) && $active_page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
        </ul>
    </nav>
</header>
