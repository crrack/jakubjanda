<x-title>
    Zpráva o mandátu
</x-title>

<section class="px-6 pb-6 text-primary md:px-0">
    <div class="max-w-2xl mx-auto">
        <p class="pb-4 text-xl font-bold">Odeslat zprávu o mandátu</p>
        <p class="pb-6">Zprávu o mandátu vám odešleme na Váš email</p>
        <form id="form" class="block md:pr-4" action="http://jakubjanda.cz/contact-form" method="post">
            <span id="success-message" class="block w-full px-4 py-2 mb-4 text-green-700 bg-green-200">Zpráva byla úspěšně odeslána</span>

            <label for="name">Jméno: </label><br>
            <input type="text" name="name" class="w-full px-4 py-2 mb-2 border border-gray-400">

            <label for="surname">Příjmení: </label><br>
            <input type="text" name="surname" class="w-full px-4 py-2 mb-2 border border-gray-400"><br>

            <label for="email">Váš email: </label><br>
            <input type="email" name="email" class="w-full px-4 py-2 mb-2 border border-gray-400"><br>

            <label for="text">Váš dotaz</label><br>
            <input id="submit" type="submit" value="Odeslat" class="tracking-wide text-white btn bg-primary">
        </form>
    </div>
</section>