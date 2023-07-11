@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 ">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Crédito de auto</h2>
                        <div class="text-2xl mb-10">
                            <p>Es momento de crecer con junto con <b>SOC</b>
                            <br> simula tu credito ahora.</p>
                        </div>
                        <a href="{{ url('comparador-auto') }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simula tu cr&eacute;dito</a>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="md:py-20 py-8 mb-10 bg-white-smoke">
        <div class="container mx-auto max-w-6xl text-center px-4 lg:text-2xl md:text-xl text-lg ">
            <h3 class="text-primary lg:text-4xl md:text-3xl text-2xl font-bold mb-10">¿En qué consiste nuestro servicio?</h3>

            <p>En cuestión de minutos sabrás si eres candidato a un crédito de auto.<br>
                Uno de nuestros expertos te ayudará en la cotización del auto que deseas y te pedirá la documentación correspondiente.<br>
                Con datos mínimos puedes adquirir el crédito.<br>
                Se te notificará cómo se hará el pago del enganche y se elaborará el contrato.<br>
                Firma del contrato y disposición del crédito.</p>

        </div>
    </section>

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Tipos de crédito de auto</h3>
            {{-- <h4 class="text-center lg:text-2xl md:text-xl text-lg mb-8 font-light">Contamos con los siguientes servicios</h4> --}}

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                @if (!empty($productos))
                @foreach ($productos as $item_h)
                
                <div class="overflow-hidden rounded-lg border border-grey-200 md:min-h-[28rem] flex flex-col">
                    <figure><img class="w-full h-60 object-cover object-top" src="{{ URL::asset('img/auto').'/'.$item_h['miniatura'] }}" alt="{{ $item_h['nombre'] }}" /></figure>
                    <div class="p-4 flex flex-col flex-grow text-sm leading-none">
                        <h4 class="lg:text-2xl md:text-xl text-lg mb-2 font-bold">{{ $item_h['nombre'] }}</h4>
                        <p>{{ $item_h['resumen'] }}</p>
                        <div class="text-secundary md:mt-auto mt-6 text-right w-full">
                            <a href="{{ url('credito-auto').'/'.$item_h['url'] }}">Conocer producto ⟶</a>
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
    <script src="{{ URL::asset('js/states.js') }}" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW9Bxi85KlmGQ6o_fk69a90rWr1E3NmDE&callback=initMap&v=weekly" async></script>
    <script type="text/javascript">
        let map;
        
        if($(window).width() >= 768){
            function initMap() {
                var locations = [["R & P ASOCIADOS -  Morelos","18.9325725","-99.2265988","faviconx25.png","Morelos"],["PRIBSA CONSULTORES HIPOTECARIOS - Veracruz","19.1537842","-96.1008132","faviconx25.png","Veracruz"],["UP CREDITS - Quintana Roo","21.1495228","-86.8207604","faviconx25.png","Quintana Roo"],["MERAKI - CDMX","19.3908023","-99.1328023","faviconx25.png","CDMX"],["+ OPORTUNIDADES - Jalisco","20.7261975","-103.4621401","faviconx25.png","Jalisco"],["HAF IMPULSO - Tamaulipas","23.744353","-99.1464152","faviconx25.png","Tamaulipas"],["CREDI PLUS -  Nuevo Le\u00f3n","25.7167365","-100.364414","faviconx25.png","Nuevo Leon"],["CREDYSOL AAA -  Aguascalientes","21.9532721","-102.312746","faviconx25.png","Aguascalientes"],["HAF IMPULSO - San Luis Potos\u00ed","22.1456525","-101.0077995","faviconx25.png","San Luis Potosi"],["CERTUM -  Hidalgo","20.1098152","-98.7785945","faviconx25.png","Hidalgo"],["CMF BROKERS -   Guerrero","17.673774","-101.5966554","faviconx25.png","Guerrero"],["INVERSOL - Guanajuato","21.1331684","-101.5994321","faviconx25.png","Guanajuato"],["JUSTCREDIT  - Estado de M\u00e9xico","19.2656514","-99.5728854","faviconx25.png","Estado de Mexico"],["EXCELENCIA HIPOTECARIA - Puebla","19.0387072","-98.2444178","faviconx25.png","Puebla"],["TARGET HOME -  Chiapas","16.7546645","-93.127276","faviconx25.png","Chiapas"],["FINYA EIBERAS - Chihuahua","28.6236125","-106.0911381","faviconx25.png","Chihuahua"],["LR TU ASESOR INTEGRAL HIPOTECARIO -  Oaxaca","17.0755429","-96.7099329","faviconx25.png","Oaxaca"],["GPI - Quer\u00e9taro","20.5887932","-100.3898881","faviconx25.png","Queretaro"],["ATRIUM - Coahuila","25.5349645","-103.4497828","faviconx25.png","Coahuila"],["GRAF CONSULTORES -     CDMX","20.9673702","-89.5925857","faviconx25.png","Yucatan"],["1080 CONSULTORES -  Sinaloa","24.8233447","-107.3709632","faviconx25.png","Sinaloa"],["FUTURO EN TI -  Colima","19.2622143","-103.7189153","faviconx25.png","Colima"],["SOLUCIONES CONCIENTES - Baja California","32.5157365","-116.9875487","faviconx25.png","Baja California"],["NJ&W ASESORES - Sonora","29.0976647","-110.9510853","faviconx25.png","Sonora"],["CARVI ASESORES HIPOTECARIOS - Baja California Sur","31.8682192","-116.6270123","faviconx25.png","Baja California Sur"],["FLUYE - Durango","24.0309932","-104.6396416","faviconx25.png","Durango"],["ROBLES GCG -    Campeche","18.651225","-91.8164357","faviconx25.png","Campeche"],["RAFAEL GUTIERREZ -  Michoac\u00e1n","19.6865468","-101.1681727","faviconx25.png","Michoacan"],["DN ASESORES - Tabasco","17.9941338","-92.9274471","faviconx25.png","Tabasco"],["CREDIALIADOS -  Nayarit","21.5034534","-104.8959841","faviconx25.png","Nayarit"],["ZAMORA Y ASOCIADOS -  Tlaxcala","19.3539314","-98.1514914","faviconx25.png","Tlaxcala"]];
                
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
                    }
                  })(marker, i));
                }
            }
        }
        
        
    </script>
@endsection
