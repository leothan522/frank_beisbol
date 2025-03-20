<?php

namespace App\Livewire\Web;

use App\Models\Partido;
use Livewire\Component;

class HomeComponent extends Component
{
    public $lastPartido = null;
    public $partidos;

    public function render()
    {
        $this->lastPartido();
        return view('livewire.web.home-component');
    }

    protected function lastPartido(): void
    {
        $last = Partido::where('fecha', '>=', now())->orderBy('fecha', 'ASC')->first();
        if ($last){
            $this->lastPartido = $last;
        }
    }



}
