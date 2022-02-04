<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Altura extends Component
{
    public $longitud=1,$angle=1;
    public function render(){
        $respuestas= HTTP::get('https://movpendular.azurewebsites.net/CalcularAltura?'.'longitud='.$this->longitud.'&'.'angle='.$this->angle);
        $res = $respuestas ->json();
        //dd($respuestas->json());
        return view('livewire.altura',compact('res'));
    }
}

