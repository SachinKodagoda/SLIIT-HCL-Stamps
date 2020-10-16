<?php
class BaseController
{
    // Load models
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
    
    // Load views
    public function view($controler, $method, $data = [])
    {
        
        if (file_exists('../app/views/' . $controler . '/'. $method . '.php')) {
            require_once '../app/views/' . $controler . '/'. $method . '.php';
        } else {
            require_once '../app/views/modules/page_404.php';
        }
    }
}
