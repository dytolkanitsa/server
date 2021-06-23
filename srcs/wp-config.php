<?php

define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'z}Ls}2G|9X(TXXR)a2V[$x5TZigkV oxpF |-X/;@ne]=<gH}!N<`v?WmS?f:=t.');
define('SECURE_AUTH_KEY',  ';9AlhA74u,TOvP!QXFj/:s 81.s+<t&_T-:d^k|cA8^t(=cXW&Bu|T)3trw+ApOp');
define('LOGGED_IN_KEY',    '$g|o2s `w74a-jlTX?Q.g8eMg4W<ZtcX@G<99r0q)-k:-w`A+u15tMtQE>/I|~dV');
define('NONCE_KEY',        '3g+#+4j|ew6`Q(-WusF+0;0OD`bwTYH4sq)_r>|+`dPk?@:k+]Y=TDX^_Xez+rk+');
define('AUTH_SALT',        'iHk>27w9/P8@+]shwCPqLeVxb CF[@roizEX;/wmz-]d6|FHpMW(=@&,LK^YTw5_');
define('SECURE_AUTH_SALT', 'm)Q2iL8S#[>p%F-A:oJi=@{+r;wpZCo;+bu2W)lD`&$=|.vj)7G]R)fHR$CA{DY6');
define('LOGGED_IN_SALT',   'HP4$^tn-DB(ABUw2Y@31RC##N-La+qX!RZx3dVW-tL#Qh+_G*TpK1KPZVsvwFd P');
define('NONCE_SALT',       'wF$!Yg`-a*t%;n[ jY3FczFP.c+fJ!y{?oG-?=^ C[L8?|r>HTn}4:%d2+yi.;Cm');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';