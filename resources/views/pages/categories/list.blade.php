<x-layout>
    <div class="page-inner">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="page-header">
            <h3 class="fw-bold mb-3">Category List</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('categories.create') }}">
                        <button class="btn btn-secondary">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add Category
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
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->movies_count }} phim</td>
                                <td>
                                    <button type="button"
                                        class="btn btn-icon btn-round {{ $category->active == true ? 'btn-success' : 'btn-danger' }}">
                                        <i class="fa {{ $category->active == true ? 'fa-check' : 'fa-archive' }} "></i>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        <a href="{{ route('categories.edit', $category) }}"
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
