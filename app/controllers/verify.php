<?php

class Verify extends BaseController
{
    

    public function index()
    {
        $data = [
            'page' => strtolower(__CLASS__)
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
