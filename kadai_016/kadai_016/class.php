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

        private $name;
        private $price;

        public function __construct(string $name, int $price){
            $this -> name = $name;
            $this -> price = $price;   
        }


        public function show_price(){
            echo $this ->price . '<br>';
        }
    }
        
    ?>
    </p>
    
    <p>
        <?php

        class Animal {

            private $name;
            private $height;
            private $weight;

            public function __construct(string $name, int $height, int $weight) {
            $this ->name = $name;
            $this ->height= $height;
            $this ->weight= $weight;
            }

            public function show_height(){
                echo $this->height . '<br>';
            }


        }


        $potato= new Food ('potato', 250); 
        $dog = new Animal ('dog', 60, 5000);

        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';

        $potato->show_price();
        $dog->show_height();




        ?>
    </p>
    
</body>
</html>