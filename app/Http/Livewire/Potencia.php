<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class Potencia extends Component
{
    public $m=1,$a=1,$d=1,$t=1;
    public function render(){
        $respuestas = HTTP::get('http://52.15.59.104/api/potencia?'.'m='.$this->m.'&'.'a='.$this->a.'&'.'d='.$this->d.'&'.'t='.$this->t);
       
        $res = array($respuestas ->json());
        return view('livewire.potencia',compact('res'));
    }
}
