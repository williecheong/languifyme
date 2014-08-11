<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index() {
		$this->load->view('missing');
	}

	public function mailing_list() {
		if ( !IS_AJAX ){
			$this->load->view('missing');	
		} else {
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

			if ($this->form_validation->run() == FALSE) {
				echo 'invalid_email';
				return;
			} else {
				$email = $this->input->post('email');

				$this->db->select('*');
				$this->db->where( 'email', $email ); 
				$q = $this->db->get('mailing_list')->result(); 

				if (count($q) == 0){ //If there is any rows
					
					$data = array(	'email' => $email,
									'ip_address' => $_SERVER['REMOTE_ADDR'] );
					
					$this->db->insert('mailing_list', $data); 

					if( $this->db->affected_rows() != 0 ){
						echo 'success';
						return;
					} else {
						echo 'fail';
						return;
					}
				
				} else {
					$data = array( 'times' => $q[0]->times + 1 );
					$this->db->where('email', $email);
					$this->db->update('mailing_list', $data); 

					echo 'signed_up_before';
					return;
				}

			}//endif validation for valid email format
		}
	}

	public function message_box() {
		if ( !IS_AJAX ){
			$this->load->view('missing');	
		} else {
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');

			if ($this->form_validation->run() == FALSE) {
				echo 'invalid_email';
				return;
			} else {
				$this->form_validation->set_rules('message', 'Message', 'trim|required');
				if ($this->form_validation->run() == FALSE) {
					echo 'invalid_message';
					return;
				} else {

					$email = $this->input->post('email');
					$message = $this->input->post('message');
		
					$data = array(	'email' => $email,
									'message' => $message,
									'ip_address' => $_SERVER['REMOTE_ADDR'] );
					
					$this->db->insert('message_box', $data); 

					if( $this->db->affected_rows() != 0 ){
						echo 'success';
						return;
					} else {
						echo 'fail';
						return;
					}
				}//endif validation for valid message
			}//endif validation for valid email format
		}
	}

}
