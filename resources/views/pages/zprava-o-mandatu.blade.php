<x-title>
    Zpráva o mandátu
</x-title>

<section class="px-6 pb-6 text-primary md:px-0">
    <div class="max-w-2xl mx-auto">
        <p>
            "Skládat voličům účty." Heslo, které často zaznívá z úst politiků a pod kterým si asi lze představit leccos. Rozhodl jsem se proto, že nezůstanu u slov, hodím všechno pěkně na papír a udělám z toho kompletní přehled. Nakonec vznikla skoro čtyřicetistránková brožura, která nese příznačný název "Zpráva o mém mandátu." :)
            <br><br>
            Najdete v ní téměř vše, co jsem čtyři roky dělal, co se mi podařilo a povedlo, ale i to, co zůstalo u rozdělané práce. 
            <br><br>
            Když jsem před čtyřmi lety nastupoval do Sněmovny, hrozně se mi líbilo Masarykovské "Drobná práce pozitivní." A toho jsem se držel celé čtyři roky. Není totiž pravda, že jako jednotlivec ve Sněmovně ničeho nedosáhnete. Jde to i z opozice! Pravda, mnohdy narazíte čelem do zdi, ale jde o to vstát a znovu to znovu. A znovu a znovu.
            <br><br>
            Pokud mi to navíc za  14 dní dovolíte, onu rozdělanou práci dotáhnu do konce! 
            <br><br>
            Přeju příjemné čtení! :)
        </p>
        <div class="flex justify-center">
            <a href="http://mandat.webdo.cz/zprava.pdf" target="_blank" class="my-8 tracking-wide text-white btn bg-primary">
                Zpráva o mandátu v PDF
            </a>  
        </div> 
        <p class="pb-6">Nebo mi napište Vaši adresu a já vám zprávu o mandátu pošlu do vaší schránky.</p>
        <form 
            x-data="{ 
                submit() {
                    let formData = Object.fromEntries(new FormData($el).entries());

                    this.loading = true;

                    $nextTick(() => { 
                        fetch(global_url + '/send-pdf/send', {
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
                Zpráva o mandátu vám brzy příjde do vaší schránky.
            </div>
            <div x-show="fail" x-cloak @click.away="fail = false" class="flex items-center justify-center px-8 py-4 mb-4 text-white bg-red-600">
                Odeslání se nepodařilo, zkuste to prosím později.
            </div>
            <p class="mb-2 text-xl font-bold">Odeslat zprávu o mandátu:</p>
    
            <span id="success-message" class="hidden w-full px-4 py-2 mb-4 text-green-700 bg-green-200">Zpráva byla úspěšně odeslána</span>
    
            <label for="first_name">Jméno: </label><br>
            <input id="first_name" type="text" name="first_name" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required>
    
            <label for="sur_name">Příjmení: </label><br>
            <input id="sur_name" type="text" name="sur_name" class="w-full px-4 py-2 mb-2 border-2 border-gray-300 focus:border-primary" required><br>
    
            <label for="street">Ulice: </label><br>
            <input id="street" type="text" name="street" class="w-full px-4 py-2 mb-6 border-2 border-gray-300 focus:border-primary" required><br>
    
            <label for="number">Číslo popisné: </label><br>
            <input id="number" type="text" name="number" class="w-full px-4 py-2 mb-6 border-2 border-gray-300 focus:border-primary" required><br>
    
            <label for="city">Město: </label><br>
            <input id="city" type="text" name="city" class="w-full px-4 py-2 mb-6 border-2 border-gray-300 focus:border-primary" required><br>

            <label for="post_code">PSČ: </label><br>
            <input id="post_code" type="text" name="post_code" class="w-full px-4 py-2 mb-6 border-2 border-gray-300 focus:border-primary" required><br>

            <button type="submit" name="submit" class="tracking-wide text-white transition duration-500 ease-in-out bg-green-500 btn " :class="{ 'opacity-60': loading }">
                <span class="px-2">Odeslat</span>
                <div x-cloak x-show="loading" class="relative inline-flex items-center px-1 py-1">
                    <svg class="absolute animate-spin" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.75 22c0 .966-.783 1.75-1.75 1.75s-1.75-.784-1.75-1.75.783-1.75 1.75-1.75 1.75.784 1.75 1.75zm-1.75-22c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 10.75c.689 0 1.249.561 1.249 1.25 0 .69-.56 1.25-1.249 1.25-.69 0-1.249-.559-1.249-1.25 0-.689.559-1.25 1.249-1.25zm-22 1.25c0 1.105.896 2 2 2s2-.895 2-2c0-1.104-.896-2-2-2s-2 .896-2 2zm19-8c.551 0 1 .449 1 1 0 .553-.449 1.002-1 1-.551 0-1-.447-1-.998 0-.553.449-1.002 1-1.002zm0 13.5c.828 0 1.5.672 1.5 1.5s-.672 1.501-1.502 1.5c-.826 0-1.498-.671-1.498-1.499 0-.829.672-1.501 1.5-1.501zm-14-14.5c1.104 0 2 .896 2 2s-.896 2-2.001 2c-1.103 0-1.999-.895-1.999-2s.896-2 2-2zm0 14c1.104 0 2 .896 2 2s-.896 2-2.001 2c-1.103 0-1.999-.895-1.999-2s.896-2 2-2z"/>
                    </svg>
                </div>
            </button>
        </form>
    </div>
</section>