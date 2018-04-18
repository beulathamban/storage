
<?php
class Person{
public function save(){
echo "Saving this object to the database... <br/> ";
}
public function __destruct(){
$this->save();
}
}
$p = new Person;
unset($p);
$p2 = new Person;
die("Something’s gone horribly wrong! <br/>");
// saving each class as a php file under classes folder
/*require_once( “classes/Person.php” );
$p = new Person();*/

?>