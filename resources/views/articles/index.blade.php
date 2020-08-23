@extends ('layout')

@section ('title')

    Articles

@endsection

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            <ul class="style1">
                @forelse ($articles as $article)
                    <li class="first">
                        <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                        <p>{{ $article->excerpt }}</p>
                    </li>
                @empty
                    <p>No relevant articles yet.</p>
                @endforelse
            </ul>
        </div>
    </div>

@endsection