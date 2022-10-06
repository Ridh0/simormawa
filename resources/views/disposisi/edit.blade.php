@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>



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
                    <div class="card-header">
                        <h5>Tambah Data Disposisi</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('disposisi.update')}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="{{$disposisi->id}}">
                                        <input type="hidden" name="asal" value="{{auth()->user()->kode}}">
                                        <input type="hidden" name="tujuan" value="{{auth()->user()->level}}">
                                        <label for="nomorsurat">Nomor Surat</label>
                                        <input type="text" id="nomorsurat" value="{{$disposisi->nosurat}}" name="nosurat" class="form-control" id="validationCustom02" placeholder="01/HMJ-Teknik Komputer/Ph/X/2022">
                                        <small id="emailHelp" class="form-text text-muted">Format : 01/HMJ-Teknik Komputer/Ph/X/2022</small>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputHal1">Lampiran</label>
                                        <input type="text" value="{{$disposisi->lampiran}}" name="lampiran" id="exampleInputHal1" class="form-control" placeholder="1 (Satu) Lembar">
                                        <small id="emailHelp" class="form-text text-muted">Format : 1 (Satu) Lembar</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputHal1">Perihal</label>
                                        <input type="text" value="{{$disposisi->perihal}}" name="perihal" id="exampleInputHal1" class="form-control" placeholder="Permohonan Keamanan Tempat">
                                        <small id="emailHelp" class="form-text text-muted">Format : Permohonan Keamanan Tempat</small>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputHal1">Jenis</label>
                                        <select class="form-control"  name="jenis" id="">
                                            <option value="Surat Permohonan" {{($disposisi->jenis == "Surat Permohonan")? 'selected' : ''}}>Surat Permohonan</option>
                                            <option value="Surat Keamanan" {{($disposisi->jenis == "Surat Keamanan")? 'selected' : ''}} >Surat Keamanan</option>
                                            <option value="Surat Peminjaman" {{($disposisi->jenis == "Surat Peminjaman")? 'selected' : ''}} >Surat Peminjaman</option>
                                            <option value="Surat Perizinan" {{($disposisi->jenis == "Surat Perizinan")? 'selected' : ''}} >Surat Perizinan</option>
                                            <option value="Surat Kegiatan" {{($disposisi->jenis == "Surat Kegiatan")? 'selected' : ''}} >Surat Kegiatan</option>
                                            <option value="Dan Lain-Lain" {{($disposisi->jenis == "Dan Lain-Lain")? 'selected' : ''}} >Dan Lain-Lain</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="users_id" value="1">
                                        <label for="exampleInputEmail1">Tanggal Kirim</label>
                                        <input type="date" name="tanggal_kirim" value="{{$disposisi->tanggal_kirim}}" class="form-control" id="exampleInputPassword1" placeholder="Perihal">
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="users_id" value="1">
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