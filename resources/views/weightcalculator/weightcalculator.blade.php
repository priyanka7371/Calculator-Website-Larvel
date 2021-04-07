<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./weight/css/style.css">
  <script>
  function weightConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputPounds = document.getElementById("inputPounds");
  var inputKilograms = document.getElementById("inputKilograms");
  var inputOunces = document.getElementById("inputOunces");
  var inputGrams = document.getElementById("inputGrams");
  var inputStones = document.getElementById("inputStones");
  if (source=="inputPounds") {
    inputKilograms.value=(valNum/2.2046).toFixed(2);
    inputOunces.value=(valNum*16).toFixed(2);
    inputGrams.value=(valNum/0.0022046).toFixed();
    inputStones.value=(valNum*0.071429).toFixed(3);
  }
  if (source=="inputKilograms") {
    inputPounds.value=(valNum*2.2046).toFixed(2);
    inputOunces.value=(valNum*35.274).toFixed(2);
    inputGrams.value=(valNum*1000).toFixed();
    inputStones.value=(valNum*0.1574).toFixed(3);
  }
  if (source=="inputOunces") {
    inputPounds.value=(valNum*0.062500).toFixed(4);
    inputKilograms.value=(valNum/35.274).toFixed(4);
    inputGrams.value=(valNum/0.035274).toFixed(1);
    inputStones.value=(valNum*0.0044643).toFixed(4);
  }
  if (source=="inputGrams") {
    inputPounds.value=(valNum*0.0022046).toFixed(4);
    inputKilograms.value=(valNum/1000).toFixed(4);
    inputOunces.value=(valNum*0.035274).toFixed(3);
    inputStones.value=(valNum*0.00015747).toFixed(5);
  }
  if (source=="inputStones") {
    inputPounds.value=(valNum*14).toFixed(1);
    inputKilograms.value=(valNum/0.15747).toFixed(1);
    inputOunces.value=(valNum*224).toFixed();
    inputGrams.value=(valNum/0.00015747).toFixed();
  }

}
  </script>
</head>
<body>

<ul>
  <li><a href="./index.html">Feet</a></li>
  <li><a href="./index1.html">Speed</a></li>
  <li><a href="./index2.html">Temperature</a></li>
  <li><a class="active" href="./index3.html">Weight</a></li>
</ul>

<div class="heading">
  <h1 align="center">Calculator Conversion</h1>
  <h2 align="center">Weight Converter</h2>
</div>  

<div class="div1">
  <div class="div2">
    <label class="label1">Pounds</label>
    <input id="inputPounds" class="box1" type="number" placeholder="Pounds" oninput="weightConverter(this.id,this.value)" onchange="weightConverter(this.id,this.value)">
  </div>

  <div class="div3">
    <label class="label2">Kilograms</label>
    <input id="inputKilograms" class="box2" type="number" placeholder="Kilograms" oninput="weightConverter(this.id,this.value)" onchange="weightConverter(this.id,this.value)">
  </div>

  <div class="div4">
    <label class="label3">Ounces</label>
    <input id="inputOunces" class="box3" type="number" placeholder="Ounces" oninput="weightConverter(this.id,this.value)" onchange="weightConverter(this.id,this.value)">
  </div>

  <div class="div5">
    <label class="label4">Grams</label>
    <input id="inputGrams" class="box4" type="number" placeholder="Grams" oninput="weightConverter(this.id,this.value)" onchange="weightConverter(this.id,this.value)">
  </div>
    <div class="div6">
    <label class="label5">Stones</label>
    <input id="inputStones" class="box5" type="number" placeholder="Stones" oninput="weightConverter(this.id,this.value)" onchange="weightConverter(this.id,this.value)">
      </div>
</div>

</body>
</html>