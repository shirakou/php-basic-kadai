<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題</title>
 </head>
 
 <body>
     <p>
      <?php
      // 連想配列に代入
      $item_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];

      echo'<br>';

      // 出力
      print_r($item_data);

      ?>
     </p>
 </body>
 
 </html>