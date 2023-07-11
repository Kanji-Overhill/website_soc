@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 mb-10">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url(https://socasesores.com/img/home/Hipotecario.jpg)]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">{{ $product['nombre'] }}</h2>
                        <div class="text-2xl mb-10">
                            {{ $product['subtitulo'] }}
                        </div>
                        <a href="{{ $product['cta_link'] }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">{{ $product['cta'] }}</a>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="row">
                <div class="col-sm-8 main-content">
                    <h4 class="lg:text-2xl md:text-xl text-lg font-light">{{ $linea_negocio['nombre'] }}</h4>
                    <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-8">{{ $product['nombre'] }}</h3>

                    {!! $product['description'] !!}
                </div>
                <div class="col-sm-4">
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                    hbspt.forms.create({
                        region: "na1",
                        portalId: "4954496",
                        formId: "{{ $product['form'] }}"
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4">
            @php
                $listado_lineas = [
                    '',
                    'creditos hipotecarios',
                    'creditos empresariales',
                    'seguros',
                    'seguros personales',
                    'seguros empresariales',
                    'creditos de auto',
                ];
            @endphp
            <h2 class="font-bold text-center lg:text-xl md:text-lg mb-6">Otras opciones en {{ $listado_lineas[$product['id_linea_negocio']] }}</h2>
            <div class="text-center">
                @foreach ($related as $element)
                <a href="{{ url(Request::segment(1).'/'.$element['url']) }}" class="inline-flex text-center justify-center items-center rounded-lg border border-ligth-primary hover:text-white hover:bg-secundary hover:border-secundary ease-in-out duration-300 md:px-6 p-4 mb-6 mx-1">
                    <em>{{ $element['nombre'] }}</em>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-8">Hacemos sinergia con los mejores</h3>

            <div class="flex flex-wrap justify-center mx-auto max-w-2xl">
                @foreach ($galeria as $img)
                <div class="inline-block px-8 mb-4">
                    <a href="{{ $img['url'] }}" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="{{ URL::asset('img/bancos/'.$img['img']) }}" alt="{{ $img['alt'] }}" />
                    </a>
                </div>
                    
                @endforeach
            {{-- 
                <div class="inline-block px-8">
                    <a href="https://www.afirme.com/afirme" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Afirme.png" alt="Logotipo Banco Afirme ">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.banorte.com/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Banorte.png" alt="Logotipo banco Banorte">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.vepormas.com/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Bx+.png" alt="Logotipo Seguros Ve por más">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.banamex.com/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Citibanamex.png" alt="Logotipo Banco CityBanamex">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.mifel.com.mx/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Mifel.png" alt="Logotipo Banca Mifel">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://banco.hey.inc/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Hey_banco.png" alt="Logotipo banco Hey, Banco">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.ibanonline.com.mx/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/empresarial/iBAN.png" alt="Logotipo banco iBAN">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.ion.com.mx/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Ion.png" alt="Logotipo banco Ion">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.hsbc.com.mx/" target="_blank" rel="noreferrer noopener">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Hsbc.png" alt="Logotipo banco HSBC">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.santander.com.mx/" target="_blank" rel="noopener noreferrer">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Santander.png" alt="Logotipo Banco Santander">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://www.scotiabank.com.mx/" target="_blank" rel="noopener noreferrer">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Scotiabank.png" alt="Logotipo Banco Scotiabank">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://tucasaexpress.mx/" target="_blank" rel="noopener noreferrer">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Tu_Casa_Express.png" alt="Logotipo Banco Tu Casa Express">
                    </a>
                </div>
                <div class="inline-block px-8">
                    <a href="https://yave.mx/" target="_blank" rel="noopener noreferrer">
                        <img class="h-10" src="https://socasesores.com/img/home/bancos/hipotecario/Yave.png" alt="Logotipo Banco Yave">
                    </a>
                </div>                
             --}}
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
