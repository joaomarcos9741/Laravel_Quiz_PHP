<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerQuiz extends Controller
{
    private $perguntas = array();

    public function __construct()
    {
        $this->perguntas['pergunta01'] = 'A';
        $this->perguntas['pergunta02'] = 'B';
        $this->perguntas['pergunta03'] = 'C';
        $this->perguntas['pergunta04'] = 'A';
        $this->perguntas['pergunta05'] = 'B';
    }

    public function index(){
        session (['acertos' => 0]);
        return view ('pagina01') ;
    }

    public function dadosPagina01( Request $request){
         $resposta = $request->input ('pergunta');
        
         session(['resposta01' => $resposta]) ;
        
         if(strcmp ( $this-> perguntas['pergunta01'] , $resposta) == 0) {
            $acertos = session('acertos') ;
            $acertos++;
            session(['acertos' => $acertos]) ;
            session(['resultado01' => 'Acertou']) ;
         }else
            session(['resultado01' => 'Errou']) ;
        
         return view ('pagina02') ;
    }

    public function dadosPagina02( Request $request){
        $resposta = $request->input ('pergunta');
       
        session(['resposta02' => $resposta]) ;
       
        if(strcmp ( $this-> perguntas['pergunta02'] , $resposta) == 0) {
           $acertos = session('acertos') ;
           $acertos++;
           session(['acertos' => $acertos]) ;
           session(['resultado02' => 'Acertou']) ;
        }else
           session(['resultado02' => 'Errou']) ;
       
        return view ('pagina03') ;
   }

   public function dadosPagina03( Request $request){
        $resposta = $request->input ('pergunta');
   
        session(['resposta03' => $resposta]) ;
   
        if(strcmp ( $this-> perguntas['pergunta03'] , $resposta) == 0) {
            $acertos = session('acertos') ;
            $acertos++;
            session(['acertos' => $acertos]) ;
            session(['resultado03' => 'Acertou']) ;
        }else
            session(['resultado03' => 'Errou']) ;
   
        return view ('pagina04') ;
    }

    public function dadosPagina04( Request $request){
        $resposta = $request->input ('pergunta');
       
        session(['resposta04' => $resposta]) ;
       
        if(strcmp ( $this-> perguntas['pergunta04'] , $resposta) == 0) {
           $acertos = session('acertos') ;
           $acertos++;
           session(['acertos' => $acertos]) ;
           session(['resultado04' => 'Acertou']) ;
        }else
           session(['resultado04' => 'Errou']) ;
       
        return view ('pagina05') ;
   }
   public function dadosPagina05( Request $request){
        $resposta = $request->input ('pergunta');
       
        session(['resposta05' => $resposta]) ;
       
        if(strcmp ( $this-> perguntas['pergunta05'] , $resposta) == 0) {
           $acertos = session('acertos') ;
           $acertos++;
           session(['acertos' => $acertos]) ;
           session(['resultado05' => 'Acertou']) ;
        }else
           session(['resultado05' => 'Errou']) ;

        $dados = array();

        $dados[1]['gabarito'] = $this->perguntas['pergunta01'];
        $dados[1]['resposta'] = session('resposta01');
        $dados[1]['resultado'] = session('resposta01');

        $dados[2]['gabarito'] = $this->perguntas['pergunta02'];
        $dados[2]['resposta'] = session('resposta02');
        $dados[2]['resultado'] = session('resposta02');

        $dados[3]['gabarito'] = $this->perguntas['pergunta03'];
        $dados[3]['resposta'] = session('resposta03');
        $dados[3]['resultado'] = session('resposta03');

        $dados[4]['gabarito'] = $this->perguntas['pergunta04'];
        $dados[4]['resposta'] = session('resposta04');
        $dados[4]['resultado'] = session('resposta04');

        $dados[5]['gabarito'] = $this->perguntas['pergunta05'];
        $dados[5]['resposta'] = session('resposta05');
        $dados[5]['resultado'] = session('resposta05');

        $acertos = session('acertos');

        if( $acertos == 10)
            $dados ['mensagem'] = "Excelente!! você acertou todas!! Você é um super fã!!";
        else if($acertos > 7)
            $dados ['mensagem'] = "Muito bom!! você acertou ". $acertos . " de 10!! Parabéns !!";
        else if($acertos > 5)
            $dados ['mensagem'] = " Você conhece um pouco sobre a banda !! Mas pode melhorar. Você acertou " . $acertos . " de 10.";
        else if( $acertos == 5)
            $dados ['mensagem'] = " Você acertou 50% do teste !! Está de recuperação !! ";
        else
            $dados ['mensagem'] = " Precisa se inteirar mais sobre a banda ! Você acertou " . $acertos . " de 10.";

        return view('resultado', compact('dados'));
        
   }
   

}
