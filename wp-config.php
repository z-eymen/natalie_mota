<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'nathalie_mota' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q0-Cs4Ycsps&k@zt)Goe|RFsNz Y+N5Wd,EC:Sby`kbY<KP=K}?9>2xD?DVQl,FH' );
define( 'SECURE_AUTH_KEY',  'x37M_s_[Q6J}G~_-%_f gF8G0:2*UOTiUcp0KH!ui&Dv>a~2|Y@<^Yh%`N!`@Q;V' );
define( 'LOGGED_IN_KEY',    '#3`deIx6o|{e8LfN4Hwr)@#CL<M 6u3Dlo[xpk[zTl:&`EEBI}Z6|uxlU/`(]xCC' );
define( 'NONCE_KEY',        '-SB:.  lkqUwuF9v?#_a,Gr,aO/_4:eR4)n[z#9{MZbVI7Ui!5@u xD[;gy:X6#c' );
define( 'AUTH_SALT',        'X`~.yG/`.-yyx%U0(>k!/qhSbTMk9I+=,<FhEDoPsT+ ZRTfjXSs4<mZtaq1eqeR' );
define( 'SECURE_AUTH_SALT', 'Ty;Gj.v/zM{ge[KM|]FgmkPq?fYIBURUIBtF,u/&o&cv1>pKKA;G+:+K?!Da|?iP' );
define( 'LOGGED_IN_SALT',   'q/gKO@hbiMp^`95Un[#(oA>_)X)w@md%DS:G!MQ#92KxOtpqh8{|^BtiC%4rFtM9' );
define( 'NONCE_SALT',       't6G-}Nnc4s7)*ZNii&NF@+G?$U3s:h.&57Fl&wa 8s;1ynXgs5=BWHe^nkNG0=()' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
