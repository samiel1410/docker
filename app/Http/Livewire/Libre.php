<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Libre extends Component
{
    public $posicion=0,$velocidad=0,$tiempo=0;
    public function render(){
        $respuestas= HTTP::get('https://api-grupo6.herokuapp.com/caida_libre?'.'posicion_inicial='.$this->posicion.'&'.'velocidad_inicial='.$this->velocidad.'&'.'tiempo_caidalibre='.$this->tiempo);
        $res = array($respuestas ->json());
        //dd($respuestas->json());
        return view('livewire.libre',compact('res'));
    }
}
