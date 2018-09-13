<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('add_model');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		//echo "url=".base_url();
		//echo "<br>";
		$this->load->view('main_view');

	}
	
	public function addform()
	{
		//echo $r_id;
		//$data['r_id']=$r_id;
		$this->load->view('add_view');
	}
	public function add()
	{
		//$data['title']="เพิ่ม";
		$data['nums']=$this->add_model->get_row("c_user");
		$this->load->view('add_view',$data);
		//echo "OK";
		if($this->input->post('btnsave')!=null){
			$data = array(
				'u_id' => '',
				'u_name' => $this->input->post("u_name"),
				'u_lname' => $this->input->post("u_lname"),
				'u_nickname' => $this->input->post("u_nickname"),
				'u_address' => $this->input->post("u_address"),
				'u_time' => $this->input->post("u_time"),
				'u_date' => $this->input->post("u_date"),
				'u_tel' => $this->input->post("u_tel")
			);
			$this->db->insert('c_user',$data);
			redirect("member/showuser/","refresh");
			//exit();
		}
	}

	public function log()
	{
		$this->load->view('login_view');
	}

	public function login(){
		$username  = $this->input->post('username');
		$password  = $this->input->post('password');

	$numr = $this->db->query("SELECT * from c_login where username='$username' && password='$password'");
		$chknum = $numr->num_rows();
		if($chknum==1){ 
			foreach ($numr->result() as $row)
			{
			    $status =$row->status;
				$id =$row->id;

			$data = array(
				'id'=>$id,
				'status'=>$status
						);
			redirect("member/show","refresh");
		}
	}
	////user&pass OK
		else{
			echo "no";
			echo "SELECT * from c_login where username='$username' && password='$password'";
		}
	}
	

public function showuser()
	{
		$sql="select * from c_user";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('showuser',$data);
	}
	public function show()
	{
		$sql="select * from c_user";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view('showview',$data);
	}
	public function del($u_id){
		$this->db->delete('c_user',array('u_id' => $u_id));
		redirect("member/show","refresh");
		exit();
	}
	public function editt($u_id){
		$sql="select * from c_user where u_id='$u_id'";
		$rs=$this->db->query($sql);
		if ($rs->num_rows()==0){
			$data['rs']=array();
		}else{
			$data['rs']=$rs->row_array();
		}
			$this->load->view("editview",$data);
	}
	public function editt2(){
		if($this->input->post('btnsave')!=null){
			$u_id = $this->input->post("u_id");
			$data = array(
				'u_name' => $this->input->post("u_name"),
				'u_nickname' => $this->input->post("u_nickname"),
				'u_tel' => $this->input->post("u_tel"),
				'u_date' => $this->input->post("u_date"),
				'u_time' => $this->input->post("u_time"),
				'u_tel' => $this->input->post("u_tel"));
			$this->db->update('c_user',$data, array('u_id' => $u_id));
			redirect("member/show","refresh");
			exit();
		}
	}

}