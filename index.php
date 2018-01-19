<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php echo '<p>Hello Php</p>'; ?>
<?php

interface Car{
    public function setModel($name);

    public function getModel();
}

interface Vehicle{
    public function setHasWheels($bool);

    public function getHasWheels();

}

class miniCar implements Car, Vehicle{
    private $model;
    private $hasWheels;

    public function setModel($name)
    {
        $this -> model= $name;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setHasWheels($wha){
        $this->hasWheels= $wha;
    }

    public function getHasWheels(){
        return ($this->hasWheels)? "has wheels" : "no wheels";
    }
}

class User{
    protected $username;

    public function setUserName($name){
        $this->username=$name;
    }
    public function getUserName(){
        return $this->username;
    }
}

interface Author{
     public function setAuthorPrivileges($array);
     public function getAuthorPrivileges();
}

interface Editor{
    public function setEditorPrivileges($array);
    public function getEditorPrivileges();
}

class AuthorEditor extends User implements Author, Editor{
    private $authorPrivilegesArray = array();
    private $editorPrivilegesArray = array();

    public function setAuthorPrivileges($array)
    {
        $this->authorPrivilegesArray=$array;
    }
    public function getAuthorPrivileges()
    {
        return $this->authorPrivilegesArray;
    }
    public function setEditorPrivileges($array)
    {
        $this->editorPrivilegesArray=$array;
    }
    public function getEditorPrivileges()
    {
        return $this->editorPrivilegesArray;
    }
}


$user1 = new AuthorEditor();
$user1 ->setUserName("Baltazar");

$user1-> setAuthorPrivileges(array("write text", "add punctuation"));
$user1-> setEditorPrivileges(array("edit text", "edit punctuation"));

$userName = $user1 ->getUserName();
$userPrivilages = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());
echo $userName . " has the following privilages.";
foreach ($userPrivilages as $privilage){
    echo " {$privilage}, ";
}
echo ".";
echo "<br>";

$user2 = new AuthorEditor();
$user2 ->setUserName("Vezir umesto vezira");
$user2 ->setAuthorPrivileges(array("write text", "punctuation"));

$userName = $user2->getUserName();
$userPrivilages = array_merge($user2->getAuthorPrivileges());
echo $userName . "has the following privilages.";

foreach ($userPrivilages as $privilage){
    echo " {$privilage} ";
}
echo ".";
echo "<br>";


$user3 = new AuthorEditor();
$user3->setUserName("Djepeto");
$user3 -> setAuthorPrivileges(array("write text", "punctuation"));
$user3 -> setEditorPrivileges(array("edit text", "edit punctuation"));

$userName = $user3->getUserName();
$userPrivilages = array_merge($user3->getAuthorPrivileges(), $user3->getEditorPrivileges());
echo $userName . " has the following privilages. ";

foreach ($userPrivilages as $privilage) {
    echo " {$privilage} ";
}
echo ".";
echo "<br>"




?>

</body>
</html>