@extends('layouts.app')


@section('title', 'Create Item')

@push('css')

@endpush

@section('content')
<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">Danger</span>
                                        {{ $error }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endforeach
                            </ul>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <strong>Add New Item</strong>
                            </div>
                            <form method="POST" action="{{ route('item.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="category" class=" form-control-label">Category</label>
                                        <select id="category" class="form-control" name="category" required>
                                            {{-- <option hidden>Select Category</option> --}}
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">Name</label>
                                        <input type="text" id="name" placeholder="Enter name" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Description</label>
                                        <textarea type="text" id="description" placeholder="Enter Description" class="form-control" name="description" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price" class=" form-control-label">Price</label>
                                        <input type="number" id="price" placeholder="Enter price" class="form-control" name="price" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="image" class=" form-control-label">Image</label>
                                            <input type="file" id="image" class="form-control" name="image" required>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('item.index') }}" class="btn btn-secondary btn-sm">
                                        <i class="fa fa-backward"></i> Back
                                    </a>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-refresh"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fa fa-save"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection

@push('scripts')

@endpush
