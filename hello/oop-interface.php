<?php

interface Animal
{
    public function hello();
}

class Cat implements Animal
{
    public function hello() {
        echo "Hello Cat.. <br>";
    }
}

class Dog implements Animal     
{
    public function hello() {
        echo "Hello Dog.. <br>";
    }
}

function app(Animal $obj) {
    $obj->hello();
}

app(new Cat);
app(new Dog);
