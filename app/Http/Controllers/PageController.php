<?php

namespace App\Http\Controllers;

use App\Actions\Webdo\View;

class PageController extends Controller
{
    use View;

    /**
     * Show Index page
     *
     * @return void
     */
    public function show($page)
    {
        
        $data = $this->call_content(
            [ 
                'return' => [
                    'page' => [
                        'collection' => 'pages',
                        'findBySlug' => $page,
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        if(view()->exists('pages.' . $page)){
            return $this->get_view('pages.' . $page, $page, $data);
        }else {
            return view('errors.404');
        }
    }
}
