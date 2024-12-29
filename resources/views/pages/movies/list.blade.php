<x-layout>
    <div class="page-inner">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="page-header">
            <h3 class="fw-bold mb-3">Movie List</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('movies.create') }}">
                        <button class="btn btn-secondary">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add Movie
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">View</th>
                            <th scope="col">Category</th>
                            <th scope="col">Genres</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Episodes</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td><img src="/storage/{{ $movie->thumbnail }}" width="60px"
                                        alt="{{ $movie->title }}"></td>
                                <td>{{ $movie->view }} views</td>
                                <td>{{ $movie->category->name }}</td>
                                <td>
                                    @foreach ($movie->genres as $genre)
                                        <span>{{ $genre->name }}, </span>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($movie->tags as $tag)
                                        <span>{{ $tag->name }}, </span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('episodes.index', ['movie_id' => $movie->id]) }}"
                                        class="btn btn-primary text-white ml-3">List</a>
                                    @foreach ($movie->episodes as $episode)
                                        <span><a href="{{ route('episodes.edit', $episode) }}"> {{ $episode->title }}
                                            </a> | </span>
                                    @endforeach
                                </td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                        <a href="{{ route('movies.show', $movie) }}"
                                            class="btn btn-primary text-white ml-3">View</a>
                                        <a href="{{ route('episodes.create', ['movie_id' => $movie->id]) }}"
                                            class="btn btn-primary text-white ml-3">Add-Ep</a>
                                        <a href="{{ route('movies.edit', $movie) }}"
                                            class="btn btn-primary text-white ml-3">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Sure Want Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
