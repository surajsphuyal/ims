<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['page'] = 'call by index function.';
        $this->load->view('pages/dash_board', $data);
    }

    public function about()
    {
        $data['page'] = 'call by about function.';
        $this->load->view('pages/dash_board', $data);
    }
 
}