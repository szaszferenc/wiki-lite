@extends("wiki-lite::layout")

@section('wiki-content')
<h1>WikiLite</h1>

<ul>
    @foreach($pages as $page)
        <ul>{{ $page->title }}</ul>
    @endforeach
</ul>

@endsection