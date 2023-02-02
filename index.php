<!DOCTYPE html>
<html>
<head>
<script>
function clickCounter() {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "Tlacitko si stlacil " + localStorage.clickcount + " krat.";
  }
}
</script>
</head>
<body>

<p><button onclick="clickCounter()" type="button">Klikni!</button></p>
<div id="result"></div>
<p>Click the button to see the counter increase.</p>
<p>Close the browser tab (or window), and try again, and the counter will continue to count (is not reset).</p>

</body>
</html>