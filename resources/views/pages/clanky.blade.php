<x-title>
    Všechny články
</x-title>
<section class="pb-6">
    <div class="flex-col content md:flex text-primary">
        @foreach($articles as $article)
            <div class="mx-auto my-4 md:w-3/4 md:bg-secondary md:flex">
                @if(isset($article['thumbnail']['static']))
                    <div style="background: url('{{ $article['thumbnail']['static'] }}');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @else
                    <div style="background: url('./img/post-img.jpg');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @endif
                <a class="relative flex-grow block px-8 py-8 md:py-0" x-link="{{ url('clanek/' . $article['slug']) }}" href="{{ url('clanek/' . $article['slug']) }}">
                    <h2 class="text-2xl font-bold leading-tight md:pt-8 md:pb-2">{{ $article['title'] }}</h2>
                    <p>{{ $article['teaser'] }}...</p>
                    <span class="absolute bottom-0 right-0 pb-5 pr-8 text-sm">
                        Zjistit více 
                        <img src="./img/link-icon-dark.png" alt="Zjistit více" class="inline">
                    </span>
                </a>
            </div>
        @endforeach
        {{ $articles->links('pagination') }}
    </div>
  </section>