<?php
class BaseController
{
    // Load views
    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            require_once '../app/views/page_404/index.php';
            // die('View does not exist');
        }
    }
}
