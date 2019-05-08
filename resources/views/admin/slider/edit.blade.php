@extends('layouts.app')


@section('title', 'Slider')

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
                                <strong>Add New Slider</strong>
                            </div>
                            <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body card-block">
                                    <div class="form-group">
                                        <label for="title" class=" form-control-label">Title</label>
                                    <input type="text" id="title" value="{{ $slider->title }}" class="form-control" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_title" class=" form-control-label">Sub Title</label>
                                        <input type="text" id="sub_title" value="{{ $slider->sub_title }}" class="form-control" name="sub_title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class=" form-control-label">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('slider.index') }}" class="btn btn-secondary btn-sm">
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
