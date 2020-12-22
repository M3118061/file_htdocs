<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules(
        'username', 'Username',
        'trim|required|min_length[5]|max_length[12]|callback_username_check',
        array(
                'required'      => 'You have not provided %s.'
        ));
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

                 $this->form_validation->set_rules('kota_asal', 'Kota Asal', 'trim|required');

                  $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');

                $this->form_validation->set_rules('hobby', 'Hobby','trim|required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form/myform');
                }
                else
                {
                        $this->load->view('form/formsuccess');
                }
        }
        public function username_check($str)
        {
                if ($str == 'admin')
                {
                        $this->form_validation->set_message('username_check', 'The {field} field can not be the word "admin"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }
}