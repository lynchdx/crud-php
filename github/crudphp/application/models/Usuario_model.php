<?php

class Usuario_model extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function selectPerfilModel(){

        $query = $this->db->query("select * from perfil");
        return $query->result();
        //esta consulta la mando al controlador.
    }

    public function insertarUsuarioModel($idPer, $nombre, $apellido, $correo, $telefono){

        $arrayDatos = array(
            'id_per' => $idPer,
            'nombre_usu' => $nombre,
            'apellido_usu' => $apellido,
            'correo_usu' => $correo,
            'telefono_usu' => $telefono
        );

        //              nombre tabla
        $this->db->insert('usuario', $arrayDatos);
    }



    public function listarUsuariosModel(){

        $query = $this->db->query("select * from usuario u inner join perfil p on u.id_per=p.id_per");
        return $query->result();
    }

   public function borrarUsuarioModel($id){

       //borrar el usuario de la tabla usuario
       $this->db->where('id_usu', $id);
       $this->db->delete('usuario');
   }

   public function editarUsuarioModel($id){

       $query = $this->db->query("select * from  usuario u inner join perfil p on u.id_per=p.id_per where u.id_usu= $id");
       return $query->result();
   }

   public function modificarUsuarioModel($var_id_usu, $var_id_per, $var_nombre_usu,$var_apellido_usu, $var_correo_usu, $var_telefono_usu){

         $arrayDatos = array(
            'id_per' => $var_id_per,
            'nombre_usu' => $var_nombre_usu,
            'apellido_usu' => $var_apellido_usu,
            'correo_usu' => $var_correo_usu,
            'telefono_usu' => $var_telefono_usu
        );
       $this->db->where('id_usu', $var_id_usu);
       $this->db->update('usuario', $arrayDatos);

   }
}
