<?php

Class Usuario_controller extends CI_Controller{

    function __construct() {
        parent::__construct();
       $this->load->model('Usuario_model'); //carga el modelo en el controller

    }


    //acá hay que rescatar todas las funcioines que vienen del modelo.
    public function index(){
        $data['vista_usuario'] = "usuario/usuario_view";
        $data['vista_editar_usuario'] = "usuario/editar_usuario_view";
        //la consulta del modelo la pongo acá.
        $data['selectPerfilController'] = $this->Usuario_model->selectPerfilModel();
        //trae el listado de usuarios
        $data['listarUsuariosController'] = $this->Usuario_model->listarUsuariosModel();
        $this->load->view("usuario/usuario_view", $data);

    }

    public function insertarUsuarioController(){
        $datos = $this->input->post();

        if(isset($datos))
        //echo $datos['txtNombre'];
        //exit;

        $var_id_per = $datos['optPer'];
        $var_nombre_usu = $datos['txtNombre'];
        $var_apellido_usu = $datos['txtApellido'];
        $var_correo_usu = $datos['txtCorreo'];
        $var_telefono_usu = $datos['txtTelefono'];

        $this->Usuario_model->insertarUsuarioModel($var_id_per, $var_nombre_usu,$var_apellido_usu, $var_correo_usu, $var_telefono_usu);
        redirect('Usuario_controller/index');



    }

    public function borrarUsuarioController($id = null){

        if ($id != null) {
            $this->Usuario_model->borrarUsuarioModel($id);
            redirect('Usuario_controller/index');
        }

    }


    //carga los datos cuando se edita
    public function editarUsuarioController($id = null){

        if ($id != null) {
            $data['vista_usuario'] = 'usuario/editar_usuario_view';
            //$data['vista_editar_usuario'] = "usuario/editar_usuario_view";
            $data['selectPerfilController'] = $this->Usuario_model->selectPerfilModel();
            $data['datosUsuario'] = $this->Usuario_model->editarUsuarioModel($id);
            $this->load->view('usuario/editar_usuario_view', $data);
        }else{

            redirect('../');
        }

    }

    public function modificarUsuarioController(){

        $datos = $this->input->post();

        if(isset($datos))
        //echo $datos['txtNombre'];
        //exit;

        $var_id_usu = $datos['txtIdUsuario'];
        $var_id_per = $datos['optPer'];
        $var_nombre_usu = $datos['txtNombre'];
        $var_apellido_usu = $datos['txtApellido'];
        $var_correo_usu = $datos['txtCorreo'];
        $var_telefono_usu = $datos['txtTelefono'];

        $this->Usuario_model->modificarUsuarioModel($var_id_usu, $var_id_per, $var_nombre_usu,$var_apellido_usu, $var_correo_usu, $var_telefono_usu);
        redirect('Usuario_controller/index');

    }
}
