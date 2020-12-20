<!-- Section Header -->

    <header>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
              <i class="fas fa-bars"></i>
            </label>
            <label class="logo"><a href="/home/">Projet 4</a></label>
            <ul class="navlinks">
                <li><a href="/about/">A propos</a></li>
                <li><a href="/contact/">Contact</a></li>
                <li><?php if(isset($_SESSION["email"])){
                              echo "<a href='/profil/'>Profil</a>"; 
                          } ?></li>
                <li><?php if(!isset($_SESSION["email"])){
                              echo "<a href='/login/'>Connexion</a>"; 
                          }else{
                              echo "<a href='/logout/'>Déconnexion</a>";
                          } ?> </li>
            </ul>
    </nav>
    </header>
<!-- End Section Header -->
