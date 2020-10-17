<?php

class Home extends BaseController
{
    public function __construct()
    {
        $this->homeModel = $this->model('StampModel');
    }

    public function index($param)
    {
        $pageNeeded = 1;
        if (isset($param[0])) {
            $pageNeeded = $param[0];
        }
        $perPage = 10;
        $noOfTotalPages = $this->homeModel->getPageCount($perPage);
        $stampData = $this->homeModel->getStampList($perPage, $pageNeeded);
        $data = [
            'page' => strtolower(__CLASS__),
            'perPage' => $perPage,
            'noOfTotalPages' => $noOfTotalPages,
            'stampData' => $stampData,
            'pageNeeded' => $pageNeeded
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
