"""
Make a sym link 
"""
import datetime
import os
import sys

def do_var(prefix):
    os.chdir("/chinook/ldm/data/hrrr_%s" % (prefix,))
    
    utcnow = datetime.datetime.utcnow()
    for hr in range(0,5):
        utcnow -= datetime.timedelta(hours=1)
        fn = utcnow.strftime("hrrr."+ prefix[:3] +".%Y%m%d%H00.grib2")
        if os.path.isfile(fn):
            if os.path.isfile("hrrr."+ prefix[:3] +".current.grib2"):
                os.unlink("hrrr."+ prefix[:3] +".current.grib2")
            os.symlink(fn, "hrrr."+ prefix[:3] +".current.grib2")
            return
            
for prefix in ['reflectivity', 'radiation']:
    do_var(prefix)