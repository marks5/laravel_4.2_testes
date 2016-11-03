<?php
    class UsuariosController extends BaseController{
      public $restful = true;

      public function index(){
        return View::make('usuarios.index')
        ->with('titulo','Lista de Usuarios')
        ->with('usuarios',Usuario::orderBy('login')->get());
      }

      public function view($id){
        return View::make('usuarios.detail')
        ->with('titulo','Detalhe do Usuario')
        ->with('usuario',Usuario::whereIn('id',$id)->get());
      }
    }
 ?>
