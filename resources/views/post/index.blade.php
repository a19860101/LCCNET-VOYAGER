<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        {{menu('frontend')}}
    </nav>
    @foreach($posts as $post)
    <h2>{{$post->title}}</h2>
    <div>
        <img src="{{asset('storage/'.$post->image)}}" alt="">
    </div>
    <div>
        <a href="{{route('post.show',['post'=>$post->id])}}">繼續閱讀</a>
    </div>
    <div>
        {!!$post->body!!}
    </div>
    @endforeach
</body>
</html>