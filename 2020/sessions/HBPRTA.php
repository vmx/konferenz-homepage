<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>OpenStreetMap-Tileserver mit Tirex – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/donnerstag.php#session_HBPRTA">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>OpenStreetMap-Tileserver mit Tirex</h2>
        <section>
            <p>
                                <span class='abstract-speakers'>Frederik Ramm</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Donnerstag 12. März 11:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Weismannhaus</p>

                        <div class="video-container">
                <a href="https://media.ccc.de/v/fossgis2020-4711-openstreetmap-tileserver-mit-tirex">
                    <img class="video-preview" src="video_previews/4711-hd.jpg" alt="Vorschaubild des Videos">
                    <div class="video-preview-overlay"></div>
                </a>
            </div>
                        <p><a href="/2020/attachments/HBPRTA_tirex--fred_macht_das_selbst_qDpJOaa.pdf">Vortragsfolien (PDF) </a></p>
            <p>Der klassische OpenStreetMap-Raster-Tileserver wird mit den Komponenten Mapnik, PostGIS, Apache/mod_tile und "renderd" aufgebaut. Der "renderd" übernimmt dabei die Aufgabe, fehlende Tiles in eine Warteschlange zu stellen und von Mapnik berechnen zu lassen. In diesem Vortrag wird "Tirex" demonstriert, eine leistungsfähigere und vielseitigere Alternative zu "renderd". "Tirex" wird weltweit auf Tile-Servern eingesetzt, darunter auch auf dem vom FOSSGIS betriebenen Tile-Server von openstreetmap.de; doch obwohl Tirex in diesem Jahr 10 Jahre alt wird, ist die Software immer noch eine Art Geheimtipp im Schatten des weiter verbreiteten "renderd".</p>
<p>Nach einer kurzen Vorstellung von Tirex wird live die Einrichtung eines OSM-Tileservers mit Tirex demonstriert.</p>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>