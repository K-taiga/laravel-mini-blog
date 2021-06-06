@extends('layouts.app')

@section('content')

<h1>ブログ一覧</h1>

<ul>
    @foreach($blogs as $blog)
    {{-- $blog->userがnullじゃなければnameを表示 --}}
    {{-- <li>{{ $blog->title }} {{ optional($blog->user)->name }}</li> --}}
    <li>{{ $blog->title }} {{ $blog->user->name }}</li>
    @endforeach
</ul>
    
@endsection