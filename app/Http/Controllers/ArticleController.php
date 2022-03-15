<?php

namespace App\Http\Controllers;

use App\Actions\Webdo\View;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class ArticleController extends Controller
{
    use View;

    /**
     * Show all articles
     *
     * @return void
     */
    public function all($category = false)
    {
        $aticlesQuery = [
            'paginate' => 10,
            'preview' => true,
            'paginatePage' => $_GET['page'] ?? 1,
            'singleMedia' => ['thumbnail-static']
        ];
        if($category) $aticlesQuery['hasTaxonomies'] = ['napsali-o-mne'];
        else $aticlesQuery['doesntHaveTaxonomies'] = ['napsali-o-mne'];
        $data = $this->call_content(
            [
                'return' => [
                    'articles' => $aticlesQuery,
                    'page' => [
                        'collection' => 'pages',
                        'findBySlug' => 'clanky',
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        $data['articles'] = new Paginator(
            $data['articles'], 
            $data['pagination']['articles']['total'], 
            $data['pagination']['articles']['per_page'], 
            $data['pagination']['articles']['current_page'],
            ['path' => url('clanky')]
        );

        //dd($data['articles']->links());

        return $this->get_view('pages.clanky', 'clanky', array_merge($data, ['category' => $category]));
    }

    /**
     * Show article
     *
     * @return void
     */
    public function show($slug)
    {
        $data = $this->call_content(
            [
                'return' => [
                    'article' => [
                        'collection' => 'articles',
                        'findBySlug' => $slug,
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        return $this->get_view('pages.clanek', 'clanek/' . $slug, $data);
    }
}
