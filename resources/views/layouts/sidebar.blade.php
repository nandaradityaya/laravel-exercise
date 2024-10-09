<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="">
	<!--plugins-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css" rel="stylesheet') }}">
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet') }}">
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet') }}">
	<link rel="stylesheet" href="{{ asset('assets/libraries/gijgo/css/gijgo.min.css')}}">
	<link href="{{ asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet') }}">
	<link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet') }}">
	<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet') }}">
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet') }}">
	<script src="{{ asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css')}}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}">
	<title>Laravel Final Project</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				{{-- <div style="margin-left: 40px;">
					<img src="../assets/images/logo-wisesa.svg" class="logo-icon" alt="logo icon">
				</div> --}}
				<div style="margin-left: 40px;">
					<a href="dashboard.html" class="logo-text" style="font-family: 'Segoe UI Black';">
						<span style="font-size: larger; font-style: italic">FPPBKK</span>
					</a>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="menu-label">Menu</li>
				<li class="{{ request()->routeIs('front.index') ? 'mm-active' : '' }}">
					<a href="{{ route('front.index') }}">
						<div class="parent-icon"><i class='bx bx-grid-small'></i>
						</div>
						<div class="menu-title">{{ __('Product') }}</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center" >
							
							<li class="nav-item dropdown dropdown-large" style="display: none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='lni lni-headphone'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">•</p>
											<p class="msg-header-clear ms-auto">•</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="../assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">• <span class="msg-time float-end">•</span></h6>
													<p class="msg-info">•</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">•</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large" style="display: none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">•</p>
											<p class="msg-header-clear ms-auto">•</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">•<span class="msg-time float-end">•</span></h6>
													<p class="msg-info">•</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">•</div>
									</a>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('assets/images/icons/banana.png') }}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Admin</p>
								<p class="designattion mb-0">Admin</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
							</li>
							
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class='bx bx-log-out-circle'></i><span>Logout</span>
                                </a>
                            </li>
                            
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                {{-- Content Here --}}
                @yield('content')
            </div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	
	<script>
		$(document).ready(function () {
			var table = $('#dataTable').DataTable({
			});
		});
		
		
	</script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			setTimeout(function() {
				// Close the alert
				var successAlert = document.getElementById('success-alert');
				if (successAlert) {
					var bsAlert = new bootstrap.Alert(successAlert);
					bsAlert.close();
				}

				var errorAlert = document.getElementById('error-alert');
				if (errorAlert) {
					var bsAlert = new bootstrap.Alert(errorAlert);
					bsAlert.close();
				}
			}, 4000);
		});
	</script>
	<script>
		document.getElementById('add-key-feature').addEventListener('click', function() {
			var container = document.getElementById('key-features-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'key_features[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Key Features...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('edit-key-feature').addEventListener('click', function() {
			var container = document.getElementById('edit-key-features-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'key_features[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Key Features...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('add-our-approaches').addEventListener('click', function() {
			var container = document.getElementById('our-approaches-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'our_approaches[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Our Approach...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('edit-our-approaches').addEventListener('click', function() {
			var container = document.getElementById('edit-our-approaches-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'our_approaches[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Our Approach...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('add-job-descriptions').addEventListener('click', function() {
			var container = document.getElementById('job-descriptions-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'job_descriptions[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Job Description...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('edit-job-descriptions').addEventListener('click', function() {
			var container = document.getElementById('edit-job-descriptions-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'job_descriptions[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Job Description...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('add-requirements').addEventListener('click', function() {
			var container = document.getElementById('requirements-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'requirements[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Job Description...';
			container.appendChild(input);
		});
	</script>

	<script>
		document.getElementById('edit-requirements').addEventListener('click', function() {
			var container = document.getElementById('edit-requirements-container');
			var input = document.createElement('input');
			input.type = 'text';
			input.name = 'requirements[]';
			input.className = 'form-control mb-2';
			input.placeholder = 'Requirement...';
			container.appendChild(input);
		});
	</script>
	<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
	<script>
        document.querySelectorAll('.rich-text').forEach((textarea) => {
            ClassicEditor
                .create(textarea)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>


	<!--app JS-->
	<script src="../assets/js/app.js"></script>
</body>

</html>