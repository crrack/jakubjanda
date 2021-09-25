<?php

namespace App\Http\Controllers;

use App\Mail\SendPdf;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SendPdfController extends Controller
{
    public function send(Request $request)
    {
        $email = $request->all();

        //$body = array_merge($request->all(), ['campaign' => 'brožura']);

        // $response = Http::post(
        //     env('ADMIN_URL') . 'api/contact/store',
        //     $body
        // );

        try {

            Mail::to('jakubjanda@jakubjanda.cz')->send(new SendPdf($email));
            
            return ['status' => 'done'];

        } catch (\Exception $e) {

            dd($e);
            return ['status' => 'fail'];
            
        }
    }
}