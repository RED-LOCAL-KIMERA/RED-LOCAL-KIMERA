<?php 
/** 
  
 * Front to the WordPress application. This file doesn't do anything, but loads 
 * wp-blog-header.php which does and tells WordPress to load the theme. 
 * 
 * @package WordPress 
 */ 
/** 
 * Tells WordPress to load the WordPress theme and output it. 
 * 
 * @var bool 
 */ 
define('WP_USE_THEMES', true); 
/** Loads the WordPress Environment and Template 
 */ 
require( dirname( __FILE__ ) . '/wp-blog-header.php' ); 
/** Configuración de URL del blog */                                                                                                                                                                                                        
/** en las siguientes lineas se cambia la direccion ip predeterminada por la direccion ip de su equipo, para que el servicio de blog se pueda conectar a la direccion ip de su equipo */                                                                                                                                                                                                        
update_option('siteurl','http://192.168.20.3/RED_LOCAL/xampp/htdocs/wordpress');                                                                                                                                                                                                        
update_option('home','http://192.168.20.3/RED_LOCAL/xampp/htdocs/wordpress');                                                                                                                                                                                                        
/** Reemplazar las urls en el blog para cambiar los enlaces del menu del Blog */                                                                                                                                                                                                        
/** En la linea donde esta la variable $replaces se encuentran dos direcciones ip                                                                                                                                                                                                        
* la primera se debe cambiar por la siguiente direccion ip (192.168.10.97)                                                                                                                                                                                                        
* la segunda se debe cambiar por la direccion ip de su equipo                                                                                                                                                                                                        
* Esta linea lo que permite es buscar la direccion ip antigua (192.168.10.97) y reemplazarla por la direccion ip de su equipo                                                                                                                                                                                                         
*/                                                                                                                                                                                                         
$servidor = "localhost";                                                                                                                                                                                                        
$usuario = "root";                                                                                                                                                                                                        
$pwd = "";                                                                                                                                                                                                        
$bd = "wordpress";                                                                                                                                                                                                        
$con = mysql_connect($servidor, $usuario, $pwd);                                                                                                                                                                                                        
mysql_select_db($bd);                                                                                                                                                                                                        
$replaces = "UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, 'http://192.168.152.27', 'http://192.168.20.3')";                                                                                                                                                                                                        
$result = mysql_query($replaces, $con); 
