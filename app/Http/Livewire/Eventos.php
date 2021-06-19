<?php

namespace App\Http\Livewire;

use App\Models\Eventos as ModelsEventos;
use Livewire\Component;

class Eventos extends Component
{
    public $tituloEvento, $descripcion, $fechaEvento;
    public $abierto;
    
    public function render()
    {
        return view('livewire.eventos');
    }

    public function submit() {
        ModelsEventos::create([
            'titulo' => $this->tituloEvento,
            'descripcion' => $this->descripcion,
            'fecha_evento' => $this->fechaEvento,
            'estatus' => true
        ]);
    }

    public function abrirModal() {
        $this->abierto = true;
    }

    public function cerrarModal() {
        $this->abierto = false;
    }
}
