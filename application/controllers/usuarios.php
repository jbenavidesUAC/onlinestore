<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once 'AbstractController.php';
class usuarios extends AbstractController 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('autorizar/index');
	}

	public function registrar_usuario()
	{
		if ($this->is_post())
		{
			$this->usuario->poblar_propiedades($this->arregloPost);
			$this->usuario->insert();
			redirect('autorizar/index');
		}
		$datos = $this->formulario_usuarios();
		$datos['titulo']='Registrar Usuario';
		$this->load->view('usuarios/registrar_usuario',$datos);
	}

	protected function formulario_usuarios()
	{
		$arreglo_campos_usuario = array
		(
			'email' => array
						(
							'name' => 'email',
							'id' => 'email',
							'class' => 'form-control input-sx',
							'value' => '',
		 					'placeholder' => 'Ingrese su correo electrónico',
		 					'data-error' => 'El correo es requerido',
		 					'required' => 'required',
		 					'type' => 'email'
						),

			'contrasena' => array
						(
							'name' => 'contrasena',
							'id' => 'contrasena',
							'class' => 'form-control input-sx',
							'value' => '',
							'placeholder' => 'Ingrese su contraseña',
							'data-error' => 'La contraseña es necesaria',
							'required' => 'required',
							'type' => 'password'
						),

			'confirmar_contrasena' => array
						(
						 	'name' => 'confirmar_contrasena',
						 	'id' => 'confirmar_contrasena',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Vuelva a ingresar la contraseña',
						 	'data-error' => 'Debe volver a ingresar la contraseña',
						 	'required' => 'required',
						 	'data-match' => '#contrasena',
						 	'type' => 'password'
						),

			'cumpleanos' => array
						(
						 	'name' => 'cumpleanos',
						 	'id' => 'cumpleanos',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'data-error' => 'El cumpleaños es requerido',
						 	'required' => 'required',
						 	'type' => 'date'
						),

			'nombres' => array
						(
						 	'name' => 'nombres',
						 	'id' => 'nombres',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese sus nombres',
						 	'data-error' => 'El nombre es requerido',
						 	'required' => 'required',
						 	'type' => 'text'
						),

			'apellidos' => array
						(
						 	'name' => 'apellidos',
						 	'id' => 'apellidos',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese sus apellidos',
						 	'data-error' => 'El apellido es requerido',
						 	'required' => 'required',
						 	'type' => 'text'
						),

			'telefono' => array
						(
						 	'name' => 'telefono',
						 	'id' => 'telefono',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese su celular',
						 	'type' => 'text'
						),

			'fotografia' => array
						(
						 	'name' => 'fotografia',
						 	'id' => 'fotografia',
						 	'class' => 'form-control input-sx',
						 	'value' => '',
						 	'placeholder' => 'Ingrese una fotografía',
						 	'type' => 'file'
						)
		);
		return $arreglo_campos_usuario;
	}

	//registro de nuevos usuarios	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */





