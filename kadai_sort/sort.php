<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数sort_2wayの定義
        function sort_2way($array, $order)
        {
            if ($order === true) {
                sort($array); // 昇順の関数
                echo "昇順ソート：<br>";
            } else {
                rsort($array); // 降順の関数
                echo "降順ソート：<br>";
            }

            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }

        //ソート対象の配列
        $nums = [15, 4, 18, 23, 10];

        //関数の呼び出し
        sort_2way($nums, true);  // 昇順
        echo "<br>";             // 空行を挿入
        sort_2way($nums, false); // 降順
        ?>
    </p>
</body>

</html>
