<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
	    <script>
	        var e = ("abbr,article,aside,audio,canvas,datalist,details," +
	        "figure,footer,header,hgroup,mark,menu,meter,nav,output," +
	        "progress,section,time,video").split(',');
	        for (var i = 0; i < e.length; i++) {
	            document.createElement(e[i]);
	        }
	    </script>
	<![endif]-->
	<title>SOC Asesores</title>
	<meta name="description" content="Encuentra la oficina de SOC Asesores más cercana a tu ciudad, con los servicios de asesoría hipotecaria, asesoría empresarial y de seguros.">
    {{-- 
	<link rel="canonical" href="http://socasesores.com/" />
     --}}

	<!-- TALWIND CSS -->
	<script src="https://cdn.tailwindcss.com"></script>
	<!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/grid.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/styles.css').'?'.date('Y-m-d_H_i_s') }}">
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
	<!-- Fancybox CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
	<link rel="icon" type="image/png" href="https://socasesores.com/img/favicon.png">
	@yield('head')

</head>
<body>
    <header class="fixed top-0 inset-x-0 z-50 bg-primary">
        <div class="container mx-auto max-w-6xl px-1">
            <div class="flex md:justify-between justify-start items-center">
                <div class="w-full px-4 text-left inline-flex items-center justify-between md:text-white">
                    <div class="inline-block max-w-full text-primary py-4 md:mr-6">
                        <figure class="flex items-center">
                            <a href="{{ url('') }}"><img class="h-10 max-w-full object-contain ease-in-out duration-300" src="{{ URL::asset('img/Eslogan-tipeado-blanco.png') }}" alt="SOC Seguros" /></a>
                        </figure>
                    </div>
                    <nav class="md:block hidden md:static fixed top-20 bottom-0 inset-x-0 md:bg-transparent bg-white-smoke md:px-0 px-4">
                        <ul>
                            <li class="px-2 md:py-0 py-2 md:inline-block">
                                <a class="toggle-submenu">Asesor&iacute;as</a>
                                
                                <div class="new-submenu">
                                    <div class="Menu">
                                        <p class="title">Asesor&iacute;as</p>
                                        <div class="flex">
                                            <ul class="md:w-1/4 px-4 md:pb-6 border-primary border-left">
                                                <li><a href="{{ url('credito-hipotecario') }}" class="Producto"><u>Asesoría Hipotecaria</u></a></li>
                                                <li><a href="{{ url('credito-hipotecario/adquisicion-de-vivienda') }}">Adquisición de vivienda</a></li>
                                                <li><a href="{{ url('credito-hipotecario/construccion') }}">Construcción</a></li>
                                                <li><a href="{{ url('credito-hipotecario/cambio-de-hipoteca') }}">Mejora de hipoteca</a></li>
                                                <li><a href="{{ url('credito-hipotecario/compra-de-terreno') }}">Adquisición de terreno</a></li>
                                                <li><a href="{{ url('credito-hipotecario/terreno-y-construccion') }}">Terreno + Construcción</a></li>
                                                <li><a href="{{ url('credito-hipotecario/preventa') }}">Preventa</a></li>
                                                <li><a href="{{ url('credito-hipotecario/liquidez') }}">Liquidez</a></li>
                                                <li><a href="{{ url('credito-hipotecario/liquidez-y-sustitucion') }}">Mejora de hipoteca + liquidez</a></li>
                                                <li><a href="{{ url('credito-hipotecario/renovacion-remodelacion') }}">Renovación / Remodelación</a></li>
                                            </ul>
                                            <span style="width:1.5px" class="bg-primary"></span>
                                            <ul class="md:w-1/4 px-4 md:pb-6 border-primary border-left">
                                                <li><a href="{{ url('credito-empresarial') }}" class="Producto"><u>Crédito Empresarial</u></a></li>
                                                <li><a href="{{ url('credito-empresarial/anticipo') }}">Crédito como Anticipo de Ventas</a></li>
                                                <li><a href="{{ url('credito-empresarial/simple') }}">Crédito Simple</a></li>
                                                <li><a href="{{ url('credito-empresarial/revolvente') }}">Crédito Revolvente</a></li>
                                                <li><a href="{{ url('credito-empresarial/arrendamiento') }}">Crédito Arrendamiento</a></li>
                                                <li><a href="{{ url('credito-empresarial/hipotecario-empresarial') }}">Crédito Hipotecario Empresarial</a></li>
                                                <li><a href="{{ url('credito-empresarial/tarjeta-credito') }}">Tarjeta de Crédito</a></li>
                                                <!--<li><a href="{{ url('credito-empresarial/factoraje') }}">Factoraje</a></li>-->
                                                <!--<li><a href="{{ url('credito-empresarial/tpv') }}">TPV Terminal punto de venta</a></li>-->
                                            </ul>
                                            <span style="width:1.5px" class="bg-primary"></span>
                                            <ul class="md:w-1/4 px-4 md:pb-6 border-primary border-left">
                                                <li><a href="{{ url('seguros') }}" class="Producto"><u>Seguros <!--y fianzas--></u></a></li>
                                                <li><strong>Personas</strong></li>
                                                <li><a href="{{ url('seguros/seguro-de-vida') }}">Seguro de vida</a></li>
                                                <li><a href="{{ url('seguros/gastos-medicos-mayores') }}">Gastos médicos mayores</a></li>
                                                <li><a href="{{ url('seguros/proteccion-de-hogar') }}">Seguro de hogar</a></li>
                                                <li><a href="{{ url('seguros/seguro-de-auto') }}">Seguro de autos</a></li>
                                                <li><strong>Empresas</strong></li>
                                                <li><a href="{{ url('seguros/vida-empresas') }}">Seguro de vida</a></li>
                                                <li><a href="{{ url('seguros/gastos-medicos-mayores-empresas') }}">Gastos médicos mayores</a></li>
                                                <li><a href="{{ url('seguros/seguros-pyme') }}">Seguros Pyme</a></li>
                                                <li><a href="{{ url('seguros/auto-flotillas') }}">Auto flotilla</a></li>
                                            </ul>
                                            <span style="width:1.5px" class="bg-primary"></span>
                                            
                                            <ul class="md:w-1/4 px-4 md:pb-6 border-primary border-left">
                                                <li><a href="{{ url('credito-auto') }}" class="Producto"><u>Cr&eacute;dito de auto</u></a></li>
                                                <li><a href="{{ url('credito-auto/auto') }}">Adquisici&oacute;n de autos</a></li>
                                                <li><a href="{{ url('credito-auto/sustitucion-auto') }}">Sustituci&oacute;n de cr&eacute;dito de auto</a></li>
                                                <li><a href="{{ url('credito-auto/moto') }}">Adquisici&oacute;n de moto</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="{{ url('herramientas-digitales') }}">Herramientas digitales</a></li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="{{ url('oficinas') }}">Buscador de oficinas</a></li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="{{ url('franquicias') }}">Venta de franquicias</a></li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="https://blog.socasesores.com/">Blog</a></li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="{{ url('quienes-somos') }}">Somos SOC</a></li>
                            <li class="px-2 md:py-0 py-2 md:inline-block"><a href="{{ url('contacto') }}">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="md:hidden inline-block md:w-1/2 w-2/12 text-white py-2 text-right">
                    <i class="fas fa-bars text-2xl" id="btn_menu_mobile"></i>
                    <i class="fas fa-bars text-2xl hidden" id="close_menu_mobile"></i>
                    {{-- <span>Menú</span> --}}
                </div>

                {{-- 
                <div class="md:inline-block hidden bg-transparent w-auto py-0 text-center">
                    @switch(Request::segment(1))
                        @case('credito-auto')
                        
                    <a href="{{ url('comparador-auto') }}" class="inline-block px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simulador Automotr&iacute;z</a>
                        @break
                        
                        @case('seguros')
                        
                    <a href="{{ url('simulador-credito-hipotecario') }}" class="inline-block px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simulador Hipotecario</a>
                        @break
                        
                        @case('credito-empresarial')
                    
                    <a href="{{ url('comparador-ce') }}" class="inline-block px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simulador PyME</a>    
                        @break
                        
                        @case('credito-hipotecario')
                        @default
                    
                    <a href="{{ url('simulador-credito-hipotecario') }}" class="inline-block px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simulador Hipotecario</a>
                    @endswitch
                    
                </div>

                 --}}

            </div>
        </div>
    </header>

    {{-- Content --}}
	@yield('content')


    @include('footer')

    <footer class="w-full pt-2 hidden">
        <div class="container mx-auto text-center px-4 text-sm py-2">
            <div class="flex md:flex-nowrap flex-wrap justify-between items-center md:mb-5 mb-10">
                <div class="md:w-auto w-full md:inline-block flex items-center">
                    <figure class="inline-block align-middle mr-8"><img class="h-12 object-contain" src="{{ URL::asset('img/Eslogan-tipeado.png') }}" alt=""></figure>
                    <figure class="inline-block align-middle"><img class="h-16" src="{{ URL::asset('img/esr.svg') }}" alt=""></figure>
                </div>
                <div class="text-left md:text-xl text-lg">
                    <span>Síguenos en:</span>
                    <div class="flex items-center">

                        <a class="w-7 h-7 mx-2" href="https://www.facebook.com/SOCAsesores/?ref=ts&amp;fref=ts" target="_blank"><img src="{{ URL::asset('img/iconos/fc.svg') }}" alt="Facebook"></a>
                        <a class="w-7 h-7 mx-2" href="https://twitter.com/SOCasesores?lang=es" target="_blank"><img src="{{ URL::asset('img/iconos/tw.svg') }}" alt="Twitter"></a>
                        <a class="w-7 h-7 mx-2" href="https://www.youtube.com/channel/UCUzn3H-tWe8vrveeYDKqJGw" target="_blank"><img src="{{ URL::asset('img/iconos/yt.svg') }}" alt="Youtube"></a>
                        <a class="w-7 h-7 mx-2" href="https://www.linkedin.com/company/socasesores/" target="_blank"><img src="{{ URL::asset('img/iconos/in.svg') }}" alt="Linkedin"></a>
                        <a class="w-7 h-7 mx-2" href="https://www.instagram.com/soc_asesores/" target="_blank"><img src="{{ URL::asset('img/iconos/insta.svg') }}" alt="Instagram"></a>
                        <a class="w-7 h-7 mx-2" href="https://api.whatsapp.com/send?phone=5215549324971" target="_blank"><img src="{{ URL::asset('img/iconos/wt.svg') }}" alt="WhatsApp"></a>
                    </div>
                </div>
            </div>
            <div class="mb-6 border-t border-white flex flex-wrap md:pt-5">
                <div class="md:border-none border-b border-white py-2 lg:w-1/4 md:w-1/2 w-full md:mb-8">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Asesoría Hipotecaria</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">Adquisición de vivienda</a></li>
                            <li><a href="#">Construcción</a></li>
                            <li><a href="#">Mejora de hipoteca</a></li>
                            <li><a href="#">Adquisición de terreno</a></li>
                            <li><a href="#">Terreno + Construcción</a></li>
                            <li><a href="#">Preventa</a></li>
                            <li><a href="#">Liquidez</a></li>
                            <li><a href="#">Mejora de hipoteca + liquidez</a></li>
                            <li><a href="#">Renovación/Remodelación</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:border-none border-b border-white py-2 lg:w-1/4 md:w-1/2 w-full md:mb-8">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Asesoría Empresarial</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">Crédito empresarial</a></li>
                            <li><a href="#">Crédito como anticipo de ventas</a></li>
                            <li><a href="#">Crédito simple</a></li>
                            <li><a href="#">Crédito revolvente</a></li>
                            <li><a href="#">Crédito arrendamiento</a></li>
                            <li><a href="#">Crédito hipotecario empresarial</a></li>
                            <li><a href="#">Tarjeta de crédito</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:border-none border-b border-white py-2 lg:w-1/4 md:w-1/2 w-full md:mb-8">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Seguros</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <h5><b>Personas</b></h5>
                        <ul class="font-light">
                            <li><a href="#">Seguro de vida</a></li>
                            <li><a href="#">Gastos médicos mayores</a></li>
                            <li><a href="#">Seguro de auto</a></li>
                        </ul>
                        <h5><b>Empresas</b></h5>
                        <ul class="font-light">
                            <li><a href="#">Seguro de vida</a></li>
                            <li><a href="#">Gastos médicos mayores</a></li>
                            <li><a href="#">Daños empresarial</a></li>
                            <li><a href="#">Auto flotilla</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:border-none border-b border-white py-2 lg:w-1/4 md:w-1/2 w-full md:mb-8">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Crédito de auto</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">Adquisición de autos</a></li>
                            <li><a href="#">Sustitución de crédito de auto</a></li>
                            <li><a href="#">Adquisición de moto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:border-none border-b border-white py-2 md:w-1/3 w-full">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Nosotros</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">Quiénes Somos</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Directorio de Asesores</a></li>
                            <li><a href="#">Oficinas</a></li>
                            <li><a href="#">Franquicias SOC</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Ingreso al broker</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:border-none border-b border-white py-2 md:w-1/3 w-full">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Herramientas Financieras</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">Comparador Hipotecario</a></li>
                            <li><a href="#">Alcance de crédito hipotecario</a></li>
                            <li><a href="#">Precalificación de crédito hipotecario</a></li>
                            <li><a href="#">Precalificación de crédito empresarial</a></li>
                            <li><a href="#">Calculadora de créditos empresariales</a></li>
                            <li><a href="#">Guía para comprar una casa</a></li>
                            <li><a href="#">Score de buró de crédito</a></li>
                        </ul>
                    </div>
                </div>
                {{-- 
                --}}
                <div class="md:border-none border-b border-white py-2 md:w-1/3 w-full">
                    <h4 class="relative toggle flex items-center justify-between text-primary"><span class="font-bold md:text-lg">Atención al cliente</span> <i class="md:hidden fa fa-chevron-down"></i></h4>
                    <div class="md:block hidden text-left">
                        <ul class="font-light">
                            <li><a href="#">+52 1 55 5256 5770</a></li>
                            <li><a href="#">contacto@socasesores.com</a></li>
                            <li><a href="#">Términos y condiciones</a></li>
                            <li><a href="#">Aviso de privacidad</a></li>
                            <li><a href="#">Buzón de quejas</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <figure class="block w-36 max-w-full mx-auto mb-4"><img src="https://socasesores.com/img/SOC@white.png" alt="" class="inline-block"></figure> -->
            <small class="block text-center">Hamburgo 227, Colonia Juárez, Alcaldía Cuauhtémoc, CDMX 06600.</small>
        </div>
        <div class="bg-primary w-full">
            <div class="container mx-auto text-center px-4 text-xs text-white py-2">
                <strong>&copy; 2023 SOC Lideres en Asesor&iacute;a Financiera</strong>
            </div>
        </div>
    </footer>

	<!-- Fancybox JS -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<!-- Custom JS -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	@yield('scripts')

</body>
</html>