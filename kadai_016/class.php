<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    class Food{

        public $name;
        public $price;

        public function show_price(string $price){
            $this->price = $price;

        }
        
    }
    ?>
    </p>
    <p>
        <?php

        class Animal {

            public $name;
            public $height;
            public $weight;

            public function show_height(string $height) {
                $this->height = $height;
            }
        }

        ?>
    </p>


    
    
</body>
</html>