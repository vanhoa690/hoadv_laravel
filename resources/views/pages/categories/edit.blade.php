<x-layout>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Category</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('categories.update', $category) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group form-inline @error('name') has-error @enderror">
                                <label for="name" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="name" name="name"
                                        value='{{ $category->name }}' placeholder="Enter Name" />
                                </div>
                                @error('name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
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
