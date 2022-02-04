<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Potencial extends Component
{
    public $masa=0,$velocidad=0,$altura=0;
    public function render(){
        $respuestas= HTTP::get('https://aqueous-brushlands-93108.herokuapp.com/api/EnergiaPotencial/'.$this->masa.'/'.$this->velocidad.'/'.$this->altura);
        $res = $respuestas ->json();
        return view('livewire.potencial',compact('res'));
    }
}
