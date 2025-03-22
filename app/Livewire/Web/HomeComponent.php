<?php

namespace App\Livewire\Web;

use App\Models\Partido;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeComponent extends Component
{
    #[Locked]
    public $lastID = null;
    public $lastTitle = null;
    public $lastFecha = null;
    public $lastEstadio = null;
    public $lastUrl = '#';
    public $localLogo = null;
    public $localNombre = null;
    public $localMini = null;
    public $visitanteLogo = null;
    public $visitanteNombre = null;
    public $visitanteMini = null;
    public $cuentaRegresiva;
    public $enVivo = false;
    public $listarPartidos;

    public function render()
    {
        $this->lastPartido();
        $this->getPartidos();
        return view('livewire.web.home-component');
    }

    protected function lastPartido(): void
    {
        $ahora = Carbon::now();
        $hoy = Carbon::today();
        $this->cuentaRegresiva = $ahora;
        $last = Partido::where('fecha', '>=', $hoy)->where('finalizado', 0)->orderBy('fecha', 'ASC')->orderBy('hora', 'ASC')->first();
        if ($last){
            $this->lastID = $last->id;
            $this->lastTitle = $last->title;
            $this->lastFecha = fechaEnLetras($last->fecha).' / '.getFecha($last->hora, 'h:i a');
            $this->lastEstadio = $last->equipo_local->estadio;
            $this->lastUrl = $last->url;
            $this->localLogo = verImagen($last->equipo_local->image_logo);
            $this->localNombre = $last->equipo_local->nombre;
            $this->localMini = $last->equipo_local->mini;
            $this->visitanteLogo = verImagen($last->equipo_visitante->image_logo);
            $this->visitanteNombre = $last->equipo_visitante->nombre;
            $this->visitanteMini = $last->equipo_visitante->mini;
            $this->cuentaRegresiva = Carbon::parse($last->fecha.' '.$last->hora);
            $this->enVivo = $ahora->gte($this->cuentaRegresiva);
        }
    }

    protected function getPartidos()
    {
        $hoy = Carbon::today();
        $this->listarPartidos = Partido::where('fecha', '>=', $hoy)->where('finalizado', 0)->where('id', '!=', $this->lastID)->limit(6)->orderBy('fecha', 'ASC')->orderBy('hora', 'ASC')->get();
    }

    public function verVideo($id, $movil = false)
    {
        $ahora = Carbon::now();
        $partido = Partido::find($id);
        if ($partido){
            $inicio = Carbon::parse($partido->fecha.' '.$partido->hora);
            if ($ahora->lte($inicio)){
                LivewireAlert::title('El evento no ha iniciado.')
                    ->text('Este evento estará disponible en la fecha y hora prevista.')
                    ->position('center')
                    ->withCancelButton('OK')
                    ->timer(5000)
                    ->info()
                    ->show();
            }else{
                if (!$movil){
                    $this->dispatch('initVideo', id: $partido->id);
                }else{
                    $explode = explode('v=', $partido->url);
                    $this->dispatch('launchModal', url: $explode[1]);
                }
            }
        }
    }

    #[On('initVideo')]
    public function initVideo($id)
    {
        //JS
    }

    #[On('launchModal')]
    public function launchModal($url)
    {
        //JS
    }



}
