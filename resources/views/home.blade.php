@extends('app')

@section('content')
@vite('resources/js/keen-slider.js')

    <x-header headerClass="max-w-7xl mx-auto px-4 py-20 overflow-x-hidden md:overflow-visible">

        <div class="grid grid-cols-2 gap-8 md:gap-20 xl:gap-8 place-items-center">
            <div
                class="flex flex-col order-2 gap-3 pt-6 space-y-4 col-span-full md:px-4 xl:order-1 xl:col-span-1 md:pt-16 ">
                <h1 class="text-4xl font-bold leading-tight text-center md:text-left md:text-5xl md:leading-tight"
                    x-animate="fadeInUp">
                    Digit-ON : Expert en Création de Sites Web et Marketing Digital
                </h1>
                <p class="text-center text-slate-500 md:text-left animate__delay-200ms" x-animate.delay.100="fadeInUp">
                    Élevez votre présence en ligne avec Digit-ON, votre partenaire pour des sites web captivants, une
                    gestion optimisée des réseaux sociaux, et des stratégies de marketing digital sur mesure.
                </p>
                <div class="flex justify-center md:justify-start gap-4">
                    <button x-on:click="$dispatch('open-contact-form-modal')" class="btn btn-accent-blue"
                        x-animate.delay.200="fadeInUp">
                        Contact
                    </button>
                    <a href="" class="btn btn-primary" x-animate.delay.200="fadeInUp">
                        {{ __('Voir portfolio') }}
                    </a>
                </div>
            </div>

            <div class="relative order-1 col-span-full xl:order-2 xl:col-span-1 lg:pt-12">
                <div class="absolute z-0 rounded-full -top-8 -right-16 bg-accent-blue-400 w-28 h-28 md:w-52 md:h-52"
                    x-animate.delay.500="zoomIn"></div>

                <div class="absolute rounded-full -bottom-8 -left-16 md:-bottom-16 bg-accent-green-350 w-36 h-36 md:w-64 md:h-64"
                    x-animate.delay.500="zoomIn"></div>

                <img class="relative z-20 rounded-3xl" src="https://placehold.co/550x300" alt="" x-animate="zoomIn">
            </div>
        </div>
    </x-header>
@endsection
