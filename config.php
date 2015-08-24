<?php

// 「元の画像」もしくは「サムネイル」を保存しておくディレクトリを定数として保存しておく

// $_SERVER['SCRIPT_FILENAME'] とはconfig.phpのことを指す
// このファイル(config.php)までのフルパス（のディレクトリ名）を取ってきなさいというのがdirnameです
// →→→ config.phpが入っている「picture_board」の中にあるimages(thumbnails)もしくはthumnailsをくっつけたものがIMAGES_DIR（THUMBNAIL_DIR）にしなさいという定数
define('IMAGES_DIR', dirname($_SERVER['SCRIPT_FILENAME']).'/images');
define('THUMBNAILS_DIR', dirname($_SERVER['SCRIPT_FILENAME']).'/thumnails');

// 何を指定しているかを一旦確認している→実際フルパスで指定している
var_dump(IMAGES_DIR);
var_dump(THUMBNAILS_DIR);


// define('DSN', 'mysql:host=localhost;dbname=contact_dotinstall');
// define('DB_USER', 'dbuser');
// define('DB_PASSWORD', 'rwrwrwrw0521');

// define('SITE_URL', 'http://192.168.33.10/php/contact/');
// define('ADMIN_URL', SITE_URL.'admin/');

// error_reporting(E_ALL & ~E_NOTICE);

// session_set_cookie_params(0, '/contact/');
