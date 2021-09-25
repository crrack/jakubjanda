<div class="w-1/2">
    <button @click="menu_open = true" class="absolute top-0 right-0 px-4 py-5 text-3xl text-gray-800 lg:hidden">
        <img src="./img/menu.svg" alt="Otevřít menu" width="36px">
    </button>
    <div :class="{ 'hidden': !menu_open, 'block': menu_open }" class="fixed top-0 left-0 z-50 w-full h-screen py-32 text-lg tracking-wide text-center uppercase bg-white menu-items lg:flex lg:h-auto lg:bg-transparent lg:relative text-primary lg:text-white lg:text-sm lg:py-10">
        <button @click="menu_open = false" class="absolute top-0 right-0 px-4 py-5 text-3xl text-gray-800 lg:hidden">
            <img src="./img/close.svg" alt="Zavřít menu" width="36px">
        </button>
        <a x-link="/"class="block w-full pt-4 lg:-ml-12 lg:pt-0 lg:px-4 lg:w-auto">Domů</a>
        <a x-link="zivotopis" class="block w-full pt-4 lg:pt-0 lg:px-4 lg:w-auto">Životopis</a>
        <a x-link="politika" class="block w-full pt-4 lg:pt-0 lg:px-4 lg:w-auto">Politika</a>
        <a x-link="clanky" class="block w-full pt-4 lg:pt-0 lg:px-4 lg:w-auto">Články</a>
        <a x-link="videa" class="block w-full pt-4 lg:pt-0 lg:px-4 lg:w-auto">Videa</a>
        <a x-link="kontakt" class="block w-full pt-4 lg:pt-0 lg:px-4 lg:w-auto">Kontakt</a>
        <div class="pt-8 lg:absolute lg:top-0 lg:right-0 lg:flex xl:-mr-28">
            <a style="margin-top: 68px;" x-link="zprava-o-mandatu" class="px-4 py-2 font-bold text-white normal-case bg-green-600">
                Zpráva o mandátu
            </a>
        </div>
        <div class="absolute bottom-0 flex justify-center w-full mb-6 lg:hidden">
            <a href="https://www.facebook.com/jandysj" class="px-2 hover:opacity-75"><img src="./img/facebook-dark.svg" class="h-6" alt="Facebook stránka"></a>
            <a href="https://www.instagram.com/jandys.j/" class="px-2 hover:opacity-75"><img src="./img/instagram-dark.svg" class="h-6" alt=""></a>
            <a href="https://twitter.com/jandysj" class="px-2 hover:opacity-75"><img src="./img/twitter-dark.svg" class="h-6" alt=""></a>
            <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="px-2 hover:opacity-75"><img src="./img/youtube-dark.svg" class="h-6" alt=""></a>
        </div>
    </div>
</div>
<div class="absolute right-0 hidden py-8 xl:flex xl:-mr-32">
    <a href="https://www.facebook.com/jandysj" class="p-2 hover:opacity-75"><img src="./img/facebook.svg" class="h-5" alt="Facebook stránka"></a>
    <a href="https://www.instagram.com/jandys.j/" class="px-3 py-2 hover:opacity-75"><img src="./img/instagram.svg" class="h-5" alt="Instagram stránka"></a>
    <a href="https://twitter.com/jandysj" class="p-2 hover:opacity-75"><img src="./img/twitter.svg" class="h-5" alt="Twitter stránka"></a>
    <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="px-3 py-2 hover:opacity-75"><img src=".//img/youtube.svg" class="h-5" alt="Youtube stránka"></a>
</div>
{{-- <a style="margin-top: 100px;" x-link="zprava-o-mandatu" class="absolute right-0 hidden px-4 py-2 font-bold text-white bg-green-600 lg:flex xl:-mr-28">
    Zpráva o mandátu
</a> --}}