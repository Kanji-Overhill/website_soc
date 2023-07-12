@extends('layout')

@section('content')

    <section class="mb-10 h-screen relative">
        <div class="slick-main">
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Hipotecario.jpg') }}">
                </div>
                <div class="md:hidden block pt-[20vh]">
                    <img class="h-[80vh] object-cover" src="{{ URL::asset('img/home/lineas-negocio/Hipotecario.jpg') }}">
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Empresarial.jpg') }}">
                </div>
                <div class="md:hidden block pt-[20vh]">
                    <img class="h-[80vh] object-cover" src="{{ URL::asset('img/home/lineas-negocio/Empresarial.jpg') }}">
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Seguros.jpg') }}">
                </div>
                <div class="md:hidden block pt-[20vh]">
                    <img class="h-[80vh] object-cover" src="{{ URL::asset('img/home/lineas-negocio/Seguros.jpg') }}">
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }}">
                </div>
                <div class="md:hidden block pt-[20vh]">
                    <img class="h-[80vh] object-cover" src="{{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }}">
                </div>
            </figure>
        </div>
        <div class="md:pt-20 sm:pt-28 pt-20 absolute inset-0 z-10 md:bg-gradient-to-r bg-gradient-to-b from-white md:via-white/70 via-white md:via-30% to-70% to-transparent">
            <div class="container welcome-section h-full">
                <div class="row h-full">
                    <div class="col-sm-6 text-center">
                        <!--<p class="h1">SOC, empresa líder en asesoría financiera.</p>-->
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <h1 class="text-primary md:pb-10 pb-4 block lg:text-5xl md:text-4xl text-3xl"><strong>Juntos,</strong> lo hacemos real.</h1>
                        
                        <p class="lg:text-2xl md:text-xl text-lg">En SOC ayudamos a transformar los sueños de las familias y empresas mexicanas, asesorándolos en las decisiones financieras más importantes de su vida.</p>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 md:mt-0 mt-auto md:mb-0 mb-10 banner-btn text-center text-white" style="font-size:1rem">
                        <a class="bg-secundary rounded-md inline-block font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">BUSCAR OFICINA</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
            <h2 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-2">Nuestros Servicios</h2>
            <div class="mb-16 text-center lg:text-2xl md:text-xl text-lg">
                <p>Te asesoramos para tomar la elección que más te convenga de acuerdo a tus necesidades.</p>
            </div>

            <div class="row items-center">
                <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                    <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Asesor&iacute;a Hipotecaria</h3>
                    <div class="md:pb-[100%] pb-[80%] md:w-full w-4/5 mx-auto block relative">
                        <img class="rounded-full absolute inset-0 h-full object-cover" src="{{ URL::asset('img/home/Hipotecario.jpg') }}" alt="Asesor&iacute;a Hipotecaria" />
                    </div>
                </figure>
                <div class="md:text-left text-center col-sm-6">
                    <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Asesor&iacute;a Hipotecaria</h3>
                    <p>Te ayudamos a elegir y tramitar la mejor alternativa de crédito hipotecario para ti.</p>
                    <br />

                    <ul class="list-sinergia"> {{-- Esta clase coloca la sinergia en un before --}}
                        <li>Crédito Adquisición de vivienda</li>
                        <li>Crédito Construcción</li>
                        <li>Crédito Mejora de hipoteca</li>
                    </ul>
                    <br />

                    <a href="{{ url('credito-hipotecario') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a>
                </div>
            </div>
        </div>
        <div class="bg-white-smoke my-8 py-8">
            <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
                <div class="row items-center">
                    <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                        <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Asesor&iacute;a Empresarial</h3>
                        <div class="md:pb-[100%] pb-[80%] md:w-full w-4/5 mx-auto block relative">
                            <img class="rounded-full absolute inset-0 h-full object-cover" src="{{ URL::asset('img/home/imagenes-5-linead-de-negocio.jpg') }}" alt="Asesor&iacute;a Hipotecaria" />
                        </div>
                    </figure>
                    <div class="md:text-left text-center col-sm-6 md:order-first">
                        <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Asesor&iacute;a Empresarial</h3>
                        <p>Te ayudamos a elegir el financiamiento que tu negocio necesita para crecer.</p>
                        <br />

                        <ul class="list-sinergia"> {{-- Esta clase coloca la sinergia en un before --}}
                            <li>Crédito Anticipo de ventas</li>
                            <li>Crédito Simple</li>
                            <li>Crédito Revolvente</li>
                        </ul>
                        <br />

                        <a href="{{ url('credito-empresarial') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
            <div class="row items-center">
                <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                    <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Asesor&iacute;a Seguros</h3>
                    <div class="md:pb-[100%] pb-[80%] md:w-full w-4/5 mx-auto block relative">
                        <img class="rounded-full absolute inset-0 h-full object-cover" src="{{ URL::asset('img/home/Seguros.jpg') }}" alt="Asesor&iacute;a Seguros" />
                    </div>
                </figure>
                <div class="md:text-left text-center col-sm-6">
                    <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Asesor&iacute;a Seguros</h3>
                    <p>Te ayudamos a elegir y tramitar la mejor alternativa de crédito hipotecario para ti.</p>
                    <br />

                    <ul class="list-sinergia"> {{-- Esta clase coloca la sinergia en un before --}}
                        <li>Seguro de vida</li>
                        <li>Gastos médicos mayores</li>
                        <li>Protección del hogar</li>
                    </ul>
                    <br />

                    <a href="{{ url('seguros') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a>
                </div>
            </div>
        </div>
        <div class="bg-white-smoke my-8 py-8">
            <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
                <div class="row items-center">
                    <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                        <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Asesor&iacute;a Automotr&iacute;z</h3>
                        <div class="md:pb-[100%] pb-[80%] md:w-full w-4/5 mx-auto block relative">
                            <img class="rounded-full absolute inset-0 h-full object-cover" src="{{ URL::asset('img/home/Credito-de-auto.jpg') }}" alt="Asesor&iacute;a Automotr&iacute;z" />
                        </div>
                    </figure>
                    <div class="md:text-left text-center col-sm-6 md:order-first">
                        <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Asesor&iacute;a Automotr&iacute;z</h3>
                        <p>Te ayudamos a elegir el financiamiento que tu negocio necesita para crecer.</p>
                        <br />

                        <ul class="list-sinergia"> {{-- Esta clase coloca la sinergia en un before --}}
                            <li>Créditode auto</li>
                            <li>Sustituciónde crédito de auto</li>
                            <li>Crédito de moto</li>
                        </ul>
                        <br />

                        <a href="{{ url('credito-auto') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a>
                    </div>
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

    <section class="pb-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-12">Hacemos sinergia con los mejores<!-- , <br> <b>Juntos,</b> lo hacemos real --></h3>

            <div class="nav-brand-slider max-w-3xl mx-auto mb-12">
                <ul class="flex flex-wrap md:justify-between justify-center">
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md text-white bg-ligth-primary">HIPOTECARIO</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">EMPRESARIAL</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">SEGUROS</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">AUTO</li>
                </ul>
            </div>

            <div class="banks-slider max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.afirme.com/afirme" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Afirme.png" alt="Logotipo Banco Afirme ">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.banorte.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Banorte.png" alt="Logotipo banco Banorte">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.vepormas.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Bx+.png" alt="Logotipo Seguros Ve por más">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.banamex.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Citibanamex.png" alt="Logotipo Banco CityBanamex">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.mifel.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Mifel.png" alt="Logotipo Banca Mifel">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://banco.hey.inc/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Hey_banco.png" alt="Logotipo banco Hey, Banco">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.ibanonline.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/iBAN.png" alt="Logotipo banco iBAN">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.ion.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Ion.png" alt="Logotipo banco Ion">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.hsbc.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Hsbc.png" alt="Logotipo banco HSBC">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.santander.com.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Santander.png" alt="Logotipo Banco Santander">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.scotiabank.com.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Scotiabank.png" alt="Logotipo Banco Scotiabank">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://tucasaexpress.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Tu_Casa_Express.png" alt="Logotipo Banco Tu Casa Express">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://yave.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/hipotecario/Yave.png" alt="Logotipo Banco Yave">
                        </a>
                    </div>
                </div>
                
                <!-- Empresarial -->
                <div class="text-center">
                    <div class="inline-block px-4 mb-8">
                        <a href="https://activeleasing.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Active_Leasing.png" alt="Logotipo Banco Active Leasing">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.afirme.com/afirme" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Afirme.png" alt="Logotipo Banco Afirme ">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="http://www.anticipa.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Anticipa.png" alt="Logotipo Banco Anticipa ">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.banorte.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Banorte.png" alt="Logotipo banco Banorte">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://bienparabien.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Bien_para_bien.png" alt="Logotipo Bien para Bien">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.vepormas.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Bx+.png" alt="Logotipo Seguros Ve por más">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://covalto.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Covalto.png" alt="Logotipo Covalto">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.creze.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Creze.png" alt="Logotipo financiera Creze">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://factorexpres.com/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Factor_express.png" alt="Logotipo Factor Express">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://banco.hey.inc/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Hey_banco.png" alt="Logotipo banco Hey, Banco">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.ion.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Ion.png" alt="Logotipo banco Ion">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.ibanonline.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/iBAN.png" alt="Logotipo banco iBAN">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.tryjeeves.com/es/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Jeeves.png" alt="Logotipo Jeeves">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://konfio.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/konfio.png" alt="Logotipo Bankonfio">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.portafoliodenegocios.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Portafolio_de_negocios.png" alt="Logotipo Portafolio de Negocios">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://tucasaexpress.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Tu_Casa_Express.png" alt="Logotipo Banco Tu Casa Express">
                        </a>
                    </div>
                </div>
                
                <!-- Seguros -->
                <div class="text-center">
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.gmx.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/GMX_seguros.png" alt="Logotipo aseguradora GMX">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.zurich.com.mx/es-mx" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Zurich.png" alt="Logotipo Zurich">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.suramexico.com/home/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Sura.png" alt="Logotipo Sura México">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.gnp.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Gnp_seguros.png" alt="Logotipo aseguradora GNP">
                        </a>
                    </div>
                    {{-- <div style="overflow: hidden; height: 1px;"><a href="https://www.avukatcep.com" title="avukat">avukat</a></div> --}}
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.metlife.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/MetLife.png" alt="Logotipo MetLife">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.qualitas.com.mx/web/qmx/inicio" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Qualitas.png" alt="Logotipo Seguros Qualitas">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.skandia.com.mx/" target="_blank" rel="noopener noreferrer">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Skandia.png" alt="Logotipo aseguradora Skandia">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://axa.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Axa.png" alt="Logotipo aseguradora Axa">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://anaseguros.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/seguros/Ana_seguros.png" alt="Logotipo Ana Seguros">
                        </a>
                    </div>
                </div>
                
                <!-- Auto -->
                <div class="text-center">
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.afirme.com/afirme" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/auto/Afirme.png" alt="Logotipo Banco Afirme ">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://www.hsbc.com.mx/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/auto/Hsbc.png" alt="Logotipo banco HSBC">
                        </a>
                    </div>
                    <div class="inline-block px-4 mb-8">
                        <a href="https://banco.hey.inc/" target="_blank" rel="noreferrer noopener">
                            <img class="h-12 object-contain" src="./img/home/bancos/empresarial/Hey_banco.png" alt="Logotipo banco Hey, Banco">
                        </a>
                    </div>
                </div>
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
        $('.slick-main').slick({
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
            speed           :   1000,
            focusOnSelect   :   true,
            arrows          :   false,
            dots            :   false,
            responsive: [{
                breakpoint: 768,
                settings: { adaptiveHeight: true }
            }],
        });
        $('.banks-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            $('.nav-brand-slider > ul > li').eq(nextSlide).addClass('text-white bg-ligth-primary').siblings().removeClass('text-white bg-ligth-primary');
        });
        $('.nav-brand-slider li').click(function() {
            let l = $('.nav-brand-slider li').index(this);
            $('.banks-slider').slick('slickGoTo',l);
        });
    </script>
@endsection
