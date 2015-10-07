<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Site extends CI_Controller
	{
		public function index()
		{
			$this->load->view('header');
			$this->load->view('index');
		}
		public function login()
		{
			$this->load->view('header');
			$this->load->view('login');
		}
		public function signup()
		{
			$this->load->view('header');
			$this->load->view('signup');
		}
		public function about()
		{
			$this->load->view('header');
			$this->load->view('about');
		}
		public function contact()
		{
			$this->load->view('header');
			$this->load->view('contact');
		}
		public function admin()
		{
			if($this->session->userdata('is_logged_in'))
			{		
				$this->load->view('admin/header_admin'); 
				$this->load_users();

			}
			else
			{
				redirect('site/restricted');
			}
		}
		public function restricted()
		{
			$this->load->view('restricted');
		}
		public function login_validation()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username','|trim|required|xss_clean|callback_validate_credentials');
			$this->form_validation->set_rules('password', 'Password','|trim|required|md5');

			if($this->form_validation->run())
			{
				$data = array(
					'username' =>  $this->input->post('username'),
					'is_logged_in' => 1
				);
				$this->session->set_userdata($data);
				redirect('site/admin');
			} else
			{
				redirect('site/login');
			}

		}

		public function validate_credentials()
		{
			$this->load->model('model_users');

			if($this->model_users->can_login())
			{
				return true;
			}
			else
			{
				$this->form_validation->set_message('validate_credentials','Incorrect username or password.');
				return false;
			}
		}

		public function signup_validation()
		{
			$this->load->view('header');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('first-name','First Name','required|trim');
			$this->form_validation->set_rules('middle-name','Middle Name','required|trim');
			$this->form_validation->set_rules('last-name','Last Name','required|trim');
			$this->form_validation->set_rules('username','Username','required|trim|is_unique[user.username]');
			$this->form_validation->set_rules('password','Password','required|trim');
			$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');
			$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
			$this->form_validation->set_rules('phone','Phone','required|trim');

			$this->form_validation->set_message('is_unique',"That email address is already been used.");

			if($this->form_validation->run())
			{
				
				$this->load->model('model_users');
				// generate a random key

				// $key = md5(uniqid());

				// $this->load->library('email', array('mailtype'=>'html'));

				// $this->email->from('acecutejo@gmail.com','Ace Paulo');
				// $this->email->to($this->input->post('email'));
				// $this->email->subject("Confirm Account.")	;

				// $message = "<p> Thank you for signing up</p>";
				// $message .= "<p><a href='".base_url()."site/register_user/$key'>Click Here</a> to confirm account.</p>";
				
				// $this->email->message($message);

				// add them	to the temp_users db
				if($this->model_users->register_user())
				{
					echo "Successful!";

					redirect('site/login');	
					//  send and email to the user
					// if($this->email->send())
					// {	
					// 	echo "Success Registration! The email has been sent!";
					// }
					// else 
					// {
					// 	echo "Could not sent email.";
					// }
				}
				else
				{
					echo "Problem adding to database.";
				}

				
			}
			else
			{
				echo "Fill up Again Please";
				$this->load->view('signup');
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('site/index');	
		}
		public function load_users()
		{
			$this->load->model('model_users');
	        $data = array(); 
	        $data['users'] = $this->model_users->getData();
	        $this->load->view('admin/index',$data);
		}
		public function load_reports()
		{
			$this->load->model('model_users');
	        $data_report = array(); 
	        $data_report['reports'] = $this->model_users->getData_report();
	        $this->load->view('admin/show_report',$data_report);
		}
		public function show_reports()
		{	
			$this->load->view('admin/header_admin');
			$this->load_reports();
			
		}
		public function delete_user()
    	{
	        $this->load->model('model_users');
	        $data = new model_users();
	        $data->user_id=$this->input->post('user_id');
	        $result = $data->delete_user();
	            if(!$result)
	            {
	                echo mysqli_error($result);
	            }
	            else
	            {
	            	redirect('site/admin');
	            }
    	}       
		public function physical_report()
		{
			$this->load->view('admin/header_admin.php');
			$this->load->view('admin/physical_report');
		}
		public function add_report()
		{
			
			$this->load->library('form_validation');

			$this->form_validation->set_rules('mfo','Mfo','required|trim');
			$this->form_validation->set_rules('project','Project','required|trim');
			$this->form_validation->set_rules('month-year','Month/Year','required|trim');
			$this->form_validation->set_rules('performance-indicator','Performance Indicator','required|trim');
			$this->form_validation->set_rules('annual-target','Annual Target','required|trim');
			$this->form_validation->set_rules('target-this-month','Target This Month','required|trim');
			$this->form_validation->set_rules('target-to-date','Target To Date','required|trim');
			$this->form_validation->set_rules('accom-this-month','Accomplish To Month','required|trim');
			$this->form_validation->set_rules('accom-to-date','Accomplish To Date','required|trim');
		
			if($this->form_validation->run())
			{
				
				$this->load->model('model_users');
				if($this->model_users->add_report_model())
				{
					redirect('site/physical_report');
				}
				else
				{
					echo "Problem adding to database.";
				}
			}
		}
		
		public function delete_report()
    	{
	        $this->load->model('model_users');
	        $data = new model_users();
	        $data->physical_id = $this->input->post('physical_id');
	        $result = $data->delete_report();
	            if(!$result)
	            {
	                echo mysqli_error($result);
	            }
	            else
	            {
	            	redirect('site/show_reports');
	            }
    	}public function update_user_view()
    	{
    		$this->load->view('admin/header_admin');
    		$this->load->view('admin/update_user');
    	}

    	public function update_user()
    	{
    		$this->load->model('model_users');
    		$data = new model_users();

    		$data->user_id = $this->input->post('user-id');
    		$data->username = $this->input->post('username');
    		$data->password = $this->input->post('password');
    		$data->first_name = $this->input->post('first-name');
    		$data->middle_name = $this->input->post('middle-name');
    		$data->last_name = $this->input->post('last-name');
    		$data->email = $this->input->post('email');
    		$data->phone = $this->input->post('phone');
    		$result = $data->update_user();
    		if(!$result)
			{
				echo mysqli_error($result);
			}
			else
			{
				redirect('site/admin','refresh');
			}

	    	}    

	}
