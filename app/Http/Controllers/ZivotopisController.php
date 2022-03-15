<?php

namespace App\Http\Controllers;

use App\Actions\Webdo\View;

class ZivotopisController extends Controller
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
                    'zivotopis' => [
                        'singleMedia' => ['image']
                    ],
                    'page' => [
                        'collection' => 'pages',
                        'findBySlug' => 'zivotopis',
                        'generateSeo' => true
                    ]
                ]
            ]
        );

        return $this->get_view('pages.zivotopis', 'videa', $data);
    }
}
