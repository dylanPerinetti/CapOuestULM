<?php
    $title = 'Journal';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'head.php'; ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="" class="dark-theme">
    <!-- page navbar -->
    <?php require 'navbar.php'; ?>
    <!-- end of page navbar -->

    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
            <div class="header-content">
            <h1 class="header-title"><?= $title ?></h1>
            <a  href="https://ffplum.fr/images/pdf/DECOUVRIR_2017_72dpi.pdf" target="_blank">
                <button class="btn btn-theme-color modal-toggle">Discover ULM through the FFPLUM</button>
            </a>
        </div>
    </header>
    <!-- end of page header -->

    <!-- page container -->
    <div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Would you like to know more?</h6>
            <p class="mb-5">The latest news and events of the club are here.</p>
        </div>

        <!-- row 1 -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/cockpitSoir.jpg" alt="">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">News</h1>
                        <h6 class="subtitle">Read More</h6>
                        <p>find out what's new in the club, such as new members, new aircraft, the latest first solo flight and more...</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/landscape.jpg" alt="">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Flight logs</h1>
                        <h6 class="subtitle">All Posts</h6>
                        <p>Our travel planes are available to our members, after validation by our instructors.<br><br>They allow you to go fast and far, and to discover France thanks to the tight network of the territory.</p>
                    </div>          
                </a>
            </div>
            
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/nynjaContreJour.jpg" alt="">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Our members</h1>
                        <h6 class="subtitle">About Us</h6>
                        <p>find out what's new in the club, such as new members, new aircraft, the latest first solo flight and more...</p>
                    </div>          
                </a>
            </div>
        </div>
            <!-- end of row 1 -->
    </div>
    <!-- end of page container -->


    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">
            <!-- contact us -->
            <?php require'contact.php'; ?>
            <!-- end of contact us -->

            <!-- footer -->
            <?php require 'footer.php'; ?>
            <!-- end of footer -->

        </div><!-- end of container -->
    </div><!-- end of pre footer -->
</body>
</html>