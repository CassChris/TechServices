<?php
class Errors extends Controller
{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        $this->views->getView('errors',"index"); 
    }

}
?>