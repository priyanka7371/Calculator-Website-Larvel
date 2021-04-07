<!DOCTYPE html>
<html>
<head>
	<title>Calculator Converter Website</title>
  <link rel="stylesheet" type="text/css" href="./speed/css/style.css">
  <script>
  function speedConverter(source,valNum) {
  valNum = parseFloat(valNum);
  var inputMPH = document.getElementById("inputMPH");
  var inputKPH = document.getElementById("inputKPH");
  var inputKnots = document.getElementById("inputKnots");
  var inputMach = document.getElementById("inputMach");
  if (source=="inputMPH") {
    inputKPH.value=(valNum*1.609344).toFixed(2);
    inputKnots.value=(valNum/1.150779).toFixed(2);
    inputMach.value=(valNum/761.207).toFixed(4);
  }
  if (source=="inputKPH") {
    inputMPH.value=(valNum/1.609344).toFixed(2);
    inputKnots.value=(valNum/1.852).toFixed(2);
    inputMach.value=(valNum/1225.044).toFixed(5);
  }
  if (source=="inputKnots") {
    inputMPH.value=(valNum*1.150779).toFixed(2);
    inputKPH.value=(valNum*1.852).toFixed(2);
    inputMach.value=(valNum/661.4708).toFixed(4);
  }
  if (source=="inputMach") {
    inputMPH.value=(valNum*761.207).toFixed();
    inputKPH.value=(valNum*1225.044).toFixed();
    inputKnots.value=(valNum*661.4708).toFixed();
  }
}
</script>
</head>
<body>

<ul>
  <li><a href="./index.html">Feet</a></li>
  <li><a class="active"  href="./index1.html">Speed</a></li>
  <li><a href="./index2.html">Temperature</a></li>
  <li><a href="./index3.html">Weight</a></li>
</ul>

<div class="heading">
  <h1 align="center">Calculator Conversion</h1>
  <h2 align="center">Speed Converter</h2>
</div>  

<div class="div1">
  <div class="div2">
    <label class="label1">MPH</label>
    <input id="inputMPH" class="box1" type="number" placeholder="MPH" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>

  <div class="div3">
    <label class="label2">KPH</label>
    <input id="inputKPH" class="box2" type="number" placeholder="KPH" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>

  <div class="div4">
    <label class="label3">Knots</label>
    <input id="inputKnots" class="box3" type="number" placeholder="Knots" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>

  <div class="div5">
    <label class="label4">Mach</label>
    <input id="inputMach" class="box4" type="number" placeholder="Mach" oninput="speedConverter(this.id,this.value)" onchange="speedConverter(this.id,this.value)">
  </div>
</div>

</body>
</html>