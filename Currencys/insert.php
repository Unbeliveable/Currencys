<?php
  $moneyvalue=$_POST['money'];
  $coin_usd=0.028;
  $coin_eur=0.026;
  $coin_sgd=0.040;
  $sum=$moneyvalue*$coin_usd;
  $sum2=$moneyvalue*$coin_eur;
  $sum3=$moneyvalue*$coin_sgd;

 ?>
 <html>
 <head>
   <title>Convert Currency</title>
   <link rel="stylesheet" type="text/css" href="css/insert-style.css"/>
 </head>
 <body>
    <div class="menu-box">
      <div class="logo-box"><img src="img/Logo.png"></div>
    </div>
    <div class="text-box">โปรแกรมคำนวณอัตราแลกเปลี่ยนเงินตราต่างประเทศ
      <?php
        echo "<br><br>";
        echo $moneyvalue." บาท = ".$sum." ดอลล่าสหรัฐอเมริกา [USD]"."<br>";
        echo $moneyvalue." บาท = ".$sum2." ยูโรโซน [EUR]"."<br>";
        echo $moneyvalue." บาท = ".$sum3." สิงคโปร์ [SGD]"."<br>";
      ?>
</div>
<form action="index.html" method="POST">
    <div class="send-box"><input type="submit" value="กลับสู่หน้าแลกเปลี่ยน"></div>
  </form>
 </body>
 </html>