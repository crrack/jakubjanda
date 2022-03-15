@if (isset($meta['url']))
    <div 
        x-data="{
            init() {
                document.getElementsByTagName('meta')['title'].content = '{{ $meta['title'] ?? null }}';
                document.getElementsByTagName('meta')['description'].content = '{{ $meta['description'] ?? null }}';
                document.getElementsByTagName('meta')['keywords'].content = '{{ $meta['keywords'] ?? null }}';
                document.title = '{{ $meta['title'] ?? null }}';
            }
        }"
    >
@else
    <div>  
@endif
    {!! $html_view !!}
</div>