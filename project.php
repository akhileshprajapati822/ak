<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <meta anme="viewport" content="width=device-width, initialscale=1.0">
        <title>Redstore | Ecommerence Website Design</title>
        <link rel="stylesheet" href="style.css">
        
        <!-- <link rel="stylesheet" href="sautoslider.css"> -->

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>




        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- star rating -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



        <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' /> -->
        <style>
.shake:hover {
  animation: shake 1s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>

    </head>
    <body>
        

        <div class="header">
            <div class="container">
                <div class="navbar">
                
                    <div class="logo">
                        
                        <a href="Project.html"><img src="images/logo.png" alt="" width="125px"></a>
                        
                    </div>
                    
                      <!-- Navbar start -->
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

                        <ul id="menuitems">
                                                
                            <li><a class="it" href="Project.html"><i class="fa fa-home"></i> Home</a></li>
                            <li><a class="it" href="products.html"> <i class="fas fa-shopping-cart"></i> Products</a></li>
                            <li><a class="it" href=""> <i class="fas fa-info-circle"></i> About</a></li>
                            <li><a class="it" href=""> <i class="far fa-address-book"></i> Contact</a></li>
                            <li><a class="it" href="proaccount.html"> <i class="fas fa-user"></i> Account</a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
                            </li>
                            <li class="nav-item">
                                <div class="shake">
                                <a  class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>

                                </div>
                            </li>
                        </ul>
                    </nav>


                    <a href="procart.html"><img src="images/cart.png" width="30px" height="30px" alt=""></a>
                    <img src="images/menu.png" class="menu-icon"
                     onclick="menutoggle()">
                </div>
                <div class="row">
                    <div class="col-2">
                        <h1> Give Your Workout <br> A New Style!</h1>
                        <p>Success isn't always about greatness. it's about consistency
                            Consistent <br> hard work gain success. Greatness will come
                        </p>
                        <a href="" class="btn">Explore Now &#8594; </a>
                    </div>
                    <div class="col-2">
                        <img src="images/background-fashionwomen.png" alt="">
    
                    </div>
    
                </div>
    
            </div>
        </div>
    
            <!------ featured categories------->
            <div class="categories">
                <div class="small-conatiner">
                    <div class="row">
                        <div class="col-3">
                            <img src="images/category-1.jpg" alt="">
        
                        </div>
                        <div class="col-3">
                            <img src="images/category-2.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img src="images/category-3.jpg" alt="">
        
                        </div>
                      
        
                    </div>
        
                </div>
    
            </div>





<!-- --------------------------------------popup offer----------------------------------------------- -->

<!-- 
            <div class="stone">
                <div class="popup">
                    <div class="contBox">
                        <div class="close"></div>
                        <div class="imgbx">
                            <img src="images/drinks-removebg-preview.png" alt="">
                        </div>
                        <div class="cont">
                            <div>
                                <h3>Special Offer</h3>
                                <h2>40% <span>off</span></h2>
                                <br>
                                <br>

                                <p> <b>Refresh, and add a Joy in your life</b>

                                    <b>Power is in Your Hand, Feel it</b>
                                </p>
                                <a href="offer drinks.html">Get The Deal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    


     


<!-- -------------------------------Category page shortcut -------------------------------------------- -->
            
            <div class="row">
                <div class="col-4">
                    <div>
                        <a href="promobile.html"><img class="al" src="images/cat-mobile2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Mobile's & Laptop's</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prohomeentertain.html"><img class="al" src="images/cat-tv1.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Home Entertainments</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prodaily.html"><img class="al" src="images/my2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Daily Essentials</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="proformalmens.html"><img class="al" src="images/cat-for1.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Formal Clothes</h4>
                    </div>
                </div>
                <div class="col-4">
                    <div>
                        <a href="prokurta.html"><img class="al" src="images/cat-saree2.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Indian Style Clothes</h4>
                    </div>                   
                </div>
                <div class="col-4">
                    <div>
                        <a href="procasual.html"><img class="al" src="images/cat-casual.jpg" alt="Avatar" style="width:200px"></a>
                        <h4>Casual Clothes</h4>
                    </div>                   
                </div>
              
            
            </div>



 <!-------------------------------------- featured products---- &#8377   --->  
            <div class="clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%);small-container">
                <h2 class="title">Featured Products</h2>
                <div class="row">
                </div>
                    


                <div class="row slideo">
                    
                    <div class="col-4">
                        <a href="progedetails5.html"><img src="images/ge1.webp" alt=""></a>
                        <h4>Libas</h4>
                        <h4>&#8377 1,900     <s>&#8377 2,500</s></h4>
                    </div>
    
                    <div class="col-4">
                        <a href="progfdetails6.html"><img src="images/gf1.webp" alt=""></a>
                        <h4>Indo Era</h4>
                        <h4>&#8377 2,222    <s>&#8377 2,890</s></h4>
                        
                    </div>
    
                    <div class="col-4">
                        <a href="proggdetails7.html"><img src="images/gg1.webp" alt=""></a>
                        <h4>Anubhutee</h4>
                        <h4>&#8377 1,250    <s>&#8377 1,750</s></h4>
                        
                    </div>
    
                    <div class="col-4">
                        <a href="proghdetails8.html"><img src="images/gh1.webp" alt=""></a>
                        <h4>Prakhya</h4>
                        <h4>&#8377 1,550    <s>&#8377 1,750</s></h4>
                        
                    </div>
                    
                    <div class="col-4">
                        <img src="images/g1.jpg" alt="">
                        <h4>Anouk</h4>
                        <h4>&#8377 1449   <s>&#8377 2899</s>   Discount50% OFF
                        </h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g2.webp" alt="">
                        <h4>PANIT</h4>
                        <h4>&#8377 1600    <s>&#8377 </s>(63% OFF)</h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g3.webp" alt="">
                        <h4>Vbuyz</h4>
                        <h4>&#8377 1700   <s>&#8377 5020 </s>(67% OFF)</h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g4.webp" alt="">
                        <h4>GERUA</h4>
                        <h4>&#8377 877  <s>&#8377 1999</s> (56% OFF)</h4>
                        
                    </div>
                    
                    <div class="col-4">
                        <img src="images/g5.webp" alt="">
                        <h4>Women Pink</h4>
                        <h4>&#8377 899 <s>&#8377 1799</s> (50% OFF)</h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g6.webp" alt="">
                        <h4>Vishudh</h4>
                        <h4>&#8377 428 <s>&#8377 1299</s>(67% OFF)</h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g7.webp" alt="">
                        <h4>Ishin</h4>
                        <h4>&#8377 1605 <s>&#8377 3649</s>(56% 0FF)</h4>
                        
                    </div>
        
                    <div class="col-4">
                        <img src="images/g8.jpg" alt="">
                        <h4>Women Sea</h4>
                        <h4>&#8377 900 <s>&#8377 1600</s></h4>
                        
                    </div>
                
    
                </div>

                

<!-- --------------------------------------------------------------------------------------------------------------------- -->

<h2 class="title">Featured Products</h2>
                <div class="row slideo">
                                    
                    <div class="col-4">
                        <a href=""><img src="images/b1.jpg" alt=""></a>
                        <h4>Roadster</h4>
                        <h4>&#8377 1,044    <s>&#8377 1,899</s>(45% OFF)</h4>
                    </div>

                    <div class="col-4">
                        <a href=""><img src="images/b2.jpg" alt=""></a>
                        <h4>Striped Sweater</h4>
                        <h4>&#8377 989   <s>&#8377 1,799</s>(45% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <a href=""><img src="images/b3.webp" alt=""></a>
                        <h4>Gant</h4>
                        <h4>&#8377 5,499    <s>&#8377 10,999</s>(50% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <a href=""><img src="images/b4.jpg" alt=""></a>
                        <h4>degree North</h4>
                        <h4>&#8377 1,495    <s>&#8377 3999</s>(56% OFF)</h4>
                        
                    </div>
                    
                    <div class="col-4">
                        <img src="images/b5.webp" alt="">
                        <h4>Pierre Carlo</h4>
                        <h4>&#8377 1,234   <s>&#8377 1899</s>(35% OFF)
                            </h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b6.jpg" alt="">
                        <h4>PANIT</h4>
                        <h4>&#8377 3,499    <s>&#8377 6,999 </s>(50% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b7.jpg" alt="">
                        <h4>Louis Philippe</h4>
                        <h4>&#8377 1,499 <s>&#8377 2,999 </s>(50% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b8.jpg" alt="">
                        <h4>Levis</h4>
                        <h4>&#8377 5,666 <s>&#8377 10,999</s> (46% OFF)</h4>
                        
                    </div>
                    
                    <div class="col-4">
                        <img src="images/b9.jpg" alt="">
                        <h4>Max</h4>
                        <h4>&#8377 1,209 <s>&#8377 2,199</s> (45% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b10.webp" alt="">
                        <h4>Polo</h4>
                        <h4>&#8377 1,234 <s>&#8377 1899</s>(35% OFF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b11.webp" alt="">
                        <h4>Mast & Harbour</h4>
                        <h4>&#8377 1374 <s>&#8377 2499</s>(45% 0FF)</h4>
                        
                    </div>

                    <div class="col-4">
                        <img src="images/b12.jpg" alt="">
                        <h4>Hammer</h4>
                        <h4>&#8377 4999 <s>&#8377 8999</s></h4>
                        
                    </div>


                </div>

                </div>

<!-- --------------------------------------------------------------------------------------------------------------------------------- -->

                <div class="row slidea">
                    <div class="col-4">
                        <a href="productdetails1.html"><img src="images/l1.jpg" alt=""></a>
                       
                    </div>
    
                    <div class="col-4">
                        <a href="productdetails2.html"><img src="images/l3.jpg" alt=""></a>
                        
                    </div>
    
                    <div class="col-4">
                        <a href="productdetails3.html"><img src="images/l4.jpg" alt=""></a>
                        
                    </div>
    
                </div>


    
            </div>
        

        </div> 
<!--------------offer--------------------------------------------------------------------------------------------->
        <div class="offer">
            <div class="smaller-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images/exclusive.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively avaialble in Redstore</p>
                        <h1>Smart Ban</h1>
                        <small>The Mi Smart Band 4 festures a 39.9% larger
                            (than mi band 3) amold color full touch display width
                            adjustable brightness , so everything is n clear as can be.
                        </small>
                        <a href=""class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        

 <!-- --------------- testimonial------------   ----------------------------------------------------------------------     -->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p> Akhilesh is that you quwfuiwu
                            efiwgilwgfiwef
                            evbwivwfvwieufvuiwf
                            wewviywfiuwgvuiwvfuiwvfi
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-1.png" alt="">
                        <h3>Natasha</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p> Akhilesh is that you quwfuiwu
                            efiwgilwgfiwef
                            evbwivwfvwieufvuiwf
                            wewviywfiuwgvuiwvfuiwvfi
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-2.png" alt="">
                        <h3>Shasha</h3>
                    </div>

                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p> Akhilesh is that you quwfuiwu
                            efiwgilwgfiwef
                            evbwivwfvwieufvuiwf
                            wewviywfiuwgvuiwvfuiwvfi
                        </p>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <img src="images/user-3.png" alt="">
                        <h3>Nasha</h3>
                    </div>
                   
                </div>
            </div>
        </div>


<!-- ------------------Brands------------------------------------------------------------------------------ -->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images/logo-godrej.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-samsung.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-raymond.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-asus.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-lg.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/logo-adidas.png" alt="">
                    </div>
                </div>
            </div>
        </div>
   





<!-- --------------------------------------------star rating------------------------------------------------------------ -->




        
<div class="starrates">
            
    <div class="cone">
        <h2>5 star</h2>
        <div class="skills">
            <h3 class="name">HTML</h3>
            <div class="rates">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
                <input type="radio" name="html">
            </div>
        </div>
        <div class="skills">
            <h3 class="name">CSS</h3>
            <div class="rates">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                <input type="radio" name="css">
                
            </div>
        </div>
        <div class="skills">
            <h3 class="name">js</h3>
            <div class="rates">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
                <input type="radio" name="js">
            </div>
        </div>
        <div class="skills">
            <h3 class="name">phto</h3>
            <div class="rates">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
                <input type="radio" name="ph">
            </div>
        </div>
        <div class="skills">
            <h3 class="name">Illustrator</h3>
            <div class="rates">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
                <input type="radio" name="ill">
            </div>
        </div>
    </div>
    
    </div>




















<!-- ---------------------- Footer ------------------------------------------------------------------------ -->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our app</h3>
                        <p>downlaod app foe andriod and ios mobile phone</p>
                        <div class="app-logo">
                            <img src="images/play-store.png" alt="">
                            <img src="images/app-store.png" alt="">
                        </div>
                    </div>
                    <div class="footer-col-2">
                        <img src="images/logo-white.png" alt="">
                        <p> our purpose is bfwiebfijbjkwebjkbfbwjb</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Useful links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    <div class="footer-col-4">
                        <h3>Follow us</h3>
                        <ul>
                            <a href="https://en-gb.facebook.com/login/"><li>Facebook</li></a>
                            <a href="https://twitter.com/login">Twitter</a>
                            <a href="https://www.instagram.com/accounts/login/"><li>Instagram</li></a>
                            <a href="https://www.youtube.com/"><li>YouTube</li></a>
 
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2021 - Akhilesh Prajapati</p>
            </div>
        </div>


<!-- ------------js for toggle menu------------------------------------------------------------------------------- -->
        <script>
            var menuitems = document.getElementById("menuitems");
            menuitems.style.maxHeight = "0px";
            function menutoggle(){
                if(menuitems.style.maxHeight == "0px")
                {
                    menuitems.style.maxHeight = "200px";
                }
                else
                {
                    menuitems.style.maxHeight = "0px";
                }
            }
        </script>






<!-- -------------------------------Automatic show popup after 2second of page load------------- -->

<!-- 
<script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');

    window.onload = function(){
        setTimeout(function(){
            popup.style.display = "block";

            // add some time delay to show popup
        },3000)
    }

    close.addEventListener('click',()=>{
        popup.style.display = "none";
    })



</script> -->










<!-- --------------------------------------auto sliders n slider-------------------------------------------------- -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$('.slideo').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
});
	
</script>




<script type="text/javascript">
    $('.slidea').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true
});
</script>









<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>


<script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {
      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pprice = $form.find(".pprice").val();
      var pimage = $form.find(".pimage").val();
      var pcode = $form.find(".pcode").val();

      var pqty = $form.find(".pqty").val();

      $.ajax({
        url: 'action.php',
        method: 'post',
        data: {
          pid: pid,
          pname: pname,
          pprice: pprice,
          pqty: pqty,
          pimage: pimage,
          pcode: pcode
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>

    </body>
</html>