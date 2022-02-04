<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Tabla extends Component
{
    public $a=0 ,$b=0,$c=0, $resp =0;
    public function render()
    {
        $respuesta = HTTP::get('http://192.168.0.110:8000/api/segundoGrado/'.$this->a.'/'.$this->b.'/'.$this->c);
        $tabla = $respuesta->json();

        return view('livewire.ecuacion' , compact('tabla'));
        // foreach ($res as $r){
        //     $this->resp  =  $r['x1'];
        // }
    }
}
