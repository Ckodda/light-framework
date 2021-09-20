<?php

use Libs\Controller;

class ErrorsController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->renderView("errors/index.tpl");
    }
}
?>