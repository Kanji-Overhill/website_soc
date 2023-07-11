@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 mb-10">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Hipotecario.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Credito Hipotecario</h2>
                        <div class="text-2xl mb-10">
                            <p>Es momento de crecer con junto con <b>SOC</b>
                            <br> simula tu credito ahora.</p>
                        </div>
                        <a href="{{ url('simulador-credito-hipotecario') }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simula tu cr&eacute;dito</a>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-2">Conoce las opciones de créditos hipotecarios</h3>
            <h4 class="text-center lg:text-2xl md:text-xl text-lg mb-8 font-light">Contamos con los siguientes servicios</h4>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                @if (!empty($productos))
                @foreach ($productos as $item_h)
                
                <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/hipotecario').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">{{ $item_h['nombre'] }}</h4>
                        <p>{{ $item_h['resumen'] }}</p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="{{ url('credito-hipotecario').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>

    <section class="py-8 mb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-8">Nuestros Proceso</h3>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                <div class="rounded-lg bg-white-smoke p-8 inline-flex flex-col">
                    <figure class="w-full text-center mb-2"><img class="h-16 w-16 inline-block" src="{{ URL::asset('') }}" alt=""></figure>
                    <h4 class="lg:text-2xl md:text-xl text-lg">Precalifica tu crédito</h4>
                </div>
                <div class="rounded-lg bg-white-smoke p-8 inline-flex flex-col">
                    <figure class="w-full text-center mb-2"><img class="h-16 w-16 inline-block" src="{{ URL::asset('') }}" alt=""></figure>
                    <h4 class="lg:text-2xl md:text-xl text-lg">Recibe asesoría</h4>
                </div>
                <div class="rounded-lg bg-white-smoke p-8 inline-flex flex-col">
                    <figure class="w-full text-center mb-2"><img class="h-16 w-16 inline-block" src="{{ URL::asset('') }}" alt=""></figure>
                    <h4 class="lg:text-2xl md:text-xl text-lg">Ingresamos tu expediente a la institución financiera</h4>
                </div>
                <div class="rounded-lg bg-white-smoke p-8 inline-flex flex-col">
                    <figure class="w-full text-center mb-2"><img class="h-16 w-16 inline-block" src="{{ URL::asset('') }}" alt=""></figure>
                    <h4 class="lg:text-2xl md:text-xl text-lg">Obtén tu financiamiento</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 mb-8 bg-white-smoke">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-2">Nuestras herramientas financieras</h3>
            <h4 class="text-center lg:text-2xl md:text-xl text-lg mb-8 font-light">Te ayudamos a tomar la elección que más te convenga de acuerdo a tus necesidades.</h4>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                
                <div class="bg-white overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/home/herramientas/comprartucasa.jpg') }}" alt="" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">¿Cómo comprar una casa?</h4>
                        <p></p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="https://info.socasesores.com/como-comprar-una-casa">Conocer m&aacute;s ⟶</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/home/herramientas/eligetucredito.jpg') }}" alt="" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">Guía de crédito hipotecario</h4>
                        <p></p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="https://info.socasesores.com/guia-de-credito-hipotecario">Conocer m&aacute;s ⟶</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/home/herramientas/alcancedecredito.jpg') }}" alt="" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">Conoce tu alcance de crédito para comprar casa</h4>
                        <p></p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="https://info.socasesores.com/guia-de-credito-hipotecario">Conocer m&aacute;s ⟶</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/home/herramientas/precalificatucredito.jpg') }}" alt="" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">Precalifica tu crédito hipotecario</h4>
                        <p></p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="https://info.socasesores.com/precalificacion-soc">Conocer m&aacute;s ⟶</a>
                        </div>
                    </div>
                </div>
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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="./js/states.js"></script>
    <script type="text/javascript">
        $('.slick-slider').slick({
            infinite        :   true,
            autoplay        :   true,
            autoplaySpeed   :   3000,
            speed           :   1000,
            arrows          :   false,
            fade            :   true,
            dots            :   false,
            pauseOnHover    :   false,
        });
        $('.banks-slider').slick({
            infinite        :   true,
            autoplay        :   true,
            autoplaySpeed   :   5000,
            speed           :   800,
            focusOnSelect   :   true,
            arrows          :   false,
            dots            :   false,
            centerMode      :   true,
            centerPadding   :   '40px',
            // vertical        :   true,
            slidesToShow    :   3,
            slidesToScroll  :   1,
            responsive: [{
              breakpoint: 485,
              settings: {slidesToShow: 1,slidesToScroll: 1,infinite: true, }
            }]
        });
    </script>
@endsection
