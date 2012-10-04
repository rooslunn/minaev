<?php

class Task1_Controller extends Base_Controller {
    
    public $restful = true;

    public function get_main() {
        return Response::make(123, 200, array('Content-Type' => 'text/plain'));
    }
}