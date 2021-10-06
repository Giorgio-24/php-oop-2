<?php
/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio,
ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi
gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno
diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. 
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); */

/*//? trait Premium{

}

trait Standard{

} */

class Product
{
    protected $name;
    protected $price;
    protected $provenience;

    public function __construct($_name, $_price, $_provenience)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->provenience = $_provenience;
    }

    public function getDetails()
    {
        return "Product: $this->name" . " </br> " . "Price: $this->price Euro" . " </br> " . "Provenience: $this->provenience" . " </br> ";
    }
};


class User
{
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $nickname;


    public function __construct($_first_name, $_last_name, $_age, $_nickname, $_subscription_type)
    {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
        $this->nickname = $_nickname;
        $this->subscription_type = $_subscription_type;
    }
};

class PremiumUser extends User
{

    public function __construct($_first_name, $_last_name, $_age, $_nickname, $_subscription_type)
    {
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->age = $_age;
        $this->nickname = $_nickname;
        $this->subscription_type = $_subscription_type;
    }

    public function getDiscount()
    {
        if ($this->subscription_type == 'premium') {
            return "</br> Congratulazioni $this->nickname! Essendo un utente $this->subscription_type hai diritto ad uno sconto del 30%.";
        }
    }
}

$pen = new Product('Pen', 1, 'Made in Italy');
$iphone = new Product('Iphone', 1200, 'Made in China');

$user_1 = new PremiumUser('Giova', 'Bordi', 18, 'giovannone_8', 'premium');
$user_2 = new User('Alessio', 'Reberi', 18, 'alereberi00', 'premium');

echo ($pen->getDetails());
echo ($iphone->getDetails());
echo ($user_1)->getDiscount();
var_dump($user_2);
