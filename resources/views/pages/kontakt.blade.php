<x-title>
    Kontakt
</x-title>

<section class="px-6 pb-6 text-primary md:px-0">
    <div class="content">
        <div class="md:flex">
            <div class="md:w-1/2">
                <p class="pb-4 text-xl font-bold">Kontaktní informace</p>
                <p class="font-bold">Regionální kancelář:</p>
                    Sokolská třída 1204/8,<br>702 00 Ostrava
                <p class="font-bold">Kontaktní místo poslance:</p>
                    Náměstí Míru 6,<br>
                    744 01 Frenštát pod Radhoštěm (1. patro)<br>
                    Hodiny pro veřejnost: Pondělí 9:00 – 12:00
                <p class="py-8">Email: jandaj@psp.cz</p>
                <form 
                    x-data="{ 
                        submit() {
                            let formData = Object.fromEntries(new FormData($el).entries());

                            this.loading = true;

                            $nextTick(() => { 
                                fetch(global_url + '/contact-form/send', {
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'Accept': 'application/json, text-plain, */*',
                                        'X-Requested-With': 'XMLHttpRequest'
                                    },
                                    method: 'POST',
                                    credentials: 'same-origin',
                                    body: JSON.stringify(formData)
                                }).then((response) => {
                                    return response.json()
                                }).then((response) => {
                                    $nextTick(() => { 
                                        if(response.status == 'done') {
                                            this.success = true;
                                            $el.reset();
                                        }else {
                                            this.fail = true;
                                        }
                                        this.loading = false;
                                    });
                                });
                            });

                            
                            console.log(formData);
                        },
                        loading: false,
                        success: false,
                        fail: false
                    }"
                    x-on:submit.prevent="submit"
                    class="block md:pr-4"
                    method="POST"
                    action="./"
                >
                    <div x-show="success" x-cloak @click.away="success = false" class="flex items-center justify-center px-8 py-4 mb-4 text-white bg-green-500">
                        Kontaktní formulář byl úspěšně odeslán.
                    </div>
                    <div x-show="fail" x-cloak @click.away="fail = false" class="flex items-center justify-center px-8 py-4 mb-4 text-white bg-red-600">
                        Odeslání se nepodařilo, zkuste to prosím později.
                    </div>
                    <p class="mb-2 text-xl font-bold">Napište mi:</p>
          
                    <span id="success-message" class="hidden w-full px-4 py-2 mb-4 text-green-700 bg-green-200">Zpráva byla úspěšně odeslána</span>
          
                    <label for="first_name">Jméno: </label><br>
                    <input id="first_name" type="text" name="first_name" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required>
          
                    <label for="sur_name">Příjmení: </label><br>
                    <input id="sur_name" type="text" name="sur_name" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required><br>
          
                    <label for="email">Váš email: </label><br>
                    <input id="email" type="email" name="email" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required><br>
          
                    <label for="text">Váš dotaz</label><br>
                    <textarea id="text" name="text" rows="6" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required></textarea><br>

                    <button type="submit" name="submit" class="tracking-wide text-white bg-green-500 btn" :class="{ 'opacity-60': loading }">
                        <span class="px-2">Odeslat</span>
                        <div x-cloak x-show="loading" class="relative inline-flex items-center px-1 py-1">
                            <svg class="absolute animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.75 22c0 .966-.783 1.75-1.75 1.75s-1.75-.784-1.75-1.75.783-1.75 1.75-1.75 1.75.784 1.75 1.75zm-1.75-22c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 10.75c.689 0 1.249.561 1.249 1.25 0 .69-.56 1.25-1.249 1.25-.69 0-1.249-.559-1.249-1.25 0-.689.559-1.25 1.249-1.25zm-22 1.25c0 1.105.896 2 2 2s2-.895 2-2c0-1.104-.896-2-2-2s-2 .896-2 2zm19-8c.551 0 1 .449 1 1 0 .553-.449 1.002-1 1-.551 0-1-.447-1-.998 0-.553.449-1.002 1-1.002zm0 13.5c.828 0 1.5.672 1.5 1.5s-.672 1.501-1.502 1.5c-.826 0-1.498-.671-1.498-1.499 0-.829.672-1.501 1.5-1.501zm-14-14.5c1.104 0 2 .896 2 2s-.896 2-2.001 2c-1.103 0-1.999-.895-1.999-2s.896-2 2-2zm0 14c1.104 0 2 .896 2 2s-.896 2-2.001 2c-1.103 0-1.999-.895-1.999-2s.896-2 2-2z"/>
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
            <div class="md:w-1/2">
                <p class="text-xl font-bold">Sociální sítě:</p>
                <div class="mb-6 text-sm leading-relaxed sm:flex md:block lg:flex">
                    <a href="https://www.facebook.com/jandysj" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="./img/facebook-dark.svg" class="float-left h-6 mr-2" alt="">Facebook</a>
                    <a href="https://www.instagram.com/jandys.j/" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="./img/instagram-dark.svg" class="float-left h-6 mr-2" alt="">Instagram</a>
                    <a href="https://twitter.com/jandysj" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="./img/twitter-dark.svg" class="float-left h-6 mr-2" alt="">Twitter</a>
                    <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="block w-32 h-10 px-3 py-2 mb-2 rounded-lg bg-secondary"><img src="./img/youtube-dark.svg" class="float-left h-6 mr-2" alt="">Youtube</a>
                </div>
                <p class="text-xl font-bold">Regionální kancelář - Ostrava</p>
                <iframe src="https://maps.google.com/maps?q=Sokolsk%C3%A1%20t%C5%99%C3%ADda%201204%2F8%2C%20702%2000%20Ostrava&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
                <p class="pt-6 text-xl font-bold">Kontaktní místo - Frenštát p. R.</p>
                <iframe src="https://maps.google.com/maps?q=Fren%C5%A1t%C3%A1t%20pod%20Radho%C5%A1t%C4%9Bm%20N%C3%A1m%C4%9Bst%C3%AD%20M%C3%ADru%206&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
            </div>
      </div>
    </div>
</section>