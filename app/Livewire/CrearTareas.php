<?php

namespace App\Livewire;

use App\Models\Tareas;
use Livewire\Component;

class CrearTareas extends Component
{
    public $modal = false;
    public $fecha;
    public $descripcion;

    

    public function render()
    {
        return view('livewire.crear-tareas');
    }

    public function registrar()
    {
       $this->validate([
            'fecha'=>'required',
            'descripcion'=>'required'
       ]);

        Tareas::create([
            'fecha' => $this->fecha,
            'descripcion' => $this->descripcion
        ]);

        $this->reset(['modal', 'fecha', 'descripcion']);
        $this->dispatch('render');
    }
}
