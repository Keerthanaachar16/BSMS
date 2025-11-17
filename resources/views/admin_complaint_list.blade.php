DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin dashboard - Laravel Blade version">
    <meta name="author" content="pixelstrap">
    <title>Admin_complaint_List</title>
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
      .table th{
         color: #37599cff;
      }
      .btn:hover{
        background-color: #a2b0caff;
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
      <!-- Page Body Start-->
                <div class="page-body-wrapper">
                  <!-- Page Sidebar Start-->
                  <div class="sidebar-wrapper"> 
                    <div>
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
          </div>
           
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo-icon.png" alt=""></a>
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
        <!-- Page Sidebar Ends-->   
         <div class="d-flex justify-content-center">
          <table class="table table-bordered table-striped text-center w-auto">
              <thead class="table-light">
                  <tr>
                      <th>Sl No</th>
                      <th>Complaint ID</th>
                      <th>Date</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody >
                  <tr>
                      <td>1</td>
                      <td>CMP001</td>
                      <td>2025-07-23</td>
                      <td>
                          <a href="/assign-complaint" class="btn btn-outline-primary btn-sm">Assign_To</a>
                      </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>CMP002</td>
                      <td>2025-07-22</td>
                      <td>
                          <a href="/assign-complaint" class="btn btn-outline-primary btn-sm">Assign_To</a>
                      </td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>CMP003</td>
                      <td>2025-07-21</td>
                      <td>
                          <a href="/assign-complaint" class="btn btn-outline-primary btn-sm">Assign_To</a>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
 <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
  </body>
</html>