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
// Step2: 連想配列の作成
$data = [
    "名前" => "玉ねぎ",
    "値段" => 200,
    "産地" => "北海道"
];

// Step3: foreach文でキーと値を出力
foreach ($data as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>




</body>

</html>