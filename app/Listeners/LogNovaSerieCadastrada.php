<?php

namespace App\Listeners;

use App\Events\NovaSerie;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogNovaSerieCadastrada implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NovaSerie  $event
     * @return void
     */
    public function handle(NovaSerie $event)
    {
        $nomeSerie     = $event->nomeSerie;
        $qtdTemporada  = $event->qtdTemporadas;
        $qtdEpisodios  = $event->qtdEpisodios;

        \Log::info('Nova série cadastrada ' . $nomeSerie . ', com ' . $qtdTemporada . ' temporadas, possuindo ' . $qtdEpisodios . ' episódios cada uma.');

    }
}
