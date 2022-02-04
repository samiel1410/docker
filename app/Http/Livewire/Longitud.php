<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Longitud extends Component
{
  
    public $longitud="longitud_onda",$medio="oxigeno",$frecuencia=5.044;
    public function render(){
        $respuestas= HTTP::get('https://api-calculos.herokuapp.com/api/sonido?'.'tipo='.$this->longitud.'&'.'medio='.$this->medio.'&'.'frecuencia='.$this->frecuencia);
        $res = array($respuestas ->json());
        //dd($respuestas->json());
        return view('livewire.longitud',compact('res'));
    }
}
