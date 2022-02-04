<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Densidad extends Component
{
    public $presion=1,$densidad=1,$temperatura=1,$pesoM=1;
    public function render(){
        $respuestas= HTTP::get('https://mysterious-river-04485.herokuapp.com/api/densidad/'.$this->presion.'/'.$this->densidad.'/'.$this->temperatura.'/'.$this->pesoM);
        $res = $respuestas ->json();
        return view('livewire.densidad',compact('res'));
    }
}
