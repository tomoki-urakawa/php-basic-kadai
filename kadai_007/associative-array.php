<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>この文章はHTMLで出力しています。</p>
   <p>

   <?php
// 連想配列を作成
$vegetable = [
    "name" => "onion",
    "price" => 200,
    "weight" => 160
];

// 連想配列を出力
print_r($vegetable);
?>


</body>

</html>