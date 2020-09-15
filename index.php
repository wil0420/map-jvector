<?php
/*
Plugin Name: Mapa Abaco
Plugin URI: https://giving.agency/es/
Description: Mapa interactivo [map_aba]
Versión: 1.0
Author: Givin Agency
License: GPLv2
*/
//If file is called directly abort
if (!defined('ABSPATH')) {
    die("Access Denied Forbidden 400");
}
function mapa(){

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ?>src/css/jquery-jvectormap-2.0.5.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo plugin_dir_url( __FILE__ ) ?>src/css/main.css">

    <!--- World SVG Path Info file in jVectorMap supported format-->
    <!-- <script src="./src/js/lib/jquery-jvectormap-world-mill-en.js"></script> -->

</head>
<body>

    <div id="map" style="width: 450px; height: 450px;"></div>

    <script src="<?php echo plugin_dir_url( __FILE__ ) ?>src/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
<script src="<?php echo plugin_dir_url( __FILE__ ) ?>src/js/main.js?v=1.7"></script>  
</body>
</html>
<?php
}
add_shortcode( 'map_aba', 'mapa' );




