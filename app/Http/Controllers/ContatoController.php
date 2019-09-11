<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
      //return "Esse é o index do ContatoController";

      $contatos = [
                    (object)["nome" => "Maria", "tel"=> "54878877" ],
                    (object)["nome" => "Pedro", "tel"=> "64545445" ]
                  ];
        
       //testando o modelo
       $contato = new Contato();
       $con = $contato->lista();
       dd($con->nome.'-'.$con->tel);            
      
      return view('contato.index', compact('contatos'));
    } 
    public function criar(Request $req)
    {
      /* imprime somente o nome
       *dd($req['nome']);
       */ 
       /*imprime todos os campos*/  
      dd($req->all());
      return "Esse é o criar do ContatoController";
    } 
    public function editar()
    {
      return "Esse é o editar do ContatoController";
    } 
}
