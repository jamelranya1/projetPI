<?php 
include('includes/connect_db.php');
$req=$bdd->query('SELECT * FROM commande ');
session_start();

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/amira/demos/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 11:27:50 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Foody Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/skins/yellow.css" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
           <h1>SDE</h1>
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue'); document.getElementById('logo-light').src='img/styleswitcher/logos/blue.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blue.png';" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet'); document.getElementById('logo-light').src='img/styleswitcher/logos/blueviolet.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/blueviolet.png';" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod'); document.getElementById('logo-light').src='img/styleswitcher/logos/goldenrod.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/goldenrod.png';" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green'); document.getElementById('logo-light').src='img/styleswitcher/logos/green.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/green.png';" title="green" class="color"><img src="img/styleswitcher/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta'); document.getElementById('logo-light').src='img/styleswitcher/logos/magenta.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/magenta.png';" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange'); document.getElementById('logo-light').src='img/styleswitcher/logos/orange.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/orange.png';" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple'); document.getElementById('logo-light').src='img/styleswitcher/logos/purple.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/purple.png';" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red'); document.getElementById('logo-light').src='img/styleswitcher/logos/red.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/red.png';" title="red" class="color"><img src="img/styleswitcher/red.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellow.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellow.png';" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen'); document.getElementById('logo-light').src='img/styleswitcher/logos/yellowgreen.png'; document.getElementById('logo-dark').src='img/styleswitcher/logos/logos-dark/yellowgreen.png';" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <p class="separator">SEPARATOR <span class="hot">HOT</span></p>
            <span class="info">Select and scroll to see the changes</span>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_normal" value="normal"  /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/1.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_skew" value="skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/2.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_reversed_skew" value="reversed-skew" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/3.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_double_diagonal" value="double-diagonal" checked="checked"  /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/4.jpg" /></label>
            <label><input class="separator_switch" type="radio" name="separator_style" id="is_big_triangle" value="big-triangle" /> <img alt="separator" width="20" height="20" src="img/styleswitcher/separators/5.jpg" /></label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <?php
         include('includes/header.php')
          ?>
        <!-- Header Ends -->
        <!-- Contact Section Starts -->
        
        <!-- Contact Section Ends -->
        <!-- Contact Form Section Starts -->
        
        <section class="">
            <div class="section-overlay" style="margin-top:160px;">
                <div class="container">
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                      
                        
                    </div>
                    <!-- Main Heading Ends -->
                    <div class="form-container">
                        <!-- Contact Form Starts -->
                      

                        <table id="data-table" class="table table-striped table-bordered table-hover">
                                            <thead>
                                            <tr>
                                              
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>adresse</th>
                                                <th>tel</th>
                                                <th>nomrepas</th>
                                                <th>action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                              while ($donnees =$req->fetch()) {
                                                
                                          
                                              ?>
                                            	<tr>
                                            	<td><?php echo $donnees['nom']; ?></td>
	                                                <td><?php echo $donnees['prenom']; ?></td>
                                                  <td><?php echo $donnees['adresse']; ?></td>
                                                  <td><?php echo $donnees['tel']; ?></td>
                                                  <td><?php echo $donnees['nomrepas']; ?></td>
	                                                <td>
	                                                	<a href="controller/modifcommande.php?id=<?php echo $donnees['id']; ?>" class="btn btn-success">modifier</a>
	                                                	<a href="controller/suppcommande.php?id=<?php echo $donnees['id']; ?>" class="btn btn-danger">supprimer</a>
	                                                </td>
                                            	</tr>
                                               <?php  } ?>
                                            </tbody>
                                            
                                        </table>
                          
                        <!-- Contact Form Ends -->
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <!-- Map Section Starts -->
            <div class="info-map">
                <div class="google-map">
                    <div class="gmap_container">
                        <div id="gmap_canvas"></div>
                    </div>
                </div>
            </div>
            <!-- Info Map Boxes Starts -->
            <div class="container">
                <div class="row info-map-boxes">
					<!-- Left Info Map Box Starts -->
                    <div class="col-md-6 col-sm-6">
                        <div class="info-map-boxes-item fa fa-phone">
                            <h1>Phone &amp; Online</h1>
                            <p>Phone : +50917494
                                <br>Fax : +216 50917494
                                <br><a href="#">foodyrestaurant@gmail.com</a></p>
                        </div>
                    </div>
                    <!-- Left Info Map Box Ends -->
                    <!-- Right Info Map Box Starts -->
                    <div class="col-md-6 col-sm-12">
                        <div class="info-map-boxes-item fa fa-clock-o">
                            <h1>Working Hours</h1>
                            <p>Monday-Thursday : 08:00–17:00
                                <br>Friday & Saturday : 08:00–12:30
                                <br>Sunday - Closed</p>
                        </div>
                    </div>
                    <!-- Right Info Map Box Ends -->
                </div>
            </div>
            <!-- Info Map Boxes Ends -->
        </section>
        <!-- Contact Form Section Ends -->
		<!-- Logos Section Starts -->
      
        <!-- Logos Section Ends -->
        <!-- Footer Section Starts -->
        <?php
          include('includes/footer.php')
            ?>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/plugins/jquery.easing.1.3.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
	<script src="js/plugins/jquery.bxslider.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyAFnEvJfyoQ8unR5hK1u87h73EdYP46-hE"></script>
	
    <!-- Live Style Switcher JS File - only demo -->
    <script src="js/styleswitcher.js"></script>

    <!-- Main JS Initialization File -->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from slimhamdi.net/amira/demos/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Feb 2022 11:27:50 GMT -->
</html>