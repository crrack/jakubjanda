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
                    <a href="https://www.facebook.com/jandysj" class="flex items-center w-32 h-10 p-2 mb-2 mr-2 rounded bg-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="opacity-70" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                        </svg>
                        <span class="pl-1">Facebook</span>
                    </a>
                    <a href="https://www.facebook.com/jandysj" class="flex items-center w-32 h-10 p-2 mb-2 mr-2 rounded bg-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="opacity-70" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                        </svg>
                        <span class="pl-2">Instagram</span>
                    </a>
                    <a href="https://www.facebook.com/jandysj" class="flex items-center w-32 h-10 p-2 mb-2 mr-2 rounded bg-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="opacity-70" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                        </svg>
                        <span class="pl-2">Twitter</span>
                    </a>
                    <a href="https://www.facebook.com/jandysj" class="flex items-center w-32 h-10 p-2 mb-2 mr-2 rounded bg-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="opacity-70" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.652 0h1.44l.988 3.702.916-3.702h1.454l-1.665 5.505v3.757h-1.431v-3.757l-1.702-5.505zm6.594 2.373c-1.119 0-1.861.74-1.861 1.835v3.349c0 1.204.629 1.831 1.861 1.831 1.022 0 1.826-.683 1.826-1.831v-3.349c0-1.069-.797-1.835-1.826-1.835zm.531 5.127c0 .372-.19.646-.532.646-.351 0-.554-.287-.554-.646v-3.179c0-.374.172-.651.529-.651.39 0 .557.269.557.651v3.179zm4.729-5.07v5.186c-.155.194-.5.512-.747.512-.271 0-.338-.186-.338-.46v-5.238h-1.27v5.71c0 .675.206 1.22.887 1.22.384 0 .918-.2 1.468-.853v.754h1.27v-6.831h-1.27zm2.203 13.858c-.448 0-.541.315-.541.763v.659h1.069v-.66c.001-.44-.092-.762-.528-.762zm-4.703.04c-.084.043-.167.109-.25.198v4.055c.099.106.194.182.287.229.197.1.485.107.619-.067.07-.092.105-.241.105-.449v-3.359c0-.22-.043-.386-.129-.5-.147-.193-.42-.214-.632-.107zm4.827-5.195c-2.604-.177-11.066-.177-13.666 0-2.814.192-3.146 1.892-3.167 6.367.021 4.467.35 6.175 3.167 6.367 2.6.177 11.062.177 13.666 0 2.814-.192 3.146-1.893 3.167-6.367-.021-4.467-.35-6.175-3.167-6.367zm-12.324 10.686h-1.363v-7.54h-1.41v-1.28h4.182v1.28h-1.41v7.54zm4.846 0h-1.21v-.718c-.223.265-.455.467-.696.605-.652.374-1.547.365-1.547-.955v-5.438h1.209v4.988c0 .262.063.438.322.438.236 0 .564-.303.711-.487v-4.939h1.21v6.506zm4.657-1.348c0 .805-.301 1.431-1.106 1.431-.443 0-.812-.162-1.149-.583v.5h-1.221v-8.82h1.221v2.84c.273-.333.644-.608 1.076-.608.886 0 1.18.749 1.18 1.631v3.609zm4.471-1.752h-2.314v1.228c0 .488.042.91.528.91.511 0 .541-.344.541-.91v-.452h1.245v.489c0 1.253-.538 2.013-1.813 2.013-1.155 0-1.746-.842-1.746-2.013v-2.921c0-1.129.746-1.914 1.837-1.914 1.161 0 1.721.738 1.721 1.914v1.656z"></path>
                        </svg>
                        <span class="pl-2">Youtube</span>
                    </a>
                </div>
                <p class="text-xl font-bold">Regionální kancelář - Ostrava</p>
                <iframe src="https://maps.google.com/maps?q=Sokolsk%C3%A1%20t%C5%99%C3%ADda%201204%2F8%2C%20702%2000%20Ostrava&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
                <p class="pt-6 text-xl font-bold">Kontaktní místo - Frenštát p. R.</p>
                <iframe src="https://maps.google.com/maps?q=Fren%C5%A1t%C3%A1t%20pod%20Radho%C5%A1t%C4%9Bm%20N%C3%A1m%C4%9Bst%C3%AD%20M%C3%ADru%206&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
            </div>
      </div>
    </div>
</section>