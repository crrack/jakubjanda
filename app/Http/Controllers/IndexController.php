<?php

namespace App\Http\Controllers;

use App\Actions\Webdo\View;

class IndexController extends Controller
{
    use View;

    /**
     * Show Index page
     *
     * @return void
     */
    public function show()
    {
        $data = $this->call_content(
            [
                'return' => [
                    'article' => [
                        'collection' => 'articles',
                        'doesntHaveTaxonomies' => ['napsali-o-mne'],
                        'limit' => 1,
                        'singleMedia' => ['thumbnail-static']
                    ],
                    'page' => [
                        'collection' => 'pages',
                        'findBySlug' => 'index',
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        return $this->get_view('pages.homepage', '/', $data);
    }
}
