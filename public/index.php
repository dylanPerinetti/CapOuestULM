<?php
    $title = 'Home';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require 'head.php'; ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
	<!-- page navbar -->
	<?php require 'navbar.php'; ?>
	<!-- end of page navbar -->

    <!-- page header -->
    <?php require 'header.php'; ?>
    <!-- end of page header -->

    <!-- page container -->
    <div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Would you like to know more?</h6>
            <p class="mb-5">The CHAVENAY AERO PARIS OUEST ULM association is a non-profit organization under the French law of 1901. Our base is located in the Yvelines, on the airfield of Chavenay, in the west of Paris.<br>Our goal is to allow as many people as possible to discover and practice ultralight flying.<br>Our principles are rigor, safety, conviviality and mutual aid.</p>
        </div>  

        <!-- row 1 -->
        <div class="row mb-4">
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/cockpitSoir.jpg" alt="">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Discover</h1>
                        <h6 class="subtitle">Discover our offers</p>
                        <p>Come and make your childhood dream come true by climbing aboard our ultralights (plane or gyrocopter) for an introduction to piloting with an instructor in order to discover the principles of flight, the rudiments of piloting and to give you the desire to go further...</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/savanahMontagne.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, weber Landing page">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Travel</h1>
                        <h6 class="subtitle">Read more</p>
                        <p>Our travel planes are available to our members, after validation by our instructors.<br><br>They allow you to go fast and far, and to discover France thanks to the tight network of the territory.</p>
                    </div>          
                </a>
            </div>
            <div class="col-md-4">
                <a href="javascript:void(0)" class="overlay-img">
                    <img src="images/avitaillementDylan.jpg" alt="">  
                    <div class="overlay"></div> 
                    <div class="des">
                        <h1 class="title">Learn</h1>
                        <h6 class="subtitle">More information</p>
                        <p>Becoming an ultralight pilot (three axis or gyroplane) is not insurmountable.<br>It just requires a little perseverance.<br><br>Our volunteer instructors are at your service, combining pedagogy and rigor... without forgetting the conviviality!</p>
                    </div>          
                </a>
            </div>          
        </div>
        <!-- end of row 1 -->

        <a href="#">Load More </a>


        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4 mt-5 pt-5">Flight logs</h6>
            <p class="mb-5">Memories of travels....</p>
        </div>

        <!-- row 2 -->
        <div class="row mb-5">
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/colineEtretat1.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h6 class="card-subtitle">9 July, 2022</h6>
                        <h3 class="card-title">Etrtreta</h3>
                        <p>All the planes were out to fly over the splendid chalk cliffs of Etretat.</p>
                    </div>                  
                </a>
            </div>  
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/castelLoire1.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h6 class="card-subtitle">12 July, 2021</h6>
                        <h3 class="card-title">Loire Valley</h3>
                        <p>Visit of the castles of the Loire Valley.<br>Flight to Amboise from Chavanay with our four aircraft.</p>
                    </div>                  
                </a>
            </div>  
        </div>
        <!-- end of row 2 -->
        <a href="#">All Posts </a>
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