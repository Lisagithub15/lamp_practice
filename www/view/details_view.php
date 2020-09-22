<!DOCTYPE html>
<html lang="ja">
<head>
  
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入明細</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'admin.css'); ?>">
</head>
<body>
  <?php 
  include VIEW_PATH . 'templates/header_logined.php'; 
  ?>
  
  <div class="container">
    <h1>購入明細</h1>
    <?php include VIEW_PATH . 'templates/messages.php'; ?>
         
          「注文番号」<?php print h($sub_data['order_id']); ?> 「購入日時」<?php print h($sub_data['purchase_date']); ?> 「合計金額」<?php print h($sub_data['total']); ?>
 
    
    <?php if(count($datas) > 0){ ?>
       
      <table class="table table-bordered text-center">
        <thead class="thead-light">
        <!-- <tr class="<?php print(is_open($item) ? '' : 'close_item'); ?>"> -->
            <th>name</th>
            <th>price</th>
            <th>amount</th>
            <th>sub_total</th>
           
          </tr>
        </thead>
        <tbody>
          <?php foreach($datas as $data){ ?> 
          <tr>
            <td><?php print h($data['name']); ?></td>
            <td><?php print h($data['buy_price']); ?>円</td>
            <td><?php print h($data['amount']); ?>個</td>
            <td><?php print h($data['sub_total']); ?>円</td>
           
          </tr>
          <?php } ?> 
        </tbody>
      </table>
    <?php } else { ?> 
      <p>購入明細はありません。</p>
    <?php } ?> 
  </div>
</body>
</html>

        
