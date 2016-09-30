<?php

class Animal
{
    protected $name;
    protected $fev_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;

    const PI = '3.1416';

    public function getName()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->id = rand(100, 500);
        echo $this->id.' has been assigned to <br>';
        ++self::$number_of_animals;
    }

    public function __destruct()
    {
        echo $this->name.' is being destroyed <br>';
    }

    public function __get($name)
    {
        echo 'Asked for '.$name.'<br>';

        return $this->$name;
    }

    public function __set($name, $value)
    {
        switch ($name) {
            case 'name':

                $this->name = $value;

                break;

            case 'fev_food = $value':

                break;

            case 'sound':

                $this->sound = $value;

                break;

            default:
                echo $name.'Not found';
        }
        echo 'set'.$name.'to'.$value.'<br>';
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo $this->name.'runs like crazy';
    }
}

$animal_one = new Animal();

$animal_one->name = 'Spot';
$animal_one->fev_food = 'Meat';
$animal_one->sound = 'Riff';

echo $animal_one->name.' says '.$animal_one->sound.' Give me some '.$animal_one->fev_food.'<br/>'
        .$animal_one->id.' total animals = '.Animal::$number_of_animals.'<br/><br/>';




// require 'Birds.php';
// require 'Pigeon.php';

// $birds = new Birds(true, 2);

// echo $birds->getLegCount().'</br>';

// $pigeon = new Pigeon(false, 3);

// echo $pigeon->getLegCount().'</br>';

// if ($pigeon->canFly()) {
// 	echo "Can Fly";
// }else{
// 	echo "Cant Fly";
// }

// interface math{
// 	public function calculate();
// }

// class square implements math
// {
// 	public $num;

// 	public function __construct($val)
// 	{
// 		$this->num = $val;
// 	}
// 	public function calculate()
// 	{
// 		echo "Square is :".$this->num * $this->num."<br>";
// 	}
// }

// class cube implements math
// {
// 	public $num;

// 	public function __construct($val)
// 	{
// 		$this->num = $val;
// 	}
// 	public function calculate()
// 	{
// 		echo "Cube is :".$this->num * $this->num * $this->num."<br>";
// 	}
// }

// $obj = new square(2);

// $obj->calculate();

// $objc = new cube(3);
// $objc->calculate();
