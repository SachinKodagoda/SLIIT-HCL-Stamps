<?php

class Main extends BaseController
{
    public function index()
    {
        $data = [
            'page' => strtolower(__CLASS__)
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }

    public function page_404()
    {
        $data = [
            'page' => strtolower(__CLASS__)
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
