@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 ">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h1 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">SOC Líderes en Asesoría Financiera</h1>
                        {{-- 
                        <div class="text-2xl mb-10">
                            <p>Es momento de crecer con junto con <b>SOC</b>
                            <br> simula tu credito ahora.</p>
                        </div>
                        <a href="{{ url('comparador-auto') }}" class="text-center block max-w-full w-64 px-4 py-2 rounded-md border border-secundary bg-secundary text-white font-bold uppercase text-xs">Simula tu cr&eacute;dito</a>
                         --}}
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="md:py-20 py-10">
        <div class="container mx-auto max-w-6xl px-4 main-content lg:text-xl md:text-lg">
            <h2 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">¿Quiénes Somos?</h2>
            <p>Somos una empresa mexicana fundada en el 2000, como la primera y más grande red de asesores financieros en México. Te ayudamos a elegir el mejor crédito hipotecario, empresarial y/o seguro, según tu perfil y necesidades.</p>
            <p>Nos respaldan 22 años de experiencia y estamos avalados por las principales instituciones financieras y aseguradoras del país.</p>
            <p>Nuestro acompañamiento es de principio a fin con las mejores herramientas tecnológicas para que compares y tomes la mejor decisión.</p>
            <p>Nuestro servicio no tiene costo, sí, NO TIENE COSTO porque la institución financiera que elijas será la que cubrirá nuestros honorarios.</p>
        </div>
    </section>

    <section class="md:py-20 py-10 bg-white-smoke">
        <div class="container mx-auto max-w-6xl px-4 lg:text-xl md:text-lg">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="px-4 md:w-2/5 flex flex-col justify-between">
                    <div class="p-4 flex flex-col border border-primary rounded-lg bg-white text-center items-center justify-center mb-4">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-ligth-primary text-indigo-500 mb-5 flex-shrink-0">
                            <svg fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="leading-relaxed">
                            <h2 class="text-primary text-lg title-font font-bold mb-3">Misión</h2>
                            <p>Mejorar el patrimonio de las familias y empresas en Latinoamérica.</p>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col border border-primary rounded-lg bg-white text-center items-center justify-center">
                        <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-ligth-primary text-indigo-500 mb-5 flex-shrink-0">
                            <svg fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <div class="leading-relaxed">
                            <h2 class="text-primary text-lg title-font font-bold mb-3">Visión</h2>
                            <p>Ayudar a obtener el mejor producto financiero a las familias y empresas en Latinoamerica.</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-3/5 flex flex-col border border-primary rounded-lg bg-white text-center items-center justify-center">
                    <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-ligth-primary text-indigo-500 mb-5 flex-shrink-0">
                        <svg fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="leading-relaxed">
                        <h2 class="text-primary text-lg title-font font-bold mb-3">Valores</h2>
                        <p><strong>Franqueza:</strong> Nos ayuda a comunicarnos</p>
                        <p><strong>Humildad:</strong> Nos ayuda a escuchar</p>
                        <p><strong>Compromiso:</strong> Son las ganas de salir adelante</p>
                        <p><strong>Alegría:</strong> Es la mejor forma de agradecer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="md:py-20 py-10">
        <div class="container mx-auto max-w-6xl px-4 main-content lg:text-xl md:text-lg">
            <h2 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Líneas de negocio</h2>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 font-light">
                <a href="{{ url('credito-hipotecario') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="text-primary font-bold mb-6">Asesor&iacute;a Hipotecaria</h4>
                    <p>Te asesoramos para elegir la mejor alternativa de crédito hipotecario.</p>
                </a>
                <a href="{{ url('credito-empresarial') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="text-primary font-bold mb-6">Asesor&iacute;a Empresarial</h4>
                    <p>Te presentamos el mejor financiamiento para que tu empresa siga creciendo.</p>
                </a>
                <a href="{{ url('seguros') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="text-primary font-bold mb-6">Asesor&iacute;a Seguros</h4>
                    <p>Te presentamos el seguro que te proteja a ti y a tu familia.</p>
                </a>
                <a href="{{ url('credito-auto') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="text-primary font-bold mb-6">Asesor&iacute;a Automotr&iacute;z</h4>
                    <p>Ayudamos a que encuentres el crédito para el auto o moto de tus sueños.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="md:py-20 py-10 bg-ligth-primary text-white">
        <div class="container mx-auto max-w-6xl px-4 main-content lg:text-xl md:text-lg" id="counter">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8 font-light">
                <a href="{{ url('credito-hipotecario') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="lg:text-7xl md:text-5xl text-3xl text-center font-bold mb-6"><span class="count" data-count="22">0</span></h4>
                    <p>Más de 22 años de experiencia y más de 150,000 créditos otorgados.</p>
                </a>
                <a href="{{ url('credito-empresarial') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="lg:text-7xl md:text-5xl text-3xl text-center font-bold mb-6"><span class="count" data-count="700">0</span></h4>
                    <p>Más de 700 franquicias en todo México especializadas en nuestros productos financieros.</p>
                </a>
                <a href="{{ url('seguros') }}" class="border border-ligth-primary rounded-md p-6">
                    <h4 class="lg:text-7xl md:text-5xl text-3xl text-center font-bold mb-6"><span class="count" data-count="19">0</span>%</h4>
                    <p>19% de las hipotecas en México, se han logrado de la mano de un asesor SOC.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="md:py-20 py-10">
        <div class="container mx-auto max-w-6xl px-4 main-content lg:text-xl md:text-lg">
            <h2 class="text-primary text-center lg:text-4xl md:text-3xl text-2xl font-bold mb-10">Fortalezas</h2>

            <ul class="list-sinergia">
                <li>
                    <span><strong>Marketing:</strong> nos enfocamos en el posicionamiento de la marca en diferentes eventos y medios masivos de comunicación</span>
                </li>
                <li>
                    <span><strong>Capacitación + tecnología:</strong> nos fortalecemos con webinars, e-learning y desarrollos propios para mantenernos actualizados y ofrecer un servicio especializado.</span>
                </li>
                <li>
                    <span><strong>Experiencia:</strong> tenemos más de 22 años de experiencia formando líderes en asesoría financiera.</span>
                </li>
            </ul>
        </div>
    </section>

    <section class="my-8">
        <div class="container mx-auto max-w-6xl px-4 text-center">
            <figure class="inline-block"><img src="https://socasesores.com/img/quienes/convencion2.jpg" alt="" /></figure>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var counted = 0;
        $(window).on('scroll load',function() {

            var oTop = $('#counter').offset().top - window.innerHeight;
            if (counted == 0 && $(window).scrollTop() > oTop) {
                $('.count').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
                counted = 1;
            }
        });
    </script>
@endsection
