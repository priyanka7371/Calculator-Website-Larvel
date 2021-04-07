<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./temprature/css/style.css">
  <script src="./temprature/script/temprature.js"></script>
</head>
<body>

<ul>
  <li><a href="./index.html">Feet</a></li>
  <li><a href="./index1.html">Speed</a></li>
  <li><a class="active"  href="./index2.html">Temperature</a></li>
  <li><a href="./index3.html">Weight</a></li>
</ul>

<div class="heading">
  <h1 align="center">Calculator Conversion</h1>
  <h2 align="center">Temperature Converter</h2>
</div>  

<div class="div1">
  <div class="div2">
    <label class="label1">Fahrenheit</label>
    <input id="inputFahrenheit" class="box1" type="number" placeholder="Fahrenheit" oninput="temperatureConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>

  <div class="div3">
    <label class="label2">Celsius</label>
    <input id="inputCelsius" class="box2" type="number" placeholder="Celsius" oninput="temperatureConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>
  
  <div class="div4">
    <label class="label3">Kelvin</label>
    <input id="inputKelvin" class="box3" type="number" placeholder="Kelvin" oninput="temperatureConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>
</div>

</body>
</html>