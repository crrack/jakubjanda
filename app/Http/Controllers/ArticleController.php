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
    public function all()
    {
        
        $data = $this->call_content(
            [
                'page' => 'clanky',
                'articles' => [
                    'limit' => 100,
                    'page' => $_GET['page'] ?? 1
                ]
            ]
        );

        $data['articles'] = new Paginator(
            $data['articles']['data'], 
            $data['articles']['pagination']['total'], 
            $data['articles']['pagination']['per_page'], 
            $data['articles']['pagination']['current_page'],
            ['path' => url('clanky')]
        );

        //dd($data['articles']->links());

        return $this->get_view('pages.clanky', 'clanky', $data);
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
                'page' => 'clanek',
                'article' => $slug
            ]
        );

        return $this->get_view('pages.clanek', 'clanek/' . $slug, $data);
    }
}
