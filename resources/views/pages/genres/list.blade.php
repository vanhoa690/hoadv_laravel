<x-layout>
    <div class="page-inner">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="page-header">
            <h3 class="fw-bold mb-3">Genre List</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('genres.create') }}">
                        <button class="btn btn-secondary">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add Genre
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Movies Count</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td>{{ $genre->name }}</td>
                                <td>{{ $genre->movies_count }} phim</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST">
                                        <a href="{{ route('genres.edit', $genre) }}"
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
