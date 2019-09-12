<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
        <div class="col-md-6">
          <h6>A Propos De Nous</h6>
          <ul>

        
          <li><a href="page.php?type=aboutus">A propos de nous</a></li>
          <li><a href="page.php?type=faqs">FAQs</a></li>
          <li><a href="page.php?type=privacy">Privacy</a></li>
          <li><a href="page.php?type=terms">Condition d'utilisation</a></li>
          <li><a href="transport.php">Transport</a>
          <li><a href="admin/">Partie Admin</a></li>
          </ul>
        </div>
  
        <div class="col-md-3 col-sm-6">
          <h6>Abonner Vous Au Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Entrer Votre Address Email" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">S'abonner <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*Recevez Les Derniere Marque De Voiture Mise En Ligne Chaque Semaine.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Nous Restons En Contact:</p>
            <ul>
              <li><a href="https://www.facebook.com/lecheikibra"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/ibrahimcheik"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/amadou-moussa-ibrahim-5b6995150/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="https://plus.google.com/u/0/107015870214650075560"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/ibrahimcheik"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
<div id="map" style="width:100%;height:400px;"></div>

<script>
function initMap() {
  var myLatLng = {lat: 13.534342, lng: 2.071410};

var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 18,
  center: myLatLng
});

var marker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  title: 'Chez Ibrahim, Developer Freelancer'
});
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3f6mSUEfQRN8oKSVUQdMfJBwz1nCWqLM&callback=initMap"></script>
        <div class="col-md-6 text-center text-justify">
          <p class="copy-right">Copyright &copy; 2018 ETSNAS Conçu par Amadou Moussa Ibrahim (+21653646370). Tous les droits sont réservés</p>
        </div>
      </div>
    </div>
  </div>
</footer>