
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/logo.jpg" alt="logo etsnas"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Pour Plus d'information Contacter Nous : </p>
              <a href="mailto:nassirouboula@etsnass.net">nassirouboula@etsnass.net</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Appeller Nous: </p>
              <a href="tel:96-96-68-98">(+227 96 96 68 98)</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="https://www.facebook.com/etablissement.nas"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="https://twitter.com/ibrahimcheik"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="https://www.linkedin.com/in/amadou-moussa-ibrahim-5b6995150/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="https://plus.google.com/107015870214650075560?hl=fr"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{	
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Se Connecter / Creer Compte</a> </div>
<?php }
else{ 

echo "Bienvenue Membre";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Configurer Profile</a></li>
              <li><a href="update-password.php">Changer Mot De Passe</a></li>
            <li><a href="my-booking.php">Mes Reservations</a></li>
            <li><a href="post-testimonial.php">Poster Commentaire</a></li>
          <li><a href="my-testimonials.php">Mes Commentaires</a></li>
            <li><a href="logout.php">Deconnexion</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Configuration Profile</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Changer Mot De Passe</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Mes Reservations</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Poster Un Commentaire</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Deconnexion</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="includes/rechercheDansSite.php" method="get" id="header-search-form">
            <input type="text" placeholder="Chercher..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="page.php?type=aboutus">Nous Connaitre</a></li>
          <li><a href="car-listing.php">Voiture</a>
          <li><a href="transport.php">Log & Transport</a>
          <li><a href="page.php?type=faqs">FAQ</a></li>
          <li><a href="contact-us.php">Contact</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>