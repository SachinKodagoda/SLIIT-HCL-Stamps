<?php

class Stamp extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('StampModel');
    }
    
    public function index($id)
    {
        echo $id;
        $stampData = $this->homeModel->findStampById($id);
        $data = [
            'page' => strtolower(__CLASS__),
            'stampData' => $stampData,
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
