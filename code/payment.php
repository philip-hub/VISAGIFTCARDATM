
<!DOCTYPE HTML> 
<html>
<head>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<script src="script.js"></script>

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>* ATM *</title>
 </head>
<body>
<h1><center>*   Automated Teller Machine   *</center></h1>
 
 <center>
<div id="foreground">
<br>
<br>
 <div id ="screen">
   
   <?php
 
 if (empty($_GET["amount"]) or empty($_GET["account"])){
   echo "<p><a href='index.php'>Please fill in the ATM completely and properly</a><p>";

 }
  else{
    $amount=($_GET["amount"]);
    $account=($_GET["account"]);
    $button='<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="'.$account.'">
    <input type="hidden" name="lc" value="US">
    <input type="hidden" name="item_name" value="Visa Gift Card ATM">
    <input type="hidden" name="amount" value="'.$amount.'">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="button_subtype" value="services">
    <input type="hidden" name="no_note" value="0">
    <input type="hidden" name="tax_rate" value="0.000">
    <input type="hidden" name="shipping" value="0.00">
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
    <input type="image" src="https://www.flaticon.com/svg/static/icons/svg/2577/2577736.svg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" height="7%" width="7%">
    <img alt="" border="0" src="https://www.flaticon.com/svg/static/icons/svg/2577/2577736.svg" width="1" height="1">
    </form><br>';
    echo '<br><p>Click below to proceed to Paypal and click "Pay with credit or debit card" and then pay yourself with your Visa Gift card</p>';
    echo $button;
    echo'<p>Thank you come again and share!</p>';
  }
  
 
 
 ?>
  <br>
 </div>
 <br>
</div>


 <br>
<p id="instructions">Click below to check out MHC socials </p>
  <a href="https://www.instagram.com/memphishackclub/" target="_blank" class="fa fa-instagram"></a>
<a href="https://twitter.com/MHackclub" target="_blank" class="fa fa-twitter"></a>
<a href="https://www.facebook.com/groups/656997425191729" target="_blank" class="fa fa-facebook"></a>
<a href="https://www.linkedin.com/company/memphis-hack-club/?viewAsMember=true" class="fa fa-linkedin" target="_blank"></a>


 </center>
</body>
</html>








