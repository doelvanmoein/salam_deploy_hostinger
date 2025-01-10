<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library(array('session', 'form_validation'));		
		$this->load->helper('session');
		// $this->user = $this->session->userdata('user_splkb');

		// destroy all session except for some exceptions, but disabled in this section because affected all controller's child
		// $keep_items = array('user_splkb', 'user_type', 'user_realname', 'userpass_splkb');
		// unset_userdata_except($keep_items);
	}

	public function index()
	{
		// $this->load->view('home');
		$this->load->view('homepage');
	}

	public function social_media()
	{
		$this->load->view('social_media');
	}

	// public function login_page()
	// {
	// 	$this->load->view('login-page');
	// }

	// public function profile()
	// {
	// 	if (!$this->user)
	// 	{
	// 		redirect(base_url());
	// 	}
	// 	$user = $this->ModelLKB->simpleQuery('t_user', array('user_id' => $this->user))->result_array();
	// 	$data['user'] = $user[0];	

	// 	$this->load->view('user-profile', $data);
	// }

	// public function profile_user()
	// {
	// 	$user = $this->ModelLKB->simpleQuery('t_user', array('user_id' => $this->user))->result_array();
	// 	$data['user'] = $user[0];	

	// 	$this->load->view('profile-user', $data);
	// }

	// public function user_management()
	// {
	// 	$this->load->view('user-management');
	// }

	// public function lkb_admin()
	// {
	// 	$this->load->view('lkb-admin');
	// }

	// public function lkb_user()
	// {
	// 	$this->load->view('lkb-user');
	// }

	// public function change_password()
	// {
	// 	$user = $this::detailUser();

	// 	if ($this->session->userdata('user_type')==1) {
	// 		$data['url'] = base_url('UserPage/admin_page');
	// 		$this->load->view('header-admin', $user);
	// 		$this->load->view('sidebar-admin');
	// 	} else{
	// 		$data['url'] = base_url('UserPage/user_page');
	// 		$this->load->view('header-user', $user);
	// 		$this->load->view('sidebar-user');
	// 	}

	// 	$this->load->view('change-password', $data);
	// 	$this->load->view('footer-admin');
	// }

	// public function do_change_password()
	// {
	// 	$this->form_validation->set_rules('old_password', 'Password Lama', 'callback_checkOldPass');
	// 	$this->form_validation->set_rules('new_password', 'Password Baru', 'required|min_length[6]|callback_checkNewPass');
	// 	$this->form_validation->set_rules('re_new_password', 'Re-Password Baru', 'required|matches[new_password]');

	// 	if ($this->form_validation->run()==FALSE)
	// 	{
	// 		$status=0; $locate = 0;
	// 		$msg= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 					'.validation_errors().'
	// 					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 				</div>';
	// 	} else{
	// 		$newPass = $this->security->xss_clean($this->input->post('new_password'));
	// 		$params = array('user_password' => md5($newPass));

	// 		$result = $this->ModelLKB->updateData('t_user', $params, array('user_id' => $this->user));

	// 		if ($result) 
	// 		{
	// 			$status = 1; $locate = 0;
	// 			$msg= '<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 						Sukses, password berhasil diperbaharui !!!
	// 						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 					</div>';
	// 		} else {
	// 			$status = 0; $locate = 0;
	// 			$msg= '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 						Terdapat kesalahan, password gagal diperbaharui !
	// 						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	// 					</div>';
	// 		}
	// 	}

	// 	$arrMsg = array(
	// 		'status' => $status,
	// 		'msg' => $msg
	// 	);

	// 	$this->session->set_flashdata('fdCPass', $arrMsg);

	// 	echo json_encode(array('status' => $status, 'msg' => $msg, 'url' => base_url('Home/change_password'), 'locate' => $locate));
	// }

	// public function checkOldPass($key) {
	// 	if (trim($key) == "" OR empty($key))
	// 	{
	// 		$this->form_validation->set_message('checkOldPass', 'The %s field is required !');
	// 		return FALSE;
	// 	} else {
	// 		$query = $this->ModelLKB->simpleQuery('t_user', array('user_password' => md5($key), 'user_id' => $this->user));
	// 		if ( empty($query->num_rows()) ) {
	// 			$this->form_validation->set_message('checkOldPass', 'The %s yang diinputkan salah !');    
	// 			return FALSE;
	// 		} else {
	// 			return TRUE;
	// 		}
	// 	}
	// }

	// public function checkNewPass($key) {
	// 	if (trim($key) == "" OR empty($key))
	// 	{
	// 		$this->form_validation->set_message('checkNewPass', 'The %s field is required !');
	// 		return FALSE;
	// 	} else if(strlen($key) < 6) {
	// 		$this->form_validation->set_message('checkNewPass', '%s should be at least 6 characters long or more !');
	// 		return FALSE;
	// 	} else {
	// 		$query = $this->ModelLKB->simpleQuery('t_user', array('user_password' => md5($key), 'user_id' => $this->user));
	// 		if ( !empty($query->num_rows()) ) {
	// 			$this->form_validation->set_message('checkNewPass', '%s tidak boleh sama dengan Password Lama !');    
	// 			return FALSE;
	// 		} else {
	// 			return TRUE;
	// 		}
	// 	}
	// }

	// public function logout(){
	// 	$this->session->unset_userdata(array('user_splkb'));
	// 	return redirect(base_url());
	// }

	// public function detailUser()
	// {
	// 	$data = array();
	// 	$detail = $this->ModelLKB->detailUser();
	// 	if(!empty($detail))
	// 	{
	// 		$data =  (array) $detail;
	// 	}

	// 	$path = $this->config->item('url').$this->config->item('path_photo').$detail->user_photo_name;
		
	// 	$check_path = get_headers($path);
	// 	$path = (!empty($detail->user_photo_name) && $check_path[0] == 'HTTP/1.1 200 OK') ? $path : base_url('assets2/img/no_photo.png');
	// 	$photo_status = (!empty($detail->user_photo_name) && $check_path[0] == 'HTTP/1.1 200 OK') ? 1 : 0;

	// 	$data['photo'] = '<img src="'.$path.'" alt="Profile" class="rounded-pill" />';
	// 	$data['photo_form'] = '<img src="'.$path.'" alt="" id="photoProfile" alt="Profile" class="rounded-pill" />';
	// 	$data['photo_small'] = '<img src="'.$path.'" alt="Profile" class="rounded-circle">';
	// 	$data['photo_status'] = $photo_status;
	// 	$data['photo_file'] = $detail->user_photo_name;

	// 	return $data;
	// }

	// public function destroy_sessions(){
	// 	// destroy all session except for some exceptions
	// 	// $keep_items = array('user_splkb', 'user_type', 'user_realname', 'userpass_splkb');
	// 	// unset_userdata_except($keep_items);
	// 	return "ok";
	// }
}
