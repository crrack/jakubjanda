<?php

namespace App\Actions\Webdo;

use App\Actions\Webdo\Helper;

trait View
{
    use Helper;

    public function call_content($body)
    {
        // get layout if type is not fetch
        if(($_GET['fetch'] ?? false) != 'true')  $body['layout'] = true;

        $response = $this->guzzle_post('api/v1/collections', $body);

        if(isset($response['error'])) {
            dd($response['error']);
        }elseif(isset($response['data'])) {
            return $response['data'];
        }else {
            dd('wtf');
        }
    }

    public function get_view($view, $url, $data)
    {
        $data['meta']['url'] = $url;

        if(($_GET['fetch'] ?? false) != 'true') {
            $layout = 'app';
        }else {
            $layout = 'fetch';
        }

        return view('layouts.' . $layout, $data)
            ->with('html_view', view($view, $data));
    }
}