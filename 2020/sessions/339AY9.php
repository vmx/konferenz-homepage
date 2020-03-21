<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>Einführung zu GDAL/OGR: Geodaten mit der Kommandozeile verarbeiten – FOSSGIS 2020</title>

	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="programm">
	<?php include "../inc/header.inc"; ?>

        <!-- This file was generated by a script. Do not edit this file in Git,
             edit contents in Pretalx, regenerate the PHP files and commit them
             in the Git repository of the website. -->
        <p><a href="programm/mittwoch.php#session_339AY9">&#9668;&#9668; zurück zum Programm</a> </p>
        <h2 class='abstract-title'>Einführung zu GDAL/OGR: Geodaten mit der Kommandozeile verarbeiten</h2>
        <section>
            <p>
                <span class='abstract-sessiontype'>Demo-Session</span> von                <span class='abstract-speakers'>Jakob Miksch</span></p>
                            <p><span class='abstract-time-heading'>Zeit: </span>Mittwoch 11. März 17:30 Uhr<br><span class='abstract-room-heading'>Ort: </span>HS Anatomie</p>

                        
            <p><strong>GDAL/OGR</strong> ist eine Programm-Bibliothek die verschiedene <a href="https://gdal.org/drivers/vector/index.html">Vektor-</a> und <a href="https://gdal.org/drivers/raster/index.html">Rasterformate</a> lesen und schreiben kann. Sie ist in C/C++ geschrieben, allerdings kann man auch mit anderen Programmiersprachen wie Python oder R darauf zugreifen. Es gibt zahlreiche Programme für die <strong>Kommandozeile</strong> die in diesem Vortrag vorgestellt werden. Behandelt werden unter anderem folgende Themen:</p>
<ul>
<li>Virtuelle Raster erstellen mit <a href="https://gdal.org/programs/gdalbuildvrt.html">gdalbuildvrt</a></li>
<li>Raster Pyramiden bauen mit <a href="https://gdal.org/programs/gdaladdo.html">gdaladdo</a></li>
<li>Raster umprojezieren mit <a href="https://gdal.org/programs/gdalwarp.html">gdalwarp</a></li>
<li>Kacheln erzeugen mit <a href="https://gdal.org/programs/gdal2tiles.html">gdal2tiles.py</a></li>
<li>Informationen über Vektordaten erhalten mit <a href="https://gdal.org/programs/ogrinfo.html">ogrinfo</a></li>
<li>Vektordaten konvertieren und umprojezieren mit <a href="https://gdal.org/programs/ogr2ogr.html#ogr2ogr">ogr2ogr</a></li>
<li>Vorstellung von wichtigen Treibern wie CSV, PostGIS, GeoPackage, GPX</li>
<li>Überblick über fortgeschrittene Funktionen wie SQL, räumliche Begrenzung oder Filterung </li>
</ul>
<h5>Links</h5>
<ul>
<li><a href="https://jakobmiksch.eu/de/post/gdal_ogr/">Blogeintrag über GDAL/OGR</a> von Jakob Miksch</li>
<li><a href="https://av.tib.eu/media/43047">Vortrag</a> von Jakob Miksch auf der AGIT 2019</li>
<li><a href="https://gdal.org/">Website</a> von GDAL/OGR</li>
</ul>
        <div class='abstract-bio'>
            <h3 class='abstract-bio-name'>Jakob Miksch</h3>
            <p>Wissenschaftlicher Mitarbeiter im <a href="https://giscience.zgis.at/">GIScience Lab</a>, Fachbereich für Geoinformatik - Z_GIS,  Universität Salzburg.</p>
<ul>
<li>Website: <a href="https://jakobmiksch.eu/de/">jakobmiksch.eu</a></li>
<li>Twitter: <a href="https://twitter.com/JakobMiksch">@JakobMiksch</a></li>
<li>GitHub: <a href="https://github.com/jakobmiksch/">@JakobMiksch</a></li>
</ul>
        </div>
        </section>


	<?php include "../inc/footer.inc"; ?>

</body>

</html>