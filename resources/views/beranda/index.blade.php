@extends('layouts.app')

@section('content')
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
<!-- [ navigation menu ] start -->

<!-- [ navigation menu ] end -->
<!-- [ Header ] start -->

<!-- [ Header ] end -->



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Beranda</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Beranda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- support-section start -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">{{$disposisiall}} Berkas</h2>
                                <h3>
                                    <span class="text-c-blue">Disposisi</span>
                                </h3>
                                <p class="mb-3 mt-3">Total disposisi yang sedang di proses</p>
                            </div>
                            <div id="support-chart"></div>
                            <div class="card-footer bg-primary text-white">
                                <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$disposisipending}}</h4>
                                        <span>Pending</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$disposisiproses}}</h4>
                                        <span>Proses</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$disposisiacc}}</h4>
                                        <span>Diacc</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$disposisireject}}</h4>
                                        <span>Ditolak</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card support-bar overflow-hidden">
                            <div class="card-body pb-0">
                                <h2 class="m-0">{{$proposalall}} Berkas</h2>
                                <h3>

                                    <span class="text-c-green">Proposal</span>
                                </h3>
                                <p class="mb-3 mt-3">Total proposal yang sedang di proses</p>
                            </div>
                            <div id="support-chart1"></div>
                            <div class="card-footer bg-success text-white">
                            <div class="row text-center">
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$proposalpending}}</h4>
                                        <span>Pending</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$proposalproses}}</h4>
                                        <span>Proses</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$proposalacc}}</h4>
                                        <span>Diacc</span>
                                    </div>
                                    <div class="col">
                                        <h4 class="m-0 text-white">{{$proposalreject}}</h4>
                                        <span>Ditolak</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support-section end -->
            </div>
            <div class="col-lg-4 col-md-12">
                <!-- page statustic card start -->
                <div class="row">

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h4 class="text-c-yellow">{{$userall}}</h4>
                                        <h6 class="text-muted m-b-0">Jumlah Pengguna</h6>
                                    </div>
                                  
                                </div>
                            </div>
                           
                        </div>
                    </div>
                  

                </div>
                <!-- page statustic card end -->
            </div>
            <!-- prject ,team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Projects</h5>
                        
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Last Seen</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $row)
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{asset('default-profile.png')}}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>{{$row->name}}</h6>
                                                    <p class="text-muted m-b-0">{{$row->pekerjaan}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{ Carbon\Carbon::parse($row->last_seen)->diffForHumans() }}
                                        </td>
                                        <td>
                                            @if(Cache::has('user-is-online-' . $row->id))
                                            <label class="badge badge-light-success">Online</label>
                                            @else
                                            <label class="badge badge-light-danger">Offline</label>
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
            <!-- <div class="col-xl-6 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Latest Updates</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            <div class="row p-t-30 p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                                    <i class="feather icon-twitter bg-twitter update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+ 1652 Followers</h6>
                                    </a>
                                    <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+ 5 New Products were added!</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Congratulations!</p>
                                </div>
                            </div>
                            <div class="row p-b-0">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                                    <i class="feather icon-facebook bg-facebook update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>+1 Friend Requests</h6>
                                    </a>
                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <td class="b-none">
                                                    <a href="#!" class="align-middle">
                                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>Jeny William</h6>
                                                            <p class="text-muted m-b-0">Graphic Designer</p>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- prject ,team member start -->
          

       
       
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection