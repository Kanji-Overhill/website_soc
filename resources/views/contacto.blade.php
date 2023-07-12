@extends('layout')

@section('content')

    <section class="md:pt-20 sm:pt-28 pt-20 ">
        <div class="slick-slider">
            <figure class="bg-cover bg-[url({{ URL::asset('img/home/lineas-negocio/Credito-de-auto.jpg') }})]">
                <div class="flex items-center justify-center w-full h-[500px] bg-white/50">
                    <div class="container max-w-6xl">
                        <h2 class="text-primary lg:text-5xl md:text-4xl text-3xl font-bold">Contáctanos</h2>
                        <div class="text-2xl mb-10">
                            <p>Déjanos un mensaje o usa nuestros <br> medios de contacto directo.</p>
                        </div>
                    </div>
                </div>
            </figure>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto max-w-6xl px-4">
            <div class="row">
                <div class="col-sm-6">
                    <!--[if lte IE 8]>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
                    <![endif]-->
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                    <script>
                      hbspt.forms.create({
                        portalId: "4954496",
                        formId: "74062241-1cb2-46d4-9db6-e2960462e46b"
                    });
                    </script>
                </div>
                <div class="col-sm-6">
                    <h2 class="lg:text-2xl md:text-xl text-lg font-light mb-2">Horario de atención:</h2>
                    <p>Lunes a viernes de 9:00 - 18:00 hrs.</p>
                    <br>

                    <h2 class="lg:text-2xl md:text-xl text-lg font-light mb-2">Atención al cliente:</h2>
                    <p><a class="text-secundary" href="tel://5552565770"><i class="fa fa-phone-alt"></i> <u>55 5256 5770</u></a></p>
                    <p><a class="text-secundary" href="mailto: contacto@socasesores.com?subject=Quiero información acerca de SOC&amp;body=¡Hola! Quiero información acerca de este producto." target="_blank"><i class="fa fa-envelope"></i> <u>contacto@socasesores.com</u></a></p>
                    <br>

                    <h2 class="lg:text-2xl md:text-xl text-lg font-light mb-2">Franquicias:</h2>
                    <p><a class="text-secundary" href="tel://5579172773"><i class="fa fa-phone-alt"></i> <u>55 7917 2773</u></a></p>
                    <br>

                    <h2 class="lg:text-2xl md:text-xl text-lg font-light mb-2">Servicio al broker:</h2>
                    <p><a class="text-secundary" href="tel://5552565770"><i class="fa fa-phone-alt"></i> <u>55 5256 5770</u></a></p>

                    <br>

                    <p>Hamburgo 227, Colonia Juárez, Alcaldía Cuauhtémoc, México CDMX 06600.</p>


                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
@endsection