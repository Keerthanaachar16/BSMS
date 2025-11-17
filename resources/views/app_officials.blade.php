<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin dashboard - Laravel Blade version">
    <meta name="author" content="pixelstrap">
    <title>App/Officials</title>
   <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
   </head>
   <style>
    .card .card-body {
      padding:30px!important;
    }
    .customizer-links{
      display : none;
    }
    .page-wrapper.compact-wrapper .page-body-wrapper div.sidebar-wrapper .sidebar-main .simplebar-offset {
      height: auto;
    }
      .table thead{
           background-color: #6362E7;
           
        }
        .table thead th{
          color:white;
        }
        .my-custom-alert {
          background-color: #6362E7;  
          color: white;               
          border: 1px solid #6362E7; 
      }
  </style>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
     
      <div class="page-header">
        <div class="header-wrapper row m-0"> 
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar">
            </div>
          </div>                              
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <div class="page-body-wrapper">
      <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0"> 
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper">
            <a href="https://mcwaredemo.com/prismhnew/admin/dashboard">
              <img class="img-fluid" src="https://mcwaredemo.in/prismh/public/admin/assets/images/logo/logo.png" alt=""> 
            </a>
            <span class="text-dark">PRISM-H</span>
          </div>
          <div class="toggle-sidebar">
            <div class="status_toggle sidebar-toggle d-flex">        
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g> 
                  <g> 
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
            </div>
          </div>
        </div>
        <div class="left-side-header ms-5 pt-3 col ps-0 d-none d-md-block">
        <h4>Admin Login</h4>
        </div>
        <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
          <ul class="nav-menus">
            <li>
              <div class="mode animated backOutRight">
                <svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <g>                 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg>
                <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
                  <path d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </div>
            </li>
            <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
              <div class="media profile-media">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g> 
                    <g> 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <!-- <li><a href=" "><i data-feather="user"></i><span>Edit Profile </span></a></li> -->
                <li><a href="{{ url('/admin_login') }}"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Header Ends-->      
     
    <!-- Page Sidebar Start-->
<div class="sidebar-wrapper"> 
    
  <div>
     <nav class="sidebar-main">
        <div class="container mt-3">
              <div class="row align-items-center justify-content-center text-center">
                  <div class="col-auto px-1">
                      <img src="{{ asset('images/karnataka.png') }}" alt="Karnataka Logo"  style="width:45px;">
                  </div>
                  <div class="col px-2">
                      <h5 class="fw-bold text-dark mb-0">Black Spot Monitoring System</h5>
                  </div>
                  <div class="col-auto px-1">
                      <img src="{{ asset('images/logo.png') }}" alt="Right Logo"  style="width:45px;">
                  </div>
              </div>
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
              <a href="https://mcwaredemo.com/prismhnew/admin/dashboard">
                  <img class="img-fluid" src="https://mcwaredemo.in/prismh/public/admin/assets/images/logo-icon.png" alt="">
              </a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true">        </i></div>
          </li>
            <li class="sidebar-list">
                    <label class="badge badge-light-primary"></label>
                    <a class="sidebar-link sidebar-title" href="{{ url('/admin_dashboard') }}">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="3" width="8" height="8" rx="1.5" stroke="#130F26" stroke-width="1.5" stroke-linejoin="round"/>
                        <rect x="13" y="3" width="8" height="5" rx="1.5" stroke="#130F26" stroke-width="1.5" stroke-linejoin="round"/>
                        <rect x="13" y="10" width="8" height="11" rx="1.5" stroke="#130F26" stroke-width="1.5" stroke-linejoin="round"/>
                        <rect x="3" y="13" width="8" height="8" rx="1.5" stroke="#130F26" stroke-width="1.5" stroke-linejoin="round"/>
                      </svg>
                      <span>Dashboard</span>
                    </a>
                  </li>
                                 
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary"></label>
                    <a class="sidebar-link sidebar-title" href="{{ url('/reports') }}">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 2H6C5.44772 2 5 2.44772 5 3V21C5 21.5523 5.44772 22 6 22H18C18.5523 22 19 21.5523 19 21V8L14 2Z"
                          stroke="#0c0c0cff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14 2V8H19" stroke="#0f0f0fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="12" cy="14" r="3" stroke="#171718ff" stroke-width="1.5" />
                        <path d="M12 11V14H15" stroke="#19191aff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <span>Reports</span>
                    </a>
                  </li>
                  
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary"></label>
                    <a class="sidebar-link sidebar-title" href="{{ url('/admin_comlist') }}">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 12C21 7.03 16.97 3 12 3C7.03 3 3 7.03 3 12C3 16.97 7.03 21 12 21C13.36 21 14.64 20.72 15.78 20.21L21 21L19.8 15.8C20.72 14.64 21 13.36 21 12Z" stroke="#161616ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 12H12M8 9H16" stroke="#19191aff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <span>Complaint Management</span>
                    </a>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary"></label>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="7" r="4" stroke="#171718ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4 20C4 16.6863 7.58172 14 12 14C16.4183 14 20 16.6863 20 20" stroke="#1b1b1bff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <span>App Users</span></a>
                          <ul class="sidebar-submenu">
                              <li><a href="{{ url('/app_users') }}">Users</a></li>
                              <li><a href="{{ url('/app_officials') }}">Officials</a></li>
                          </ul>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-light-primary"></label>
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.477 2 2 6.477 2 12C2 17.522 6.477 22 12 22C17.523 22 22 17.522 22 12C22 6.477 17.523 2 12 2Z"
                          stroke="#161616ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2 12H22" stroke="#070707ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 2C14.5 6 14.5 18 12 22C9.5 18 9.5 6 12 2Z"
                          stroke="#161616ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <span>Masters</span>
                    </a>
                                  
                                        <ul class="sidebar-submenu">
                                        <!-- <li><a href="{{ url('/role') }}">Role</a></li> -->
                                        <li><a href="{{ url('/zones') }}">Zone</a></li>
                                        <li><a href="{{ url('/divisions') }}">Division</a></li>
                                        <li><a href="{{ url('/wards') }}">Ward</a></li>
                                      </ul>
                    </li>
                    <li class="sidebar-list">
                      <label class="badge badge-light-primary"></label>
                      <a class="sidebar-link sidebar-title" href="{{ url('/officials') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="9" cy="7" r="4" stroke="#0f0f0fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5" stroke="#232224ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M3 20C3 16.6863 6.58172 14 11 14C15.4183 14 19 16.6863 19 20" stroke="#201f20ff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Officials Management</span>
                      </a>
                    </li>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
        </div>
    </div>        
<!-- Page Content Starts -->
<div class="page-body">
  <div class="container-fluid">

    <!-- Page Title with Breadcrumb -->
    <div class="page-title mb-3">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3>App User</h3>
        </div>
        <div class="col-12 col-sm-6 text-end">
          <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item">
              <a href="{{ url('/admin_dashboard') }}">
                <i data-feather="home"></i>
              </a>
            </li>
            <li class="breadcrumb-item active">
              <a href="{{ url('/app_officials') }}">Oficials</a>
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Summary Card -->
    <div class="row mb-4">
      <div class="col-sm-6 col-xl-3 col-lg-6">
        <div class="card o-hidden">
          <div class="card-body">
            <div class="media static-widget">
              <div class="media-body">
                <h6 class="font-roboto">Total Officials</h6>
                <h4  class="mb-0 counter">{{$totalOfficials}}</h4>
              </div>
            </div>
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-secondary" role="progressbar" style="width: 100%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="12">
                  <span class="animate-circle"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Officials Table -->
    <div class="card">
      <div class="card-header pb-0">
        <h5>Officials</h5>
        <div class="mb-3 text-end">
          <!-- <a href="{{url('/add_zone')}}">
            <button class="btn btn-square btn-primary" type="button">Add</button>
          </a> -->
           @if(session('success'))
            <div id="success-msg" class="alert my-custom-alert">{{ session('success') }}</div>
          @endif

            <!-- <a href="{{ route('zones.create') }}" class="btn btn-primary mb-3">Add </a> -->
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="display table table-striped" id="divisionTable" style="width:100%">
            <thead>
              <!-- <tr>
                <th>#</th>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
                @foreach($officials as $official)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $official->id }}</td>
                <td>{{ $official->name }}</td>
                <td>{{ $official->phone }}</td>
                <td>{{ $official->email }}</td>
            </tr>
            @endforeach
            </tbody> -->

            <tr>
          <th>S.No</th>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Complaints (By Status)</th>
        </tr>
      </thead>
      <tbody>
        @foreach($officials as $official)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $official->id }}</td>
            <td>{{ $official->name }}</td>
            <td>{{ $official->phone }}</td>
            <td>{{ $official->email }}</td>
            <td>
              <!-- <a href="#" class="view-complaints" data-id="{{ $official->id }}" data-status="Pending">
                Pending: {{ $official->pending_count }}
              </a><br> -->
              <a href="#" class="view-complaints" data-id="{{ $official->id }}" data-status="In progress">
                In Progress: {{ $official->inprogress_count }}
              </a><br>
              <a href="#" class="view-complaints" data-id="{{ $official->id }}" data-status="Resolved">
                Resolved: {{ $official->resolved_count }}
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
          </table>
        </div>
      </div>

      <!-- Complaints Modal -->
<div class="modal fade" id="complaintsModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Complaints (<span id="complaintStatus"></span>)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <table class="table table-striped" id="complaintsTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Description</th>
              <th>Status</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
      <div class="modal-footer">
        <a href="#" id="downloadPdfBtn" class="btn btn-danger">Download PDF</a>
      </div>
    </div>
  </div>
</div>



    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

<!-- DataTables Init -->
<script>
  $(document).ready(function () {
    $('#divisionTable').DataTable({
      paging: true,
      lengthChange: true,
      searching: true,
      ordering: true,
      info: true,
      autoWidth: false,
      responsive: true
    });
    // Custom search for ID column only (0 = first column)
    $('#searchById').on('keyup change', function () {
        table.column(0).search(this.value).draw();
    });
  });
</script>

        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyrights© Mcware </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../assets/js/scrollbar/simplebar.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../assets/js/sidebar-menu.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/theme-customizer/customizer.js"></script>
  <!-- login js-->
  <!-- Plugin used-->


  <!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    // Wait 3 seconds (3000ms) and hide the message
    setTimeout(function() {
        var msg = document.getElementById('success-msg');
        if(msg){
            msg.style.display = 'none';
        }
    }, 3000); // 3 seconds
</script>


<script>
$(document).ready(function () {
  $('.view-complaints').click(function (e) {
    e.preventDefault();
    let officialId = $(this).data('id');
    let status = $(this).data('status');
    $('#complaintStatus').text(status);

    $.get(/officials/${officialId}/complaints/${status}, function (data) {
      let rows = '';
      data.forEach(c => {
        rows += `<tr>
          <td>${c.id}</td>
          <td>${c.description ?? 'N/A'}</td>
          <td>${c.complaint_status}</td>
          <td>${c.created_at}</td>
        </tr>`;
      });
      $('#complaintsTable tbody').html(rows);
      $('#downloadPdfBtn').attr('href', /officials/${officialId}/complaints/${status}/pdf);
      $('#complaintsModal').modal('show');
    });
  });
});
</script>

</body>

</html>                      