<?php
// Rss.php controller
class Rss extends CI_Controller {

	public function __construct()
	{//everything here is global to all methods in the controller
		parent::__construct();
		$this->load->model('news_model');
		$this->config->set_item('banner','Rss Banner');
	}//End __construct function

	public function index()
	{
		$request = "http://rss.news.yahoo.com/rss/software"; //model
		$response = file_get_contents($request); //model
		$data['xml'] = simplexml_load_string($response); //model
//		$data['rss'] = $this->news_model->get_news();
		$data['title'] = 'Rss Feed';
		$this->load->view('rss/index', $data);	
	}//End index function
	
}//End News class