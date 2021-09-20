<?php
namespace Libs;
use Libs\Database;

class Model
{
    function __construct()
    {

    }

    function loadModel($nombre)
    {
        require_once("models/".$nombre."Model.php");
        $nombre = $nombre."Model";
        $model = new $nombre();
        return $model;
    }
    
    public function query($sql,$params,$methodFind){
        $db = new Database();
        $cnx = $db->connect();
        $stmt = $cnx->prepare($sql);
        foreach($params as $param){
            $stmt->bindValue($param[0],$param[1],$param[2]);
        }
        $stmt->execute();
        return $stmt->{$methodFind}();
    }
    public  function hello(){
        echo "hello";
    }
}
?>