@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 ">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Seguros.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Crédito de auto</h2>
                        <div class="text-2xl mb-10">
                            <p>Es momento de crecer con junto con <b>SOC</b>
                            <br> simula tu credito ahora.</p>
                        </div>
                        <a href="{{ url('contacto') }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Contrata tu seguro</a>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="md:py-20 py-8 mb-10 bg-white-smoke">
        <div class="container mx-auto max-w-6xl text-center px-4 lg:text-2xl md:text-xl text-lg">
            <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-10">¿En qué consiste nuestro servicio?</h3>

            <p>Ayudamos a cumplir tu sueño de vivir tranquilo y protegido, asegurando lo que más amas frente a cualquier imprevisto que se presente.</p>

        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">¿Qué seguros puedes encontrar con nosotros?</h3>

            <h4 class="text-center border-b-2 mx-auto w-72 border-ligth-primary lg:text-4xl md:text-xl text-lg mb-8 font-light">Personas</h4>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 md:mb-20 mb-10">
                @if (!empty($productos_p))
                @foreach ($productos_p as $item_h)
                
                <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/seguros').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">{{ $item_h['nombre'] }}</h4>
                        <p>{{ $item_h['resumen'] }}</p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="{{ url('seguros').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
            

            <h4 class="text-center border-b-2 mx-auto w-72 border-ligth-primary lg:text-4xl md:text-xl text-lg mb-8 font-light">Empresariales</h4>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                @if (!empty($productos_e))
                @foreach ($productos_e as $item_h)
                
                <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/seguros').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">{{ $item_h['nombre'] }}</h4>
                        <p>{{ $item_h['resumen'] }}</p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="{{ url('seguros').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx max-w-6xl px-4 lg:text-2xl md:text-xl text-lg">
            <p>Te asesoramos sin costo, fácil y rápido para que compares y elijas el mejor seguro que se adapte a lo que necesitas entre las aseguradoras más importantes de México.</p>
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
