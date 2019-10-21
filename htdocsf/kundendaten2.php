
<html>




<head>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="test2.css">
<script src="bootstrap.js"></script>

<title>Konfiguratorbeta</title>
</head>
<style media="screen">
  h4{
    font-size: 1.1em;
  }
  h3{
    font-size: 1.6em;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
  }
  h2{
    font-size: 1.4em;
    font-weight: bold;

  }
  .abschnitt{
    margin-top: 30px;
  }
</style>

<div id="HTMLtoPDF">

<body>
<div class="row" id="main">
        <nav class="navbar col-12" style="background-color: rgb(19,51,79)">
          <img src="Cupboard_Logo_sm.jpg" class=""style="height: 60px">
          <h1 class="col-4"></h1>
          <a href="profile.html">Berater: Kim Müller<img src="profile.jpeg" id="profilepic"></a>
        </nav>
</div>
<div class="row" id="row3" style="margin: 50px;">

<div class="col-4" style="background-color: rgba(19,51,79,0.1); padding: 20px; border-radius: 10px">
<h3>Konfigurationsübersicht</h3>
<div class="topper">
<h4>Schranknummer:</h4>
<p id="schranknummer"></p>
</div>

<div class="abschnitt">
<h2>Kontaktinformationen</h2>
<h4>Vornme:</h4>
<p id="vorname"></p>
<h4>Nachname:</h4>
<p id="nachname"></p>
<h4>Land:</h4>
<p id="land"></p>
<h4>PLZ:</h4>
<p id="plz"></p>
<h4>Ort:</h4>
<p id="ort"></p>
<h4>E-Mail:</h4>
<p id="email"></p>
<h4>Telefon:</h4>
<p id="telefon"></p>
</div>

<div class="abschnitt">
<h2>Konfiguration</h2>
<h4>Modell:</h4>
<p id="modellnr"></p>
<h4>Farbe/Material:</h4>
<p id="farbnr"></p>
<h4>Größe:</h4>
<p id="massnr"></p>
<h4>Preis(in EUR)</h4>
<p id="preis"></p>
</div>
<a href="abschluss.html" class="btn btn-primary btn-lg btnstandard">Kaufen</a>

<button href="#" class="btn btn-primary btn-lg btnstandard" onclick="HTMLtoPDF()">Download PDF</button>
</div>
<div class="col-6">
<img id="schrank" src="Cupboard_Logo_1.jpg" style="height: 525px; border-radius: 10px; border: 0px;">
</div>



<form>

</form>

</div>

<script src="js/jspdf.js"></script>
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/pdfFromHTML.js"></script>


<script>

schranknummer = "<?php echo $_POST["schranknummer"] ?>";
vorname = "<?php echo $_POST["vorname"] ?>";
nachname = "<?php echo $_POST["nachname"] ?>";
land = "<?php echo $_POST["land"] ?>";
plz = "<?php echo $_POST["plz"] ?>";
ort = "<?php echo $_POST["ort"] ?>";
email = "<?php echo $_POST["email"] ?>";
telefon = "<?php echo $_POST["telefon"] ?>";
modellnummer = schranknummer.substring(0, 1);
farbnummer = schranknummer.substring(1, 2);
massnummer = schranknummer.substring(2, 3);

modell = ""
farb = ""
mass = ""

modellpr = ""
farbpr = ""
masspr = ""



if (modellnummer ==1){
  modell = "Wandschrank"
}
else if (modellnummer == 2){
  modell = "Nachttisch"
}
else {
   modell = "Komode"
}

if (farbnummer ==1){
  farb = "Schwarz lackiert"
}
else if (modellnummer == 2){
  farb = "Weiß lackiert"
}
else if (modellnummer == 3){
  farb = "Buchenholz"
}
else if (modellnummer == 4){
  farb = "Mahagoni"
}
else if (modellnummer == 5){
  farb = "Eichenholz"
}
else {
   farb = "Kernbuche"
}

if (massnummer ==1){
  mass = "klein"
}
else if (massnummer == 2){
  mass = "mittel"
}
else {
   mass = "groß"
}

          if(modellnummer == 1){
          modellpr =500;}
          else if(modellnummer == 2){
          modellpr =300;}
          else{
            modellpr=250
          }

          if(farbnummer == 1){
          farbpr =70;}
          else if(farbnummer == 2){
            farbpr =75;}
          else if(farbnummer == 3){
            farbpr =100;}
          else if(farbnummer == 4){
            farbpr =120;}
          else if(farbnummer == 5){
            farbpr =130;}
          else{
            farbpr=145
          }

          if(massnummer == 1){
          masspr =120;}
          else if(massnummer == 2){
          masspr =210;}
          else{
            masspr=325
          }
          preis = modellpr + farbpr + masspr

document.getElementById("modellnr").innerHTML = modell;
document.getElementById("farbnr").innerHTML = farb;
document.getElementById("massnr").innerHTML = mass;
document.getElementById("preis").innerHTML = preis;

document.getElementById("schrank").src =schranknummer+".jpg";

document.getElementById("schranknummer").innerHTML = schranknummer;
document.getElementById("vorname").innerHTML = vorname;
document.getElementById("nachname").innerHTML = nachname;
document.getElementById("land").innerHTML = land;
document.getElementById("plz").innerHTML = plz;
document.getElementById("ort").innerHTML = ort;
document.getElementById("email").innerHTML = email;
document.getElementById("modellangabe").innerHTML = telefon;







      </script>


</body>
</html>
