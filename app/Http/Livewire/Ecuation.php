<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Ecuation extends Component
{
    public $a=0 ,$b=0,$c=0, $resp =0;
    public function render()
    {
        $respuesta = HTTP::get('http://52.15.59.104/api/equation?'.'a='.$this->a.'&'.'b='.$this->b.'&'.'c='.$this->c);
        $res =array($respuesta->json()) ;
        
        return view('livewire.ecuation' , compact('res'));
      
    }

}
