<?php
    class Bootstrap{
        private $controller;
        private $action;
        private $request;

        // see index.php constructor will be called with $_GET
        public function __construct($request){
            $this->request = $request;

            if($this->request['controller'] == ""){

                // If nothing is specified for controller -> home
                $this->controller = 'home';
            } else {
                $this->controller = $this->request['controller'];
            }

            // Same thing for action
            if($this->request['action'] == ""){
                $this->action = 'index';
            } else {
                $this->action = $this->request['action'];
            }
        }


        public function createController(){
            // ensure the class exists
            if(!class_exists($this->controller)){
                echo '<h1>Controller class not found.</h1>';
                return;
            }

            $parents = class_parents($this->controller);

            // ensure it extends the Controller class
            if(!in_array("Controller", $parents)){
                echo '<h1>Base Controller not found as parent class.</h1>';
                return;
            }

            // ensure method exists

            if(!method_exists($this->controller, $this->action)){
                echo '<h1>Method does not exist.</h1>';
                return;
            }

            // otherwise return the appropriate controller with action and request
            return new $this->controller($this->action, $this->request);

        }

        public function getController(){
            return $this->controller;
        }
    }
?>