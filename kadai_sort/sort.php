<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      //ソート関数を用意する
      //第一引数：$array ソート対象の配列
      //第二引数：$order ソート方向(TRUE：昇順/FALSE：降順)
      function sort2way($array, $order) {
        if ($order === TRUE) {
          //昇順の場合
          echo '昇順にソートします。<br>';
          sort($array);
        } else {
          //降順の場合
          echo '降順にソートします。<br>';
          rsort($array);
        }
        //ソートした配列のデータを1行ずつ表示する
        foreach ($array as $val) {
          echo $val . '<br>';
        }
      }

      $nums = [15, 4, 18, 23, 10];

      sort2way($nums, TRUE);

      sort2way($nums, FALSE);
      ?>
    </p>
  </body>
</html>