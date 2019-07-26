<?php
session_start();
require "connect.php";
?>
<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>رداء</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body>
      <!--header-->
    <header>
      <div class="header">
       <a href="index.php" class="logo">رداء</a>
        <div class="header-right">
         <a class="active" href="index.php"> الرئيسية </a>
         <div class="dropdown">
          <button class="dropbtn">الأقسام
           <i class="fa fa-caret-down"></i>
          </button>
           <div class="dropdown-content">
           <!-- <a href="show_advs.php">الفساتين</a>
            <a href="show_advs.php">الحقائب </a>
            <a href="show_advs.php">الأحذيه</a>
            <a href="show_advs.php">المجوهرات</a>
            <a href="show_advs.php">الملابس</a>
            <a href="show_advs.php">العتيقه</a>
            <a href="show_advs.php">آخرى</a>-->
             <?php
 $sql_catg="SELECT * FROM category";
 $resu=mysqli_query($conn,$sql_catg);
 while ($rows=mysqli_fetch_array($resu)) {
  echo '  <a href="show_advs.php?id='.$rows['Category_ID'].'">'.$rows['Category_Name'].'</a>';
 }
 ?>
          </div>
         </div>
         <a href="create_an_adv.php"> إنشاء إعلان </a>
         <a href="signup.php"> التسجيل </a>
         <button id="loginbtn" onclick="document.getElementById('id01').style.display='block'">تسجيل الدخول </button>
         <div id="id01" class="modal">
         <form class="modal-content" action="/action_page.php">
         <div class="container">
         <h1>تسجيل الدخول </h1>
           <hr>
         <label class="label" for="email"><b>البريد الإلكتروني:  </b></label>
         <br>
         <input class="input" type="text" placeholder="اكتب بريدك الإلكتروني " name="email" required>
         <br>
       <label class="label"for="psw"><b>  كلمة المرور : </b></label>
       <br>
       <input class="input" type="password" placeholder="اكتب كلمة المرور " name="psw" required>

      <div >
        <button class="loginbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">إلغاء </button>
        <button class="loginbtn" type="submit" class="signup">تسجيل الدخول</button>
      </div>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
         </div>
      </div>
    </header>

<br>
      <div class="advs_box">
      <div class="adv_box">
        <p class="user_adv_title">عنوان الإعلان </p>
        <hr>
        <p class="user_data">اسم المعلن</p>
        <p class="user_data">المنطقه</p>
      </div>
      <div class="adv_box">
      <img class="adv_img"src="drees1.jpeg" alt="">
      </div>
      <div class="adv_box">
        <h5>الوصف:</h5>
        <p></p>
      </div>
      <div class="adv_box">
        <div class="reply_container">
          <p class="user_data">اسم المعلن</p>
          <hr>
          <p>الرد ..............</p>
          <hr>
          <span class="time">11:05</span>
        </div>
      </div>
    </div>

    <!--footer-->
    <div class="footer">
     <div class="footer_cotainer">
       <ul>
        <li ><a class="footer_cotant" href="#">المساعدة</a></li>
        <li ><a class="footer_cotant" href="#">تواصل معنا</a></li>
        <li ><a class="footer_cotant" href="#">حولنا </a></li>
      </ul>
     </div>
     <div id=copyright>
       جميع الحقوق محفوظة لرداء ٢٠١٩
    </div>
   </div>
  </body>
</html>
