<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Derivada extends Component
{
    
    public $base1 =0 , $base0 =0 , $base2 =0 ,$base3 =0 ,$base4 =0 ,$grado =1 , $message;
    public function render()
    {
        $respuesta = HTTP::get('http://52.15.59.104/api/derivada?'.'a='.$this->base2.'&'.'b='.$this->base1.'&'.'c='.$this->base0);
        $res =array($respuesta->json()) ;
        

        


        return view('livewire.derivada',compact('res'));
    }
}
