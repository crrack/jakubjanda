<x-title>
    {{ $category ? 'Napsali o mně' : 'Všechny články' }}
</x-title>
<section class="pb-6">
    @if(!$category)
        <a href="{{ url('clanky/napsali-o-mne') }}" class="flex items-center justify-between max-w-lg bg-primary mb-6 px-6 text-xl py-4 mx-auto text-white group">
            <span>Napsali o mně</span>
            <svg class="opacity-60 group-hover:opacity-100 transition duration-200" width="32" height="32" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.75 8.75L14.25 12L10.75 15.25"></path>
            </svg>
        </a>
    @endif
    <div class="flex-col content md:flex text-primary">
        @foreach($articles as $article)
            <div class="mx-auto my-4 md:w-3/4 md:bg-secondary md:flex">
                @if(isset($article['media']['thumbnail-static']['md']['url']))
                    <div style="background: url('{{ $article['media']['thumbnail-static']['md']['url'] }}');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @else
                    <div style="background: url('../img/post-img.jpg');" class="hidden mx-auto bg-indigo-200 post-img md:block">
                    </div>
                @endif
                <a x-link="{{ url('clanek/' . $article['slug']) }}" class="relative flex-grow block px-8 py-8 md:py-0">
                    <h2 class="text-2xl font-bold leading-tight md:pt-8 md:pb-2">{{ $article['title'] }}</h2>
                    <p>{{ $article['teaser'] }}...</p>
                    <span class="absolute bottom-0 right-0 pb-5 pr-8 text-sm">
                        Zjistit více 
                        <img src="../img/link-icon-dark.png" alt="Zjistit více" class="inline">
                    </span>
                </a>
            </div>
        @endforeach
        {{ $articles->links('pagination') }}
    </div>
  </section>