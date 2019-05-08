@extends('layouts.app')


@section('title', 'Create Category')

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
                                <strong>Add New Category</strong>
                            </div>
                            <form method="POST" action="{{ route('category.store') }}">
                                @csrf
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="name" class=" form-control-label">Name</label>
                                        <input type="text" id="name" placeholder="Enter Name" class="form-control" name="name" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">
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
