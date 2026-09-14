<?php

namespace OopInterface; // OOP of the Design Principles

interface Animal 
{
    public function hello();
}

class Cat implements Animal // Catနဲ့ Dogနဲ့က Calssရဲ့ဖွဲ့စည်းပုံမတူပေမယ့် interfaceသွားတူနေတယ်
{
    public function hello() { // interfaceသုံးရင် function methodလည်းတူရမယ် ->hello()
        echo "Hello Cat.. <br>";
    }
}

class Dog implements Animal     
{
    public function hello() {
        echo "Hello Dog.. ";
    }
}

function app(Animal $obj) {
    $obj->hello();
}

app(new Cat());
app(new Dog());

