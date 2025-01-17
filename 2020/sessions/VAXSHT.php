<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Automatische Korrektur von ÖV-Stationen in OSM – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_VAXSHT">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Automatische Korrektur von ÖV-Stationen in OSM</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Patrick Brosi</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 16:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

                        <div class="video-container">
                <a href="https://media.ccc.de/v/fossgis2020-3183-automatische-korrektur-von-v-stationen-in-osm">
                    <img class="video-preview" src="video_previews/3183-hd.jpg" alt="Vorschaubild des Videos">
                    <div class="video-preview-overlay"></div>
                </a>
            </div>
                        <p><a href="/2020/attachments/VAXSHT_brosi_1630_7OlydO7.pdf">Vortragsfolien (PDF) </a></p>
            <p>Wir stellen ein Tool (staty) vor, das aus ÖV-Stationsdaten in OSM Tupel von Stationsnamen und -koordinaten extrahiert. Die in OSM bereits als gruppiert markierten Stationen werden als ground truth verwendet und damit ein Klassifikator trainiert, der entscheiden kann, ob zwei Name/Koordinate Tupel dieselbe Station beschreiben. Die Hauptschwierigkeit liegt darin, dass dieselben Stationen teilweis deutlich voneinander abweichende Bezeichnungen haben können (z.B. "Hbf" vs. "Freiburg im Breisgau, Hauptbahnhof"), dass z.B. Ortsnamen für die Ähnlichkeit zweier Stationen irrelevant sind, wenn sie nah beieinander liegen, oder dass die mittlere Distanz von z.B. Haltepunkten derselben Stationen abhängig ist von der Art der Stationen. Z.B. wird die mittlere paarweise Distanz zwischen Haltepunkten in einer Station "Hauptbahnhof" üblicherweise deutlich größer sein als in einer Station "Dorfstraße".</p>
<p>Wir nutzen unseren auf OSM-Daten trainierten Klassifikator, um die OSM-Daten selbst wieder zu korrigieren. Dazu führen wir ein auf den Ähnlichkeitswerten unseres Klassifikators beruhendes Clustering durch und geben die Differenz zwischen dem Clustering und der Stationsgruppierung in OSM als Editiervorschläge aus. Da unser Ansatz z.B. auch verschiedene Namen (ref_name, alt_name, name, ...) innerhalb einzelner Nodes als separate Elemente extrahiert, können auch Fehler innerhalb einzelner Nodes erkannt werden (z.B. ein nicht korrekt durch alle Namen nachgeführter Namenswechsel oder Schreibfehler).</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>