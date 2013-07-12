"""
Make a sym link 
"""
import datetime
import os
import sys
os.chdir("/chinook/ldm/data/hrrr_reflectivity")

utcnow = datetime.datetime.utcnow()
for hr in range(0,5):
    utcnow -= datetime.timedelta(hours=1)
    fn = utcnow.strftime("hrrr.ref.%Y%m%d%H00.grib2")
    if os.path.isfile(fn):
        if os.path.isfile("hrrr.ref.current.grib2"):
            os.unlink("hrrr.ref.current.grib2")
        os.symlink(fn, "hrrr.ref.current.grib2")
        sys.exit()