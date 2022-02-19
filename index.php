<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Thowm Website Home</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="icon" href="./images/icon.png"  type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Menu
         </div>
         <ul>
            <li class="active"><a href="#">Home</a></li>
            <li>
               <a href="#" class="feat-btn">Liên Hệ
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="https://www.facebook.com/Thowmm03112005/"><img src="https://cdn-icons.flaticon.com/png/512/3670/premium/3670032.png?token=exp=1645295148~hmac=980add22fb119e675e3473cdbc935408"class="icon">facebook</a></li>
                  <li><a href="https://www.facebook.com/Thowmm03112005/"><img src="https://cdn-icons.flaticon.com/png/512/3670/premium/3670157.png?token=exp=1645295568~hmac=c03a62f377e194525fa03899a318a028" class="iconn"> Discord</a></li>
                  <li><a href="https://www.facebook.com/Thowmm03112005/"><img src="https://cdn-icons-png.flaticon.com/512/733/733609.png" class="iconnn"> Github</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">Tài liệu
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="https://www.w3schools.com/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944659982148833310/th-removebg-preview.png" class="icok"> Tài liệu #1</a></li>
                  <li><a href="https://fullstack.edu.vn/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944660390279778345/image-removebg-preview_2.png" class="icokk"> Tài liệu #2</a></li>
                  <li><a href="https://stackoverflow.com/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944660626511396915/image-removebg-preview_4.png" class="icokkk"> Tài liệu #3</a></li>
               </ul>
            </li>
            <li>
                <a href="#" class="shift-btn">Server
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="shift-show">
                   <li><a href="../sever1.php"><img src="https://cdn-icons.flaticon.com/png/512/2704/premium/2704265.png?token=exp=1645296975~hmac=95e16cf737ccd560c0d18beadcd971e8" class="sv"> Server 1</a></li>
                   <li><a href="../sever1/sever1.php"><img src="https://cdn-icons.flaticon.com/png/512/2704/premium/2704265.png?token=exp=1645296975~hmac=95e16cf737ccd560c0d18beadcd971e8" class="sv"> Server 2</a></li>
                   <li><a href="#"><img src="https://cdn-icons.flaticon.com/png/512/4391/premium/4391443.png?token=exp=1645297159~hmac=5c50e700cfe7abc5f47c916bba520d84" class="up"> Đang cập nhật</a></li>
                </ul>
             </li>
             <li>
                <a href="#" class="sourth-btn">About
                    <span class="fas fa-caret-down Fourth"></span>
                </a>
                <ul class="sour-show">
                   <li><a href="#"><img src="https://cdn-icons.flaticon.com/png/512/4391/premium/4391443.png?token=exp=1645297159~hmac=5c50e700cfe7abc5f47c916bba520d84" class="up">Đang cập nhật</a></li>
                   <li><a href="#"><img src="https://cdn-icons.flaticon.com/png/512/4391/premium/4391443.png?token=exp=1645297159~hmac=5c50e700cfe7abc5f47c916bba520d84" class="up">Đang cập nhật</a></li>
                   <li><a href="#"><img src="https://cdn-icons.flaticon.com/png/512/4391/premium/4391443.png?token=exp=1645297159~hmac=5c50e700cfe7abc5f47c916bba520d84" class="up">Đang cập nhật</a></li>
                </ul>
             </li>
            <li><a href="./Feedback/index.html">Phản hồi</a></li>
         </ul>
      </nav>
      <div class="content">
         <div class="header">
      </div>
    </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('.shift-btn').click(function(){
               $('nav ul .shift-show').toggleClass("show2");
               $('nav ul .third').toggleClass("rotate");
           });
           $('.sourth-btn').click(function(){
               $('nav ul .sour-show').toggleClass("show3");
               $('nav ul .Fourth').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
            <div class="back">
                <video autoplay loop>
                    <source src="./images/back.mp4" type="video/mp4">
                </video>
            </div>
   </body>
</html>
