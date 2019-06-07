<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'KjjI~{8m$BBI5EDv/x-/ +-.%4iW.YOZUl?c wo[xIG@n:eOj<`#5C&VqhU+EdU+');
define('SECURE_AUTH_KEY', 'j3bn;fTHlO+O8vU1z5{^M#9|YN,h-MY| ~CW@YyGId^h*-9.4W|A~f`Cq fJra;>');
define('LOGGED_IN_KEY', 'LnFM4x9)U[.H+.5Om.@W?MT/Wqwm!I8LRqM Y*(70f8v mmp+(-{41Q?b!#Gfi+&');
define('NONCE_KEY', '|lr*WE.x|rDgFW<62-,8_`L<A`%+,MBNQk?Y^^V[LWc+d|@eR.|Mv6-%J#s]JBml');
define('AUTH_SALT', 'uK[,Y%DDo9lF8|KV5Jimf;SU  3i|FlM$%kA|BrhH-T8Poz[O_`1_A(SXi#P+L;D');
define('SECURE_AUTH_SALT', 'A&3z@lw;I+ZR%QJjm!#*x+a(AX.Gl4 uIrV $:|r?E]+$f)VWD8!|Ll.qlJJ##w;');
define('LOGGED_IN_SALT', 'X/|#5|H}x11HN ||2<ZLeC-p;25U.437H4mc<@2/3PFSfU- w! UU!pzYe+qPSvI');
define('NONCE_SALT', ';)nO8g4;>j](xNiSi1><Aw@XX,oCg`F v0UVp(/.9RhhP:t!O&n7jbP!-!u7a^dR');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

