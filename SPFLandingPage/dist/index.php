<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SPF</title>
</head>
<body>

<!-- Navigation bar-->
<div class="container">
  <nav class="navbar">
    <div class="full-logo">  
      <img src="img/logo-spf.png"/>
      <h1 class="logo">SPF IS BFF</h1>
    </div>   
    <button class="hamburger" id="hamburger">
      <i class="fa fa-bars"></i>
    </button>
    <ul class="nav" id="nav-ul">
    <li> <?php
      session_start();

      include("conexiune_db.php");
      include("check.php");

      $user_data = check_login($con);

      ?>
       <?php 
            if(isset($user_data['user_name']))
            {echo '<div>Salut, ';
            echo $user_data['user_name'];
            echo '</div></li>';
            echo '<li><a href="logout.php">Logout</a></li>';}
            else
            echo '<li><a href="login.php">Login</a></li>'; ?>
      <li><a href="#despre">Despre</a></li>
      <li><a href="#usecases">Instrucțiuni</a></li>
      <li><a href="#exemple">Recomandări</a></li>
      <div class="dropdown">
        <button class="dropbtn" href="#contact"><a>Contact</a>
        </button>
        <div class="dropdown-content">
          <a href="formular.html">Formular de contact</a>
        </div>
      </div>
    </ul>
  </nav>
</div>

<!-- Pagina principala-->
<div class="container">
  <section class="acasa">
      <div class="acasa-text">
        <h1>Secretul unui ten mai tânăr.</h1>
        <p>
            Secretul tinereții este de fapt secretul pentru o piele sănătoasă. Cât mai frumoasă, cu cât mai puține riduri. Ei bine, există oare vreun "produs minune" care să ne poată ajuta să obținem acest rezultat? DA! Și-anume factorul de protecție solară ("SPF").
        </p>
        <a href="#beneficii" class="btn">Află mai multe</a>
      </div>
      <img src="img/poza_acasa.jpg" class="acasa-img">
  </section>
</div>
  <hr>

<!-- Beneficii -->
  <section id="beneficii" class="beneficii sections-height">
    <div class="overlay">
      <div class="beneficii-inner py-5">
        <h3 class="text-2">Care sunt cele mai importante beneficii în folosirea SPF-ului?</h3>
        <p class="mt-1">
        <ol >
            <li style="text-align: left">Previne <b>îmbătrânirea</b></li>
            <li style="text-align: left">Previne <b>hiperpigmentarea</b> </li>
            <li style="text-align: left">Previne <b>apariția cancerului</b> de piele</li>
            <li style="text-align: left">Previne <b>arsurile</b> solare</li>
            <li style="text-align: left">Previne <b>deshidratarea</b> pielii</li>
        </ol>
        </p>
      </div>
    </div>
  </section>
  <hr>

  <!-- Despre produs -->
  <section id="despre" class="despre sections-height">
    <div class="overlay">
      <div class="despre-inner py-5">
        <h3 class="text-2"style="background-color: rgba(44, 35, 4, 0.26); padding: 0 15px"> Ce este SPF-ul mai exact?</h3>
        <p>
          SPF este prescurtarea de la <b>Sunscreen Protection Factor</b> și reprezintă un parametru ce determină cantitatea radiațiilor pe care pielea o poate primi până să înceapă să se înroșească. De asemenea, este unitatea de măsură în ceea ce privește eficiența produselor de protecție solară.Protecția solară trebuie să fie produsul nelipsit din trusa de îngrijire a oricărei persoane indiferent de sex sau vârstă. Dacă există un lucru asupra căruia medicii dermatologici sunt toți de acord, este acela că protecția solară este absolut necesară pielii. 

          Protecția solară protejează pielea împotriva radiațiilor solare, în special împotriva razelor UVB și UVA. Razele UVB cauzează arsuri asupra pielii și sunt extrem de puternice între orele 10.00 și 16.00 pe timpul verii, în timp ce razele UVA cauzează îmbatrânirea prematură a pielii și dereglări ale sistemului imunitar. Razele UVB afectează straturile de la suprafață ale pielii și ale epidermei, de aceea acestea cauzează roșeață și arsuri la nivelul pielii. 
          
          Razele UVA au lungime de undă lungă, avînd abilitatea de a pătrunde mai adânc în piele, afectând dermul. 
          
          Însă soarele nu are doar efecte negative asupra pielii și asupra organismului nostru. Acesta este stabilizator de Vitamina D, o vitamină foarte importantă pentru funcționarea la parametri normali și sănătatea întregului organism. Pe lângă acest lucru, soarele ameliorează diverse probleme ale pielii precum vitiligo, psoriazisul sau osteoporoza. 
        </p>
      </div>
    </div>
  </section>
  <hr>

   <!-- Mode de utilizare-->
   <section id="usecases" class="usecases sections-height" >
    <div class="overlay">
      <div class="usecases-inner py-5">
        <h3 class="text-2" style="background-color: rgba(44, 35, 4, 0.26); padding: 0 15px"> Cum se folosește?</h3>
        <p>
          Cantitatea corectă care trebuie aplicată pentru o protecție optimă este de 2,5 ml pe față, 3 ml pe gât și pe decolteu și 30 de ml pe restul corpului. Părțile corpului adesea omise sunt ceafa, partea de sus a pieptului și spatele picioarelor. Aplicarea corectă a produselor de protecție solară este unul dintre factorii cheie pentru o protecție eficientă împotriva soarelui: aplicați întotdeauna produsul înainte de expunerea la soare, pentru a vă asigura că sunteți protejați încă de la început. 
          Aplicați din nou la fiecare 2 ore și întotdeauna după înot ori după ștergerea cu prosopul. Atenție însă la demachiere: spf-ul folosit pe față trebuie musai să fie curățat seara cu apă micelară iar apa micelară trebuie la rândul ei înlăturată de pe față cu un gel de curățare.
        </p>
      </div>
    </div>
  </section>
  <hr>

<!-- Exemple de creme -->
  <section  id="exemple" class="exemple">
    <div class="gallery" id="imagini">
        <a href="img/reviderm.jpg" class="big">
          <img src="img/reviderm.jpg" id="imagine"/>
        </a>
    </div>
    <div class="gallery" id="imagini">
      <a href="img/SVR.jpg" class="big">
        <img src="img/SVR.jpg" id="imagine"/>
    </a>
    </div>
    <div class="gallery" id="imagini">
      <a href="img/Q-COSM.jpg" class="big">
        <img src="img/Q-COSM.jpg" id="imagine"/>
      </a>
    </div>
    <div class="gallery" id="imagini">
      <a href="img/avene.jpg" class="big">
        <img src="img/avene.jpg" id="imagine"/>
      </a>
    </div>
    <div class="gallery" id="imagini">
      <a href="img/EVY.jpg" class="big">
        <img src="img/EVY.jpg" id="imagine"/>
      </a>
    </div>
    <a class="precedenta" onclick="schimbapoza(-1)">&#10094;</a>
    <a class="urmatoarea" onclick="schimbapoza(+1)">&#10095;</a>
  </section>

<!-- Footer -->
  <footer class="section-footer py-4 bg-primary">
    <div class="container">
      <div class="footer-logo">
        <h1 class="text-2 mb-1">SPF IS BFF</h1>
        <img src="img/logo-spf.png"/>       
      </div>
      <div>
        <h3>Info</h3>
        <ul>
          <li><a href="#">Întrebări frecvente</a></li>
          <li><a href="#">Termeni și condiții</a></li>
          <li><a href="#">Politica de confidențialitate</a></li>
        </ul>
      </div>
      <div>
        <h3>Blog Posts</h3>
        <ul>
          <li><a href="#">Beauty</a></li>
          <li><a href="#">Skincare</a></li>
          <li><a href="#">SPF</a></li>
          <li><a href="#">Prevention</a></li>
        </ul>
      </div>
      <div>
        <h3>Abonează-te</h3>
        <p>
          Abonează-te la această pagină și vei primi săptămânal informații folositoare pentru tenul tău.
        </p>
        <form
          class="mt-1" name="email-form">
          <div class="email-form">
            <span class="form-control-wrap">
              <input type="email" name="email" id="email" size="40" class="form-control" placeholder="E-mail"/></span>
              <button type="submit" onclick="validateForm()" value="Submit" class="form-control submit">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </footer>
  <script src="js/script.js"></script>
  <script src="https://kit.fontawesome.com/b8ed6e470b.js" crossorigin="anonymous"></script>
</body>
</html>