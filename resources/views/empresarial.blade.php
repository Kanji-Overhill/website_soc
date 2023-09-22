@extends('layout')

@section('content')

    <section class="md:pt-16 sm:pt-28 pt-16 mb-10">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Empresarial.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-gradient-to-r from-white/80 via-transparent">
                    <div class="container max-w-6xl">
                        <div class="row">
                            <div class="col-sm-4 text-center">
                                {{-- <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Crédito Empresarial</h2> --}}
                                <div class="text-2xl mb-10 text-primary">
                                    <p>Es momento de crecer con junto con <b>SOC</b>
                                    <br> simula tu credito ahora.</p>
                                </div>
                                <a href="{{ url('comparador-ce') }}" class="text-center inline-block max-w-full w-64 px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase">Simula tu cr&eacute;dito</a>
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="my-20">
        <div class="container mx-auto max-w-6xl lg:text-2xl md:text-xl text-lg text-center">
            {{-- <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Nuestros Servicios</h3> --}}

            <p>Te asesoramos sin costo en la selección del crédito empresarial que requiera tu empresa; resolvemos tus dudas y te acompañamos en todo momento.</p>

            <br>

            <p>Créditos dedicados a financiar los proyectos o necesidades para que tu empresa crezca y cumpla sus objetivos.</p>

        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Conoce las opciones de crédito empresarial</h3>
            {{-- <h4 class="text-center lg:text-2xl md:text-xl text-lg mb-8 font-light">Contamos con los siguientes servicios</h4> --}}

            {{-- <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8"> --}}
            <div class="flex flex-wrap justify-center -mx-4">
                @if (!empty($productos))
                @foreach ($productos as $item_h)
                
                <div class="md:w-1/2 w-full px-4 mb-8">
                    <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[10rem] flex">
                        <figure class="flex-none w-1/3 pl-4 py-4"><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/empresarial').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                        <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                            <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold text-primary">{{ $item_h['nombre'] }}</h4>
                            <p>{{ $item_h['resumen'] }}</p>
                            <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                                <a href="{{ url('credito-empresarial').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
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
                    <input type="hidden" name="products" value="Empresarial" />
                </form>
            </div>
        </div>
    </section>

    {{-- 
    <section class="md:py-20 py-8 bg-white-smoke">
        <div class="container mx-auto max-w-6xl px-4">

            <div class="row">
                <div class="col-sm-7">
                    <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-2">Sucursales empresarial</h3>
                    <h4 class="lg:text-2xl md:text-xl text-lg mb-8 font-light">Encuentra una oficina SOC cerca de ti</h4>
                    <div class="block relative w-full pb-[56.75%]">
                        <div class="absolute inset-0">
                            <div id="map" class="overflow-hidden rounded-lg h-full w-full"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <form 
                        action="{{ URL::to('oficinas/micrositios/search') }}"
                        method="post"
                        id="search"
                        class="bg-white p-8 rounded-lg h-full flex flex-col justify-center">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h4 class="lg:text-2xl md:text-xl text-lg font-bold text-primary mb-4">Filtra y encuentra tu oficina</h4>
                        <div class="mb-6">
                            <label class="mb-2">Estado</label>
                            <div class="relative bg-white text-black border border-gray-400 rounded-md">
                                <span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                <select name="state" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
                                    <option class="bg-white text-black" selected="" hidden="" disabled="">Seleccionar</option>
                                    <option class="bg-white text-black" value="Aguascalientes">Aguascalientes</option>
                                    <option class="bg-white text-black" value="Baja California">Baja California</option>
                                    <option class="bg-white text-black" value="Baja California Sur">Baja California Sur</option>
                                    <option class="bg-white text-black" value="Campeche">Campeche</option>
                                    <option class="bg-white text-black" value="Chiapas">Chiapas</option>
                                    <option class="bg-white text-black" value="Chihuahua">Chihuahua</option>
                                    <option class="bg-white text-black" value="CDMX">Ciudad de México</option>
                                    <option class="bg-white text-black" value="Coahuila">Coahuila</option>
                                    <option class="bg-white text-black" value="Colima">Colima</option>
                                    <option class="bg-white text-black" value="Durango">Durango </option>
                                    <option class="bg-white text-black" value="Estado de Mexico">Estado de México</option>
                                    <option class="bg-white text-black" value="Guanajuato">Guanajuato</option>
                                    <option class="bg-white text-black" value="Guerrero">Guerrero</option>
                                    <option class="bg-white text-black" value="Hidalgo">Hidalgo</option>
                                    <option class="bg-white text-black" value="Jalisco">Jalisco</option>
                                    <option class="bg-white text-black" value="Michoacan">Michoacán</option>
                                    <option class="bg-white text-black" value="Morelos">Morelos</option>
                                    <option class="bg-white text-black" value="Nayarit">Nayarit</option>
                                    <option class="bg-white text-black" value="Nuevo Leon">Nuevo León</option>
                                    <option class="bg-white text-black" value="Oaxaca">Oaxaca</option>
                                    <option class="bg-white text-black" value="Puebla">Puebla</option>
                                    <option class="bg-white text-black" value="Queretaro">Querétaro</option>
                                    <option class="bg-white text-black" value="Quintana Roo">Quintana Roo</option>
                                    <option class="bg-white text-black" value="San Luis Potosi">San Luis Potosí</option>
                                    <option class="bg-white text-black" value="Sinaloa">Sinaloa</option>
                                    <option class="bg-white text-black" value="Sonora">Sonora</option>
                                    <option class="bg-white text-black" value="Tabasco">Tabasco</option>
                                    <option class="bg-white text-black" value="Tamaulipas">Tamaulipas</option>
                                    <option class="bg-white text-black" value="Tlaxcala">Tlaxcala</option>
                                    <option class="bg-white text-black" value="Veracruz">Veracruz</option>
                                    <option class="bg-white text-black" value="Yucatan">Yucatán</option>
                                    <option class="bg-white text-black" value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="mb-2">Municipio</label>
                            <div class="relative bg-white text-black border border-gray-400 rounded">
                                <span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                <select name="city" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
                                    <option class="bg-white text-black" selected="" hidden="" disabled="">Seleccionar</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="mb-2">Asesoría</label>
                            <div class="relative bg-white text-black border border-gray-400 rounded">
                                <span class="absolute z-0 w-8 inset-y-0 flex items-center justify-center right-0 text-gray-400"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                                <select name="products" class="relative z-10 bg-transparent appearance-none w-full h-10 pl-2 pr-8 text-gray-400 text-sm focus:outline-none">
                                    <option class="bg-white text-black" selected="" hidden="" disabled="">Asesoría</option>
                                    <option class="bg-white text-black" value="Hipotecario">Hipotecario</option>
                                    <option class="bg-white text-black" value="Empresarial">Empresarial</option>
                                    <option class="bg-white text-black" value="Seguros">Seguros</option>
                                    
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="w-full"><span class="block p-4 rounded-xl lg:text-2xl md:text-xl text-lg bg-secundary text-white text-center font-bold">Buscar</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
            <div class="row items-center">
                <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                    <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Nuestras herramientas financieras</h3>
                    <div class="md:w-full w-4/5 mx-auto block">
                        <img src="{{ URL::asset('img/home/movile-image.png') }}" alt="Nuestras herramientas financieras" />
                    </div>
                </figure>
                <div class="md:text-left text-center col-sm-6">
                    <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Nuestras herramientas financieras</h3>
                    <p>Obtén tu precalificación</p>
                    <p>Selecciona uno y continua...</p>
                    <br />

                    <ul class="text-secundary underline">
                        <li><a href="{{ url('simulador-credito-hipotecario') }}">Simulador hipotecario</a></li>
                        <li><a href="{{ url('comparador-auto') }}">Simulador auto</a></li>
                        <li><a href="{{ url('precalificacion-credito-hipotecario') }}">Cr&eacute;dito hipotecario</a></li>
                        <li><a href="{{ url('simulador-credito-hipotecario') }}">Simulador hipotecario</a></li>
                    </ul>
                    <br />

                    <a href="{{ url('credito-hipotecario') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a>
                </div>
            </div>
        </div>
    </section>
     --}}

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
