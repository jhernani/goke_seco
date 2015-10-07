<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Model_users extends CI_Model
	{
		public function can_login()
		{
			$this->db->where('username',$this->input->post('username'));
			$this->db->where('password',md5($this->input->post('password')));

			$query = $this->db->get('user');

			if($query->num_rows() == 1)
			{
				return true;				
			}
			else
			{
				return false;
			}
		}
		public function register_user()
		{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'first_name' => $this->input->post('first-name'),
				'middle_name' => $this->input->post('middle-name'),
				'last_name' => $this->input->post('last-name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'usertype' => 2
				);

			$query = $this->db->insert('user',$data);
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function getData()
		{
			 $query = $this->db->get('user');
        
        	return $query;
		}
		public function getData_report()
		{
			 $query = $this->db->get('physical_report');
        
        	return $query;
		}
		public function delete_user()
		{
			$query = $this->db->delete('user',array('user_id'=>$this->user_id));

			return $query;
		}
		public function add_report_model()
		{
			// $p_atm =  $this->db->select('accom_this_month'/'target_to_date');
			// $p_atd = $this->db->select('accom_to_date'/'annual_target');

			$data = array(
				'mfo' => $this->input->post('mfo'),
				'project' => $this->input->post('project'),
				'month_year' => $this->input->post('month-year'),
				'performance_indicator' => $this->input->post('performance-indicator'),
				'annual_target' => $this->input->post('annual-target'),
				'target_this_month' => $this->input->post('target-this-month'),
				'target_to_date' => $this->input->post('target-to-date'),
				'accom_this_month' => $this->input->post('accom-this-month'),
				'accom_to_date' => $this->input->post('accom-to-date')
				// 'percent_atm' => $p_atm
				// 'percent_atd' => $p_atd
				);

			$query = $this->db->insert('physical_report',$data);
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function update_user()
		{

			$this->db->where('physical_id',$this->physical_id);
			$query = $this->db->update('user', $this); 
			return $query;

		}

		public function delete_report()
		{
			$query = $this->db->delete('physical_report',array('physical_id'=>$this->physical_id));

			return $query;
		}

		
	}