<?php 

class Welcome extends CI_Controller {
	
	public function index()
	{
		
		$this->load->model('data');
		
		$data['view'] = 'page';
		$this->load->view('home',$data);

	}

	function aboutus(){
		
		$data['view']='aboutus';
		$this->load->view('home',$data);
	}

	function contactus(){
		$data['view']='contactus';
		$this->load->view('home',$data);
	}

	function faq(){
		$data['view']='faq';
		$this->load->view('home',$data);
	}

	function mobile($x){
		$this->load->model('data');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->session->set_userdata('ses',$x);
		$ses=$this->session->userdata('ses');
		$config['base_url'] = site_url().'/welcome/mobile/'.$ses;
		$config['total_rows'] = $this->data->count_data_mobile($ses);
		$config['per_page'] = 8; 
		$config['uri_segment']=4;
		$this->pagination->initialize($config); 

		$page=($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		
		$data['pages']=$this->pagination->create_links();
		$data['use']=$this->data->getdata($config['per_page'],$page,$ses);		
		$data['view']='mobile';
		
		$this->load->view('home', $data);
	}

	function buy($p){
		$this->load->model('data');
		$data['error']=0;
		if($p<0 ){
			$p=$p+1000;
			$data['error']=1;
		}
		
		$data['use']=$this->data->need($p);
		
		$data['view']='buying';
		
		$this->load->view('home', $data);
	}

	function search(){
		$this->load->model('data');
		
		$re['use']=NULL;
	
		if ($this->input->post('name')) {
        
	       
	        $s=$this->input->post('name');
	        $re['use']=$this->data->get_search($s);
        }

        $re['view']='result';
        
        $this->load->view('home',$re);
	}

	function compare($one){
		$this->load->model('data');
		
		$data['first']=$this->data->need($one);
		
		$data['second']=NULL;
		
		if ($this->input->post('name')) {
          
	        $two=$this->input->post('name');

	        $data['second']=$this->data->get_compare($two);
        }

         $data['view']='compare';

         if($data['second']==NULL) {

         }
       
         $this->load->view('home',$data);
     
	}
}

?>