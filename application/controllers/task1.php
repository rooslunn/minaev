<?php

class Task1_Controller extends Base_Controller {
    
    public $restful = true;

    private function eval_route() {
        return URI::current();
    }

    public function get_main() {
        $resp = Response::make($this->eval_route());
        $resp.header('Content-Type', 'text/plain');
        return $resp;
    }
}