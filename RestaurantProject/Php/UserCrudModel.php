<?php 
require_once('DbConnection.php');

class UserCrudModel extends DbConnection{
    private $id;
    private $name;
    private $surname;
    private $age;
    private $address;
    private $email;
    private $password;
    private $dbConn;
    
    public function __construct($id = '', $name='', $surname='', $age='', $address='', $email='',$password=''){
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->address = $address;
        $this->email = $email;
        $this->password = $password;

        $this->dbConn = $this->connect();
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    public function setSurname($surname){
        $this->surname = $surname;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function setAge($age){
        $this->age = $age;
    }
    
    public function getAge(){
        return $this->age;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getPassword(){
        return $this->password;
    }
    public function setAddress($address){
        $this->address = $address;
    }
    
    public function getAddress(){
        return $this->address;
    }
    public function insert(){
        try {
            $sql = "INSERT INTO users(Name, Surname, Age, Address, Email, Password, Role) VALUES(?, ?, ?, ?, ?, ?, ?)";
            $stm = $this->dbConn->prepare($sql);
            $stm->execute([$this->name, $this->surname, $this->age, $this->address, $this->email, $this->password, 0]);
            echo "<script>alert('User is registered successfully!')</script>";
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
?>
