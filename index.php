<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo 'PHP object orieanted php'; ?></title>
  </head>
  <body>
    <?php

class Animal implements Singable
{
    protected $animal;
    protected $fev_food;
    protected $sound;
    protected $id;

    public static $num_of_animals = 0;

    const pi = 3.1416;

    public function getName()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->id = rand(100, 500000);

        echo $this->id.' has beed assigned to id <br/>';

        Animal:: $num_of_animals++;
    }

    public function __destruct()
    {
        echo $this->name.' This function is being destroyed <br/>';
    }

    public function __get($name)
    {
        echo 'Asked for '.$name.'<br/>';

        return $this->$name;
    }

    public function __set($name, $value)
    {
        switch ($name) {
        case 'name':
          $this->name = $value;
          break;

        case'fev_food':
          $this->fev_food = $value;
          break;

        case'sound':
          $this->sound = $value;
          break;

        default:
          echo $name.' Not found <br/>';

      }
        echo " set ". $name." to ".$value."<br/>";
    }

    public function run()
    {
        echo $this->name." runs <br/>";
    }

    final public function what_is_good()
    {
        echo "Runing is good <br/>";
    }

    public function __toString()
    {
        return $this->name." Says ".$this->sound. " give me some ". $this->fev_food ." my id is ". $this->id." total animals = ".Animal::$num_of_animals."<br><br>";
    }

    public function sing()
    {
        echo $this->name."Sings 'Ghawwwww'<br/>";
    }
}



class Dog extends Animal
{
    public function run()
    {
        echo $this->name ." runs like crazy <br/>";
    }
    public function sing()
    {
        echo $this->name."Sings 'garr garr garrr'<br/>";
    }
}

interface Singable
{
    public function sing();
}


$animal_one = new Animal();

$animal_one->name = "Spike";
$animal_one->fev_food = "meat";
$animal_one->sound = "Rouff";

echo $animal_one->name." Says ".$animal_one->sound. " give me some ". $animal_one->fev_food ." my id is ". $animal_one->id." total animals = ".Animal::$num_of_animals."<br><br>";

echo "Fevourit number ". Animal::pi ."<br/>" ;


$animal_two = new Dog();

$animal_two->name = "Killer";
$animal_two->fev_food = "py";
$animal_two->sound = "Garrr...";

echo $animal_two->name." Says ".$animal_two->sound. " give me some ". $animal_two->fev_food ." my id is ". $animal_two->id." total animals = ".Dog::$num_of_animals."<br><br>";

$animal_one->run();
$animal_two->run();

$animal_two->what_is_good();

echo $animal_one;

$animal_one->sing();

function make_them_sing(Singable $singing_animal)
{
    $singing_animal->sing();
}

make_them_sing($animal_one);
make_them_sing($animal_two);



?>















  </body>
</html>
