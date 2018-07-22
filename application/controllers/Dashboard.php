<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 public function __construct() 
    {
        parent::__construct();
        $this->load->Library('session');
        $this->load->model("auth_model");
    }

    public function index(){
    	redirect("dashboard/home");
    }

	public function createLead($offset = 0)
	{
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded CreateLead");
		$this->load->model('lead_insert');
		$this->load->library('table');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database('Regency');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');


		// $this->form_validation->set_rules('username', 'Username', 'callback_username_check');

        if ($this->form_validation->run() == FALSE){
                $this->load->template('dashboard_create_lead');
        }
        else{
        		$this->lead_insert->insert_lead();
                $this->load->template('form_success');
                
        }
	}

	public function success(){
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->template('form_success');
	}

	
     public function pagination(){
     	//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$this->load->database('BridgeStreet');
		$this->load->library('table');
		$this->load->library('pagination'); //We gon try some werid things 
		$this->load->helper('html');


		$config['base_url'] = 'http://localhost/index.php/dashboard/pagination';
		$config['total_rows'] = 50;
		$config['per_page'] = 10; 
		$config['uri_segment'] = 3;
		$config['num_links'] = 20;
		$config['full_tag_open'] = "<ul class='pagination'>";
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><a href="#">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $config['prev_link'] = '<i class="fa fa-long-arrow-left"></i>Previous Page';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_link'] = 'Next Page<i class="fa fa-long-arrow-right"></i>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';



		$this->pagination->initialize($config); 
		$this->db->select('email, name, timestamp');
		$data["records"] = $this->db->get('ActiveRequests', $config['per_page'], $this->uri->segment(3));
		$data["links"] = $this->pagination->create_links();


		//$this->load->model("dashboard_home_model");
		//$data['res'] = $this->dashboard_home_model->getFullTable();
		// var_dump($data);

		//$this->pagination->initialize($config); 
		$this->load->template('dashboard_main_view', $data);
     }

     public function profile()
	{
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded Profile");
		$this->load->model("users_model");
		$this->load->model('lead_insert');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database('Regency');
        //$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//$this->form_validation->set_rules('signature', 'Signature', 'trim');

		$username = $this->auth_model->getUsername($token);
        $data['email'] = $this->auth_model->getEmail($token);
        $data['signature'] = $this->users_model->getSignature($username);
		$data['body'] = (isset($_SESSION["message"]) ? $_SESSION["message"] :"" );

        if ($this->form_validation->run() == FALSE){
				$this->load->template('dashboard_profile',$data);
			    $this->session->set_flashdata("message","");

        }
        else{
				$this->session->set_flashdata("message","Profile Updated!");
        		$this->lead_insert->updateProfile($data);
        		redirect('dashboard/profile');
        }

	}

	public function createBid(){

		//Authenticate the token first.

		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded CrateBid");

		$this->load->model('lead_insert');
		$this->load->model('query_model');
		$this->load->library('table');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->database('Regency');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$get = $this->input->get();
		if(isset($get['id']) && isset($get['s'])){
			$data['header'] = "Create Bid for ". $get['s']." Lead ID: ".$get['id'];
			$data['leadDetail'] = "Lead ID: ".$get['id'];

			$data['id'] = $get['id'];
			$data['source'] = $get['s'];

			$tableHeaders = $this->query_model->getLeadDetails($data['id'], $data['source']);
			$data['tableHeaders'] = isset($tableHeaders) ? $tableHeaders : "";
			//var_dump($tableHeaders);

		}
		else{
			$data['header'] = "Create New Bid";
		}
		if(isset($_POST['leadID'])){
			$data['id'] = $_POST['leadID'];
		}
		else{
			$data['id'] = 25;
		}
		if($data['source'] == 'BridgeStreet'){
		// $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
	        if ($this->form_validation->run() == FALSE){
	                $this->load->template('dashboard_create_bid_bridgestreet',$data);
	        }
	        else{
	        		$data['email'] = $this->lead_insert->insert_bid($data['id']);
	                $this->load->template('bid_success',$data);
			}
		}
		if($data['source'] == 'Sirva'){
			if ($this->form_validation->run() == FALSE){
	                $this->load->template('dashboard_create_bid_sirva', $data);
	        }
	        else{
	        		$data['email'] = $this->lead_insert->insert_bid($data['id']);
	                $this->load->template('bid_success',$data);
			}
		}
		if($data['source'] == 'Regency'){
			if ($this->form_validation->run() == FALSE){
	                $this->load->template('dashboard_create_bid_regency', $data);
	        }
	        else{
	        		$data['email'] = $this->lead_insert->insert_bid($data['id']);
	                $this->load->template('bid_success',$data);
			}
		}
	}


	public function ActiveLeads(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded ActiveLeads");
		$this->load->model('metrics_model');
		$data['res'] = json_encode($this->metrics_model->buildActiveLeads());
		$this->load->template('dashboard_active_leads', $data);
	}

	public function SubmittedQuotes(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Loaded SubmittedQuotes");
		$source = $this->input->get("source")?:"bridgestreet";
		$this->load->model('metrics_model');
		$metricData = $this->metrics_model->buildSubmittedQuotes($source);
		$data['res'] = $metricData['res'];
		$data['columns'] = $metricData["cols"];
		$data['source'] = $source;
		$this->load->template('dashboard_submitted_quotes', $data);
	}

	public function metrics(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$this->load->template('dashboard_metrics');
	}

	public function dev(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		l("Someone is in DEV screen");
		$this->load->template("test_view");
	}

	public function home(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$this->load->model("users_model");
		$this->load->model("query_model");
		l("Loaded Dashboard Home.");
		$data['name'] = $this->users_model->getName($this->auth_model->getUsername($token));
		$history = $this->query_model->leadsVsBids(30);
		$today = $this->query_model->getTodaysData();
		$data['activeLeadsToday'] = $today[0];
		$data['bidsSubmittedToday'] = $today[1];
		$data['bidsWonToday'] = $today[2];
		//$data['raw'] = $history[0];
		//$data['buckets'] = $history[1];
		$data['morris'] = json_encode($history[2]);
		$this->load->template('dashboard_main',$data);
	}

	public function markLeadAsInactive(){
		//Authenticate the token first.
		$token = isset($_SESSION['token']) ? $_SESSION['token'] : NULL;
		if(!$this->auth_model->authenticate($token)) {
			$this->session->set_flashdata("message","You are not logged in");
			redirect();
		}
		$get = $this->input->get();
		if(!isset($get['id'])){
			redirect('dashboard/createBid');
		}
		else{
			$this->load->model("metrics_model");
			$this->metrics_model->markLeadAsInactive($get['id']);
		}
		
		redirect('dashboard/ActiveLeads');
	}
}
