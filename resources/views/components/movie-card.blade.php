<div class="col-lg-4 col-md-6 col-sm-6">

    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="/{{ $movie->thumbnail }}">
            <div class="ep">{{ $movie->episodes_count }} / {{ $movie->episodes_count }}</div>
            <div class="comment"><i class="fa fa-comments"></i> {{ $movie->comments }}</div>
            <div class="view"><i class="fa fa-eye"></i> {{ $movie->views }}</div>
        </div>
        <div class="product__item__text">
            <ul>
                @foreach ($movie->genres as $genre)
                    <li>{{ $genre->name }}</li>
                @endforeach
            </ul>
            <h5><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></h5>
        </div>
    </div>

</div>
