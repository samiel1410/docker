<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Fuerza extends Component
{
    public $m=1,$a=1;
    public function render(){
        $respuestas = HTTP::get('http://52.15.59.104/api/fuerza?'.'m='.$this->m.'&'.'a='.$this->a);
        $res = array($respuestas ->json());
        return view('livewire.fuerza',compact('res'));
    }
}
