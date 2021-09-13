<?php
require "settings/init.php";

if (!empty($_POST["data"])){
    $data = $_POST["data"];

    $sgl = "INSERT INTO produkter (prodNavn, prodBeskrivelse, prodPris) VALUES (:prodNavn, :prodBeskrivelse, :prodPris)";
    $bind = [":prodNavn" => $data["prodNavn"], ":prodNavn" => $data["prodNavn"]];

    $db ->sql();


}


?>




<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Indsæt til Database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

    <form method="post" action="insert.php">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodNavn">Produkt Navn</label>
                    <input class="form-control" type="text" name="data[prodNavn]" id="prodNavn" placeholder="Produkt Navn" value="">
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="prodPris">Produkt Pris</label>
                    <input class="form-control" type="number" step="0.1" name="data[prodPris]" id="prodPris" placeholder="Produkt Pris" value="">
                </div>
            </div>

            <div class="col-12">
                <div class="form-group"
                    <label for="prodBeskrivelse">Produkt Beskrivelse</label>
                    <textarea class="form-control"  name="data[prodBeskrivelse]" id="prodBeskrivelse" placeholder="Produkt Beskrivelse"></textarea>
                </div>
            </div>

            <div class="col-12 col-md-6 offset-md-6">
                <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Opret Produkt</button>
            </div>



    </form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>

</body>
</html>
