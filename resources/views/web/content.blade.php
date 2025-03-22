@if($lastID)

    <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">

        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0 @if($enVivo) d-none @endif">
            <strong>Cuenta Regresiva</strong>
            <div id="date-countdown"><span class="countdown-block"><span class="countdown-block"><span class="label">00</span>Días</span><span class="countdown-block"><span class="label">00</span>Horas </span><span class="countdown-block"><span class="label">00</span>min </span><span class="countdown-block"><span class="label">00</span>Segundos</span></span></div>
        </div>

        <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0 @if(!$enVivo) d-none @endif">
            <strong>Partido en curso</strong>
        </div>

        <div class="ml-auto pr-4 order-md-2">
            <div class="h5 text-black text-uppercase text-center text-lg-left">
                <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                    <img src="{{ $localLogo }}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{ $localMini }}</span>
                </div>
                <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline">vs</span>
                <div class="d-block d-md-inline-block">
                    <img src="{{ $visitanteLogo }}" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">{{ $visitanteMini }}</span>
                </div>
            </div>
        </div>


    </div>

    <div class="bg-image overlay-success rounded mb-5 d-none d-md-block" data-stellar-background-ratio="0.5" wire:click="verVideo({{ $lastID }})" style="background-image: url('{{ asset('img/sport/beisbol_2.jpg') }}');cursor: pointer;">


            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                    <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                            <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                <img src="{{ $localLogo }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3 class="h5 mb-0 text-black text-uppercase">{{ $localNombre }}</h3>
                                <span class="text-uppercase small country text-black">Local</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="d-inline-block">
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">{{ $lastTitle }}</small></p>
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded">
                            <span class="h3" wire:loading.remove wire:target="verVideo({{ $lastID }})">VS</span>
                            <span class="h3" wire:loading wire:target="verVideo({{ $lastID }})">Cargando...</span>
                        </div>
                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{ $lastFecha }}</small></p>
                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{ $lastEstadio }}</small></p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 text-center text-lg-right">
                    <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                            <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="{{ $visitanteLogo }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text order-1">
                                <h3 class="h5 mb-0 text-black text-uppercase">{{ $visitanteNombre }}</h3>
                                <span class="text-uppercase small country text-black">Visitante</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    <div class="bg-image overlay-success rounded mb-5 d-md-none" data-stellar-background-ratio="0.5" wire:click="verVideo({{ $lastID }}, 'true')" style="background-image: url('{{ asset('img/sport/beisbol_2.jpg') }}');cursor: pointer;">


            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                    <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                            <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                <img src="{{ $localLogo }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3 class="h5 mb-0 text-black text-uppercase">{{ $localNombre }}</h3>
                                <span class="text-uppercase small country text-black">Local</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                    <div class="d-inline-block">
                        <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">{{ $lastTitle }}</small></p>
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded">
                            <span class="h3" wire:loading.remove wire:target="verVideo({{ $lastID }}, 'true')">VS</span>
                            <span class="h3" wire:loading wire:target="verVideo({{ $lastID }}, 'true')">Cargando...</span>
                        </div>
                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{ $lastFecha }}</small></p>
                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{ $lastEstadio }}</small></p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 text-center text-lg-right">
                    <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                            <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="{{ $visitanteLogo }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="text order-1">
                                <h3 class="h5 mb-0 text-black text-uppercase">{{ $visitanteNombre }}</h3>
                                <span class="text-uppercase small country text-black">Visitante</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    <a id="link_video_{{ $lastID }}" href="{{ $lastUrl }}" class="play-button popup-vimeo d-none">ver video</a>

@endif

@if($listarPartidos->isNotEmpty())
    <div class="row">
        <div class="col-md-12">

            <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Calendario</h2>
            <div class="site-block-tab">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Próximos partidos</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row align-items-center">
                            <div class="col-md-12">

                                @foreach($listarPartidos as $partido)

                                    <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry d-none d-md-flex" wire:click="verVideo({{ $partido->id }})" style="cursor: pointer;">
                                        <div class="col-4 col-lg-4 mb-4 mb-lg-0">

                                            <div class="text-center text-lg-left">
                                                <div class="d-block d-lg-flex align-items-center">
                                                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                        <img src="{{ verImagen($partido->equipo_local->image_logo) }}" alt="Image" class="img-fluid">
                                                    </div>
                                                    <div class="text">
                                                        <h3 class="h5 mb-0 text-black">
                                                            <span class="d-none d-md-block">{{ $partido->equipo_local->nombre }}</span>
                                                            <span class="d-md-none">{{ $partido->equipo_local->mini }}</span>
                                                        </h3>
                                                        <span class="text-uppercase small country">Local</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4 col-lg-4 text-center mb-4 mb-lg-0">
                                            <div class="d-inline-block">
                                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded">
                                                    <span class="h5" wire:loading.remove wire:target="verVideo({{ $partido->id }})">VS</span>
                                                    <span class="h5" wire:loading wire:target="verVideo({{ $partido->id }})">Cargando</span>
                                                </div>
                                                <p class="mb-0 d-none d-md-block">
                                                    <small class="text-uppercase text-black font-weight-bold">
                                                        {{ fechaEnLetras($partido->fecha).' / '.getFecha($partido->hora, 'h:i a') }}
                                                        {{--10 de septiembre / 7:30 pm--}}
                                                    </small>
                                                </p>
                                                <p class="mb-0 d-md-none">
                                                    <small class="text-uppercase text-black font-weight-bold">
                                                        {{ fechaEnLetras($partido->fecha, 'D-MMM').' / '.getFecha($partido->hora, 'h:i a') }}
                                                        <!--10-sep-->
                                                    </small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-4 col-lg-4 text-center text-lg-right">
                                            <div class="">
                                                <div class="d-block d-lg-flex align-items-center">
                                                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                        <img src="{{ verImagen($partido->equipo_visitante->image_logo) }}" alt="Image" class="img-fluid">
                                                    </div>
                                                    <div class="text order-1 w-100">
                                                        <h3 class="h5 mb-0 text-black">
                                                            <span class="d-none d-md-block">{{ $partido->equipo_visitante->nombre }}</span>
                                                            <span class="d-md-none">{{ $partido->equipo_visitante->mini }}</span>
                                                        </h3>
                                                        <span class="text-uppercase small country">Visitante</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry d-md-none" wire:click="verVideo({{ $partido->id }}, 'true')" style="cursor: pointer;">
                                        <div class="col-4 col-lg-4 mb-4 mb-lg-0">

                                            <div class="text-center text-lg-left">
                                                <div class="d-block d-lg-flex align-items-center">
                                                    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                        <img src="{{ verImagen($partido->equipo_local->image_logo) }}" alt="Image" class="img-fluid">
                                                    </div>
                                                    <div class="text">
                                                        <h3 class="h5 mb-0 text-black">
                                                            <span class="d-none d-md-block">{{ $partido->equipo_local->nombre }}</span>
                                                            <span class="d-md-none">{{ $partido->equipo_local->mini }}</span>
                                                        </h3>
                                                        <span class="text-uppercase small country">Local</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-4 col-lg-4 text-center mb-4 mb-lg-0">
                                            <div class="d-inline-block">
                                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded">
                                                    <span class="h5" wire:loading.remove wire:target="verVideo({{ $partido->id }})">VS</span>
                                                    <span class="h5" wire:loading wire:target="verVideo({{ $partido->id }})">Cargando</span>
                                                </div>
                                                <p class="mb-0 d-none d-md-block">
                                                    <small class="text-uppercase text-black font-weight-bold">
                                                        {{ fechaEnLetras($partido->fecha).' / '.getFecha($partido->hora, 'h:i a') }}
                                                        {{--10 de septiembre / 7:30 pm--}}
                                                    </small>
                                                </p>
                                                <p class="mb-0 d-md-none">
                                                    <small class="text-uppercase text-black font-weight-bold">
                                                        {{ fechaEnLetras($partido->fecha, 'D-MMM').' / '.getFecha($partido->hora, 'h:i a') }}
                                                        <!--10-sep-->
                                                    </small>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-4 col-lg-4 text-center text-lg-right">
                                            <div class="">
                                                <div class="d-block d-lg-flex align-items-center">
                                                    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                        <img src="{{ verImagen($partido->equipo_visitante->image_logo) }}" alt="Image" class="img-fluid">
                                                    </div>
                                                    <div class="text order-1 w-100">
                                                        <h3 class="h5 mb-0 text-black">
                                                            <span class="d-none d-md-block">{{ $partido->equipo_visitante->nombre }}</span>
                                                            <span class="d-md-none">{{ $partido->equipo_visitante->mini }}</span>
                                                        </h3>
                                                        <span class="text-uppercase small country">Visitante</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a id="link_video_{{ $partido->id }}" href="{{ $partido->url }}" class="play-button popup-vimeo d-none">ver video</a>

                                @endforeach

                                <!-- Button trigger modal -->
                                <button id="launch_modal" type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            {{--<div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Partido en curso</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>--}}
                                            <div class="modal-body p-0">
                                                <div class="embed-responsive embed-responsive-16by9" wire:ignore>
                                                    <iframe id="iframe_video" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            {{--<div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endif
