<?php include"header.php";?>
<div class="page-wrapper">
                  <!-- Header -->
                  <header class="main-header " id="header" style="background-color:white;border:1px solid;">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block"> <!--style="background-color:white;border:1px solid;"-->
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <!--<input type="text"  name="category_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off"  style=" width:48em;"/>
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" style="background-color:rgb(230, 223, 223);">
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>-->
                    </form>
                </div>
              
              </div>

              <div class="navbar-right " style="background-color:white;border:1px solid;">
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
                    <?php $rows=$data['user']; 
                      //print_r($rows);
                         foreach ($rows as $row){
                      ?>
                      <img src="../../app/assets/admin/img/user/u5.jpg" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php echo  $row->user_name; ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                      
                        <img src="../../app/assets/admin/img/user/u5.jpg" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          <?php echo  $row->user_name.' <small class="pt-1">'.$row->user_email.'</small>';
                        }?>
                        </div>
                      </li>

                      
                      <li class="dropdown-footer">
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> تسجيل الخروج  </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header> 

<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////--->
<div class="content-wrapper" dir="rtl">
<div class="content">	
<div class="row">
                      <div class="col-12"> 
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
              <div class="card-header justify-content-between">
                <h2> كافة الطلبيات </h2>
                <div class="date-range-report ">
                  <span></span>
                </div>
              </div>
              <div class="card-body pt-0 pb-5">
                <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>اسم المنتج</th>
                      <th class="d-none d-md-table-cell">الكمية</th>
                      <th class="d-none d-md-table-cell">تاريخ الطلب</th>
                      <th class="d-none d-md-table-cell">تكلفة الطلب</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href=""> Coach Swagger</a>
                      </td>
                      <td class="d-none d-md-table-cell">1 Unit</td>
                      <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                      <td class="d-none d-md-table-cell">RY230</td>
                      <td >
                        <span class="badge badge-success">منتهي</span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                            <li class="dropdown-item">
                              <a href="#">عرض</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#">حذف</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
                      </td>
                      <td class="d-none d-md-table-cell">2 عناصر</td>
                      <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                      <td class="d-none d-md-table-cell">RY550</td>
                      <td >
                        <span class="badge badge-warning">تأخر</span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                            <li class="dropdown-item">
                              <a href="#">عرض</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#">حذف</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href=""> Hat Black Suits</a>
                      </td>
                      <td class="d-none d-md-table-cell">1 عناصر</td>
                      <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                      <td class="d-none d-md-table-cell">RY325</td>
                      <td >
                        <span class="badge badge-warning">في الانتظار</span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order3" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order3">
                            <li class="dropdown-item">
                              <a href="#">عرض</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#">حذف</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
                      </td>
                      <td class="d-none d-md-table-cell">5 عناصر</td>
                      <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                      <td class="d-none d-md-table-cell">RY200</td>
                      <td >
                        <span class="badge badge-success">منتهي</span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order4">
                            <li class="dropdown-item">
                              <a href="#">عرض</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#">حذف</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href=""> Speed 500 Ignite</a>
                      </td>
                      <td class="d-none d-md-table-cell">1 عناصر</td>
                      <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                      <td class="d-none d-md-table-cell">RY150</td>
                      <td >
                        <span class="badge badge-danger">ملغي</span>
                      </td>
                      <td class="text-right">
                        <div class="dropdown show d-inline-block widget-dropdown">
                          <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order5" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static"></a>
                          <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order5">
                            <li class="dropdown-item">
                              <a href="#">عناصر</a>
                            </li>
                            <li class="dropdown-item">
                              <a href="#">حذف</a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
</div>
                  </div>

</div>
</div>
<?php include"footer.php";?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.jss"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>

<script>


    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>

</body>
</html>