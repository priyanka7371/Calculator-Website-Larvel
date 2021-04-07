<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./temprature/css/style.css">
  <script>
  function temperatureConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputFahrenheit = document.getElementById("inputFahrenheit");
  var inputCelsius = document.getElementById("inputCelsius");
  var inputKelvin = document.getElementById("inputKelvin");
  if (source=="inputFahrenheit") {
    inputCelsius.value=((valNum-32)/1.8).toFixed(2);
    inputKelvin.value=(((valNum-32)/1.8)+273.15).toFixed(2);
  }
  if (source=="inputCelsius") {
    inputFahrenheit.value=((valNum*1.8)+32).toFixed(2);
    inputKelvin.value=((valNum)+273.15).toFixed(2);
  }
  if (source=="inputKelvin") {
    inputFahrenheit.value=(((valNum-273.15)*1.8)+32).toFixed(2);
    inputCelsius.value=((valNum)-273.15).toFixed(2);
  }
}
  </script>
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