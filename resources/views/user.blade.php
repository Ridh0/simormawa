@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<!-- [ Pre-loader ] start -->

<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->

<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->

<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Disposisi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('beranda.index')}}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('disposisi.index')}}">Disposisi</a></li>
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
                        <h5>Tabel Disposisi</h5>
                        <span class="d-block m-t-5">Surat Masuk Dan Surat Keluar</span>
                        <div class="card-header-right">
                            <a href="{{route('disposisi.create')}}" class="btn  btn-icon btn-outline-primary mr-2 btn-sm"><i class="feather icon-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Last Seen</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                                        </td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $user->id))
                                            <span class="text-success">Online</span>
                                            @else
                                            <span class="text-secondary">Offline</span>
                                            @endif
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