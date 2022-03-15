<x-title>
    <p>{{ $article['title'] }}</p>
    <div class="text-sm font-normal text-left md:w-1/2 md:mx-auto">
        Publikováno: <b>{{ date('d.m.Y', strtotime($article['published_at'])); }}</b>
    </div>
</x-title>
<section class="pb-12">
    <div class="prose text-justify content text-primary max-w-xl mx-auto ">
        {!! $article['body'] !!}
    </div>
</section>