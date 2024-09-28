<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <x-header siteName="KimSite" :products="$products"></x-header>

  <h1>Example Page</h1>
  <!-- 문자열 실행-->
  <p>{{ $name }}</p>
  <!-- 스크립트 실행 -->
  <!-- <p>{!! $name !!}</p> -->
  <!-- {}도 그대로 출력 -->
  <p>@{{ $name }}</p>

  <!-- includeIf 있을 경우 출력 -->
  @include('sub.inc')
  
  @for ($i = 0; $i < 3; $i++)
    <p>숫자 증가</p>
    {{ $i }} <br>
  @endfor
  <!-- PHP 문법 사용 -->
  @php
    $a = 10;
    $a++;
    echo '<p>a ? ' . $a .' 입니다.<p>';
  @endphp

  {{-- blade tamplete comment --}}

</body>
</html>