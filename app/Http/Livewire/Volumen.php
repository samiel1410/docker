<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Volumen extends Component
{
    public $volumen1=1,$presion1=1,$temperatura1=1,$presion2=1,$temperatura2=1;
    public function render(){
        $respuestas= HTTP::get('https://mysterious-river-04485.herokuapp.com/api/volumen/'.$this->volumen1.'/'.$this->presion1.'/'.$this->temperatura1.'/'.$this->presion2.'/'.$this->temperatura2);
        $res = $respuestas ->json();
        
        return view('livewire.volumen',compact('res'));
    }
}
