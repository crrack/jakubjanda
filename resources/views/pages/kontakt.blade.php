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
          <form id="form" class="block md:pr-4" action="http://jakubjanda.cz/contact-form" method="post">
            <input type="hidden" name="_token" value="l52EjE2r2bzgOPzMWebEb8lSUfjZlP1Z4X9dbK4t">          <p class="text-xl font-bold">Napište mi:</p>
  
            <span id="success-message" class="hidden block w-full px-4 py-2 mb-4 text-green-700 bg-green-200">Zpráva byla úspěšně odeslána</span>
  
            <label for="name">Jméno: </label><br>
            <input type="text" name="name" class="w-full px-4 py-2 mb-2 border border-gray-400">
  
            <label for="surname">Příjmení: </label><br>
            <input type="text" name="surname" class="w-full px-4 py-2 mb-2 border border-gray-400"><br>
  
            <label for="email">Váš email: </label><br>
            <input type="email" name="email" class="w-full px-4 py-2 mb-2 border border-gray-400"><br>
  
            <label for="text">Váš dotaz</label><br>
            <textarea name="text" rows="6" class="w-full px-4 py-2 mb-2 border border-gray-400"></textarea><br>
  
            <input id="submit" type="submit" value="Odeslat" class="tracking-wide text-white btn bg-primary">
          </form>
          <script>
        //   $("#submit").click(function(e) {
        //     e.preventDefault();
        //     $("#submit").val('Odesílám...').attr('disabled','disabled');
        //     $.ajax({
        //       type: 'POST',
        //       url: "http://jakubjanda.cz/contact-form",
        //       data: $("#form").serialize(),
        //       success: function(response) {
        //         $( "#form .border-gray-400" ).each(function() {
        //           $( this ).attr('disabled','disabled');
        //         });
        //         $('#success-message').removeClass('hidden');
        //         $("#submit").val('Odesláno');
        //       },
        //       error: function(response) {
        //         alert('Nastala chyba při odesílání emailu.');
        //         $("#submit").val('Odeslat').removeAttr('disabled');
        //       }
        //     });
        //   });
          </script>
        </div>
        <div class="md:w-1/2">
          <p class="text-xl font-bold">Sociální sítě:</p>
          <div class="mb-6 text-sm leading-relaxed sm:flex md:block lg:flex">
            <a href="https://www.facebook.com/jandysj" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="http://jakubjanda.cz/theme/img/facebook-dark.svg" class="float-left h-6 mr-2" alt="">Facebook</a>
            <a href="https://www.instagram.com/jandys.j/" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="http://jakubjanda.cz/theme/img/instagram-dark.svg" class="float-left h-6 mr-2" alt="">Instagram</a>
            <a href="https://twitter.com/jandysj" class="block w-32 h-10 px-3 py-2 mb-2 mr-2 rounded-lg bg-secondary"><img src="http://jakubjanda.cz/theme/img/twitter-dark.svg" class="float-left h-6 mr-2" alt="">Twitter</a>
            <a href="https://www.youtube.com/channel/UCQid7UGiK0dZ3JIgRG5yNXA" class="block w-32 h-10 px-3 py-2 mb-2 rounded-lg bg-secondary"><img src="http://jakubjanda.cz/theme/img/youtube-dark.svg" class="float-left h-6 mr-2" alt="">Youtube</a>
          </div>
          <p class="text-xl font-bold">Regionální kancelář - Ostrava</p>
          <iframe src="https://maps.google.com/maps?q=Sokolsk%C3%A1%20t%C5%99%C3%ADda%201204%2F8%2C%20702%2000%20Ostrava&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
          <p class="pt-6 text-xl font-bold">Kontaktní místo - Frenštát p. R.</p>
          <iframe src="https://maps.google.com/maps?q=Fren%C5%A1t%C3%A1t%20pod%20Radho%C5%A1t%C4%9Bm%20N%C3%A1m%C4%9Bst%C3%AD%20M%C3%ADru%206&amp;t=&amp;z=7&amp;ie=UTF8&amp;iwloc=&amp;output=embed" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="200" frameborder="0"></iframe>
        </div>
      </div>
    </div>
</section>