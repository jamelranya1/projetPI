<?php 

include('includes/connect_db.php');



session_start();
if(empty($_SESSION['login'])){
     header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Drift - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
<!-- /meta tags -->
<title>Admin</title>

<!-- Site favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- /site favicon -->

<!-- Font Icon Styles -->
<link rel="stylesheet" href="../node_modules/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="vendors/gaxon-icon/styles.css">
<!-- /font icon Styles -->

<!-- Perfect Scrollbar stylesheet -->
<link rel="stylesheet" href="../node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
<!-- /perfect scrollbar stylesheet -->

<!-- Load Styles -->    <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../node_modules/chartist/dist/chartist.min.css">
    <link rel="stylesheet" href="assets/css/semidark-style-1.min.css">
    <!-- /load styles -->

</head>




<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->
<!-- Root -->
<div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
<?php
include('includes/header.php')
?>
<!-- /header -->
        <!-- Site Main -->
        <main class="dt-main">
            <!-- Sidebar -->
<?php
include('includes/menu.php')
?>
<!-- /sidebar -->
            <!-- Site Content Wrapper -->
            <div class="dt-content-wrapper">

                <!-- Site Content -->
                <div class="dt-content">

                    <!-- Page Header -->
                    <div class="dt-page__header">
                        <h1 class="dt-page__title">Dashboard</h1>
                    </div>
                    <!-- /page header -->

                    <!-- Grid -->
                    <div class="row">

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Admin</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                  

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                            <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                                                </h4>
                                            </div>
                                         
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">livreur</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                  

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                            <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                                                </h4>
                                            </div>
                                         
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

<!-- Card -->
<div class="dt-card">

    <!-- Card Body -->
    <div class="dt-card__body px-5 py-4">
        <h6 class="text-body text-uppercase mb-2">restaurant</h6>
        <div class="d-flex align-items-baseline mb-4">
      

            <div class="d-flex align-items-center">
                <div class="trending-section font-weight-500 text-success mr-2">
                <h4 class="mb-3">
                        <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                    </h4>
                </div>
             
            </div>
        </div>

        <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
            <div class="dt-indicator-item__bar">
                <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
            </div>
        </div>
    </div>
    <div class="dt-card__body px-5 py-4">
        <h6 class="text-body text-uppercase mb-2">client</h6>
        <div class="d-flex align-items-baseline mb-4">
      

            <div class="d-flex align-items-center">
                <div class="trending-section font-weight-500 text-success mr-2">
                <h4 class="mb-3">
                        <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                    </h4>
                </div>
             
            </div>
        </div>

        <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
            <div class="dt-indicator-item__bar">
                <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
            </div>
        </div>
    </div>
    <div class="dt-card__body px-5 py-4">
        <h6 class="text-body text-uppercase mb-2">commande</h6>
        <div class="d-flex align-items-baseline mb-4">
      

            <div class="d-flex align-items-center">
                <div class="trending-section font-weight-500 text-success mr-2">
                <h4 class="mb-3">
                        <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                    </h4>
                </div>
             
            </div>
        </div>

        <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
            <div class="dt-indicator-item__bar">
                <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
            </div>
        </div>
    </div>
    <!-- /bard body -->

</div>
<!-- /card -->

</div>
                        <!-- /grid item -->

                        <!-- Grid Item -->
                        <div class="col-xl-3 col-sm-6 col-12">

                            <!-- Card -->
                            <div class="dt-card">

                                <!-- Card Body -->
                                <div class="dt-card__body px-5 py-4">
                                    <h6 class="text-body text-uppercase mb-2">Contact</h6>
                                    <div class="d-flex align-items-baseline mb-4">
                                  

                                        <div class="d-flex align-items-center">
                                            <div class="trending-section font-weight-500 text-success mr-2">
                                            <h4 class="mb-3">
                                                    <span class="counter-value" data-target="<?php echo $cl ?>">0</span>
                                                </h4>
                                            </div>
                                         
                                        </div>
                                    </div>

                                    <div class="dt-indicator-item__info mb-2" data-fill="62" data-max="100">
                                        <div class="dt-indicator-item__bar">
                                            <div class="dt-indicator-item__fill fill-pointer bg-primary"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /bard body -->

                            </div>
                            <!-- /card -->

                        </div>
                        <div class="row">
                            <!-- end col -->
                                 
                            <!-- end col -->

                            

                            
                           
                            

                            <!-- end col -->
                        </div>
                        <!-- /grid item -->

                    </div>
                    <!-- /grid -->

                    <!-- Grid -->
                    

<!-- /customizer sidebar -->
        </main>
    </div>
</div>
<!-- /root -->

<!-- Optional JavaScript -->
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/moment/moment.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Perfect Scrollbar jQuery -->
<script src="../node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<!-- /perfect scrollbar jQuery -->

<!-- masonry script -->
<script src="../node_modules/masonry-layout/dist/masonry.pkgd.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/customizer.js"></script><!-- Custom JavaScript -->
<script src="../node_modules/chartist/dist/chartist.min.js"></script>
<script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/custom/charts/dashboard-listing.js"></script>

</body>


</html>