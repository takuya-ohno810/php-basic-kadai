<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編_課題011</title>
  </head>
  <body>
    <p>
      <?php
      //連想配列を用意する
      $onion_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

      //連想配列のキーと値を1つずつ出力する
      foreach ($onion_data as $key => $value) {
        echo "{$key} : {$value}<br>";
      }
      ?>
    </p>
  </body>
</html>