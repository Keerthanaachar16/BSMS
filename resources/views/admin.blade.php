<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin dashboard - Laravel Blade version">
    <meta name="author" content="pixelstrap">
    <title>Admin</title>
    <!-- <link rel="icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon"> -->

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
              <!-- <div class="status_toggle sidebar-toggle d-flex">        
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
              </div> -->
            </div>
          </div>                              
          <!-- <div class="left-side-header col ps-0 d-none d-md-block">
            <div class="input-group"><span class="input-group-text" id="basic-addon1">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g> 
                    <g> 
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2753 2.71436C16.0029 2.71436 19.8363 6.54674 19.8363 11.2753C19.8363 16.0039 16.0029 19.8363 11.2753 19.8363C6.54674 19.8363 2.71436 16.0039 2.71436 11.2753C2.71436 6.54674 6.54674 2.71436 11.2753 2.71436Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8987 18.4878C20.6778 18.4878 21.3092 19.1202 21.3092 19.8983C21.3092 20.6783 20.6778 21.3097 19.8987 21.3097C19.1197 21.3097 18.4873 20.6783 18.4873 19.8983C18.4873 19.1202 19.1197 18.4878 19.8987 18.4878Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </g>
                </svg></span>
              <input class="form-control" type="text" placeholder="Search here.." aria-label="search" aria-describedby="basic-addon1">
            </div>
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
              <li class="d-md-none resp-serch-input">
                <div class="resp-serch-box"><i data-feather="search"></i></div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
            </ul>
          </div> -->
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
            <!-- <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/small-logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/small-white-logo.png" alt=""></a> -->
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
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g> 
                            <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>                      
                      </svg><span>Dashboard</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="">Total Complaints</a></li>
                      <li><a href="">Pending</a></li>
                      <li><a href="">Progress</a></li>
                      <li><a href="">Resolved</a></li>
                      <li><a href="">Area wise Complaints</a></li>
                      <li><a href="">complaints of this week</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75024 12C2.75024 5.063 5.06324 2.75 12.0002 2.75C18.9372 2.75 21.2502 5.063 21.2502 12C21.2502 18.937 18.9372 21.25 12.0002 21.25C5.06324 21.25 2.75024 18.937 2.75024 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.2045 13.8999H15.2135" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.2045 9.8999H12.2135" stroke="#030303ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.19557 13.8999H9.20457" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>Report</span></a>
                  </li>                     
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g> 
                            <path d="M15.596 15.6963H8.37598" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.596 11.9365H8.37598" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.1312 8.17725H8.37622" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.61011 12C3.61011 18.937 5.70811 21.25 12.0011 21.25C18.2951 21.25 20.3921 18.937 20.3921 12C20.3921 5.063 18.2951 2.75 12.0011 2.75C5.70811 2.75 3.61011 5.063 3.61011 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>Complaint Management</span></a>
                  </li>                
                  <li class="sidebar-list">
                    <label class="badge badge-light-info"></label><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>App User Module</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="">View Registered User</a></li>
                      <li><a href="">User Status</a></li>
                      <li><a href="">Login History</a></li>
                    </ul>
                  </li>

                  <li class="sidebar-list">
                    <label class="badge badge-light-info"></label><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <g>
                            <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>Master Module</span></a>
                    </li>
                  
                  <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g> 
                          <g> 
                            <path d="M15.7499 9.47167V6.43967C15.7549 4.35167 14.0659 2.65467 11.9779 2.64967C9.88887 2.64567 8.19287 4.33467 8.18787 6.42267V9.47167" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.94995 14.2074C2.94995 8.91344 5.20495 7.14844 11.969 7.14844C18.733 7.14844 20.988 8.91344 20.988 14.2074C20.988 19.5004 18.733 21.2654 11.969 21.2654C5.20495 21.2654 2.94995 19.5004 2.94995 14.2074Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </g>
                        </g>
                      </svg><span>User Management</span></a>
                    <ul class="sidebar-submenu">
                      <li><a href="">Add</a></li>
                      <li><a href="">View</a></li>
                    </ul>
                  </li>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->       
        </div>
      </div>
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