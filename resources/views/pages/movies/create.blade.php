<x-layout>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Movie</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('movies.index') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-inline">
                                <label for="title" class="col-md-3 col-form-label">Title</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="title" name="title"
                                        placeholder="Enter Title" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select form-control" id="category" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
