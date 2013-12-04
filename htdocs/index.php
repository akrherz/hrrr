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
 "composite" and 1km AGL radar reflectivity product.  Also includes categorical
 precip type fields.</li>
 <li><a href="/data/hrrr_radiation/">hrrr_radiation</a> - Long wave up at the 
 top of the atmosphere.</li>
 <li><a href="/data/hrrr_surface/">hrrr_surface</a> - Temperature and
 Dew Point at 2 meters above ground level, u and v winds at 10 meters</li>
 </ul>
 
  <H4>Changes</H4>
  <ul>
   <li><strong>4 Dec 2013</strong>: Added categorical (1 or 0) precip type to
   the reflectivity subset file.</li>
  <li><strong>8 Oct 2013</strong>: Added new variable subset of select near
   surface fields.</li>
   <li><strong>15 Aug 2013</strong>: Add variable subset of  
   longwave radiation.  Your system may not understand this variable as
   their grib table usage appears to be very new?  Anyway, look for 193 for 
   long wave.</li>
  <li><strong>12 Jul 2013</strong>: Added symlink in the hrrr_reflectivity folder
   pointing to the latest reflectivity file.  This link updates once per hour.</li>
  </ul>
 
 <H4>Frequently asked questions</H4>
 
 <p><strong>How frequently does the data update?</strong><br />
 The data files are streamed one grib message at a time via LDM, with the various
 files on the website built on-the-fly.
 
 <H4>Questions/Comments?</H4>
 
<p><a href="mailto:akrherz@iastate.edu">daryl herzmann</a> akrherz@iastate.edu
 
 </div>
 </body>
</html>