<?php // OOP

class Animal
{
    protected $name; 
    // privateကလက်ရှိclassထဲမှာပဲသုံးလို့ရတယ် // publicကနေရာတိုင်းသုံးလို့ရ
    // protectedက လက်ရှိclassအတွင်းလည်းသုံးလို့ရ သူ့ကိုextendsလုပ်ထားတဲ့ classအတွင်းမှာလည်းသုံးလို့ရ

    public function __construct($name)
    { // constructorမှာparameterတစ်ခုထည့်မယ်
        $this->name = $name; 
        //phpမှာ->arrow languageကိုobject operatorအနေနဲ့သုံးတယ် တခြားlanguageမှာdotနဲ့သုံးတယ် this.name
    }

    static function info()
    {
        echo "Animal Class";
    }

    public function hello()
    {
        echo "Hello $this->name";
    }
}

class Dog extends Animal 
// inheritance // Dogမှာဘာမှမရေးရသေးရင်တောင် extends Animalနဲ့ Animalဆီက functionကိုဆက်ခံရရှိတယ်  အောက်ကfunctionက Animalနေရာမှာ Dogပြောင်းသွားမယ် Dog::info();
{
    public function run()
    {
        echo "$this->name is running...";
    }
}

Dog::info(); // static functionဆိုရင် objectကနေခေါ်စရာမလိုဘူး သက်ဆိုင်ရာclass nameကနေတိုက်ရိုက်ခေါ်သုံးလို့ရတယ်
echo "<br>";

$dog = new Dog("Bobby");
echo $dog->hello();
echo "<br>";

$dog->run();


// JavaScript Class Form

/* 
class Animal {
    constructor(name) {
        this.name = name 
    }
    static info() {
        console.log("Animal Class")
    }
    hello() {
        console.log(`Hello ${this.name}`)
    }
}

let dog = new Animal("Lucky")

dog.hello()
Hello Lucky

Animal.info()
Animal Class
 */