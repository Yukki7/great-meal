@extends('layouts.app')


@section('title', 'Item')
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
                                <i class="zmdi zmdi-apps"></i> Item Data Table</h3>
                        </div>
                        <div class="table-data__tool-right">
                            <a href="{{ route('item.create') }}"><button
                                    class="au-btn au-btn-icon au-btn--green au-btn--small">
                                    <i class="zmdi zmdi-plus"></i>Add New</button></a>
                            {{-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="table-responsive m-b-40">
                        <table id="table" class="table table-borderless table-data3" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key=>$item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td>{{ $item->image }}</td> --}}
                                    <td><img src="{{ asset('uploads/item/' .$item->image) }}"></td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @foreach ($item->categories as $category)
                                            <span class="block-email">{{ $category->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button> --}}
                                            <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit">
                                                <a href="{{ route('item.edit', $item->id) }}"><i
                                                        class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form id="delete-form-{{ $item->id }}" method="POST"
                                                action="{{ route('item.destroy', $item->id) }}"
                                                style="display:none">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form-{{ $item->id }}')
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
