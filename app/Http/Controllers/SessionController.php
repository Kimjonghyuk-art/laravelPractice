<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request) 
    {

        if($request->session()->has('name')) 
        {
            echo $request->session()->get('name');
        }
        else 
        {
            echo "세션이 없습니다.";
        }

    }

    public function storeSessionData(Request $request) 
    {
        $request->session()->put('name', 'kim');
        echo '세션이 추가되었습니다.';
    }

    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo '세션이 삭제되었습니다.';
    }

}
