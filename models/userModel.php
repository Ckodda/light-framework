<?php

namespace Models;

use Libs\Database;
use Libs\Model;
use PDO;

class UserModel extends Model
{
    private $id;
    private $user;
    private $email;
    private $name;
    private $password;
    private $role;

    public function getId(){ return $this->id;}
    public function setId($id){ $this->id=$id;}

    public function getUser(){ return $this->user;}
    public function setUser($user){ $this->user=$user;}

    public function getEmail(){ return $this->email;}
    public function setEmail($email){ $this->email=$email;}

    public function getName(){ return $this->name;}
    public function setName($name){ $this->name=$name;}


    public function getPassword(){ return $this->password;}
    public function setPassword($password){ $this->password=$password;}

    public function getRole(){ return $this->role;}
    public function setRole($role){ $this->role=$role;}

    function __construct()
    {
        parent::__construct();    
    }
    
    public function authenticate()
    {
        $bd = new Database();

        $cnx = $bd->connect();



        $stmt = $cnx->prepare("SELECT email,password,role FROM user WHERE email=:email and password = :password");


        $stmt->bindValue(":email",$this->email);
        $stmt->bindValue(":password",sha1($this->password));
        $stmt->execute();

        $res = $stmt->fetch();
        

        return $res;
    }
    public function getAllUsers(){
        $params = [
            ["email","%%",PDO::PARAM_STR]
        ];
        return $this->query("SELECT * FROM user WHERE user_email LIKE :email",$params,'fetchAll');
    }
}
?>