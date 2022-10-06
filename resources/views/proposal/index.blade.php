@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Proposal</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('beranda.index')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('disposisi.index')}}">Proposal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header ">
                        <h5>Tabel Proposal</h5>
                        <span class="d-block m-t-5">Surat Masuk Dan Surat Keluar</span>
                        <div class="card-header-right">
                            <a href="{{route('proposal.create')}}" class="btn  btn-icon btn-outline-primary mr-2 btn-sm"><i class="feather icon-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Aksi</th>
                                        <th>No Proposal</th>
                                        <th>Judul Proposal</th>
                                        <th>Asal</th>
                                        <th>Jenis</th>
                                        <th>Tanggal Kirim</th>
                                        <th>Pengirim</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('proposal.edit',$row)}}" class="btn btn-sm btn-primary mr-2">Edit</a>
                                                <a href="{{route('proposal.hapus',$row)}}" class="btn btn-sm btn-primary show_confirm">Hapus</a>
                                            </div>
                                        </td>
                                        <td>{{$row->noproposal}}</td>
                                        <td>{{$row->judul}}</td>
                                        <td>{{$row->asal}}</td>
                                        <td>{{$row->jenis}}</td>
                                        <td>{{$row->tanggal_kirim}}</td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->users_id}}</td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
@endsection
@section('scripts')
<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
     $(document).ready(function() {
        $('.show_confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
        $('#example').DataTable();
    });
</script>
@endsection