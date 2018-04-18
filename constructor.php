
<?php 
class MyClass {
function __construct() {
echo "Whoa! I’ve come into being <br/> ";
}
}
$obj = new MyClass; // Displays “Whoa! I’ve come into being.”
class Person {
private $_firstName;
private $_lastName;
private $_age;
public function __construct($firstName,$lastName,$age) {
$this->firstName = $firstName;
$this->lastName = $lastName;
$this->age = $age;
}
public function showDetails() {
echo "$this->firstName $this->lastName, age $this->age <br> ";
}
}
$p = new Person("Harry","Walters",28);
$p->showDetails(); // Displays “Harry Walters, age 28
/*If a class contains a constructor, it is only called if objects are created specifically from that class; if an
object is created from a child class, only the child class ’ s constructor is called. However, if necessary you
can make a child class call its parent ’ s constructor with parent::__construct() .*/
?>