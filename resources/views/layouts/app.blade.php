<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- HTML title tag, seo meta tags --}}
        @include('webdo.head')
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{{ url('css/app.css') }}" rel="stylesheet">
        <link href="http://jakubjanda.cz/theme/addons/slick/slick.css" rel="stylesheet">

        {{-- Include Alpine.js and Webdo scripts --}}
        @include('webdo.scripts')

        <script src="//code.jquery.com/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="http://jakubjanda.cz/theme/addons/slick/slick.min.js" type="text/javascript"></script>
    </head>
    {{-- <body @link.window="link($event.detail)" x-data="root" x-init="init"> --}}
    <body x-data="root" x-init="init">
        <section class="menu">
            <div class="relative flex content">
              <div class="w-1/2 py-3 pl-8 md:py-5 text-primary">
                <a x-link="/">
                    <h1 class="text-2xl font-bold md:hidden" :class="{ 'md:hidden': path == '/' }">Jakub Janda</h1>
                    <h3 class="text-sm md:hidden" :class="{ 'md:hidden': path == '/' }">Politik na Vaší straně</h3>
                </a>
              </div>
              @include('layouts.partials.menu')
            </div>
        </section>

        <div x-show="loading" class="fixed inset-0 z-50 flex items-center justify-center h-screen overflow-y-hidden bg-opacity-75 bg-secondary">
            <span 
                class="w-24 h-24 bg-transparent border-8 rounded-full animate-spin" 
                style="border-color: #164194 transparent #164194 transparent;"
            ></span>
        </div>

        {{-- Here will be content --}}
        <main id="html_view">
            {!! $html_view !!}
        </main>

        @include('layouts.partials.gallery')
        <section>
            <div class="flex px-4 py-12 content text-primary md:px-0">
                <div class="w-1/2">
                    Copyright © 2019 Jakub Janda 
                </div>
                <div class="w-1/2">
                    Zadavatel: ODS, KDU-ČSL, TOP 09, <br>
                    Zpracovatel: Jiří Adamec
                </div>
                <div class="w-1/2 text-right">
                    Vytvořil: <a href="https://webdo.cz" class="font-bold hover:underline">Webdo</a>
                </div>
            </div>
        </section>
    </body>
</html>