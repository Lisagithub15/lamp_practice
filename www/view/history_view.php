<!DOCTYPE html>
<html lang="ja">
<head>
  
  <?php include VIEW_PATH . 'templates/head.php'; ?>
  <title>購入履歴</title>
  <link rel="stylesheet" href="<?php print(STYLESHEET_PATH . 'admin.css'); ?>">
</head>
<body>
  <?php 
  include VIEW_PATH . 'templates/header_logined.php'; 
  ?>
  
  <div class="container">
    <h1>購入履歴</h1>

    <?php include VIEW_PATH . 'templates/messages.php'; ?>

    
    <?php if(count($datas) > 0){ ?>
      <table class="table table-bordered text-center">
        <thead class="thead-light">
        <!-- <tr class="<?php print(is_open($item) ? '' : 'close_item'); ?>"> -->
            <th>order_id</th>
            <th>date</th>
            <th>total_price</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($datas as $data){ ?> 
          <tr>
            <td><?php print h($data['order_id']); ?></td>
            <td><?php print h($data['purchase_date']); ?></td>
            <td><?php print h($data['total']); ?>円</td>
            <td>
            <a href='details.php?order_id=<?php print h($data['order_id']); ?>'>明細</a>
            </td>
          </tr>
          <?php } ?> 
        </tbody>
      </table>
    <?php } else { ?> 
      <p>購入履歴はありません。</p>
    <?php } ?> 
  </div>
</body>
</html>

        
