<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Cinetica extends Component
{
    public $masa=0,$velocidad=0;
    public function render(){
        $respuestas= HTTP::get('https://aqueous-brushlands-93108.herokuapp.com/api/EnergiaCinetica/'.$this->masa.'/'.$this->velocidad);
        $res = $respuestas ->json();
        return view('livewire.cinetica',compact('res'));
    }
}
