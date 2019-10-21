

<html>




<head>
<link rel="stylesheet" type="text/css" href="test2.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="bootstrap.js"></script>

<title>Konfiguratorbeta</title>
</head>



<body>
<div class="row" id="main">
        <nav class="navbar col-12" style="background-color: rgb(19,51,79)">
          <img src="Cupboard_Logo_sm.jpg" class=""style="height: 60px">
          <h1 class="col-4">Lieferadresse</h1>
          <a href="profile.html">Profil    <img src="profile.jpeg" id="profilepic"></a>
        </nav>
</div>
<div class="row">

<div class="col-3">
</div>

<div class="col-6" id="kontaktformular">
<h2>Kontaktinformationen</h2>






<form  action="/kundendaten2.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Konfigurationsnummer</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" readonly="readonly" name="schranknummer" value="<?php echo $_POST['seed'];?>">
    
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="vorname" placeholder="Vorname">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nachname" placeholder="Nachname">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Adresse</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="land" placeholder="Land">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="plz" placeholder="PLZ">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ort" placeholder="Ort">
    <input type="text" class="form-control" id="exampleFormControlInput1" name="strasse" placeholder="Straße">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Kontakt</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="E-Mail">
    <input type="number" class="form-control" id="exampleFormControlInput1" name="telefon" placeholder="Telefon">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Anmerkungen</label>
    <textarea class="form-control" id="" rows="3" name="anmerkungen" ></textarea>
  </div>



  <button type="submit" class="btn btn-primary btn-lg col-12 btnstandard">Weiter</button>
  


</form>

</div>

<script>
var 2 = "" ;
document.getElementById("1").innerHTML = 2;

</script>





</body>
<script>

