<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
      <?php
      // クラス定義
      class Food {
        // プロパティを定義
        public $name;
        public $price;

        // メソッドを定義
        public function show_price(int $price) {
          $this->price = $price;
        }

        // コンストラクタを作成
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }
      }

      // インスタンス化する
      $food = new Food('potato',250);
      // 出力
      print_r($food);

      // 改行
      echo '<br>';
      
      // メソッドの実行
      $food->show_price(250);

      // クラス定義
      class Animal {
        // プロパティを定義
        public $name;
        public $height;
        public $weight;

        // メソッドを定義
        public function show_height(int $height) {
          $this->height = $height;
        }

        // コンストラクタを作成
       public function __construct(string $name, int $height, int $weight) {
         $this->name = $name;
         $this->height =$height;
         $this->weight =$weight;
       }
      }

      //  インスタンス化
      $animal = new Animal('dog',60,5000);
        // 出力
        print_r($animal);

        // メソッドの実行
        $animal->show_height(60);
      ?>
     </p>
 </body>
 
 </html>
