
@extends('layouts.main')
@section('container')
<h1>Categories</h1>

@foreach ($categories as $c)
<article class="mb-5">
<ul><li>

<h2><a href="/categories/{{ $c->slug }}">{{  $c->name }}</a></h2>

</li></ul>
</article>
@endforeach
@endsection