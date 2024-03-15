<?php

namespace App\Livewire;

use App\Models\Tareas;
use Livewire\Component;

class MostrarTareas extends Component
{
    public $busqueda;
    
    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $tareas=Tareas::where('descripcion','like','%'.$this->busqueda.'%')
                        ->orderby('id','desc')->get();

        return view('livewire.mostrar-tareas',compact('tareas'));
    }
    

   
}
