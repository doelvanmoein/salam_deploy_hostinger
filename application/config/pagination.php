<?php

		// config
		// $config['base_url'] = 'http://localhost/_kemenag_sawahlunto/SistemPelaporanLKB/v1/index.php/UserManagement/index';
		// $config['base_url'] = 'http://localhost/_kemenag_sawahlunto/SistemPelaporanLKB/v1/UserManagement/index';
		// $config['total_rows'] = $this->ModelLKB->countAllUser();
		$config['per_page'] = 1;

		

		// $data['start'] = $this->uri->segment(3);
		// $data['dataUsers'] = $this->ModelLKB->getUser($config['per_page'], $data['start']);

		// styling
		$config['full_tag_open'] = '<nav aria-label="..." style="float: right;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = '<i class="bx bx-skip-previous"></i>';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = '<i class="bx bx-skip-next"></i>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');