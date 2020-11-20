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
                        <a href="../../logout"> <i class="mdi mdi-logout"></i> تسجيل الخروج </a>
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
      
                
            <!-- new row -->
            <div class="row">
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card widget-block p-4 rounded bg-primary border">
										<div class="card-block">
											<h2 class="mdi ion-ios-people mr-4 text-white"></h2>
											<h3 class="text-white my-2">
                      <?php
                         $rows3=$data['users'];
                         $coun_user=0;
                          foreach ($rows3 as $row3)
                          {
                            $coun_user=$coun_user+1;
                          }
                          echo $coun_user;
                         ?>
                      &nbsp &nbsp  &nbsp &nbsp
                      </h3>
											<h4 class="text-white">المجموع الكلي للعملاء</h4>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card widget-block p-4 rounded bg-warning border">
										<div class="card-block">
											<h2 class="mdi ion-android-playstore mr-4 text-white"></h2>
											<h3 class="text-white my-2">
                      <?php
                         $rows3=$data['users'];
                         $coun_user=0;
                          foreach ($rows3 as $row3)
                          {
                            $coun_user=$coun_user+1;
                          }
                          echo $coun_user;
                         ?>
                      &nbsp &nbsp  &nbsp &nbsp
                      </h3>
											<h4 class="text-white">مجموع طلبات اليوم</h4>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card widget-block p-4 rounded bg-danger border">
										<div class="card-block">
											<h2 class="mdi ion-android-warning mr-4 text-white"></h2>
											<h3 class="text-white my-2">
                    <?php
                         $rows1=$data['products_finash'];
                         $coun_product=0;
                          foreach ($rows1 as $row1)
                          {
                            $coun_product=$coun_product+1;
                          }
                          echo $coun_product;
                         ?>
                      &nbsp &nbsp  &nbsp &nbsp
                    </h3>
                    <h4 class="text-white">منتجات قاربت على الانتهاء</h4>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-6 col-xl-3">
									<div class="card widget-block p-4 rounded bg-success border">
										<div class="card-block">
											<h2 class="mdi ion-email-unread t mr-4 text-white"></h2>
											<h3 class="text-white my-2">
                      <?php
                         $rows1=$data['products_finash'];
                         $coun_product=0;
                          foreach ($rows1 as $row1)
                          {
                            $coun_product=$coun_product+1;
                          }
                          echo $coun_product;
                         ?>
                       &nbsp &nbsp  &nbsp &nbsp
                      </h3>
											<h4 class="text-white">اخر رسائل العملاء </h4>
										</div>
									</div>
								</div>
							</div>
            <!-- Top Statistics -->
            <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h2 class="mb-1">71,503</h2>
                    <p>تسجيلات الدخول اونلاين</p>
                    <div class="chartjs-wrapper">
                      <canvas id="barChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-mini  mb-4">
                  <div class="card-body">
                    <h2 class="mb-1">9,503</h2>
                    <p>الزوار الجدد</p>
                    <div class="chartjs-wrapper">
                      <canvas id="dual-line"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h2 class="mb-1">71,503</h2>
                    <p>مجموع الطلبات الشهري</p>
                    <div class="chartjs-wrapper">
                      <canvas id="area-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h2 class="mb-1">9,503</h2>
                    <p>إجمالي الإيرادات هذا العام</p>
                    <div class="chartjs-wrapper">
                      <canvas id="line"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>


                  <div class="row">
                      <div class="col-xl-7 col-md-12">
                 <!-- To Do list -->
            <div class="card card-default todo-table" id="todo" data-scroll-height="675">
              <div class="card-header justify-content-between">
                <h2>قائمة الأعمال</h2>
                <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> اضافة مهمة  </a>
              </div>
              <div class="card-body slim-scroll">
                <div class="todo-single-item d-none" id="todo-input">
                  <form >
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                    </div>
                  </form>
                </div>
                <div class="todo-list" id="todo-list">
                  <div class="todo-single-item d-flex flex-row justify-content-between finished">
                    <i class="mdi"></i>
                    <span >إنهاء تحديث الداشبورد</span>
                    <span class="badge badge-primary">منتهي</span>
                  </div>
                  <div class="todo-single-item d-flex flex-row justify-content-between current">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-primary">Today</span>
                  </div>
                  <div class="todo-single-item d-flex flex-row justify-content-between ">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة </span>
                    <span class="badge badge-danger">Yesterday</span>
                  </div>

                  <div class="todo-single-item d-flex flex-row justify-content-between ">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-success">Dec 15, 2018</span>
                  </div>

                  <div class="todo-single-item d-flex flex-row justify-content-between ">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-success">Dec 15, 2018</span>
                  </div>
                  <div class="todo-single-item d-flex flex-row justify-content-between ">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-success">Dec 15, 2018</span>
                  </div>
                  <div class="todo-single-item d-flex flex-row justify-content-between ">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-success">Dec 15, 2018</span>
                  </div>

                  <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                    <i class="mdi"></i>
                    <span >إنشاء نموذج أولي جديد للصفحة المقصودة</span>
                    <span class="badge badge-success">Dec 15, 2018</span>
                  </div>
                </div>
              </div>
              <div class="mt-3"></div>
            </div>
                </div>

             <div class="col-xl-5 col-md-12">
            <!-- Doughnut Chart -->
            <div class="card card-default" data-scroll-height="675">
              <div class="card-header justify-content-center">
                <h2>نظرة عامة على طلبات المنتجات </h2>
              </div>
              <div class="card-body" >
                <canvas id="doChart" ></canvas>
                <?php
                //count all quentity products 
                $rows4=$data['products_all'];
                $prod_cont=0;
                foreach($rows4 as $row4)
                {
                  $prod_cont=$prod_cont+$row4->product_Quantity;
                }
                $rows5=$data['ordersDone'];
                $order_done_coun=0;
                foreach($rows5 as $row5)
                {
                  $order_done_coun=$order_done_coun+$row5->quantity;
                }
                $rows6=$data['ordersNotDone'];
                $order_Not_coun=0;
                foreach($rows6 as $row6)
                {
                  $order_Not_coun=$order_Not_coun+$row6->quantity;
                }
                //echo $prod_cont.'<br>'.$order_done_coun.'<br>'.$order_Not_coun.'<br>';
                $prod_cont_after=$prod_cont-$order_done_coun-$order_Not_coun;
                //echo $prod_cont_after;
                ?>
  <!--<input type="text" id="prods" hidden="hidden" readonly required value="<?php echo $prod_cont_after;?>">
  <input type="text" id="orders" hidden="hidden" readonly required value="<?php echo $order_done_coun;?>">
  <input type="text" id="norders" hidden="hidden" readonly required value="<?php echo $order_Not_coun;?>">

                
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      var prods=document.getElementById('prods').value;
      var orders=document.getElementById('orders').value;
      var norders=document.getElementById('norders').value;
      var x=90;
      var y=30;
      var w=20;

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['منتجات متاحة في الموقع',x],
          ['طلبات تم بيعها', y ],
          ['طلبات تم اضافتها للسلة', w ],
          //['Commute',  2],
          //['Watch TV', 2],
          
          /*['Task', 'Hours per Day'],
          ['طلبات تم بيعها',  document.getElementById('orders').value ],
          ['طلبات تم اضافتها للسلة',  document.getElementById('norders').value  ],
          //['Commute',  2],
          //['Watch TV', 2],
          ['منتجات متاحة في الموقع', document.getElementById('prods').value ]*/

        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
                <div style="margin-left:.5em;background-color:;font-size:100px">
                <div id="piechart" style="width: 400px; height:300px;margin-right:-.2em"></div>
              </div>-->
              

              </div>
              <a href="#" class="pb-5 d-block text-center text-muted"><i class="mdi mdi-download mr-2"></i> تنزيل التقرير العام</a>
              <div class="card-footer d-flex flex-wrap bg-white p-0">
                <div class="col-4">
                  <div class="py-4 px-4">
                    <ul class="d-flex flex-column justify-content-between">
                      <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: orange"></i>تم اكتمال الطلب</li>
                      <!---<li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color:  #8061ef"></i>انتظار الطلب</li>-->
                    </ul>
                  </div>
                </div>
                <div class="col-4 border-left">
                  <div class="py-4 px-4 ">
                    <ul class="d-flex flex-column justify-content-between">
                      <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: blueviolet"></i> طلب غير مدفوع</li>
                     <!----> <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1"></i>تم إلغاء الطلب</li>
                    </ul>
                  </div>
                </div>
                <div class="col-4 border-left">
                  <div class="py-4 px-4 ">
                    <ul class="d-flex flex-column justify-content-between">
                      <!--<li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #80e1c1"></i> طلب غير مدفوع</li>-->
                      <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: rgba(18, 137, 216, 0.938)"></i>باقي المنتجات</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
</div>
                  </div>

                  

                  <div class="row">
                      <div class="col-12"> 
            <!-- Recent Order Table -->
            <div class="card card-table-border-none" id="recent-orders">
              <div class="card-header justify-content-between">
                <h2>الطلبيات الأخيرة</h2>
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
                      <th>الحالة </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >24541</td>
                      <td >
                        <a class="text-dark" href="">لابتوب ديل </a>
                      </td>
                      <td class="d-none d-md-table-cell">1 عنصر</td>
                      <td class="d-none d-md-table-cell">Oct 20, 2018</td>
                      <td class="d-none d-md-table-cell"> ريال يمني 2300</td>
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
                        <a class="text-dark" href=""> كامير اف وان</a>
                      </td>
                      <td class="d-none d-md-table-cell">2 عناصر</td>
                      <td class="d-none d-md-table-cell">Nov 15, 2018</td>
                      <td class="d-none d-md-table-cell">ريال يمني5500 </td>
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
                        <a class="text-dark" href="">سماعة اتش وان</a>
                      </td>
                      <td class="d-none d-md-table-cell">1 عناصر</td>
                      <td class="d-none d-md-table-cell">Nov 18, 2018</td>
                      <td class="d-none d-md-table-cell">ريال يمني3205</td>
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
                        <a class="text-dark" href=""> كامير اتش دي</a>
                      </td>
                      <td class="d-none d-md-table-cell">5 عناصر</td>
                      <td class="d-none d-md-table-cell">Dec 13, 2018</td>
                      <td class="d-none d-md-table-cell">ريال يمني2000</td>
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
                        <a class="text-dark" href="">ساعة ذكية </a>
                      </td>
                      <td class="d-none d-md-table-cell">1 عناصر</td>
                      <td class="d-none d-md-table-cell">Dec 23, 2018</td>
                      <td class="d-none d-md-table-cell">ريال يمني 2300</td>
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

                  
                  <div class="row">
                      <div class="col-xl-5">
            <!-- New Customers -->
            <div class="card card-table-border-none"  data-scroll-height="580">
              <div class="card-header justify-content-between ">
                <h2>اخر الزبائن </h2>
                <div>
                    <button class="text-black-50 mr-2 font-size-20">
                      <i class="mdi mdi-cached"></i>
                    </button>
                    <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
                          <li class="dropdown-item"><a  href="#">مشاهدة الجميع </a></li>
                          <!--<li class="dropdown-item"><a  href="#">Another action</a></li>
                          <li class="dropdown-item"><a  href="#">Something else here</a></li>-->
                        </ul>
                      </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <table class="table ">
                  <tbody>
                  <tr>
                     
                      <td >اسم المستخدم والايميل </td>
                      <td >تاريخ التسجيل </td>
                      <td >كافة الطلبات </td>
                      <!--<td >التكلفة </td>-->
                      
                    </tr>
                    <?php  
                  $rows=$data['orders'];
                  $rows2=$data['last_users'];
                  $rows3=$data['orders'];
                  $count_users=0;
                  foreach ($rows2 as $row2)
                  {
                    if($count_users==5)
                    {
                    break;
                    }
                    else
                    {
                          echo '
                          <tr>
                             <td >'.$row2->user_name.' <br><small>'.$row2->user_email.'</small></td>
                             <td >'.$row2->date_added.'</td>';
                             $count_order=0;
                           foreach ($rows3 as $row3)
                          { 
                               if($row3->user_id == $row2->user_id )
                              {
                                 $count_order=$count_order+1;
                              }
                             else
                             continue;
                          }
                          echo '<td >'.$count_order.' طلبات</td>';
                     
                          echo '</tr>';
                          $count_users=$count_users+1;
                        
                    }
                  }
                  ?>
                    <!--<tr>
                      <td >
                        <div class="media">
                          <div class="media-image mr-3 rounded-circle">
                            <a href="profile.html"><img class="rounded-circle w-45" src="assets/img/user/u1.jpg" alt="customer image"></a>
                          </div>
                          <div class="media-body align-self-center">
                            <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6></a>
                            <small>@selena.oi</small>
                          </div>
                        </div>
                      </td>
                      <td >2 طلبات</td>
                      <td class="text-dark d-none d-md-block">$150</td>
                    </tr>
                    <tr>
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
         <div class="col-xl-7">
            <!-- Top Products -->
            <div class="card card-default" data-scroll-height="580" style="padding:3em">
              <div class="card-header justify-content-between mb-4" >
                <h2>أهم منتجات البيع </h2>
                <div>
                    <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                    <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                        <li class="dropdown-item"><a  href="#">كافة المنتجات </a></li>
                        <!--<li class="dropdown-item"><a  href="#">تاريخ التحديث</a></li>
                          <li class="dropdown-item"><a  href="#">سجل الدخول</a></li>
                          <li class="dropdown-item"><a  href="#">احصائيات</a></li>
                          <li class="dropdown-item"><a  href="#">امسح البيانات</a></li>-->
                        </ul>
                      </div>
                </div>

              </div>

              <?php  
                 /* //$rows=$data['ordersDone'];
                  $rows=$data['products_all'];
                  //$rows3=$data['orders'];
                  $count_order=0;
                  foreach ($rows as $row)
                  {
                    if($count_order==5)
                    {
                    break;
                    }
                    else
                    {
                             //$count_order=0;
                           
                                echo'
                    <div class="media d-flex mb-5">
              <div class="media-image align-self-center mr-3 rounded">
              <img src="../../'.$row->product_main_image.'" alt="customer image" class="img-thumbnail img-fluid" width=60px hight=60px>
              </div>
              <div class="media-body align-self-center">
                <a href="#"><h6 class="mb-3 text-dark font-weight-medium">'.$row->product_name.'</h6></a>
                <p class="">'.$row->product_details.'</p>
                <p class="mb-0">
                  <!--<del>$300</del>-->
                  <span class="text-dark ml-3">'.$row->product_price.' ريال يمني </span>
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="text-dark mr-2">10</span>مبيعات 
                  </p>
              </div>
            </div>';
                                 $count_order=$count_order+1;
                              }
                             
                          }*/
                          
                    
                  ?>
              <?php 
                    /*  $rows=$data['ordersDone'];
                      $rows2=$data['products_all'];
                      $count_pro=0;
                      $count_quan=0;
                      foreach ($rows as $row)
                      {  
                        foreach ($rows2 as $row2)
                        { if($count_pro==5)
                          {
                          break;
                          }
                          if($row->product_id == $row2->Product_id)
                          {
                        echo'
                        <div class="media d-flex mb-5">
                  <div class="media-image align-self-center mr-3 rounded">
                  <img src="../../'.$row2->product_main_image.'" alt="customer image" class="img-thumbnail img-fluid" width=60px hight=60px>
                  </div>
                  <div class="media-body align-self-center">
                    <a href="#"><h6 class="mb-3 text-dark font-weight-medium">'.$row2->product_name.'</h6></a>
                    <p class="">'.$row2->product_details.'</p>
                    <p class="mb-0">
                      <!--<del>$300</del>-->
                      <span class="text-dark ml-3">'.$row2->product_price.' ريال يمني </span>
                      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="text-dark mr-2">10</span>مبيعات 
                      </p>
                  </div>
                </div>';
                $count_pro=$count_pro+1;
                
                      }
                    }
                  }
                  $rows=$data['ordersDone'];
                  $rows2=$data['products_all'];
                  $count_pro=0;
                  $count_quan=0;
                  foreach ($rows as $row)
                  {  
                    foreach ($rows2 as $row2)
                    { if($count_pro==5)
                      {
                      break;
                      }
                      if($row->product_id == $row2->Product_id)
                      {
                    echo'
                    <div class="media d-flex mb-5">
              <div class="media-image align-self-center mr-3 rounded">
              <img src="../../'.$row2->product_main_image.'" alt="customer image" class="img-thumbnail img-fluid" width=60px hight=60px>
              </div>
              <div class="media-body align-self-center">
                <a href="#"><h6 class="mb-3 text-dark font-weight-medium">'.$row2->product_name.'</h6></a>
                <p class="">'.$row2->product_details.'</p>
                <p class="mb-0">
                  <!--<del>$300</del>-->
                  <span class="text-dark ml-3">'.$row2->product_price.' ريال يمني </span>
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="text-dark mr-2">10</span>مبيعات 
                  </p>
              </div>
            </div>';
            $count_pro=$count_pro+1;
            
                  }
                }
              }*/
                ?>
                <?php 
                 $rows=$data['products_all'];
                 $rows1=$data['ordersDone'];
                 $count_pro=0;
                 foreach($rows as $row)
                 {
                   if($count_pro == 2)
                    {break;}

                   else{
                     foreach($rows1 as $row1)
                     {
                       if($row1->product_id == $row->Product_id)
                      {
                       //echo $row1->product_id;
                       echo'
                    <div class="media d-flex mb-5">
              <div class="media-image align-self-center mr-3 rounded">
              <img src="../../'.$row->product_main_image.'" alt="customer image" class="img-thumbnail img-fluid" width=60px hight=60px>
              </div>
              <div class="media-body align-self-center">
                <a href="#"><h6 class="mb-3 text-dark font-weight-medium">'.$row->product_name.'</h6></a>
                <p class=""></p>
                <p class="mb-0">
                  <!--<del>$300</del>-->
                  <span class="text-dark ml-3">'.$row->product_price.' ريال يمني </span>
                  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="text-dark mr-2">10</span>مبيعات 
                  </p>
              </div>
            </div>';
                       $count_pro=$count_pro+1;

                     }
                    }
                }
              }
                ?>
                 <!--<div class="media d-flex mb-5">
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
                </div>-->
                </div>
            </div>



</div>


<div class="row">
							<div class="col-xl-4 col-lg-6 col-12">
								
                  <!-- Polar and Radar Chart -->
                  <div class="card card-default">
                    <div class="card-header justify-content-center">
                      <h2>نظرة عامة على المبيعات</h2>
                    </div>
                    <div class="card-body pt-0">
                      <ul class="nav nav-pills mb-5 mt-5 nav-style-fill nav-justified" id="pills-tab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">حالة المبيعات</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">المبيعات الشهرية</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                          <canvas id="polar"></canvas>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                          <canvas id="radar"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>

							</div>
							<div class="col-xl-4 col-lg-6 col-12"> 
                  <!-- Top Sell Table -->
                  <div class="card card-table-border-none" data-scroll-height="550">
                    <div class="card-header justify-content-between">
                      <h2>مبيعات بالكمية </h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-units">
                                <li class="dropdown-item"><a  href="#">Action</a></li>
                                <li class="dropdown-item"><a  href="#">Another action</a></li>
                                <li class="dropdown-item"><a  href="#">Something else here</a></li>
                              </ul>
                            </div>
                      </div>
                    </div>
                    <div class="card-body slim-scroll py-0">
                      <table class="table ">
                        <tbody>
                          <tr>
                            <td class="text-dark">موبايل سامسونج </td>
                            <td class="text-center">9</td>
                            <td class="text-right">33% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                          </tr>
                          <tr>
                            <td class="text-dark">لابتوب ديل </td>
                            <td class="text-center">6</td>
                            <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                          </tr>
                          <tr>
                            <td class="text-dark">ساعة الكترونية </td>
                            <td class="text-center">3</td>
                            <td class="text-right">50% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                          </tr>
                          <tr>
                            <td class="text-dark">سماعات </td>
                            <td class="text-center">7</td>
                            <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i> </td>
                          </tr>
                          <tr>
                            <td class="text-dark">شاحن </td>
                            <td class="text-center">10</td>
                            <td class="text-right">300% <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i> </td>
                          </tr>
                          
                        </tbody>
                      </table>

                    </div>
                    <div class="card-footer bg-white py-4">
                      <a href="#" class="btn-link py-3 text-uppercase">عرض التقرير</a>
                    </div>
                  </div>
</div>
							<div class="col-xl-4 col-12">
                        <!-- Notification Table -->
                        <div class="card card-default" data-scroll-height="550">
                          <div class="card-header justify-content-between ">
                            <h2>اخر التنبيهات </h2>
                            <div>
                                <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                                <div class="dropdown show d-inline-block widget-dropdown">
                                    <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-notification">
                                      <li class="dropdown-item"><a  href="#">Action</a></li>
                                      <li class="dropdown-item"><a  href="#">Another action</a></li>
                                      <li class="dropdown-item"><a  href="#">Something else here</a></li>
                                    </ul>
                                  </div>
                            </div>

                          </div>
                          <div class="card-body slim-scroll">
                            <div class="media pb-3 align-items-center justify-content-between">
                              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                <i class="mdi mdi-cart-outline font-size-20"></i>
                              </div>
                              <div class="media-body pr-3 ">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">طلب جديد</a>
                                <p >طلبية جديدة بالحجم الكبير </p>
                              </div>
                              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </div>

                            <div class="media py-3 align-items-center justify-content-between">
                              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                <i class="mdi mdi-email-outline font-size-20"></i>
                              </div>
                              <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">تنبية من البريد </a>
                                <p >تنبية جديد </p>
                              </div>
                              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 9 AM</span>
                            </div>


                            <div class="media py-3 align-items-center justify-content-between">
                              <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                <i class="mdi mdi-stack-exchange font-size-20"></i>
                              </div>
                              <div class="media-body pr-3">
                                <a class="mt-0 mb-1 font-size-15 text-dark" href="#">تذكير بمهمة</a>
                                <p >مهمة لم تطلع عليها </p>
                              </div>
                              <span class=" font-size-12 d-inline-block"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                            </div>
                            

                            
                          </div>
                          <div class="mt-3"></div>
                        </div>
</div>
						</div>
                  </div>
</div>


<?php include"footer.php";?>