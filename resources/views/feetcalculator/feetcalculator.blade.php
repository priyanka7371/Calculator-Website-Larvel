<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./feet/css/style.css">
<script>
function lengthConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputFeet = document.getElementById("inputFeet");
  var inputMeters = document.getElementById("inputMeters");
  var inputInches = document.getElementById("inputInches");
  var inputcm = document.getElementById("inputcm");
  var inputYards = document.getElementById("inputYards");
  var inputKilometers = document.getElementById("inputKilometers");
  var inputMiles = document.getElementById("inputMiles");
  if (source=="inputFeet") {
    inputMeters.value=(valNum/3.2808).toFixed(2);
    inputInches.value=(valNum*12).toFixed(2);
    inputcm.value=(valNum/0.032808).toFixed();
    inputYards.value=(valNum*0.33333).toFixed(2);
    inputKilometers.value=(valNum/3280.8).toFixed(5);    
    inputMiles.value=(valNum*0.00018939).toFixed(5);
  }
  if (source=="inputMeters") {
    inputFeet.value=(valNum*3.2808).toFixed(2);
    inputInches.value=(valNum*39.370).toFixed(2);
    inputcm.value=(valNum/0.01).toFixed();
    inputYards.value=(valNum*1.0936).toFixed(2);
    inputKilometers.value=(valNum/1000).toFixed(5);    
    inputMiles.value=(valNum*0.00062137).toFixed(5);
  }
  if (source=="inputInches") {
    inputFeet.value=(valNum*0.083333).toFixed(3);
    inputMeters.value=(valNum/39.370).toFixed(3);
    inputcm.value=(valNum/0.39370).toFixed(2);
    inputYards.value=(valNum*0.027778).toFixed(3);    
    inputKilometers.value=(valNum/39370).toFixed(6);
    inputMiles.value=(valNum*0.000015783).toFixed(6);
  }
  if (source=="inputcm") {
    inputFeet.value=(valNum*0.032808).toFixed(3);
    inputMeters.value=(valNum/100).toFixed(3);
    inputInches.value=(valNum*0.39370).toFixed(2);
    inputYards.value=(valNum*0.010936).toFixed(3);    
    inputKilometers.value=(valNum/100000).toFixed(6);
    inputMiles.value=(valNum*0.0000062137).toFixed(6);
  }
  if (source=="inputYards") {
    inputFeet.value=(valNum*3).toFixed();
    inputMeters.value=(valNum/1.0936).toFixed(2);
    inputInches.value=(valNum*36).toFixed();
    inputcm.value=(valNum/0.010936).toFixed();
    inputKilometers.value=(valNum/1093.6).toFixed(5);
    inputMiles.value=(valNum*0.00056818).toFixed(5);
  }
  if (source=="inputKilometers") {
    inputFeet.value=(valNum*3280.8).toFixed();
    inputMeters.value=(valNum*1000).toFixed();
    inputInches.value=(valNum*39370).toFixed();
    inputcm.value=(valNum*100000).toFixed();
    inputYards.value=(valNum*1093.6).toFixed();
    inputMiles.value=(valNum*0.62137).toFixed(2);    
  }
  if (source=="inputMiles") {
    inputFeet.value=(valNum*5280).toFixed();
    inputMeters.value=(valNum/0.00062137).toFixed();
    inputInches.value=(valNum*63360).toFixed();
    inputcm.value=(valNum/0.0000062137).toFixed();
    inputYards.value=(valNum*1760).toFixed();
    inputKilometers.value=(valNum/0.62137).toFixed(2);    
  }
}  
</script>  
</head>
<body>

<ul>
  <li><a class="active" href="./index.html">Feet</a></li>
  <li><a href="./index1.html">Speed</a></li>
  <li><a href="./index2.html">Temperature</a></li>
  <li><a href="./index3.html">Weight</a></li>
</ul>


  <h1 align="center">Calculator Conversion</h1>
  <h2 align="center">Feet Converter</h2>
  
<div class="div1">
  <div class="div2">
    <label class="label1">Feet</label>
    <input id="inputFeet" class="box1" type="number" placeholder="Feet" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div3">
    <label class="label2">Meters</label>
    <input id="inputMeters" class="box2" type="number" placeholder="Meters" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div4">
    <label class="label3">Inches</label>
    <input id="inputInches" class="box3" type="number" placeholder="Inches" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div5">
    <label class="label4">Centimeters</label>
    <input id="inputcm" class="box4" type="number" placeholder="cm" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div6">
    <label class="label5">Yards</label>
    <input id="inputYards" class="box5" type="number" placeholder="Yards" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div7">
    <label class="label6">Kilometers</label>
    <input id="inputKilometers" class="box6" type="number" placeholder="Kilometers" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>

  <div class="div8">
    <label class="label7">Miles</label>
    <input id="inputMiles" class="box7" type="number" placeholder="Miles" oninput="lengthConverter(this.id,this.value)" onchange="lengthConverter(this.id,this.value)">
  </div>
</div>
</div>
</body>
</html>