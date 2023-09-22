@extends('layout')

@section('content')

    <section class="mb-10 h-screen relative">
        <div class="slick-main">
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Hipotecario.jpg') }}">
                </div>
                <div class="md:hidden block pt-[50vh]">
                    <img class="h-[35vh] object-cover min-w-[200%] -ml-[80%]" src="{{ URL::asset('img/home/lineas-negocio/Hipotecario.jpg') }}">
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
                                <a class="bg-ligth-primary rounded-full inline-block align-middle mb-2 font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">Ubica la oficina SOC <br> más cercana de ti</a>
                                <a class="border-secundary border-2 bg-white text-secundary rounded-full inline-flex items-center justify-center md:h-16 align-middle mb-2 font-bold px-8 py-2" href="{{ url('simulador-credito-hipotecario'); }}" target="_blank">Precalif&iacute;cate</a>
                                {{-- <a class="bg-secundary rounded-md inline-block font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">BUSCAR OFICINA</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Empresarial.jpg') }}">
                </div>
                <div class="md:hidden block pt-[50vh]">
                    <img class="h-[35vh] object-cover min-w-[200%] -ml-[80%]" src="{{ URL::asset('img/home/lineas-negocio/Empresarial.jpg') }}">
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
                                <a class="bg-ligth-primary rounded-full inline-block align-middle mb-2 font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">Ubica la oficina SOC <br> más cercana de ti</a>
                                <a class="border-secundary border-2 bg-white text-secundary rounded-full inline-flex items-center justify-center md:h-16 align-middle mb-2 font-bold px-8 py-2" href="{{ url('comparador-ce'); }}" target="_blank">Precalif&iacute;cate</a>
                                {{-- <a class="bg-secundary rounded-md inline-block font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">BUSCAR OFICINA</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Seguros.jpg') }}">
                </div>
                <div class="md:hidden block pt-[50vh]">
                    <img class="h-[35vh] object-cover min-w-[200%] -ml-[80%]" src="{{ URL::asset('img/home/lineas-negocio/Seguros.jpg') }}">
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
                                <a class="bg-ligth-primary rounded-full inline-block align-middle mb-2 font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">Ubica la oficina SOC <br> más cercana de ti</a>
                                {{-- <a class="border-secundary border-2 bg-white text-secundary rounded-full inline-flex items-center justify-center md:h-16 align-middle mb-2 font-bold px-8 py-2" href="" target="_blank">Precalif&iacute;cate</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="m-0">
                <div class="md:block hidden">
                    <img class="h-screen object-cover" src="{{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }}">
                </div>
                <div class="md:hidden block pt-[50vh]">
                    <img class="h-[35vh] object-cover min-w-[200%] -ml-[80%]" src="{{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }}">
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
                                <a class="bg-ligth-primary rounded-full inline-block align-middle mb-2 font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">Ubica la oficina SOC <br> más cercana de ti</a>
                                <a class="border-secundary border-2 bg-white text-secundary rounded-full inline-flex items-center justify-center md:h-16 align-middle mb-2 font-bold px-8 py-2" href="{{ url('comparador-auto'); }}" target="_blank">Precalif&iacute;cate</a>
                                {{-- <a class="bg-secundary rounded-md inline-block font-bold px-8 py-2" href="https://socasesores.com/oficinas/" target="_blank">BUSCAR OFICINA</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </figure>
        </div>
    </section>
    
    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4">
            {{-- <h2 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-2">Nuestros Servicios</h2> --}}
            <div class="text-primary mb-16 text-center lg:text-2xl md:text-xl text-lg">
                <p>Te asesoramos para tomar la elección que más te convenga de acuerdo a tus necesidades.</p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
                <div class="text-center rounded-md px-2 pt-2 pb-4 shadow-md">
                    <img class="rounded-md object-cover mb-8" src="{{ URL::asset('img/home/Hipotecario.jpg') }}" alt="Asesor&iacute;a Hipotecaria" />
                    <h4 class="text-primary font-bold text-lg">Asesor&iacute;a Hipotecaria</h4>
                    <p>Te ayudamos a elegir y tramitar la mejor alternativa de crédito hipotecario para ti.</p>
                    <br />
                    <div class="text-secundary"><a href="#" class="underline">Ver m&aacute;s</a></div>

                </div>
                <div class="text-center rounded-md px-2 pt-2 pb-4 shadow-md">
                    <img class="rounded-md object-cover mb-8" src="{{ URL::asset('img/home/imagenes-5-linead-de-negocio.jpg') }}" alt="Asesor&iacute;a Hipotecaria" />
                    <h4 class="text-primary font-bold text-lg">Asesor&iacute;a Hipotecaria</h4>
                        <p>Te ayudamos a elegir el financiamiento que tu negocio necesita para crecer.</p>
                        <br />
                        <div class="text-secundary"><a href="#" class="underline">Ver m&aacute;s</a></div>


                </div>
                <div class="text-center rounded-md px-2 pt-2 pb-4 shadow-md">
                    <img class="rounded-md object-cover mb-8" src="{{ URL::asset('img/home/Seguros.jpg') }}" alt="Asesor&iacute;a Seguros" />
                    <h4 class="text-primary font-bold text-lg">Asesor&iacute;a Seguros</h4>
                    <p>Robo, daños materiales o asistencia vial, tus imprevistos amparados en una póliza de seguro.</p>
                    <br />
                    <div class="text-secundary"><a href="#" class="underline">Ver m&aacute;s</a></div>


                </div>
                <div class="text-center rounded-md px-2 pt-2 pb-4 shadow-md">
                    <img class="rounded-md object-cover mb-8" src="{{ URL::asset('img/home/Credito-de-auto.jpg') }}" alt="Asesor&iacute;a Automotr&iacute;z" />
                    <h4 class="text-primary font-bold text-lg">Asesor&iacute;a Automotr&iacute;z</h4>
                    <p>Ayudamos a que encuentres el mejor financiamiento, para que adquieras un auto nuevo, seminuevo de agencia o una moto.</p>
                    <br />
                    <div class="text-secundary"><a href="#" class="underline">Ver m&aacute;s</a></div>

                </div>
            </div>
        {{-- 
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

                    <ul class="list-sinergia">
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

                        <ul class="list-sinergia">
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

                    <ul class="list-sinergia">
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

                        <ul class="list-sinergia">
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
        --}}
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
            <div class="row items-center justify-between">
                <figure class="col-sm-6 md:mb-0 mb-10 text-center">
                    <h3 class="lg:hidden md:text-3xl text-2xl mb-8 text-primary font-bold">Simula tu cr&eacute;dito</h3>
                    <div class="md:w-full w-4/5 mx-auto block">
                        <img src="{{ URL::asset('img/home/movile-image.png') }}" alt="Simula tu cr&eacute;dito" />
                    </div>
                </figure>
                <div class="text-center col-sm-5 mx-auto">
                    <h3 class="lg:text-3xl md:block hidden mb-8 text-primary font-bold">Simula tu cr&eacute;dito</h3>
                    <br />

                    <ul class="text-secundary">
                        <li class="mb-6"><a class="border-secundary border-2 py-2 block rounded-full" href="{{ url('simulador-credito-hipotecario') }}">Simulador hipotecario</a></li>
                        <li class="mb-6"><a class="border-secundary border-2 py-2 block rounded-full" href="{{ url('comparador-auto') }}">Simulador auto</a></li>
                        <li class="mb-6"><a class="border-secundary border-2 py-2 block rounded-full" href="{{ url('precalificacion-credito-hipotecario') }}">Cr&eacute;dito hipotecario</a></li>
                        {{-- <li><a href="{{ url('simulador-credito-hipotecario') }}">Simulador hipotecario</a></li> --}}
                    </ul>
                    {{--
                    <br />

                    <a href="{{ url('credito-hipotecario') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Ver m&aacute;s</a> 
                    --}}
                </div>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4 flex flex-wrap items-center">
            <div class="md:w-1/2 w-full md:mb-0 mb-10 text-center">
                <h3 class="lg:text-2xl md:text-2xl text-xl mb-8 md:px-6 text-primary mx-auto max-w-md font-light"><span class="leading-loose">Busca la oficina <strong class="font-bold">SOC</strong> m&aacute;s cercana a ti y solicita tu asesor&iacute;a</span></h3>

  
                <a href="{{ url('oficinas') }}" class="inline-block max-w-full w-64 text-center px-4 py-2 rounded-full border border-secundary bg-secundary text-white font-bold uppercase text-xs">Buscar</a>
            </div>
            <div class="md:w-1/2 w-full px-4">
                <div id="map" class="block w-full h-96 shadow-md"></div>
                <form action="{{ url('oficinas/micrositios/search') }}" method="post" id="search">
                    <input type="hidden" name="state" />
                </form>
            </div>
        </div>
    </section>

    <section class="py-8">
        <div class="container mx-auto max-w-6xl px-4">
            <h3 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-12">Hacemos sinergia con los mejores<!-- , <br> <b>Juntos,</b> lo hacemos real --></h3>

            {{-- 
            <div class="nav-brand-slider max-w-3xl mx-auto mb-12">
                <ul class="flex flex-wrap md:justify-between justify-center">
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md text-white bg-ligth-primary">HIPOTECARIO</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">EMPRESARIAL</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">SEGUROS</li>
                    <li class="cursor-pointer ease-in-out duration-300 px-3 py-1 mx-2 mb-4 rounded-md">AUTO</li>
                </ul>
            </div>
             --}}
            <div class="max-w-3xl mx-auto">
                <div class="banks-slider text-center">
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
                <div dir="rtl" class="text-center slider-reverse">
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
                <div class="text-center banks-slider">
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
                <div dir="rtl" class="text-center slider-reverse mobile-slider">
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

    {{-- <script type="text/javascript" src="https://socasesores.com/oficinas/js/states.js?v1"></script> --}}

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

        {{-- 
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
        --}}

        $('.banks-slider').slick({
            autoplay        :   true,
            autoplaySpeed   :   0,
            infinite        :   true,
            speed           :   10000,
            arrows          :   false,
            dots            :   false,
            slidesToShow    :   3,
            slidesToScroll  :   1,
            centerMode      :   true,
            variableWidth   :   true,
            centerPadding   :   '0px',
            pauseOnHover    :   false,
            pauseOnFocus    :   false,
            cssEase         :   'linear',
            responsive: [{
              breakpoint: 991,
              settings: {slidesToShow: 3,slidesToScroll: 1,infinite: true, } },
            {
              breakpoint: 768,
              settings: {slidesToShow: 2,slidesToScroll: 1,infinite: true, }
          }]
        });
        $('.slider-reverse').slick({
            rtl:true,
            autoplay        :   true,
            autoplaySpeed   :   0,
            infinite        :   true,
            speed           :   10000,
            arrows          :   false,
            dots            :   false,
            slidesToShow    :   3,
            slidesToScroll  :   1,
            centerMode      :   true,
            variableWidth   :   true,
            centerPadding   :   '0px',
            pauseOnHover    :   false,
            pauseOnFocus    :   false,
            cssEase         :   'linear',
            responsive: [{
              breakpoint: 991,
              settings: {slidesToShow: 3,slidesToScroll: 1,infinite: true, } },
            {
              breakpoint: 768,
              settings: {slidesToShow: 2,slidesToScroll: 1,infinite: true, }
          }]
        });

        if($(window).width() > 768){
            $('.mobile-slider').slick('unslick');
        }

    </script>
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
