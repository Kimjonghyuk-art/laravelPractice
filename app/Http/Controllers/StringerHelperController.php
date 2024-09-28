<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StringerHelperController extends Controller
{
    public function index() 
    {
        echo '<h1>Stringer Helper</h1>';
        //after에 포함된 문자열 이후 모든 문자 출력
        echo "Str::of('welcome to my HomePage')->after('welcome to')";
        $rs = Str::of('welcome to my HomePage')->after('welcome to');
        echo "<br> result : ". $rs . "<br><br>";
        //before에 포함된 문자 이전 내용 출력
        echo "Str::of('This is my name')->before('my')";
        $rs = Str::of('This is my name')->before('my');
        echo "<br> result : ". $rs . "<br><br>";
        //afterLast에 포함된 마지막 문자열 이후 출력
        echo "Str::of('010-1234-5678')->afterLast('-')";
        $rs = Str::of('010-1234-5678')->afterLast('-');
        echo "<br> result : ". $rs . "<br><br>";
        //문자열 변환
        echo "Str::of('Laravel 9.0')->replace('9.0', '10.0')";
        $rs = Str::of('Laravel 9.0')->replace('9.0', '10.0');
        echo "<br> result : ". $rs . "<br><br>";
        //문자열 사이 '-' 추가
        echo "Str::of('laravel 10 framework')->slug()";
        $rs = Str::of('laravel 10 framework')->slug();
        echo "<br> result : ". $rs . "<br><br>";
        //문자열 반복
        echo "Str::of('-')->repeat(20)";
        $rs = Str::of('-')->repeat(20); 
        echo "<br> result : ". $rs;
        $rs = Str::repeat("==", 20);
        echo "<br> result : ". $rs . "<br><br>";
        //랜덤 문자열
        echo "Str::random(40)";
        $rs = Str::random(40);
        echo "<br> result : ". $rs . "<br><br>";
        //특정 문자열만 제거
        echo "Str::remove('e', 'Peter Piper Picked a peck of pickled peppers')";
        $rs = Str::remove('e', 'Peter Piper Picked a peck of pickled peppers');
        echo "<br> result : ". $rs;
        $rs = Str::of('Peter Piper Picked a peck of pickled peppers')->remove('p');
        echo "<br> result : ". $rs . "<br><br>";

        //문자열이 존재할 경우 1 리턴
        $rs = Str::of('This is my name')->containsAll(['my','name']);
        echo "<br> result : ". $rs . "<br><br>";

        //upper(), lower(), substr() ...
    }
}
