<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Parabolico extends Component
{
    public $velocidad=0,$aceleracion=0,$tiempo=0;
    public function render(){
        $respuestas= HTTP::get('https://api-grupo6.herokuapp.com/movimiento_parabolico?'.'velinicial='.$this->velocidad.'&'.'aceleracion='.$this->aceleracion.'&'.'tiempo='.$this->tiempo);
        $res = array($respuestas ->json());
        //dd($respuestas->json());
        return view('livewire.parabolico',compact('res'));
    }
}
