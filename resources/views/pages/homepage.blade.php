<div>
    <section x-data="{show: true}" x-show="show" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40">
        <div class="relative w-full max-w-lg px-10 py-8 mb-12 bg-white text-primary" @click.away="show = false">
            <h4 class="mb-1 text-2xl font-bold">Zpráva o mandátu</h4>
            <p class="mb-4">Nechte si poslat naši zprávu o mandátu na Váš email.</p>
            <a x-link="zprava-o-mandatu" class="tracking-wide text-white btn bg-primary">
                Přejít na stránku o mandátu
            </a>
            <button @click="show = false" class="absolute top-4 right-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </section>
    <section class="header">
        <div class="flex flex-col-reverse content md:flex-row">
            <div class="w-full px-8 md:w-1/2 lg:pr-24 md:py-8 text-primary">
                <div class="hidden md:block">
                    <h1 class="text-5xl font-bold">Jakub Janda</h1>
                    <h3 class="text-2xl">
                        Politik na Vaší straně
                    </h3>
                </div>
                <ul class="max-w-xs mt-8 list-disc">
                    <li>Jsem občanem, který je hrdý na svoji zemi.</li>
                    <li>Jsem politikem, který hájí pravé hodnoty.</li>
                    <li>Jsem bývalým vrcholovým sportovcem, který bojuje za lepší podmínky pro mládež.</li>
                    <li>Jsem milujícím manželem a otcem tří krásných dětí.</li>
                </ul>
                <div class="text-center md:mr-8">
                    <img src="./img/ods.svg" alt="Strana ODS" class="w-40 mx-auto mt-8">
                    <a x-link="zivotopis" class="my-8 tracking-wide text-white btn bg-primary">
                        Zjistit více o mně
                    </a>
                </div>
            </div>
            <div class="flex w-full pt-4 md:w-1/2">
                <div class="self-end w-1/2 mx-auto md:w-auto md:mx-0">
                    <img src="./img/photo.png" alt="Foto Jakub Janda">
                </div>
            </div>
        </div>
    </section>
    <section class="flex justify-center w-full py-10">
        <a 
            href="https://sportovni-reforma.cz" 
            style="background-image: url('https://sportovni-reforma.cz/img/header.jpg')" 
            class="w-full max-w-2xl bg-center bg-cover text-primary"
        >
            <div class="z-30 inline-flex items-center justify-between w-full h-full px-8 py-3 text-white bg-primary bg-opacity-70">
                <div class="">
                    <p class="text-4xl font-bold">Sportovní reforma</p>
                    <p class="text-lg">Postavme sport znovu na nohy!</p>
                </div>
                <div class="">
                    <button href="https://sportovni-reforma.cz" class="my-8 text-base tracking-wide text-white btn bg-primary">
                        Zobrazit
                    </button>
                </div>
            </div>
        </a>
    </section>
    <section class="px-4 py-12 text-2xl font-bold text-center text-primary">
        <p>Vždy bojuji čestně. Jak ve sportu, tak v politice.</p>
    </section>
    <section class="pb-12 bg-secondary text-primary">
        <h1 class="py-8 text-2xl font-bold text-center uppercase">MÉ PRIORITY</h1>
        <div class="flex flex-col content lg:flex-row">
            <a x-link="politika?scrollTo=priorita1" class="flex h-32 mx-8 my-2 bg-white cursor-pointer md:w-1/3 md:mx-auto lg:mx-8 lg:my-0">
                <div class="w-24 pt-4 text-5xl font-bold text-right">
                    1.
                </div>
                <div class="flex-grow priority">
                    <p class="text-xl font-bold">Braňme svobodu a demokracii!</p>
                    <span class="float-right pt-3 text-sm">Zjistit více <img src="./img/link-icon.png" alt="" class="inline"></span>
                </div>
            </a>
            <a x-link="politika?scrollTo=priorita2" class="flex h-32 mx-8 my-2 bg-white cursor-pointer md:w-1/3 md:mx-auto lg:mx-8 lg:my-0">
                <div class="w-24 pt-4 text-5xl font-bold text-right">
                    2.
                </div>
                <div class="flex-grow priority">
                    <p class="text-xl font-bold">Nižší daně, méně byrokracie!</p>
                    <span class="float-right pt-3 text-sm">Zjistit více <img src="./img/link-icon.png" alt="" class="inline"></span>
                </div>
            </a>
            <a x-link="politika?scrollTo=priorita3" class="flex h-32 mx-8 my-2 bg-white cursor-pointer md:w-1/3 md:mx-auto lg:mx-8 lg:my-0">
                <div class="w-24 pt-4 text-5xl font-bold text-right">
                    3.
                </div>
                <div class="flex-grow priority">
                    <p class="text-xl font-bold">Transparentní podporu sportu!</p>
                    <span class="float-right pt-3 text-sm">Zjistit více <img src="./img/link-icon.png" alt="" class="inline"></span>
                </div>
            </a>
        </div>
    </section>
    <section class="my-12 text-primary">
        <div class="content">
            <div class="mx-8 font-bold timeline-horizontal md:flex">
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">1978</span>Narození<br class="hidden md:block"><br class="hidden md:block"></div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2005</span>Stříbro a bronz na MS v Oberstdorfu</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2006</span>Vítězství na Turné čtyř můstků</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2006</span>Vítězství Světového poháru</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2008</span>Vstup do ODS</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2017</span>Sňatek s Barborou</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2017</span>Zvolení poslancem PČR</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2017</span>Konec skokanské kariéry ve Visle</div></div>
                <div class="w-full my-1 md:my-0 md:w-auto"><div><span class="block font-normal">2018</span>Zvolení předsedou Úseku skoků na lyžích</div></div>
            </div>
        </div>
        <div class="py-6 text-center md:mt-32">
            <a x-link="zivotopis" class="">zobrazit celý životopis</a>
        </div>
    </section>
    <section class="pb-6">
        <div class="content lg:flex text-primary">
            <div class="px-4 py-3 text-2xl font-bold leading-loose text-center uppercase lg:w-1/4 lg:text-left md:py-16">
                NEJNOVĚJŠÍ <br class="hidden lg:block">ČLÁNEK
            </div>
            <div class="px-4 lg:w-3/4 bg-secondary md:flex md:px-0">
                @if(isset($article['thumbnail']['static']))
                    <div style="background: url('{{ $article['thumbnail']['static'] }}');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @else
                    <div style="background: url('./img/post-img.jpg');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @endif
                <a x-link="clanek/{{ $article['slug'] }}" class="relative block w-full px-8 py-8 md:py-0">
                    <h2 class="text-2xl font-bold leading-tight md:pt-8 md:pb-2">
                        {{ $article['title'] }}
                    </h2>
                    <p> 
                        {{ $article['teaser'] }}...
                    </p>
                    <span class="absolute bottom-0 right-0 pb-5 pr-8 text-sm">
                        Zjistit více <img src="./img/link-icon-dark.png" alt="Zjistit více" class="inline">
                    </span>
                </a>
            </div>
        </div>
        <div class="w-full pt-12 text-center">
            <a x-link="clanky" class="tracking-wide text-white btn bg-primary md:mt-8">Zobrazit všechny články</a>
        </div>
    </section>
    <section class="text-primary">
        <h1 class="py-8 text-2xl font-bold text-center uppercase">
            Sledujte mě i na mých socialních sítích
        </h1>
        <div class="justify-center px-8 content md:flex">
            <a href="https://www.facebook.com/jandysj" class="flex mx-4 my-4 text-center social-link facebook-bg md:block" target="_blank">
                <img src="http://jakubjanda.cz/theme/img/facebook.svg" alt="Facebook stránka" class="h-12 mx-6 my-6 md:mx-auto">
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Facebook
                </span>
            </a>
            <a href="https://www.instagram.com/jandys.j/" class="flex mx-4 my-4 text-center social-link instagram-bg md:block" target="_blank">
                <img src="http://jakubjanda.cz/theme/img/instagram.svg" alt="Instagram stránka" class="h-12 mx-6 my-6 md:mx-auto">
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Instagram
                </span>
            </a>
            <a href="https://twitter.com/jandysj" class="flex mx-4 my-4 text-center social-link twitter-bg md:block" target="_blank">
                <img src="http://jakubjanda.cz/theme/img/twitter.svg" alt="Twitter stránka" class="h-12 mx-6 my-6 md:mx-auto">
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Twitter
                </span>
            </a>
            <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="flex mx-4 my-4 text-center social-link youtube-bg md:block" target="_blank">
                <img src="http://jakubjanda.cz/theme/img/youtube.svg" alt="Youtube stránka" class="h-12 mx-6 my-6 md:mx-auto">
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    YouTube
                </span>
            </a>
        </div>
     </section>
</div>
