<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

// セッションの開始
session_start();
// var_dump(session_id());
/*
// セッション変数からorder_id取得
if (isset($_SESSION['order_id']) {
  $order_id = $_SESSION['order_id'];
  var_dump(aaa);
} 

else {
  // 非ログインの場合、ログインページへリダイレクト
  header('Location: history.php');
  exit;
}


if ($session_order_id === $order_id) {
  header('Location: details.php');
  exit;
}
*/

// ログインできないとき
if(is_logined() === false){
  redirect_to(LOGIN_URL);
}


// DB接続
$db = get_db_connect();

// ログインユーザーの情報を取得
$user = get_login_user($db);

// 購入明細のorder_idのユーザーとセッションユーザーが一致しているのか。
$order_id = get_get('order_id');
$order_page = get_order_page($db,$order_id);
if ($user['user_id'] !== $order_page['user_id']) {
  redirect_to(LOGIN_URL);
}


// 購入明細の取得
$datas = get_details($db,$order_id);
$sub_data = get_sub_details($db, $order_id);



// 商品の情報を取得
// $items = get_history($db);
include_once VIEW_PATH . '/details_view.php';