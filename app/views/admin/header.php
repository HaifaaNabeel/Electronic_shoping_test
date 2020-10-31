<?php
session_start();
if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
}else{
header('location:../../login');
exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> Admin Dashboard </title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

      <link href="../../app/assets/font/f/Tajawal-Medium.ttf" rel="stylesheet"> 
      <link rel="stylesheet" href="../../app/assets/font/ionicons/css/ionicons.min.css">
  <!-- PLUGINS CSS STYLE -->
  <link href="../../app/assets/admin/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="../../app/assets/admin/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="../../app/assets/admin/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="../../app/assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="../../app/assets/admin/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="../../app/assets/admin/css/dropzone.css" rel="stylesheet" />
  <link href="../../app/assets/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="../../app/assets/admin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="../../app/assets/admin/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="app/assets/admin/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="../../app/assets/admin/plugins/nprogress/nprogress.js"></script>
      <style>
          table{text-align:center;}
      </style>
</head>

</script>
<script src="../../app/assets/admin/js/nicEdit.js"></script>

       <script type="text/javascript">
     bkLib.onDomLoaded(function() {
          var myNicEditor = new nicEditor();
                 bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
         
     });
</script> 

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">لوحة التحكم</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                    aria-expanded="false" aria-controls="dashboard">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">لوحة التحكم</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="dashboard"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                        <li >
                            <a class="sidenav-item-link" href="../admin_cat/categories">
                              <span class="nav-text">الاصناف</span>
                              
                            </a>
                          </li>
                         <li >
                            <a class="sidenav-item-link" href="../admin_prod/index">
                              <span class="nav-text">المنتجات </span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="index">
                              <span class="nav-text">الطلبات</span>
                              
                              <span class="badge badge-success" style="display:none;">new</span>
                              
                            </a>
                          </li>
                         <li >
                            <a class="sidenav-item-link" href="index">
                              <span class="nav-text">المشتريات</span>
                              
                              <span class="badge badge-success" style="display:none;">new</span>
                              
                            </a>
                          </li>
                         <li >
                            <a class="sidenav-item-link" href="index">
                              <span class="nav-text">المستخدمين</span>
                              
                              <span class="badge badge-success" style="display:none;">new</span>
                              
                            </a>
                          </li>
                        
                    </div>
                  </ul>
                </li>
                        
                         <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#cat"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">الاصناف</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="cat"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="../admin_cat/categories">
                              <span class="nav-text">عرض الاصناف</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="../admin_cat/add_cat">
                              <span class="nav-text"> اضافة صنف</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text"> بحث عن صنف</span>
                              
                            </a>
                          </li>
               </div>
                  </ul>
                </li>
                                   <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pro"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">المنتجات</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="pro"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="../admin_prod/index">
                              <span class="nav-text">عرض المنتجات</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="../admin_prod/add_prod">
                              <span class="nav-text"> اضافة منتج</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text"> بحث عن منتج</span>
                              
                            </a>
                          </li>
               </div>
                  </ul>
                </li>
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#offer"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">العروض</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="offer"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="../admin_offer/offers">
                              <span class="nav-text">عرض جميع العروض </span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="../admin_percent/offerPercent">
                              <span class="nav-text">  عرض العروض بخصم</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="../admin_offer/offerGift">
                              <span class="nav-text"> عرض العروض مع هديه</span>
                              
                            </a>
                          </li>
               </div>
                  </ul>
                </li>
                          <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#post"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">الاعلانات</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="post"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href="../admin_adv/index">
                              <span class="nav-text">عرض جميع الاعلانات </span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href="../admin_adv/add_adv">
                              <span class="nav-text"> اضافة اعلان</span>
                              
                            </a>
                          </li>
               </div>
                  </ul>
                </li>
                         <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">المستخدمين</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="users"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text">عرض المستخدمين</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text"> اضافة مستخدمين</span>
                              
                            </a>
                          </li>
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text"> بحث عن مستخدم</span>
                              
                            </a>
                          </li>
               </div>
                  </ul>
                </li>
              
     
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                    aria-expanded="false" aria-controls="charts">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">Charts</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="charts"
                    data-parent="#sidebar-menu">
                    <div class="sub-menu">
                      
                      
                        
                          <li >
                            <a class="sidenav-item-link" href=" ">
                              <span class="nav-text">ChartJS</span>
                              
                            </a>
                          </li>
                        
                      

                      
                    </div>
                  </ul>
                </li>    
            </ul>

          </div>

          <hr class="separator" />

         
        </div>
      </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="search for ..."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right " >
                <ul class="nav navbar-nav">
                 
                  <li class="dropdown notifications-menu" style="display:none">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Alfalahy Shyma</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Alfalahy Shyma <small class="pt-1">alfalahysh.com</small>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="admin_sess/end_sess"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>