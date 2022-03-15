<?php

namespace App\Http\Controllers;

use App\Actions\Webdo\View;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class VideoController extends Controller
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
                    'videos' => [
                        'paginate' => 5,
                        'paginatePage' => $_GET['page'] ?? 1,
                    ],
                    'page' => [
                        'collection' => 'pages',
                        'findBySlug' => 'videa',
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        $data['videos'] = new Paginator(
            $data['videos'], 
            $data['pagination']['videos']['total'], 
            $data['pagination']['videos']['per_page'], 
            $data['pagination']['videos']['current_page'],
            ['path' => url('videa')]
        );

        return $this->get_view('pages.videa', 'videa', $data);
    }
}
