<?php 
/* Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c);
*/

class Product {

    public $name;
    public $category;
    public $price;
    public $availability;
    public $on_sale;
    public $newPrice;

    public function __construct(string $name, string $category, float $price, bool $avaiability, bool $on_sale)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->availability = $avaiability;
        $this->on_sale = $on_sale;
    }

    public function calcDiscount(int $discount){
        if($this->on_sale == true) {
           return $this->newPrice = $this->price * ($discount / 100);
        }
        else {
            return $this->newPrice = 'this product has no discount';
        }
    }

    public function getData() {
        echo 'name: ' . $this->name . '<br>';
        echo 'category: ' . $this->category . '<br> ';
        echo 'price: ' . $this->price . '<br> ';
        echo 'new Price: ' . $this->newPrice . '<br> ';
    }

}


$articolo_1 = new Product('cavatappi', 'home', 10.30, true, false);
var_dump($articolo_1);

$articolo_1->calcDiscount(20);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $articolo_1->getData() ?>
</body>
</html>