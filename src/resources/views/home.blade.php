@extends('layouts.app')

@section('content')

<h1>ブログ一覧</h1>

<ul>
    @foreach($blogs as $blog)
    {{-- $blog->userがnullじゃなければnameを表示 --}}
    {{-- <li>{{ $blog->title }} {{ optional($blog->user)->name }}</li> --}}
    <li><a href="{{ route('blog.show',$blog->id) }}">{{ $blog->title }} {{ $blog->user->name }} 
        ({{ $blog->comments_count }}件のコメント)<small>{{ $blog->updated_at }}</small>
    </li>
    @endforeach
</ul>
    
@endsection