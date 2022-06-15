<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {
    
    function __construct()
    {

        parent::__construct();

   
    }

    public function index()
    {
         $data['title'] = "Rembon Express";
         $data['main'] = "home/home/index";
    	 $this->load->view('home/template/index',$data);
    }

    public function about()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/about";
    	$this->load->view('home/template/index',$data);
    }
    
    public function how_it_work()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/how_it_work";
    	$this->load->view('home/template/index',$data);
    }

    public function measuring()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/measuring";
    	$this->load->view('home/template/index',$data);
    }

    public function packaging()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/packaging";
    	$this->load->view('home/template/index',$data);
    }

    public function term_condition()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/term_condition";
    	$this->load->view('home/template/index',$data);
    }

    public function tracking()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/tracking";
    	$this->load->view('home/template/index',$data);
    }

    public function tracking_result()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/tracking_result";
    	$this->load->view('home/template/index',$data);
    }

    public function contact_us()
    {
        $data['title'] = "Rembon Express";
        $data['main'] = "home/home/contact_us";
    	$this->load->view('home/template/index',$data);
    }
}