<?php
class template {
	protected $_ci;
	
	function __construct()
	{
		$this->_ci =&get_instance();
	}

	function display($template,$data=null)
	{
		$data['_content']=$this->_ci->load->view($template,$data, true);
		
		$this->_ci->load->view('dasbor_view.php',$data);
		// $data['nama']='yoga';
		// $this->template->display('template.php',$data);
	}
}