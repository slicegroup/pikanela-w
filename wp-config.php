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
define( 'FS_METHOD', 'direct' );
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'pikanela-w' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', 'rafa2112' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'X`UFxelwmImrC[xI_3^1MthxlAl[jSO0EQDKc1Lasm).f1teHTHaW9Xpi)cHj^<c' );
define( 'SECURE_AUTH_KEY', '&@W!VbRfiP@_Xb_)]^}[ s[|x#f+2xlXXF<@xvRbgEyRQL`5ZQ0`#<mP(do9#3`@' );
define( 'LOGGED_IN_KEY', ']N[x_4H]PtPTz{,$KLzeJ@nJi(zYvYM&D&#5FHrV73t[yD86`7D.mI#Dpq!oI!gf' );
define( 'NONCE_KEY', '^P$yzEAvF}tW.lo^{:zGav%i1FP;c0k-0Ff1{d.4r|j5zy#;gm;DF{/MhhoM$/O4' );
define( 'AUTH_SALT', 'V2{4v}&2=sY;jm2JQ X$lX_f=D2XI;HX}V*A^T[y=b!W!JDOTor_pnD-$_^t:g4>' );
define( 'SECURE_AUTH_SALT', '/zk@Y2.d:Y9Nh%MDe;h*?5@w0%AM}]nJSe @x_%g]q.Fu4&r}tc?>d371:x^OXG|' );
define( 'LOGGED_IN_SALT', 'Al[`N[>ww%W@BYLK;b`Da~Q(qq11!sN-g<bF^Li.*8_Zx#FzJ7&^83/@6=ud_sp=' );
define( 'NONCE_SALT', '.~Xpn1gyf,j__6s.Au-YI(U<Ic;w~Y)/9#`3CXXn0;DB^<1>^C>BK!Eg^)R4yP(S' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

