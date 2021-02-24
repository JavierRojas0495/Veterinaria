<?php
include_once '../model/Usuario/UsuarioModel.php';

class UsuarioController{

    Public function listarUsuario(){

        include_once '../view/Usuario/Usuario/listar.php';
    }

    public function crearUsuario(){

        include_once '../view/Usuario/Usuario/crear.php';
    }


}