<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

  @if(Session::has('post_created'))
    <div class="alert alert-success" role="alert">
      {{Session::get('post_created')}}
    </div>
  @endif

  <div class="container w-50">
    <form action="{{route('post.postsubmit')}}" method="POST" autocomplete="off">
      @csrf
      <div class="mt-4 mb-3">
        <span class="h2">게시판</span>
      </div>
      <div class="mb-2">
        <input type="text" name="subject" class="form-control" placeholder="제목을 입력해 주세요">
      </div>
      <div>
        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
        <div class="mt-2">
          <button class="btn btn-primary">글 등록</button>
        </div>
    </form>
  </div>
</body>
</html>