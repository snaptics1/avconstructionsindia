<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $pageTitle; ?> | AV Constructions</title>
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $description; ?>">
    <title></title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link rel="stylesheet" href="assets/css/lightbox.css" />
    <script src="https://kit.fontawesome.com/75891b3d0e.js" crossorigin="anonymous"></script>
</head>
<body>
    

<header>
    <div class="container">
        <div class="page-header-section">
            <nav class='navbar'>
                <div class="logo">
                    <img src="assets/img/logo.svg" alt="Logo">
                    <div class='menu-icon' onclick="openNav()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    
                </div>
                <ul class="overlay nav-menu" id="myNav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <li class='nav-item'>
                            <a href="index.php" class='nav-links'> Home</a>
                        </li>
                        <li class='nav-item'>   
                            <a href="about.php" class='nav-links'> About us</a>
                        </li>
                        
                    
                        <li class='nav-item'>
                            <a href="Projects.php" class='nav-links'> Projects</a>
                        </li>
                        <li class='nav-item'>
                            <a href="contact.php" class='nav-links'> Contact</a>
                        </li>
                        <li class='nav-item'>
                            <a href="blog.php" class='nav-links'> Blogs</a>
                        </li>
                </ul>
                
                

            <div class="mobile">
            <button class="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Shedule A Site Visit
            <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                <path
                clip-rule="evenodd"
                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                fill-rule="evenodd"
                ></path>
            </svg>
            </button>
            </div>
            </nav>
        </div>
    </div>
</header>