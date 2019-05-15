@extends('layouts.app')


@section('title', 'Contact')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-lg-12">
                    @if (session('successMsg'))
                    <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                        <span class="badge badge-pill badge-primary">Success</span>
                        {{ session('successMsg') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <h3 class="title-1 m-b-10">
                                <i class="zmdi zmdi-comment-text"></i> Contact Message</h3>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">{{ $contact->subject }}</strong>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <strong>Name: {{ $contact->name }}</strong><br>
                                <b>Email: {{ $contact->email }}</b><br>
                                <strong>Message: </strong><hr>
                                <p>{{ $contact->message }}</p><hr>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-backward"></i> Back
                            </a>
                            <form id="delete-form-{{ $contact->id }}" method="POST"
                                action="{{ route('contact.destroy', $contact->id) }}"
                                style="display:none">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button class="btn btn-danger btn-sm"
                                    onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $contact->id }}')
                                                            .submit();
                                                } else {
                                                        event.preventDefault();
                                                    }">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush
