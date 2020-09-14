<?php
// 関数ファイルを読み込み
define('MODEL_PATH', $_SERVER['DOCUMENT_ROOT'] . '/../model/');
// ファイルの読み込み
define('VIEW_PATH', $_SERVER['DOCUMENT_ROOT'] . '/../view/');

// 画像ファイルの読み込み
define('IMAGE_PATH', '/assets/images/');
// スタイルの標準化 
define('STYLESHEET_PATH', '/assets/css/');
// 画像の格納
define('IMAGE_DIR', $_SERVER['DOCUMENT_ROOT'] . '/assets/images/' );

// データベースの接続情報
define('DB_HOST', 'mysql');
define('DB_NAME', 'sample');
define('DB_USER', 'testuser');
define('DB_PASS', 'password');
define('DB_CHARSET', 'utf8');

// URLの設定
define('SIGNUP_URL', '/signup.php');
define('LOGIN_URL', '/login.php');
define('LOGOUT_URL', '/logout.php');
define('HOME_URL', '/index.php');
define('CART_URL', '/cart.php');
define('FINISH_URL', '/finish.php');
define('ADMIN_URL', '/admin.php');

// わからない
define('REGEXP_ALPHANUMERIC', '/\A[0-9a-zA-Z]+\z/');
define('REGEXP_POSITIVE_INTEGER', '/\A([1-9][0-9]*|0)\z/');

// ログイン情報の登録チェック
define('USER_NAME_LENGTH_MIN', 6);
define('USER_NAME_LENGTH_MAX', 100);
define('USER_PASSWORD_LENGTH_MIN', 6);
define('USER_PASSWORD_LENGTH_MAX', 100);

// わからない
define('USER_TYPE_ADMIN', 1);
define('USER_TYPE_NORMAL', 2);

// 商品名の設定
define('ITEM_NAME_LENGTH_MIN', 1);
define('ITEM_NAME_LENGTH_MAX', 100);

// 公開・非公開設定
define('ITEM_STATUS_OPEN', 1);
define('ITEM_STATUS_CLOSE', 0);

define('PERMITTED_ITEM_STATUSES', array(
  'open' => 1,
  'close' => 0,
));

// 画像タイプの設定
define('PERMITTED_IMAGE_TYPES', array(
  IMAGETYPE_JPEG => 'jpg',
  IMAGETYPE_PNG => 'png',
));