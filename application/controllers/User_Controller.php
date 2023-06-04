<?php



class User_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model("User_Model");
    }

    public function z(){
        redirect(base_url('Home'));
    }

    public function index(){
        $data['staff_all_data'] = $this->User_Model->staff_all_data();
        $data['nav_all_data']   = $this->User_Model->nav_all_data();
        $this->load->view('user/index', $data);
    }

    public function about(){
        $data['nav_all_data']   = $this->User_Model->nav_all_data();
        $this->load->view('user/about', $data);
    }

    public function services(){
        $data['nav_all_data']   = $this->User_Model->nav_all_data();
        $this->load->view('user/service', $data);
    }

    public function gallery(){
        $data['nav_all_data']   = $this->User_Model->nav_all_data();
        $this->load->view('user/gallery', $data);
    }

    public function contact(){
        $data['nav_all_data']   = $this->User_Model->nav_all_data();
        $this->load->view('user/contact', $data);
    }

}