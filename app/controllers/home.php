<?php

class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('StampModel');
    }

    public function index($page=1,$view='')
    { 
        $perPage = 10;
        $noOfTotalPages = $this->homeModel->getPageCount($perPage);
        $stampData = $this->homeModel->getStampList($perPage, $page);
        $data = [
            'page' => strtolower(__CLASS__),
            'view' => $view,
            'perPage' => $perPage,
            'noOfTotalPages' => $noOfTotalPages,
            'stampData' => $stampData,
            'pageNeeded' => $page
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
