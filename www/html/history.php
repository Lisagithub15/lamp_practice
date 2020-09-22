<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

// セッションの開始
session_start();
// order_idの書き込み
// var_dump(session_id());


// ログインできないとき
if(is_logined() === false){
  redirect_to(LOGIN_URL);
}


// DB接続
$db = get_db_connect();

// ログインユーザーの情報を取得
$user = get_login_user($db);

// 購入履歴の取得
if (is_admin($user) === TRUE) {
    $datas = get_all_history($db);
} else {
    $datas = get_history($db,$user['user_id']);
}


// $order_id = get_post('order_id');
// $purchase_date = get_post('purchase_date');
// $total = get_post('total');
// 商品の情報を取得
// $items = get_history($db);
include_once VIEW_PATH . '/history_view.php';
