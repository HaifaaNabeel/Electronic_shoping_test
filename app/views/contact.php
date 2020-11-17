
  <link rel="stylesheet" href="app/assets/css/style_contact.css">
   <script src="https://kit.fontawesome.com/e2ac9cc532.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php include'header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
 
</head>
<body>
<!-- partial:index.partial.html -->
<br><br><br><br><br><br><br>

<div class="contact-form-container">
  <div class="contact-us">
    <div class="contact-header">
      <h1>
        &#9135;&#9135;&#9135;&#9135;&nbsp;&nbsp;تواصل معنا
      </h1>
     
    </div>
    <div class="social-bar">
      <ul>
        <li>
          <i class="fab fa-facebook-f"></i>
        </li>
        <li>
          <i class="fab fa-twitter"></i>
        </li>
        <li>
          <i class="fab fa-instagram"></i>
        </li>
        <li>
          <i class="fab fa-dribbble"></i>
        </li>
      </ul>
    </div>
  </div>
  <div class="header">
    <h1>
    راسلنا
    </h1>
    <?php 
      $Msg = "";
      if(isset($_GET['error']))
      {
          $Msg = " من فضلك املإ الفراغ ";
          echo '<div class="alert alert-danger">'.$Msg.'</div>';
      }

      if(isset($_GET['success']))
      {
          $Msg = " تم ارسال رسالتك ";
          echo '<div class="alert alert-success">'.$Msg.'</div>';
      }
  
  ?>
  </div>
  <div class="address">
    <i class="fas fa-map-marker-alt"></i>
    <h3>
      اليمن صنعاء اكاديمية رواد
    </h3>
    <h3>
      عمارة النزيلي
    </h3>
  </div>
  <div class="phone">
    <i class="fas fa-phone-alt"></i>
    <h3>
      777777
    </h3>
  </div>
  <div class="email">
    <i class="fas fa-envelope"></i>
    <h3>
      web_dev@gmail.com
    </h3>
  </div>
  <div class="contact-form">
  <form action="return.php" method="post">
                            <input type="text" name="UName" placeholder="الاسم" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="الايميل" class="form-control mb-2">
                            <input type="text" name="Subject" placeholder="الموضوع" class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="اكتب الرسالة"></textarea>
                            <button class="btn btn-success" name="btn-send"> إرسال </button>
                        </form>
                        </div>
</div>
<!-- partial -->
<br><br><br><br><br><br><br>
<div> foooter</div>
</body>
</html>


<?php include'footer.php'; ?>