<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Übung 2 - Aufgabe 1</title>
    <link   rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>


<body>
<div class="container-fluid">
    <div  class="jumbotron">
        <h1 align="center">Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </div>

    <div class="row">
        <div class="col-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="link active" href="#">Login</a>
                </li>
                <li class="list-group-item">
                    <a class="link active" href="#">Projekte</a>
                </li>
                <li class="list-group-item">
                    <a class="link active" href="#">Aktuelles Projekt</a>
                </li>
                <li class="list-group-item ml-4">
                    <a class="link active" href="#">Reiter</a>
                </li>
                <li class="list-group-item ml-4">
                    <a class="link active" href="#">Aufgaben</a>
                </li>
                <li class="list-group-item ml-4">
                    <a class="link active" href="#">Mitarbeiter</a>
                </li>
            </ul>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    ToDo
                </div>
            <ul class="list-group">
                <li class="list-group-item">
                    HTML-Datei erstellen (Max Mustermann)
                </li>
                <li class="list-group-item">
                    CSS-Datei erstellen (Max Mustermann)
                </li>
            </ul>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <div class="card-header">
                Erledigt
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    PC eingeschaltet (Petra Müller)
                </li>
                <li class="list-group-item">
                    Kaffee trinken (Petra Müller)
                </li>
            </ul>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <div class="card-header">
                Verschoben
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    Für die Uni lernen (Max Mustermann)
                </li>
            </ul>
            </div>
        </div>



    </div>
</div>


</body>
</html>