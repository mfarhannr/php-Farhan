<?php
echo "No 1";
echo "<br>";
$star = 15;
for ($a = $star; $a > 0; $a--) {
    for ($b = $star; $b >= $a; $b--) {
        echo "#";
    }
    echo "<br>";
}

echo "No 2 ";
$array = ["PHP", "JAVASCRIPT", "LARAVEL"];
echo implode(", ", $array);

echo "<br>";
echo "No 3 ";
$explode = "PHP, JAVASCRIPT, LARAVEL";
$arrayExp =  explode(", ", $explode);
print_r($arrayExp);

echo "<br>";

echo "No 4 ";
$username = "";
$password = '';

//message error required
$usernameError = "";
$passwordError = '';

function dataType($dataKelas)
{
    $inputData = trim($dataKelas);
    $inputData = stripslashes($dataKelas);
    $inputData = htmlspecialchars($dataKelas);
    return $inputData;
}

if($_SERVER["REQUEST_METHOD"] === "POST") {
    // $namalengkap = dataType($_POST['namalengkap']);
    // $kelas = dataType($_POST['kelas']);
    if(empty($_POST['username'])){
        $usernameError = "username tidak boleh kosong, harus diisikan.";
    }elseif(empty($_POST['password'])){
        $username = "";
    }else{
        $username = dataType($_POST['username']);
    }
    if(empty($_POST['password'])){
        $passwordError = "password tidak boleh kosong, harus diisikan.";
    }elseif(empty($_POST['username'])){
        $password = "";
    }else{
        $password = dataType($_POST['password']);
    }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div style="margin-bottom: 3px;">
        <label for="username">username</label>
        <input type="text" id="username" name="username">
        <span style="color:red; font-size: 12px;"> <?php echo $usernameError; ?></span>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <span style="color:red; font-size: 12px;"> <?php echo $passwordError; ?></span>
    </div>
    <button type="submit">Simpan</button>
</form>

<?php
echo "Username : " . $username;
echo "<br>";
echo "Password : " . $password;


echo "<br>";
echo "<br>";
echo "No 5";
echo "<br>";


class Student {
    private $name;
    private $age;

    public function __construct($name = "", $age = 0) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

?>
<?php

$student1 = new Student('John', 20);
echo $student1->getName();
echo "<br />";
echo $student1->getAge();

echo "<br>";
echo "<br>";
echo "No 6 ";
echo "<br>";
class Rectangle {
    public $length = 0;
    public $width = 0;
  
    public function __construct(int $length, int $width) {
      $this->length = $length;
      $this->width = $width;
    }
  
    public function __toString() {
      return sprintf(
        'Rectangle (%d x %d)',
        $this->length,
        $this->width
      );
    }
  
    public function calculateArea(): float {
      return $this->length * $this->width;
    }
  }
  
  // Create an object with properties length = 5 and width = 8
  $rectangle1 = new Rectangle(5, 8);
  
  // Call the calculateArea method and display the result
  echo $rectangle1->calculateArea();
  echo "<br>";
  echo "<br>";
  echo "No 7 ";
  echo "<br>";
  class Person {
    public $name;
    public $age;
  
    public function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;
    }
  
    public function __toString(): string {
      return sprintf('Name: %s Age: %d', $this->name, $this->age);
    }
  
    public function getInfo(): string {
      return sprintf('Name: %s Age: %d', $this->name, $this->age);
    }
  }

  $person1 = new Person("Sarah", 25);
  echo $person1->getInfo();

  echo "<br>";
  echo "<br>";
  echo "No 8 ";
  echo "<br>";
  class Circle {
      public $radius;
      
      public function calculateArea() {
          return pi() * pow($this->radius, 2);
      }
  }
  
  $circle1 = new Circle();
  $circle1->radius = 10;
  
  echo $circle1->calculateArea();
  
  echo "<br>";
  echo "<br>";
  echo "No 9 ";
  echo "<br>";

  class Car {
    public $brand;
    public $year;
    
    public function getInfo() {
        return "Mobil merk " . $this->brand . " tahun produksi " . $this->year;
    }
}

$car1 = new Car();
$car1 -> brand = "Alphard";
$car1 -> year = 2023;

echo $car1->getInfo();
  
echo "<br>";
echo "<br>";
echo "No 10 ";
echo "<br>";
class Animal {
    public $name;
    public $sound;
    
    public function makeSound() {
        echo "Hewan " . $this->name . " suaranya: " . $this->sound;
    }
}

$animal1 = new Animal();
$animal1->name = "Cat";
$animal1->sound = "Meow";

$animal1->makeSound();
?>