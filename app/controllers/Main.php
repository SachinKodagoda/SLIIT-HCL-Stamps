<?php

class Main extends BaseController
{

    public function index()
    {
        $values = [
            "data" => []
        ];
        $this->view('main/index', $values);
    }


}
