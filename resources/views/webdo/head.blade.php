<title>{{ $meta['title'] ?? null }}</title>
<meta name="title" content="{{ $meta['title'] ?? null }}">
<meta property="og:title" content="{{ $meta['title'] ?? null }}">
<meta itemprop="name" content="{{ $meta['title'] ?? null }}">   

<meta name="description" content="{{ $meta['description'] ?? null }}">
<meta property="og:description" content="{{ $meta['description'] ?? null }}">
<meta itemprop="description" content="{{ $meta['description'] ?? null }}">

<meta name="keywords" content="{{ $meta['keywords'] ?? null }}">

<style>
    [x-cloak] { 
        display: none !important; 
    }
    [x-link] { 
        cursor: pointer;
    }
</style>