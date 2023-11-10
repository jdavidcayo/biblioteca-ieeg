<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituto Electoral</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/css/inicio.css') }}">
</head>
<body>
    <header>
        <img class="img__inicio" src="{{ asset('assets/img/inicio/Logo-IEEG.png') }}" alt="Imagen de inicio">
        <h1>Biblioteca Digital del Régimen Especial Sancionador</h1>
        <div>
            <div class="user__login">
                <h5>Hola <span>Constanza Cruz</span></h5>
                <img class="avatar" src="{{ asset('assets/img/inicio/AvatarM.png') }}">
            </div>
            <div class="input-with-icon">
                <input class="busquedas" type="text" name="Busquedas" id="Busquedas" placeholder="Búsqueda">
                <button type="submit" class="lupa__button">
                    <img class="img__buscar" src="{{ asset('assets/img/inicio/Buscar.png') }}" alt="Lupa">
                </button>
            </div>
        </div>
    </header>
    <main>
        <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Manuales.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <div class="info"></div>
    <p class="titulos1">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Manuales.png') }}" alt="icono manuales">MANUALES</p>
    <p class="descripcion">Manuales de operación de apoyo para la integración de un procedimiento especial sancionador y las notificaciones en el instituto.</p>
</div>
   <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Folletos.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <p class="titulos2">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Folletos.png') }}" alt="icono folleto">FOLLETOS</p>
</div>
   <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Formatos.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <p class="titulos1">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Formatos.png') }}" alt="icono formatos">FORMATOS</p>
</div>
   <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Catalogos.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <p class="titulos2">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Catalogo.png') }}" alt="icono catálogos">CATÁLOGOS</p>
</div>
   <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Documentos.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <p class="titulos1">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Documentos.png') }}" alt="icono documentos">DOCUMENTOS</p>
</div>
   <div class="container__main" style="background-image: url('{{ asset('assets/img/inicio/Mosaico-Compendios.png') }}'); width: 500px; height: 500px; background-size: cover;">
    <p class="titulos2">
    <img class="iconos" src="{{ asset('assets/img/inicio/ICONO-Compendios.png') }}" alt="icono compendios">COMPENDIOS</p>
</div>
    </main>
    <section x-data="{ activeSlide: 0 }">
        <div id="carouselExampleControls" class="relative" x-data="{ activeSlide: 0 }">
            <!-- Carousel items -->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!-- Primer item -->
                <div x-show="activeSlide === 0" class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none">
                    <div class="capsulas__inf">
                        <p class="cap__tit">CÁPSULAS INFORMATIVAS</p>
                        <div class="lista__reproduccion">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NI6aOFI7hms" frameborder="0" allowfullscreen></iframe>
                            <div class="desc__video">
                                <p class="tit__vid">Título del video</p>
                                <p class="sub__vid">Octubre 19, 2023</p>
                                <hr>
                                <p class="des__vid" style="margin-top: 30px">Descripción del video. En esta ocasión
                                    tenemos de invitada en Voces de la
                                    Democracia a la Lic. Adriana Arroyo
                                    Florentino quien, con su experiencia como
                                    integrante de la red de refugios y tallerista
                                    en temas de violencia, nos invita a la
                                    reflexión sobre las modalidades y características de la violencia, así como los
                                    principios de la cultura de la paz.</p>
                            </div>
                        </div>
                        <div class="cont__btn">
                            <button class="btn__ver">VER MÁS</button>
                        </div>
                    </div>
                </div>
                <!-- Segundo item y otros slides aquí -->
            </div>
    
            <!-- Controles del carrusel - ítem anterior -->
            <button @click="activeSlide = (activeSlide - 1 + 3) % 3" class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
            </button>
    
            <!-- Controles del carrusel - siguiente ítem -->
            <button @click="activeSlide = (activeSlide + 1) % 3" class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Siguiente</span>
            </button>
        </div>
    </section>
    <footer>
<div class="contacto__footer">
    <p class="copry">IEEG 2018 - 800 433 4486 - Carretera Guanajuato Puentecillas km. 2 + 767, Colonia Puentecillas - C.P. 36263 - Guanajuato, Gto. - Conmutador (473) 735-3000.</p>
</div>
    </footer>
    @yield('content')
    @livewireScripts
    <script
  type="text/javascript"
  src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>
</html>
