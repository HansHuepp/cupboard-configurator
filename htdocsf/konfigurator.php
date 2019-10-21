

<html>




<head>
<link rel="stylesheet" type="text/css" href="test2.css">
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="bootstrap.js"></script>

<title>Konfigurator</title>
</head>

<div id="HTMLtoPDF">

  <body>
  <div class="row" id="main">
        <nav class="navbar col-12" style="background-color: rgb(19,51,79)">
          <img src="Cupboard_Logo_sm.jpg" style="height: 60px">
          <h1 class="col-4">Konfigurator</h1>
          <a href="profile.html">Profil    <img src="profile.jpeg" id="profilepic"></a>
        </nav>
  </div>

<div class="row" id="row2">
<div class="col-4" id="modelldiv">

  <label class="col-12">Modell
   <select onchange="create()" class="form-control" id="modell">
      <option value="1">Wandschrank</option>
      <option value="2">Nachttisch</option>
    </select>
  </label>

  <label class="col-12">Farbe
      <select class="form-control" id="farbe" onchange="create()">
        <option value="1">Schwarz lackiert</option>
        <option value="2">Weiß lackiert</option>
        <option value="3">Buchenholz</option>
        <option value="4">Mahagoni</option>
        <option value="5">Eichenholz</option>
        <option value="6">Kernbuche</option>
      </select>
    </label>

    <div class= "col-12">
                <label>Größe

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Breite </span>
                        </div>
                      <input type="input" id="breite" name="size"class="form-control" placeholder="Breite in cm" onchange="create()">
                        <div class="input-group-append">
                          <span class="input-group-text">cm</span>
                        </div>
                      </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Tiefe  </span>
                  </div>
                <input type="input" id="tiefe" name="size" class="form-control" placeholder="Tiefe in cm" onchange="create()">
                  <div class="input-group-append">
                    <span class="input-group-text">cm</span>
                  </div>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Höhe </span>
                  </div>
                <input type="input" id="höhe" name="size" class="form-control" placeholder="Höhe in cm" onchange="create()">
                  <div class="input-group-append">
                    <span class="input-group-text">cm</span>
                  </div>
                </div>


                </label>
      </div>
      <label class="col-12">Extras
         <select onchange="create()" class="form-control" id="extra">
            <option value="0">Ohne</option>
          </select>
      </label>

      <label for="exampleFormControlTextarea1" class="col-12">Anmerkungen
            <textarea class="form-control" id="" rows="3"></textarea>
      </label>


        </div>

        <div class="col-6.5" id="bild">

          <div class="box">
            <h3 style="font-size: 1.3em;">Preis:</h3>
            <p id="modellangabe"></p>
            <p id="farbangabe"></p>
            <p id="massangabe"></p>
            <h3 style="font-size: 1.3em;">Gesamt:</h3>
            <p style="font-weight: bold;" id="pr"></p>
            <h3 style="font-size: 1.3em;">Nummer:</h3>
            <p id="seednr" ></p>



          </div>

        <img id="schrank" src="Cupboard_Logo_1.jpg">

      </div>

</div>
<form  action="/kundendaten1.php" method="post">


        <input class="btn btn-primary btn-lg col-4 btnstandard" type="submit" name="submit" value="Weiter" style="margin-left: 30px; "/>
        <input class="form-control " type="hidden" name="seed" id="seedvalue" value="" /><br />
</form>
</div>



      <script>
      var modellnr;
      var farbnr;
      var extranr;

      var modellpr = 1;
      var farbpr = 0;
      var extrapr = 0;
      var sizepr = 0;

      var sizenr;
      var höhe;
      var breite;
      var tiefe;


      function create() {


        modellnr = document.getElementById("modell").value;
        farbnr = document.getElementById("farbe").value;
        extranr = document.getElementById("extra").value;

        sizenr = 1;
        höhe = document.getElementById("höhe").value;
        breite = document.getElementById("breite").value;
        tiefe = document.getElementById("tiefe").value;

        if(breite < 120){
          sizenr = 1;
        }else if(breite < 240){
          sizenr = 2;
        }else{
          sizenr = 3;
        }

        if(modellnr == 1){
          modellpr =500;}
          else if(modellnr == 2){
          modellpr =300;}
          else{
            modellpr=250
          }

          if(farbnr == 1){
          farbpr =70;}
          else if(farbnr == 2){
            farbpr =75;}
          else if(farbnr == 3){
            farbpr =100;}
          else if(farbnr == 4){
            farbpr =120;}
          else if(farbnr == 5){
            farbpr =130;}
          else{
            farbpr=145
          }

          if(sizenr == 1){
          sizepr =120;}
          else if(sizenr == 2){
          sizepr =210;}
          else{
            sizepr=325
          }

        document.getElementById("schrank").src = modellnr+farbnr+sizenr+extranr+".jpg";

        document.getElementById("modellangabe").innerHTML = "Modell: +"+modellpr;
        document.getElementById("farbangabe").innerHTML = "Farbe: +"+farbpr;
        document.getElementById("massangabe").innerHTML = "Maße: +"+sizepr;
        document.getElementById("pr").innerHTML = modellpr+farbpr+sizepr;
        document.getElementById("seednr").innerHTML = modellnr+farbnr+sizenr+extranr;

        document.getElementById("seedvalue").value = modellnr+farbnr+sizenr+extranr;

        document.getElementById("modellnr").innerHTML = modellnr;
        document.getElementById("farbnr").innerHTML = farbnr;
        document.getElementById("sizenr").innerHTML = sizenr;
        document.getElementById("extranr").innerHTML = extranr;



        }




      </script>





</body>
</html>
