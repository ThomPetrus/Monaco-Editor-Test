<?php

abstract class Controller {

    protected $request;
    protected $action;

    public function __construct($action, $request){
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    // full view is a flag to determine whether the view requires the full layout
    protected function returnView($viewmodel, $fullview){
        $view = 'views/'.get_class($this).'/'.$this->action.'.php';

        if($fullview){
            require('views/main.php');
        } else {
            require($view);
        }
    }
}

?>