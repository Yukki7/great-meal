@extends('layouts.app')


@section('title', 'Contact')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> --}}
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
                                <i class="zmdi zmdi-comment-text"></i> Contact Data Table</h3>
                        </div>
                    </div>

                    <div class="table-responsive m-b-40">
                        <table id="table" class="table table-borderless table-data3" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Sent At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $key=>$contact)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->created_at }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="btn btn-info btn-sm" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Show">
                                                <a href="{{ route('contact.show', $contact->id) }}" style="color: inherit">
                                                    <i class="fa fa-lightbulb-o"></i></a>
                                            </button>
                                            <form id="delete-form-{{ $contact->id }}" method="POST"
                                                action="{{ route('contact.destroy', $contact->id) }}"
                                                style="display:none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button class="btn btn-danger btn-sm" style="border-radius: 50%" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $contact->id }}')
                                                                    .submit();
                                                        } else {
                                                                event.preventDefault();
                                                            }">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
{{-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> --}}
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
            $('#table').DataTable();
        } );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
@endpush
