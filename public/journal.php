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
            <p class="header-subtitle"></p>
        </div>
    </header>
    <!-- end of page header -->

    <!-- page container -->
    <!-- end of page container -->

    <!--footer & pre footer -->
    <div class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
        <div class="container">
            <!-- footer -->
            <?php require 'footer.php'; ?>
            <!-- end of footer -->

        </div><!-- end of container -->
    </div><!-- end of pre footer -->
</body>
</html>