<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class layout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

    public function layout1()
	{
		$this->load->view('layout1/index');
	}

    public function layout8()
    {
        $this->load->view('layout8/index');
    }
    public function layout9()
    {
        $this->load->view('layout9/index');
    }

    // 
    public function corporate()
    {
        $this->load->view('corporate');
    }
}
