<html>
<head>
	<title>HRRR Grib2 Data</title>
</head>
<body>
<div style="width: 800px;">
<h3>High Resolution Rapid Refresh (HRRR) Grib2 Data</h3>

<p>This website contains a feed of Grib2 data from the 
<a href="http://ruc.noaa.gov/hrrr/">HRRR</a> model.  There is absolutely no
 warranty provided with this data service and it may discontinued as the situation
 warrants.

 <p>Here's the <a href="/data/">grib data!</a>

 <H4>Sub-sampled Grib Files</H4>
 
 <p>The HRRR grib files are <strong>huge</strong>!  So we are generating files
 with a sub-sampling of variables included inside.  These files can be found
 in the directory and are described as:<br />
 <ul>
 <li><a href="/data/hrrr_reflectivity/">hrrr_reflectivity</a> - 15 minute
 "composite" and 1km AGL radar reflectivity product.</li>
 </ul>
 
 
 <H4>Frequently asked questions</H4>
 
 <p><strong>How frequently does the data update?</strong><br />
 The data files are streamed one grib message at a time via LDM, with the various
 files on the website built on-the-fly.
 
 </div>
 </body>
</html>