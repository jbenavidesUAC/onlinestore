<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once 'AbstractController.php';
class VerifyLogin extends AbstractController {

    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario','',TRUE);        
    }

    function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('inputEmail', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('inputPassword', 'Password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('autorizar/index');
        }
        else
        {
            redirect('home','refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('inputEmail');
        //query the database
        $result = $this->usuario->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'email' => $row->email
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Usuario y/o contraseña incorrecto');
            return false;
        }
    }
}
?>