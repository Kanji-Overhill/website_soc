@extends('layout')

@section('content')
    @php
        $slug = [
            1 => 'Hipotecario',
            2 => 'Empresarial',
            3 => 'Seguros',
            6 => 'Auto',
        ];
        $color = [
            1 => 'ligth-primary',
            2 => 'ligth-secundary',
            3 => 'third',
            6 => 'ligth-third',
        ];
        $herramienta = [
            1 => 'simulador-credito-hipotecario',
            2 => 'comparador-ce',
            // 3 => 'seguros',
            6 => 'comparador-auto',
        ];
    @endphp
    
    <section class="md:pt-16 sm:pt-28 pt-20 mb-10 relative">
        <span class="absolute inset-y-0 left-0 w-96 max-w-[20%] bg-{{ (isset($color[$product['id_linea_negocio']]) ? $color[$product['id_linea_negocio']] : $color[$linea_negocio['parent']]) }}"></span>
        <div class="container mx-auto max-w-6xl px-4 md:py-20 py-10 relative z-10">
            <div class="flex flex-wrap items-center justify-center w-full md:pl-0 pl-[20%]">
                <figure class="md:w-1/4 w-full text-center md:mb-0 mb-10">
                    <img class="max-w-full w-auto md:h-auto h-44 inline-block" src="{{ URL::asset('img/'.(isset($slug[$product['id_linea_negocio']]) ? strtolower($slug[$product['id_linea_negocio']]) : strtolower($slug[$linea_negocio['parent']])).'/'.$product['miniatura']) }}" alt="{{ $linea_negocio['nombre']; }}" />
                </figure>
                <div class="md:w-3/4 w-full px-4 text-center">
                    <h1 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-8">{{ $product['nombre'] }}</h1>
                    <p>{{ $product['resumen']; }}</p>

                    @if (isset($herramienta[$product['id_linea_negocio']]))
                    
                    <a href="{{ url($herramienta[$product['id_linea_negocio']]) }}" class="text-center inline-block max-w-full w-64 px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase md:mt-20 mt-10">Simula tu cr&eacute;dito</a>
                    @elseif (isset($herramienta[$linea_negocio['parent']]))
                    
                    <a href="{{ url($herramienta[$linea_negocio['parent']]) }}" class="text-center inline-block max-w-full w-64 px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase md:mt-20 mt-10">Simula tu cr&eacute;dito</a>
                    @endif

                </div>
            </div>
        </div>
    </section>
    {{-- 
    <section class="md:pt-20 sm:pt-28 pt-20 mb-10">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url(https://socasesores.com/img/home/Hipotecario.jpg)]">
                <img src="{{ URL::asset('img/'.$slug[$product['id_linea_negocio']].'/'.$product['miniatura']) }}" alt="{{ $linea_negocio['nombre']; }}" />
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">{{ $product['nombre'] }}</h2>
                        <div class="text-2xl mb-10">
                            {{ $product['subtitulo'] }}
                        </div>
                        @if (!empty($product['cta_link']) && !empty($product['cta']))

                        <a href="{{ $product['cta_link'] }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">{{ $product['cta'] }}</a>
                        @endif
                        
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
     --}}

    @php
        $bloques = @explode('<!-- start_block -->', $product['description']);
    @endphp
    <section class="mb-8 product-description-blocks">
        <div class="container mx-auto max-w-6xl px-4 mb-8">
            <h4 class="md:text-lg font-bold rounded-full inline-block px-4 text-white pt-2 pb-1 mb-8 bg-{{ (isset($color[$product['id_linea_negocio']]) ? $color[$product['id_linea_negocio']] : $color[$linea_negocio['parent']]) }}">{{ $linea_negocio['nombre'] }}</h4>
            <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-8">{{ $product['nombre'] }}</h3>
            {!! $bloques[0] !!}

        </div>
    @if (!empty($bloques) && count($bloques) > 1)
        @for ($b = 1; $b < count($bloques); $b++)

    <div class="mb-8 {{ $b % 2 !== 0 ? 'py-8 bg-white-smoke' : '' }}">
        <div class="container mx-auto max-w-6xl px-4">
            {!! $bloques[$b] !!}

        </div>
    </div>
        @endfor
    @endif

    </section>

    <section class="py-8 mb-8 bg-white-smoke">
        <div class="container mx-auto max-w-6xl px-4 flex flex-wrap items-center">
            <div class="md:w-1/2 w-full md:mb-0 mb-10 text-center">
                <h3 class="lg:text-2xl md:text-2xl text-xl mb-8 md:px-6 text-primary mx-auto max-w-md font-light"><span class="leading-loose">Busca la oficina <strong class="font-bold">SOC</strong> m&aacute;s cercana a ti y solicita tu asesor&iacute;a</span></h3>

  
                <a href="{{ url('oficinas') }}" class="inline-block max-w-full w-72 text-center px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ubica la oficina SOC m&aacute;s cercana a ti</a>
            </div>
            <div class="md:w-1/2 w-full px-4">
                <div id="map" class="block w-full h-96 shadow-md"></div>
                <form action="{{ url('oficinas/micrositios/search') }}" method="post" id="search">
                    <input type="hidden" name="state" />
                    <input type="hidden" name="products" value="{{ isset($slug[$product['id_linea_negocio']]) ? $slug[$product['id_linea_negocio']] : $slug[$linea_negocio['parent']] }}" />
                </form>
            </div>
        </div>
    </section>

    <section class="py-8 mb-8">
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
            <h2 class="text-primary font-bold text-center lg:text-3xl md:text-2xl text-xl mb-6">
                {{-- Otras opciones en {{ $listado_lineas[$product['id_linea_negocio']] }} --}}
                Asesor&iacute;as
            </h2>
            <div class="flex lg:flex-nowrap flex-wrap text-center justify-center">
                <tr>
                @php $i = 0; @endphp
                @foreach ($related as $element)
                @if ($element['url'] !== $product['url'])
                @php $i++; @endphp
                <div class="md:grow-0 grow inline-flex justify-center items-center {{ $i == 1 ? 'lg:rounded-l-full border-l' : ($i == count($related) - 1  ? 'lg:rounded-r-full md:border-l-0 border-l' : 'md:border-l-0 border-l') }} border-y border-r border-grey-200 px-2 py-1 underline">
                    <a href="{{ url(Request::segment(1).'/'.$element['url']) }}"
                    {{-- 
                    class="inline-flex text-center justify-center items-center rounded-lg border border-ligth-primary hover:text-white hover:bg-secundary hover:border-secundary ease-in-out duration-300 md:px-6 p-4 mb-6 mx-1"
                    --}}
                    >
                        <em>{{ $element['nombre'] }}</em>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-3xl md:text-2xl text-xl font-bold mb-8">Hacemos sinergia con los mejores</h3>

            <div class="flex flex-wrap justify-center mx-auto max-w-2xl">
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
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW9Bxi85KlmGQ6o_fk69a90rWr1E3NmDE&callback=initMap&v=weekly"
      async
    ></script>
    <script type="text/javascript">
        let map;
        
        function initMap() {
            var locations = [["R & P ASOCIADOS -  Morelos","18.9325725","-99.2265988","faviconx25.png","Morelos"],["PRIBSA CONSULTORES HIPOTECARIOS - Veracruz","19.1537842","-96.1008132","faviconx25.png","Veracruz"],["UP CREDITS - Quintana Roo","21.1495228","-86.8207604","faviconx25.png","Quintana Roo"],["+ OPORTUNIDADES - Jalisco","20.7261066","-103.4621765","faviconx25.png","Jalisco"],["BLUE NATION -  CDMX","19.4311173","-99.1579417","faviconx25.png","CDMX"],["ACROPOLIS - CDMX","19.7191018","-99.1466561","faviconx25.png","Estado de Mexico"],["HAF IMPULSO - Tamaulipas","23.744353","-99.1464152","faviconx25.png","Tamaulipas"],["CREDI PLUS -  Nuevo Le\u00f3n","25.7167365","-100.364414","faviconx25.png","Nuevo Leon"],["CREDYSOL AAA -  Aguascalientes","21.9532721","-102.312746","faviconx25.png","Aguascalientes"],["HAF IMPULSO - San Luis Potos\u00ed","22.1456525","-101.0077995","faviconx25.png","San Luis Potosi"],["CERTUM -  Hidalgo","20.1098152","-98.7785945","faviconx25.png","Hidalgo"],["IMPULSORA DE CREDITOS - Puebla","19.0414398","-98.2062727","faviconx25.png","Puebla"],["CMF BROKERS -   Guerrero","17.673774","-101.5966554","faviconx25.png","Guerrero"],["INVERSOL - Guanajuato","21.1331684","-101.5994321","faviconx25.png","Guanajuato"],["TARGET HOME -  Chiapas","16.7546645","-93.127276","faviconx25.png","Chiapas"],["FINYA EIBERAS - Chihuahua","28.6236125","-106.0911381","faviconx25.png","Chihuahua"],["LR TU ASESOR INTEGRAL HIPOTECARIO -  Oaxaca","17.0755429","-96.7099329","faviconx25.png","Oaxaca"],["GPI - Quer\u00e9taro","20.5887932","-100.3898881","faviconx25.png","Queretaro"],["ATRIUM - Coahuila","25.5349645","-103.4497828","faviconx25.png","Coahuila"],["GRAF CONSULTORES -      CDMX","21.0181029","-89.5842429","faviconx25.png","Yucatan"],["1080 CONSULTORES -  Sinaloa","24.8233447","-107.3709632","faviconx25.png","Sinaloa"],["FUTURO EN TI -  Colima","19.2622143","-103.7189153","faviconx25.png","Colima"],["SOLUCIONES CONCIENTES - Baja California","32.5157365","-116.9875487","faviconx25.png","Baja California"],["NJ&W ASESORES - Sonora","29.0978877","-110.9456993","faviconx25.png","Sonora"],["CARVI ASESORES HIPOTECARIOS - Baja California Sur","31.8682192","-116.6270123","faviconx25.png","Baja California Sur"],["FLUYE - Durango","24.0309932","-104.6396416","faviconx25.png","Durango"],["ROBLES GCG -    Campeche","18.651225","-91.8164357","faviconx25.png","Campeche"],["RAFAEL GUTIERREZ -  Michoac\u00e1n","19.6865468","-101.1681727","faviconx25.png","Michoacan"],["ADN FINANCIEROS -  Tabasco","17.9941231","-92.9274166","faviconx25.png","Tabasco"],["CREDIALIADOS -  Nayarit","21.5034534","-104.8959841","faviconx25.png","Nayarit"],["ZAMORA Y ASOCIADOS -  Tlaxcala","19.3539314","-98.1514914","faviconx25.png","Tlaxcala"]];
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: new google.maps.LatLng(23.6260, -99.12766),
            });
            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {  
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    icon: "https://socasesores.com/oficinas/img/"+locations[i][3],
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        $('[name="state"]').val(locations[i][4]);
                        $('#search').submit();
                        // infowindow.setContent(locations[i][0]);
                        // infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
        
    </script>
@endsection
