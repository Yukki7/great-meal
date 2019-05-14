@extends('layouts.app')


@section('title', 'Reservation')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> --}}
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

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
                                <i class="zmdi zmdi-calendar-check"></i> Reservation Data Table</h3>
                        </div>
                    </div>

                    <div class="table-responsive m-b-40">
                        <table id="table" class="table table-borderless table-data3" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date and Time</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $key=>$reservation)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->phone }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->date_and_time }}</td>
                                    <td>{{ $reservation->message }}</td>
                                    <td>
                                        @if ($reservation->status == true)
                                            <span class="status--process">Confirmed</span>
                                        @else
                                            <span class="status--denied">Not Confirmed yet</span>
                                        @endif
                                    </td>
                                    <td>{{ $reservation->created_at }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button> --}}
                                            <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit">
                                                <a href=""><i
                                                        class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form id="delete-form-{{ $reservation->id }}" method="POST"
                                                action=""
                                                style="display:none">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $reservation->id }}')
                                                                    .submit();
                                                        } else {
                                                                event.preventDefault();
                                                            }">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button> --}}
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
@endpush
