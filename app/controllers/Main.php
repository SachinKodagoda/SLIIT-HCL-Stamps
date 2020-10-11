<?php

class Main extends BaseController
{

    public function login()
    {
        $values = [
            "data" => []
        ];
        $this->view(strtolower(basename(__FILE__, '.php'))."/".__FUNCTION__, $values);
    }

    public function page_404()
    {
        $values = [
            "data" => []
        ];
        $this->view(strtolower(basename(__FILE__, '.php'))."/".__FUNCTION__, $values);
    }
}
