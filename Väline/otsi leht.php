<?php
$search_output = "";
if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
    // run code if condition meets here
}
?>
<html>
<head>
    <link rel='stylesheet' href='style.css'/>
    <script src='script.js'></script>
</head>
<body>
<left>
    <h1 style="color: #000000; font-size: 15px">Keretüüp</h1>
    <form action="./results.php" method="get">
        <input type="text" name="input" size="5">

    </form>

    <h1 style="color: #000000; font-size: 15px">Mark</h1>>
    <form action="./results.php" method="get">
        <input type="text" name="input" size="5">

    </form>

    </form>

    <h1 style="color: #000000; font-size: 15px">Mudel</h1>>
    <form action="./results.php" method="get">
        <input type="text" name="input" size="5">

    </form>

    <h1 style="color: #000000; font-size: 15px">Aasta</h1>>
    <form action="./results.php" method="get">
        <input type="text" name="input" size="5">

    </form>
    <input type="submit" value="Otsi"/>
</left>

</body>
</html>