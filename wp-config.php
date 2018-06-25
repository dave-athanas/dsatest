<?php
# Database Configuration
define( 'DB_NAME', 'docWP' );
define( 'DB_USER', 'docU' );
define( 'DB_PASSWORD', 'temp9999' );
define( 'DB_HOST', 'wp-test01.cupy2mz2vrnl.us-east-1.rds.amazonaws.com' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', 'UY!Z;:@DO.(^CxsxjL2P!|S3>c-[gn{9|[zGyM-31:(|c+;$Ion0aw?U&!o3Qf3&' );
define( 'SECURE_AUTH_KEY', '?U?deRL#c?&7@Zw-FmM,I9IgeT rEK35g~ox52FmJ*pKl)7^7jlwRO=CqUxtO^IX' );
define( 'LOGGED_IN_KEY', '+`E/ X@f2/;|-vl+uYs/Uj-YC9cAUpDb8)mqAjxTrfwL0z#&()QO)x+#Rpp,cg0M' );
define( 'NONCE_KEY', 'dROg2C[.~F-y^|%l/G=+A$AnKq(Z5uH`Up7hz:|]].|,%CA+[^-,PK,$OXGHX([%' );
define( 'AUTH_SALT', 'sy<R2B7$8+.4g3RT:A?.]1Tr+}%.u6XAkR_-N"Jt/,6L!m^P/Ifw" /?"t;y%Go-' );
define( 'SECURE_AUTH_SALT', 'AlK5m-q"v}H5mSTos+DC~)`eW{4=>0OmM;_1}N~R0~Sb3V1]1G|NREpmp-g5Arpr' );
define( 'LOGGED_IN_SALT', '>SG$J/*:~Q8(3kN]iHN"qiWD81j8+ZidreG![smgo9GID:G"+{A/B.H9sRz]um2L' );
define( 'NONCE_SALT', '^<H()Hz@rtI}GnY.i: N{d(IA]J%8A]:)UKr$nWU|}7Eq]qR?~U|,T8{RK`q".%4' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'hansoninc' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '13b78267632a0b5224c850e06fa21aa7c192027f' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '100005' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'hansoninc.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100005', );

$wpe_special_ips=array ( 0 => '104.197.167.140', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define( 'WPLANG', '' );



# WP Engine Settings





define( 'WPE_CACHE_TYPE', 'standard' );



























/*SSLSTART*/
if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/



# Custom Settings












$_wpe_preamble_path = null;



# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

$_wpe_preamble_path = null; if(false){}
