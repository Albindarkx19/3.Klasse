<?php
// standartwerte nach aufgabe
$liter1 = isset($_GET["liter1"]) ? floatval($_GET["liter1"]) : 40.5;
$liter2 = isset($_GET["liter2"]) ? floatval($_GET["liter2"]) : 35.7;
$preis  = 1.499;

// brechnung
$gesamtLiter = $liter1 + $liter2;
$kosten = $gesamtLiter * $preis;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Benzinkosten</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .box { border: 1px solid #ccc; padding: 15px; width: 350px; background: #f7f7f7; border-radius: 8px; }
        .result { margin-top: 20px; padding: 10px; background: #e3f2fd; border-left: 4px solid #2196f3; }
    </style>
</head>
<body>

<h2>Benzinberechnung</h2>

<div class="box">

    <!-- werte zum eingebe -->
    <form method="GET">
        <p>
            <label><b>Liter 1:</b></label><br>
            <input type="number" id="liter1" step="0.1" name="liter1" value="<?= $liter1 ?>">
        </p>

        <p>
            <label><b>Liter 2:</b></label><br>
            <input type="number" id="liter2" step="0.1" name="liter2" value="<?= $liter2 ?>">
        </p>

        <input type="submit" value="zurücksetzen">
    </form>

    <!-- ergebnis-->
    <div class="result">
        <b>Ergebnis (Live):</b><br>
        Gesamtmenge: <b id="liveLiter"><?= $gesamtLiter ?></b> Liter<br><br>
        Benzinkosten: <b id="liveKosten"><?= $kosten ?></b> €
    </div>

</div>


<!-- Js damit das ergenis dann geupdated wird -->
<script>
function update() {
    let l1 = parseFloat(document.getElementById("liter1").value) || 0;
    let l2 = parseFloat(document.getElementById("liter2").value) || 0;
    let preis = 1.499;

    let gesamt = l1 + l2;
    let kosten = gesamt * preis;

    document.getElementById("liveLiter").innerText = gesamt.toFixed(2);
    document.getElementById("liveKosten").innerText = kosten.toFixed(4);
}

// wenn sich was ändert wird es geupdated direkt
document.getElementById("liter1").addEventListener("input", update);
document.getElementById("liter2").addEventListener("input", update);
</script>

</body>
</html>
