<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./feet/css/style.css">
  <script src="./feet/script/feet.js"></script>
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