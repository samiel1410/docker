<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class FrecuenciaPendular extends Component
{
    public $longitud=1;
    public function render(){
        $respuestas= HTTP::get('https://movpendular.azurewebsites.net/CalcularFrecuencia?'.'longitud='.$this->longitud);
        $res = $respuestas ->json();
        //dd($respuestas->json());
        return view('livewire.frecuencia-pendular',compact('res'));
    }
}
