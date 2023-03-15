<?php
    $title = "Abous us";
    $subTitle = "";
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
    <?php require 'header.php'; ?>
    <!-- end of page header -->

    <!-- page container -->
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

        </div>
        <!-- end of container -->
    </div>
    <!-- end of pre footer -->
</body>
</html>