<?php

class Task1_Controller extends Base_Controller {

    public $restful = true;

    private function get_formula($route, &$count) {
        $trash = Config::get('task1.trash');
        $f = str_replace($trash, '', $route);
        $opers = Config::get('task1.arithmetic');
        $f = str_replace(array_keys($opers), array_values($opers), $f, $count);
        return $f;
    }

    private function eval_route() {
        $route = URI::current();
        $formula = $this->get_formula($route, $action_count);
        $m = new EvalMath;
        $result = $m->e($formula);
        if (($action_count <= 10) && ($result !== false)) {
            return round($result, 0, PHP_ROUND_HALF_UP);
        } else {
            return 'Incorrect arithmetic route';
        }
    }

    public function get_main() {
        return Response::make($this->eval_route())
                ->header('Content-Type', 'text/plain');
    }
}