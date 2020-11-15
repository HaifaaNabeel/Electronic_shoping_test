<?php include"header.php";?>
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
                  <form method="post" action="search_result">
                <div class="input-group">
                  
                  <!--<input type="text"  name="category_name" id="search-input" class="form-control" placeholder="ابحث هنا"
                    autofocus autocomplete="off" />
                    <button type="submit" name="search" value="search" id="search-btn" class="btn btn-flat" >
                    <i class="mdi mdi-magnify"></i> بحث 
                  </button>-->
                    </form>
                </div>
              
              </div>

              <div class="navbar-right ">
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
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> Log Out </a>
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
<div class="col-xl-12">
            <!-- Top Products -->
                          <div class="card card-table-border-none" id="recent-orders">

              <div class="card-header justify-content-between mb-4">
                <h2>كافة المنتجات</h2>
                <div>
                    <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                    <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                          <li class="dropdown-item"><a  href="#">تاريخ التحديث</a></li>
                          <li class="dropdown-item"><a  href="#">سجل الدخول</a></li>
                          <li class="dropdown-item"><a  href="#">احصائيات</a></li>
                          <li class="dropdown-item"><a  href="#">امسح البيانات</a></li>
                        </ul>
                      </div>
                </div>

              </div>
              <div class="card-body py-0">
                <div class="media d-flex mb-5">
                  <div class="media-image align-self-center mr-3 rounded">
                    <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                    <p class="float-md-right"><span class="text-dark mr-2">20</span>مبيعات</p>
                    <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                    <p class="mb-0">
                      <del>$300</del>
                      <span class="text-dark ml-3">$250</span>
                    </p>
                  </div>
                </div>

                <div class="media d-flex mb-5">
                  <div class="media-image align-self-center mr-3 rounded">
                    <a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                    <p class="float-md-right"><span class="text-dark mr-2">20</span>مبيعات</p>
                    <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                    <p class="mb-0">
                      <del>$300</del>
                      <span class="text-dark ml-3">$250</span>
                    </p>
                  </div>
                </div>

                <div class="media d-flex mb-5">
                  <div class="media-image align-self-center mr-3 rounded">
                    <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6></a>
                    <p class="float-md-right"><span class="text-dark mr-2">10</span>مبيعات</p>
                    <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                    <p class="mb-0">
                      <del>$300</del>
                      <span class="text-dark ml-3">$50</span>
                    </p>
                  </div>
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