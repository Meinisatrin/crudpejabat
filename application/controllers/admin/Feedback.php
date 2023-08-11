<?php

class Feedback extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/feedback_list');
	}

}