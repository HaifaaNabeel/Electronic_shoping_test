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
<div class="col-xl-12">
            <!-- New Customers -->
            <div class="card card-table-border-none"  data-scroll-height="580">
              <div class="card-header justify-content-between ">
                <h2>الزبائن الجدد</h2>
                <div>
                    <button class="text-black-50 mr-2 font-size-20">
                      <i class="mdi mdi-cached"></i>
                    </button>
                    <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
                          <li class="dropdown-item"><a  href="#">Action</a></li>
                          <li class="dropdown-item"><a  href="#">Another action</a></li>
                          <li class="dropdown-item"><a  href="#">Something else here</a></li>
                        </ul>
                      </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <table class="table ">
                  <tbody>
                  <tr>
                      <!--<td >صورة المستخدم </td>-->
                      <td >اسم المستخدم والايميل </td>
                      <td >تاريخ التسجيل </td>
                      <td >كافة الطلبات </td>
                      <td >طلبات تم دفعها</td>
                      <td >طلبات لم يتم دفعها</td>
                    </tr>
                  <?php  
                  $rows=$data['ordersDone'];
                  $rows1=$data['ordersNot'];
                  $rows2=$data['users'];
                  $rows3=$data['orders'];
                  foreach ($rows2 as $row2){
                      echo '
                    <tr>
                      <!--<td > 
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u1.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">'.$row2->user_name.'</h6></a>
                            <small>'.$row2->user_email.'</small>
                          </div>
                        </div>
                      </td>-->
                      <td >'.$row2->user_name.' <br><small>'.$row2->user_email.'</small></td>

                      <td >'.$row2->date_added.'</td>';

                      
                      $count=0;
                      foreach ($rows as $row)
                      { 
                          if($row->user_id == $row2->user_id )
                          {$count=$count+1;}
                          else
                          continue;
                      }
                      echo '<td >'.$count.' طلبات</td>';
                      $count1=0;
                      foreach ($rows1 as $row1)
                      { 
                          if($row1->user_id == $row2->user_id )
                          {
                              $count1=$count1+1;
                          }
                          else
                          continue;
                      }
                      echo '<td >'.$count1.' طلبات</td>';
                      $count2=0;
                      foreach ($rows3 as $row3)
                      { 
                          if($row3->user_id == $row2->user_id )
                          {
                              $count2=$count2+1;
                          }
                          else
                          continue;
                      }
                      echo '<td >'.$count2.' طلبات</td>
                      <!--<td class="text-dark d-none d-md-block">$150</td>-->
                    </tr>';
                }
                    ?>
                    <!--<tr>
                      <td >
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u2.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6></a>
                            <small>@walter.me</small>
                          </div>
                        </div>
                      </td>
                      <td >5 طلبات</td>
                      <td class="text-dark d-none d-md-block">$200</td>
                    </tr>
                    <tr>
                      <td >
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u3.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6></a>
                            <small>@larissa.gb</small>
                          </div>
                        </div>
                      </td>
                      <td >1 طلب</td>
                      <td class="text-dark d-none d-md-block">$50</td>
                    </tr>
                    <tr>
                      <td >
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u4.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6></a>
                            <small>@albrech.as</small>
                          </div>
                        </div>
                      </td>
                      <td >2 طلبات</td>
                      <td class="text-dark d-none d-md-block">$100</td>
                    </tr>
                    <tr>
                      <td >
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u5.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6></a>
                            <small>@leopold.et</small>
                          </div>
                        </div>
                      </td>
                      <td >1 طلب</td>
                      <td class="text-dark d-none d-md-block">$60</td>
                    </tr>-->
                  </tbody>
                </table>
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