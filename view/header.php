<!-- Section Header -->

     <header>
         <!-- Nav Bar -->
         <div class="logo"><a href="../public/index.php">Jean Forteroche</a></div>
         <nav>
             <i class=" fa fa-bars"></i>
             <ul class="navlinks">
                 <li><a href="../view/about.php">A propos</a>
                 <li>
                 <li><a href="../view/contact.php">Contact</a></li>
                 <li> 
                   <?php 
           if(!isset($_SESSION["email"])){
               echo "<a class='nav-link js-scroll-trigger' href='../view/login.php'>Connexion</a>";
           }else{
               echo "<a class='nav-link js-scroll-trigger' href='../view/logout.php'>D�connexion</a>";
           }
           ?>
               </li>
             </ul>
         </nav>
     </header>
 <!--
 <header>
   <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
     <div class="container">
       <a class="logo js-scroll-trigger" href="../index.php">Jean Forteroche</a>
       <button  data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <i class=" fa fa-bars"></i></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="../view/about.php">A propos</a>
           </li>
           <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="../view/contact.php">Contact</a>
           </li>
           <li class="nav-item">
          
           </li>
         </ul>
       </div>
     </div>
   </nav>
 </header>
 -->
 <!-- End Section Header -->
