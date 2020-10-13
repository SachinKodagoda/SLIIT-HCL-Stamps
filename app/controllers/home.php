<?php

class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('StampModel');
    }

    public function home($pageNeeded = 1)
    {
        $perPage = 10;
        $noOfTotalPages = $this->homeModel->getPageCount($perPage);
        $stampData = $this->homeModel->getStampList($perPage,$pageNeeded);
        $data = [
            'page' => __FUNCTION__,
            'perPage' => $perPage,
            'noOfTotalPages' => $noOfTotalPages,
            'stampData' => $stampData,
            'pageNeeded' => $pageNeeded
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}


