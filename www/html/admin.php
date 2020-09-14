<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';

// セッションの開始
session_start();

// ログインできないとき
if(is_logined() === false){
  redirect_to(LOGIN_URL);
}

// DB接続
$db = get_db_connect();

// ログインユーザーの情報を取得
$user = get_login_user($db);

// ユーザー名が一致しないとき
if(is_admin($user) === false){
  redirect_to(LOGIN_URL);
}

// トークンの定義
$token = get_csrf_token();

// 商品の情報を取得
$items = get_all_items($db);
include_once VIEW_PATH . '/admin_view.php';
