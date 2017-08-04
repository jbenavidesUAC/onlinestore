<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
require_once 'AbstractController.php';

class Home extends AbstractController 
{
	function __construct()
    {
        parent::__construct();     
    }

    function index()
    {
    	if ($this->session->userdata('logged_in'))
    	{
    		$session_data = $this->session->userdata('logged_in');
    		$data['id'] = $session_data['id'];
    		$data['email'] = $session_data['email'];
            if ($data['id'] == 1)
            {
    		    $this->load->view('administrador',$data);
            }
            else
            {
                $this->load->view('indice',$data);
            }
    	}
    	else
    	{
    		redirect('autorizar','refresh');
    	}
    }

    function logout()
    {
    	$this->session->unset_userdata('logged_in');
    	session_destroy();
    	redirect('autorizar','refresh');
    }
}
	
?>