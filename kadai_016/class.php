<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クラスのテスト</title>
</head>
<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo "価格: {$this->price}円<br>";
            }
        }

        class Animal {
            public $name;
            public $height;
            public $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo "身長: {$this->height}cm<br>";
            }
        }

        // インスタンス作成
        $food1 = new Food("ハンバーガー", 350);
        $animal1 = new Animal("キリン", 500, 900);

        // 実際の出力
        print_r($food1);
        echo "<br>";
        print_r($animal1);
        echo "<br>";

        // メソッド
        $food1->show_price();
        $animal1->show_height();
        ?>
    </p>
</body>
</html>
