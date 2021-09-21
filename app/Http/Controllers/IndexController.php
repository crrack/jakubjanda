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
                'page' => 'index',
                'articles' => [
                    'limit' => 1
                ]
            ]
        );

        $data['article'] = $data['articles']['data'][0] ?? null;
        unset($data['articles']);

        return $this->get_view('pages.homepage', '/', $data);
    }
}
