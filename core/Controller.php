<?php

class Controller {
    public function model($model) {
        require_once "../Activity/models/$model.php";
        return new $model ();
    }
    
    public function view($view, $data = Array()) {
        require_once "../Activity/views/$view.php";
    }
}

?>