<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Message;

class ContactController extends Controller
{
    public function index() {
        return view('contact', ['title' =>  __('strings.contacto_titulo1'), 'subtitle' => __('strings.contacto_subtitulo1'), 'image' => asset('storage/VOSTSITE_0053.jpg')]);
    }

    public function store(Request $request) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        $check = $message->save();

        $arr = array('msg' => 'Something went wrong. Please try again later', 'status' => false);
        if($check){
        $arr = array('msg' => 'Successfully submitted form using ajax', 'status' => true);
        }
        return Response()->json($arr);
    }
}
