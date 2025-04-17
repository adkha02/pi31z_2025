<?php

//Шаг 1: Определение абстрактного класса Car

abstract class Car {
    abstract public function drive();
}


//Шаг 2: Реализация конкретных классов для каждого типа автомобилей

class ElectricCar extends Car {
    public function drive() {
        echo "Driving an electric car.\n";
    }
}

class PetrolCar extends Car {
    public function drive() {
        echo "Driving a petrol car.\n";
    }
}

class HybridCar extends Car {
    public function drive() {
        echo "Driving a hybrid car.\n";
    }
}


//Шаг 3: Определение абстрактной фабрики CarFactory

abstract class CarFactory {
    abstract public function produceCar(): Car;
}


//Шаг 4: Реализация конкретных фабрик для каждого типа автомобиля

class ElectricCarFactory extends CarFactory {
    public function produceCar(): Car {
        return new ElectricCar();
    }
}

class PetrolCarFactory extends CarFactory {
    public function produceCar(): Car {
        return new PetrolCar();
    }
}

class HybridCarFactory extends CarFactory {
    public function produceCar(): Car {
        return new HybridCar();
    }
}


//Шаг 5: Пример использования

    $electricFactory = new ElectricCarFactory();
    $petrolFactory = new PetrolCarFactory();
    $hybridFactory = new HybridCarFactory();

    $electricCar = $electricFactory->produceCar();
    $petrolCar = $petrolFactory->produceCar();
    $hybridCar = $hybridFactory->produceCar();

    $electricCar->drive(); // Output: Driving an electric car.
    $petrolCar->drive();   // Output: Driving a petrol car.
    $hybridCar->drive();   // Output: Driving a hybrid car.

?>