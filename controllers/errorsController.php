<?php
namespace Controllers;
use Libs\Controller;

class ErrorsController extends Controller
{
    protected $code;
    protected $errorMsg;

    function __construct()
    {
        parent::__construct();
    }

    public function setErrorCode($code){
        $this->code = $code;
        http_response_code($this->code);
    }

    public function setErrorMessage($msg){
        $this->errorMsg=$msg;
    }

    function render()
    {
        $this->view->renderView("errors/index",[
            "code"=>$this->code,
            "errorMsg"=>$this->errorMsg
        ]);
    }
}
?>