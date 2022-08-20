
@extends('layouts.main')
@section('container')
<h1>Halaman Blog</h1>

@foreach ($posts as $p)
<article class="mb-5">
<h2><a href="/posts/{{ $p->id }}">{{  $p->title }}</a></h2>
<p>{{  $p["excerpt"] }}</p>
</article>
@endforeach
@endsection