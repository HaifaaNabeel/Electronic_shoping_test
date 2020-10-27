<?php include'header.php'; ?>


 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>bill sale</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<html><head></head><body>
<div class="container-fluid">
<table id="email-wrapper" style="background-color: white; padding: 4%; width:100%;">
<tbody>
<!-- header -->

<tr>
  <td>
    <table id="header" style="background-color: white; width: 100%;">
      <tr>
        <td>
                  <span  class="logo ion-ios-cart" alt="Kepware Logo"   style="color: #F27523; font-size:4.5em"></span></td>
      </tr>
    </table>
  </td>
</tr>
 
<!-- thin gray divider -->
<tr>
  <td>
    <table class="divider" style="background-color: #c8c9c7; border-collapse: collapse; height: 7px; width: 100%;">
      <tr>
        <td></td>
      </tr>
    </table>
  </td>
</tr>
<br><br>
<!--thank you section -->
<tr>
  <td>
  <table id="thank-you" style="width:100%;">
    <tr>
      <td><br>
        <h1 style="color: #3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: normal;">Order #1234568</h1>
      </td>
    </tr>
  </table>

  </td>
</tr>
  
  
<!-- status bar divider -->
<tr>
  <td><br>
    <table class="divider" style="background-color: #a01c86; height: 8px; width: 100%;">
      <tr>
        <td></td>
      </tr>
    </table>
  </td>
</tr>
  
<!--thank you section -->
<tr>
  <td>
  <table id="thank-you" style="width:100%;">
    <tr>
      <td><br>
        <h1 style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; font-weight: normal;">Thank you for your order</h1>
        <p style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif;">You will receive an email confirmation shortly. If you have any questions regarding your order, please email <a href="loginstore.gmail.com">order.loginstore.gmail.com</a></p>
      </td>
    </tr>
  </table>
  </td>
</tr>
<tr></tr>

<!-- thin gray divider -->
<tr>
  <td><br>
    <table class="divider" style="background-color: #c8c9c7; border-collapse: collapse; height: 10px; width: 100%;">
      <tr>
        <td></td>
      </tr>
    </table>
  </td>
</tr>
  
  
<!-- customer information section -->
<tr>
  <td><br>
  <table id="customer-information" style="font-family: Arial, Helvetica, sans-serif; width:100%;">
    <tr>
      <td style="width: 33%;">
        <h3>Billing Information</h3>
        <span class="customer-info" style="color:#c8c9c7">
        John Smith
        <br />
        Smith Engineering
        <br />        
        johnsmith@smithengineering.com
        <br />
        1234 Surry Lane
        <br />
        WallaWalla, WA
        <br />
        02355, USA
        <br />  
        <span>
      </td>
      <td style="width: 33%;">
        <h3>Shipping Information</h3>
        <span class="customer-info" style="color:#c8c9c7">
        John Smith
        <br />
        Smith Engineering
        <br />        
        1234 Surry Lane
        <br />
        WallaWalla, WA
        <br />
        02355, USA
        <br />  
        <span>
      </td>
      <td style="width: 33%;">
        <h3>Payment</h3>
        <span class="payment-info" style="color:#c8c9c7">
        VISA
        <br />
        Ending in -2345
        <br />        
        EXP 01/2020
        <br />
        <br />
        Coupon Code - FREECD
        <span>
      </td>
    </tr>
  </table>

  </td>
</tr><br><br>

<!-- bill of sale -->  
<tr>
  <td><br>
  <table id="bill-of-sale" style="border-spacing: 20px; hight:10px; width:100%;">
    <tr><hr >
      <th style=" color:#3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: left;">Product</th>
      <th style="color:#3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: center;">Qty</th>
      <th style="color:#3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: center;">Unit Price</th>
      <th style="color:#3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: center;"></th>
      <th style="color:#3d4647; font-family: Arial, Helvetica, sans-serif; font-weight: bold; text-align: right;">Subtotal</th>
    </tr>
    <tr> 
      <td colspan="5" style="background-color: #c8c9c7;"></td>
    </tr>
    <!-- product -->
    <tr>
      <td style="text-align: left;"><hr style="border:0px">
        <span class="product-name" style="color: #a01c86; font-family: Arial, Helvetica, sans-serif;">ABB Totalflow - Subscription</span>
        <br />
        <span class="serial-number" style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; font-size: 0.8rem;">KWS-ABBTF0-SUB</span>
      </td>
      <td style="color: #c8c9c7; text-align:center; font-family: Arial, Helvetica, sans-serif;">1</td>
      <td style="color: #c8c9c7; text-align:center; font-family: Arial, Helvetica, sans-serif;">1,230.00</td>
      <td style="color: #c8c9c7; text-align:right; font-family: Arial, Helvetica, sans-serif;"></td>
      <td style="color: #f27523; text-align:right; font-family: Arial, Helvetica, sans-serif;">$1,230.00</td>
    </tr>
    
    <!-- support & maintenance -->
    <tr>
      <td style="padding-left: 0.0rem; text-align: left;"><hr style="border:0px" style="border:0px">
        <span class="product-name" style="color: #3d4647; font-family: Arial, Helvetica, sans-serif;">1 Year Support &amp; Maintenance Agreement</span>
        <br />
        <span class="serial-number" style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; font-size: 0.8rem;">KWS-ABBTF0-ATT</span>
      </td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center;"></td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center;">615.00</td>
      <td style="color: #c8c9c7; text-align:right; font-family: Arial, Helvetica, sans-serif;"></td>
      <td style="color: #f27523; text-align:right; font-family: Arial, Helvetica, sans-serif;">$615.00</td>
    </tr>
    <!-- physical media -->
    <tr>
      <td style="text-align: left;"><hr style="border:0px">
        <span class="product-name" style="color: #3d4647;  font-family: Arial, Helvetica, sans-serif;">Physical Media (CD)</span>
      </td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center;">1</td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center;">40.00</td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:right;"></td>
      <td style="color: #912f46; font-family: Arial, Helvetica, sans-serif; text-align:right;">$40.00</td>
    </tr>
    <tr>
      <td style="text-align: left;"><hr style="border:0px">
        <span class="product-name" style="color: #3d4647; font-family: Arial, Helvetica, sans-serif;">Coupon Code - FREECD</span>
      </td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center;"></td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:center; ">-40.00</td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:right;"></td>
      <td style="color: #912f46; font-family: Arial, Helvetica, sans-serif; text-align:right;">($40.00)</td>
    </tr>
    <tr>
      <td colspan="5" style="background-color: #c8c9c7;"></td>
    </tr>
    <tr>
      <td style="text-align: left;"><hr style="border:0px">
      </td>
      <td style="text-align:center;"></td>
      <td style="text-align:center;"></td>
      <td style="color: #3d4647; font-family: Arial, Helvetica, sans-serif; text-align:right;">Tax</td>
      <td style="color: #912f46; font-family: Arial, Helvetica, sans-serif; text-align:right;">$0.00</td>
    </tr>
    <tr>
      <td style="text-align: left;"><hr style="border:0px">
      </td>
      <td style="text-align:center;"></td>
      <td style="text-align:center;"></td>
      <td style="color: #c8c9c7; font-family: Arial, Helvetica, sans-serif; text-align:right; font-size: 1.5rem; font-weight: bold;">Total</td>
      <td style="color: #f27523; font-family: Arial, Helvetica, sans-serif; font-size: 1.5rem; font-weight: bold; text-align:right; ">$1,230.00</td>
    </tr> <br>
  </table>

  </td>
</tr>
</tbody>
</table></div>
<br><br>
</body>
</html>
<!-- partial -->
  
</body>
</html>



 
<?php include'footer.php'; ?>
