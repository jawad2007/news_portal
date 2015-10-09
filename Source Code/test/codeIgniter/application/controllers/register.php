<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user');
		$this->load->model('articles');
		session_start();

		
	}

	public function index() {
		$data['name'] = '';
		$data['email'] = '';
		$this->load->view('register',$data);
	}

	public function register_user()
	{
		if ($_POST) {
			
			$this->load->helper('url');

			$user_name = $_POST['InputName'];
			$email = $_POST['InputEmail'];
			$nameCount = $this->user->isUserNameExist($user_name);
			if($nameCount >0)
			{
				$data['name_error'] = 'User name is already registerd.';
				$data['success']='';
			}
			$emailCount = $this->user->isEmailExist($email);
			if($emailCount > 0)
			{
				$data['email_error'] = 'Email is already registered.';
				$data['success']='';
				
			}

			if($nameCount >0 && $emailCount >0)
			{
				$data['both_error'] = 'User name and email both are registered.';
				$data['name_error']  ='';
				$data['email_error']='';
				$data['success']='';
			}
			$data['name'] = $user_name;
			$data['email'] = $email;
			if($nameCount==0 && $emailCount==0)
			{
					  $config = Array(
					  'protocol' => 'smtp',
					  'smtp_host' => 'ssl://smtp.googlemail.com',
					  'smtp_port' => 465,
					  'smtp_user' => 'your@gmail.com',
					  'smtp_pass' => 'password',
					  'mailtype' => 'html',
					  'charset' => 'iso-8859-1',
					  'wordwrap' => TRUE
					);
					  //$this->load->library('email', $config);
					   $this->email->initialize($config);
					  $this->email->set_newline("\r\n");
					  $this->email->from('jawadsmail@gmail.com', 'BBC News');
					  $this->email->to($email);
					  $this->email->subject('News Channel Registration');
					  $html = '<p>Please click on link to complete your registration.</p><br/>
					  			<a href=\"'.$this->config->base_url().'register/new_password/'.$user_name.'\" target="_blank">'.$this->config->base_url().'register/new_password/'.$user_name.'</a>';
					  $this->email->message($html);
					  if (!$this->email->send()) {
					    $data['success'] = 'Email send is failed. Please try again';
						$data['name'] = '';
						$data['email'] = ''; 
					}
					  else {
					    $data['success'] = 'Email is sent to you. Check your email.';
					     $data_user = array(
							'user_name'	=>	$user_name,
							'user_email'	=> $email
							);

						$user_id = $this->user->create_user($data_user);
							$data['name'] = '';
							$data['email'] = '';
					  }
			}


			//$this->post->insert_post($data);
			$this->load->view('register',$data);
		} 
		else
		{
			$data['both_error'] = '';
			$data['name_error']  ='';
			$data['email_error']='';
			$data['success']='';
			$data['name'] = '';
			$data['email'] = '';
			$this->load->view('register',$data);

		}

	}

	public function new_password($user_name)
	{

			$data['success']='';
			$data['username']=$user_name;
			$this->load->view('newpassword',$data);
	}

	public function set_password($user_name)
	{
		if ($_POST) {
			$userInfo = $this->user->get_password($user_name);
			if($userInfo['user_password'])
			{
				redirect(base_url().'news');
			}
			$password = $_POST['InputNewPassword'];
			$data_user = array(
							'user_password'	=>	$password
							);
			$this->user->update_user($user_name,$data_user);
			$data['success']='You can now login.';
			$data['username']=$user_name;
			$_SESSION['set_password']= $user_name;
			$this->load->view('newpassword',$data);
		}
		else
		{
			$data['success']='';
			if(isset($_SESSION['set_password']))
			{
				$data['username']=$_SESSION['set_password'];
			}
			else
			{
					session_unset(); 

			// destroy the session 
				session_destroy();
	 			redirect(base_url().'news');
			}
			$this->load->view('newpassword',$data);
		}
	}

	public function SingIn()
	{
		$data['username']='';
		$data['password']='';
		$this->load->view('login',$data);
	}
	
	public function login()
	{
		if ($_POST) {
			$user_name = $_POST['InputUserName'];
			$password = $_POST['InputPassword'];
			$nameCount = $this->user->isUserNameExist($user_name);
			
			if($nameCount ==1)
			{
					$userInfo = $this->user->get_password($user_name);
					if($userInfo['user_password']==$password)
					{
						$data['articles'] = $this->view_user_article($user_name);
						$data['user_name'] = $user_name;
						$_SESSION['user_name'] = $user_name;
						$_SESSION['articles'] = $this->view_user_article($user_name);
						$this->load->view('usermain',$data);
					}
					else
					{
						$data['error'] = 'Password is incorrect';
						$this->load->view('login',$data);
					}
			}
			else
			{

				$data['error'] = 'User name is incorrect';
				$this->load->view('login',$data);
			}
		}
		else if(!isset($_SESSION['user_name']))
		{
			$data['username']='';
			$data['password']='';
			$this->load->view('login',$data);
		}
	    else if(isset($_SESSION['articles']))
	    {
	    	$data['articles']=$_SESSION['articles'] ;
	    	$data['user_name']=$_SESSION['user_name']; 
	    	$this->load->view('usermain',$data);

	    }

	}

	public function view_user_article($user_name){
	   $result = $this->articles->get_user_article($user_name);
		if ($result != false) {
		return $result;
		} else {
		return 'Database is empty !';
	}
 }
 public function view_table(){
	$result = $this->articles->show_all_news();
		if ($result != false) {
		return $result;
		} else {
		return 'Database is empty !';
	}
	}

 public function logout()
 {
 	session_unset(); 

// destroy the session 
	session_destroy();
 	redirect(base_url().'news');
 }

 public function delete_user_post($id,$userName)
 {
 	$this->articles->delete_user_article($id);
 	$data['articles'] = $this->view_user_article($userName);
	$this->load->view('usermain',$data);

 }

 public function new_post($user_name)
 {
 		$data['error'] = '';
 		$data['user_name'] = $user_name;
		$this->load->view('user_post',$data);
 }

 public function save_post($user_name)
 {
 	if ($_POST) {
 		
 		$title = $_POST['PostTitle'];
 		$text = $_POST['PostText'];
 		/*$config['upload_path'] = $this->config->base_url().'images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000';
		$config['max_width']  = '2000';
		$config['max_height']  = '800';

		$this->load->library('upload', $config);
		// if doesn't upload
		$this->upload->do_upload();
		$data = array('upload_data' => $this->upload->data());*/
			
			$new_image_name = 'image_' . date('Y-m-d-H-i-s') . '_' . uniqid() . '.jpg';
// do some checks to make sure the file you have is an image and if you can trust it
		move_uploaded_file($_FILES["PostPhoto"]["tmp_name"], '././images/'.$new_image_name);
		$data_user = array(
							'title'	=>	$title,
							'text'  => $text,
							'photo' => $new_image_name,
							 'user_name' => $user_name
							);

		$this->articles->create_article($data_user);
		$data['articles'] = $this->view_user_article($user_name);
		$data['user_name'] = $user_name;
		$_SESSION['articles'] = $this->view_user_article($user_name);
		$this->load->view('usermain',$data);



 	}
 }
}

?>