@extends('layout')

@section('content')

    <section class="md:pt-16 sm:pt-28 pt-16 mb-10">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-gradient-to-r from-white/80 via-transparent">
                    <div class="container max-w-6xl">
                        <div class="row">
                            <div class="col-sm-4 text-center text-primary">
                        {{-- <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Crédito de auto</h2> --}}
                                <div class="text-2xl mb-10">
                                    <p>Es momento de crecer con junto con <b>SOC</b>
                                    <br> simula tu credito ahora.</p>
                                </div>
                                <a href="{{ url('comparador-auto') }}" class="text-center inline-block max-w-full w-64 px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase">Simula tu cr&eacute;dito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="my-20">
        <div class="container mx-auto max-w-6xl text-center px-4 lg:text-2xl md:text-xl text-lg text-center">
            {{-- <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-10">¿En qué consiste nuestro servicio?</h3> --}}

            <p>En cuestión de minutos sabrás si eres candidato a un crédito de auto.<br>
                Uno de nuestros expertos te ayudará en la cotización del auto que deseas y te pedirá la documentación correspondiente.<br><br>
                Con datos mínimos puedes adquirir el crédito.<br>
                Se te notificará cómo se hará el pago del enganche y se elaborará el contrato.<br>
                Firma del contrato y disposición del crédito.</p>

        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Tipos de crédito de auto</h3>
            {{-- <h4 class="text-center lg:text-2xl md:text-xl text-lg mb-8 font-light">Contamos con los siguientes servicios</h4> --}}

            {{-- <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8"> --}}
            <div class="flex flex-wrap justify-center -mx-4">
                @if (!empty($productos))
                @foreach ($productos as $item_h)
                
                <div class="md:w-1/2 w-full px-4 mb-8">
                    <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[10rem] flex">
                        <figure class="flex-none w-1/3 pl-4 py-4"><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/auto').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                        <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                            <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">{{ $item_h['nombre'] }}</h4>
                            <p>{{ $item_h['resumen'] }}</p>
                            <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                                <a href="{{ url('credito-auto').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-8">Hacemos sinergia con los mejores</h3>

            <div class="text-center">
                @foreach ($galeria as $img)
                <div class="inline-block px-8 mb-4">
                    <a href="{{ $img['url'] }}" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="{{ URL::asset('img/bancos/'.$img['img']) }}" alt="{{ $img['alt'] }}" />
                    </a>
                </div>
                    
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
