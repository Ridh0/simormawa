@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/plugins/daterangepicker.css')}}" />
@endsection
@section('content')
@include('sweetalert::alert')




<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Tambah Data Proposal</h5>
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
                    <div class="card-header">
                        <h5>Tambah Data Proposal</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('proposal.update')}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$proposal->id}}">
                                        <input type="hidden" name="users_id" value="1">
                                        <input type="hidden" name="asal" value="HMJ Teknik Komputer">
                                        <input type="hidden" name="status" value="1">
                                        <label for="nomorsurat">Nomor Proposal</label>
                                        <input type="text" id="nomorsurat" value="{{$proposal->noproposal}}" name="noproposal" class="form-control" id="validationCustom02" placeholder="0307101082021">
                                        <small id="emailHelp" class="form-text text-muted">Format : 0307101082021</small>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputHal1">Judul Proposal</label>
                                        <input type="text" name="judul" value="{{$proposal->judul}}" id="exampleInputHal1" class="form-control" placeholder="FESTIVAL MULTIMEDIA DAN TEKNIK KOMPUTER">
                                        <small id="emailHelp" class="form-text text-muted">Format : FESTIVAL MULTIMEDIA DAN TEKNIK KOMPUTER</small>
                                    </div>
                                 

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputHal1">Jenis</label>
                                        <select class="form-control"  name="jenis" id="">
                                            <option value="Proposal Kegiatan" {{($proposal->jenis == "Proposal Kegiatan")? 'Selected':''}} >Proposal Kegiatan</option>
                                            <option value="Proposal Lomba" {{($proposal->jenis == "Proposal Lomba")? 'Selected':''}}>Proposal Lomba</option>
                                            <option value="Proposal Sponsor" {{($proposal->jenis == "Proposal Sponsor")? 'Selected':''}}>Proposal Sponsor</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Kirim</label>
                                        <input type="date" value="{{$proposal->tanggal_kirim}}" name="tanggal_kirim" class="form-control" id="exampleInputPassword1" placeholder="Perihal">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">File Upload</label>
                                        <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="Perihal">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn  btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
@endsection
@section('scripts')
<script src="{{asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/daterangepicker.js')}}"></script>
<script src="{{asset('assets/js/pages/ac-datepicker.js')}}"></script>
<script >
    $(function() {
	  $('input[name="birthday"]').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		minYear: 1901,
		maxYear: parseInt(moment().format('YYYY'),10)
	  }, function(start, end, label) {
		var years = moment().diff(start, 'years');
		alert("You are " + years + " years old!");
	  });
	});
</script>

@endsection