<div>
    {{-- <section 
        x-data="{
            show: $persist(true).as('show-mandat-modal')
        }"
        x-cloak
        x-show="show" 
        class="fixed inset-0 z-50 flex flex-col items-center justify-around bg-black bg-opacity-50"
    >
        <div 
            style="background-image: url('img/mandat.png');width: 315px;height: 435px;" 
            class="relative w-full max-w-lg mb-12 bg-white bg-top bg-cover text-primary" @click.away="show = false"
        >
            <div style="" class="relative flex flex-col items-center justify-end w-full h-full px-10 py-4 bg-white text-primary bg-opacity-20" @click.away="show = false">
                <a x-link="zprava-o-mandatu" class="inline-flex tracking-wide text-white btn bg-primary">
                    Zpráva o mandátu
                </a>
                <button @click="show = false" class="absolute top-4 right-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div></div>
    </section> --}}
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
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="mx-6 my-6 md:mx-auto text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg>
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Facebook
                </span>
            </a>
            <a href="https://www.instagram.com/jandys.j/" class="flex mx-4 my-4 text-center social-link instagram-bg md:block" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="mx-6 my-6 md:mx-auto text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                </svg>
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Instagram
                </span>
            </a>
            <a href="https://twitter.com/jandysj" class="flex mx-4 my-4 text-center social-link twitter-bg md:block" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="mx-6 my-6 md:mx-auto text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                </svg>
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    Twitter
                </span>
            </a>
            <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="flex mx-4 my-4 text-center social-link youtube-bg md:block" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" class="mx-6 my-6 md:mx-auto text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z"></path>
                </svg>
                <span class="flex-grow py-5 pr-0 text-lg font-bold text-white md:">
                    Jakub Janda <br>
                    YouTube
                </span>
            </a>
        </div>
     </section>
</div>
