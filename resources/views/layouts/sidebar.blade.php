<nav class="pcoded-navbar menu-light menupos-fixed">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" style="background-color: #0000;" src="{{asset('default-profile.png')}}" alt="User-Profile-Image">
					<div class="user-details mt-2">
						<div id="more-details">HMJ Teknik Komputer <i class="fa fa-caret-down"></i></div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-unstyled">
						<li class="list-group-item"><a href="{{route('user.profile')}}"><i class="feather icon-lock m-r-5"></i>Ubah password</a></li>
						<li class="list-group-item"><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					</ul>
				</div>
			</div>

			<ul class="nav pcoded-inner-navbar ">
				<li class="nav-item pcoded-menu-caption ml-2">
					<label>Menu Utama</label>
				</li>
				<li class="nav-item">
					<a href="{{route('beranda.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-grid"></i></span><span class="pcoded-mtext">Beranda</span></a>
				</li>
				<li class="nav-item">
					<a href="{{route('disposisi.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file"></i></span><span class="pcoded-mtext">Disposisi</span></a>
				</li>
				<li class="nav-item">
					<a href="{{route('proposal.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">Proposal</span></a>
				</li>
				<!-- <li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
					        <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
					    </ul>
					</li> -->
			</ul>


		</div>
	</div>
</nav>