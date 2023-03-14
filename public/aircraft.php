<?php
    $title = 'Aircraft';
    define("TARIF_XL8_HDV", 135);
    define("TARIF_CTSW_HDV", 120);
    define("TARIF_SG11_HDV", 88);
    define("TARIF_NYNJA_HDV_FORMATION", 83);
    define("TARIF_NYNJA_HDV_LOCATION", 93);
    define("CURRENCY", "€");
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
            <p class="header-subtitle">The Chavenay Aero Paris Ouest ULM - CAP OUEST ULM association provides its members with modern, high-performance ultralights for learning or traveling.</p>
            <a  href="https://ffplum.fr/images/pdf/DECOUVRIR_2017_72dpi.pdf" target="_blank">
                <button class="btn btn-theme-color modal-toggle">Discover ULM through the FFPLUM</button>
            </a>
        </div>
    </header>
    <!-- end of page header -->

    <!-- page container -->
    <div class="container page-container">
        <!-- row -->
        <div class="row mb-5">
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/XL8.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h3 class="card-title">XL8</h3>
                        <h6 class="card-subtitle">Rate : <?=TARIF_XL8_HDV.CURRENCY ?></h6>
                        <p>The XL8 is a modern aluminium aircraft. Its standard high-end equipment, such as the "BERINGER" brakes and its reinforced undercarriage, will allow its pilot to land without difficulty on short and difficult terrain. The XL8 offers more than 2,000 kilometers of autonomy and a carrying capacity divided into multiple cargo volumes.</p>
                    </div>                  
                </a>
            </div>  
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/CTSW.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h3 class="card-title">CTSW</h3>
                        <h6 class="card-subtitle">Rate : <?=TARIF_CTSW_HDV.CURRENCY ?></h6>
                        <p>The CTSW is a comfortable and agile high wing traveler. It offers excellent visibility, high cruising speed, high quality workmanship... The CTSW is developed and built by the famous German company Flight Design.Its autonomy allows it to cross France without refueling...</p>
                    </div>                  
                </a>
            </div>  
        </div>
        <!-- end of row -->
        <!-- row 2 -->
        <div class="row mb-5">
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/superGuepard11.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Super Guepard 11</h3>
                        <h6 class="card-subtitle">Rate : <?=TARIF_SG11_HDV.CURRENCY ?></h6>
                        <p>The Super Guepard is an ultralight of traditional design (tubes and canvas) "high wing", made in France by a small team of enthusiasts, unanimously appreciated for its piloting qualities.It is healthy, comfortable without surprise. It lands short, while keeping a good cruising speed with 80hp.A bit like squaring the circle...</p>
                    </div>                  
                </a>
            </div>  
            <div class="col-md-6">
                <a href="javascript:void(0)" class="card">
                    <img src="images/nynja.jpg" class="card-img" alt="">
                    <div class="card-body">
                        <h3 class="card-title">Nynja</h3>
                        <h6 class="card-subtitle">
                            Formation rate : <?=TARIF_NYNJA_HDV_FORMATION.CURRENCY ?>
                            <br>
                            Rental rate : <?=TARIF_NYNJA_HDV_LOCATION.CURRENCY ?>
                        </h6>
                        <p>The school plane par excellence, easy, manageable and simple...
                        <br>Price. 83€ per HDV, gas included (training), 93€ per HDV for rental</p>
                    </div>                  
                </a>
            </div>  
        </div>
        <!-- end of row 2 -->
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