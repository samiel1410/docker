<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Frecuencia extends Component
{
    public $longitud="frecuencia",$medio="oxigeno",$longitud_onda=62.649;
    public function render(){
        $respuestas= HTTP::get('https://api-calculos.herokuapp.com/api/sonido?'.'tipo='.$this->longitud.'&'.'medio='.$this->medio.'&'.'longitud_onda='.$this->longitud_onda);
        $res =  array($respuestas ->json());
        
        return view('livewire.frecuencia',compact('res'));
    }
}
