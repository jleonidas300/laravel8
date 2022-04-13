<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class ListadoCurso extends Component
{
    public function render()
    {
        return view('livewire.listado-curso', [
            'cursos' => Course::latest()->with('user')->take(9)->get()
        ]);
    }
}
