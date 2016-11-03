<?php
  class PessoasController extends BaseController{
    public $restful = true;

    public function index(){
      return View::make('pessoas.index')
      ->with('titulo','Lista de Pessoas')
      ->with('pessoas', Pessoa::orderBy('nome')->get());
    }
  }
 ?>
