<?php
class UserModel extends Model
{
    private $id;
    private $username;
    private $userpassword;
    private $userrole;

    public function getId(){ return $this->id;}
    public function setId($id){ $this->id=$id;}

    public function getUsername(){ return $this->username;}
    public function setUsername($username){ $this->username=$username;}

    public function getUserpassword(){ return $this->userpassword;}
    public function setUserpassword($userpassword){ $this->userpassword=$userpassword;}

    public function getUserrole(){ return $this->userrole;}
    public function setUserrole($userrole){ $this->userrole=$userrole;}

    function __construct()
    {
        parent::__construct();    
    }
    
    public function authenticate()
    {
        $bd = new Database();

        $cnx = $bd->connect();

        $stmt = $cnx->prepare("SELECT u.nombre, u.clave, r.rol_usuario
        FROM usuario AS u
        INNER JOIN rol_usuario AS r
        ON u.idRol = r.id
        WHERE nombre = :username AND clave = :userpassword;");
        
        $stmt->bindValue(":username",$this->username);
        $stmt->bindValue(":userpassword",$this->userpassword);
        $stmt->execute();

        $res = $stmt->fetch();
        

        return $res;
    }
    public function getAllUsers(){
        $params = [
            ["email","%%",PDO::PARAM_STR]
        ];
        return $this->query("SELECT * FROM users WHERE user_email LIKE :email",$params,'fetchAll');
    }
}
?>