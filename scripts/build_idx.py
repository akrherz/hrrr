"""
Build wgrib2 index files for anything new we find in the data folders
"""
import datetime
import subprocess
import os
import glob

def run():
    """ Do something """
    os.chdir("/chinook/ldm/data/hrrr")
    utc = datetime.datetime.utcnow()
    for hr in range(12):
        now = utc - datetime.timedelta(hours=hr)
        dirname = now.strftime("%Y%m%d%H00")
        if not os.path.isdir(dirname):
            continue
        os.chdir(dirname)
        for filename in glob.glob("*.grib2"):
            if os.path.isfile("%s.idx" % (filename,)):
                # Compare timestamps to see if it is necessary to process
                if os.path.getmtime(filename) < os.path.getmtime("%s.idx" % (
                                                            filename,)):
                    continue
            subprocess.call("wgrib2 %s > %s.idx.tmp" % (filename, filename),
                            shell=True)
            os.rename(filename+".idx.tmp", filename+".idx")
        
        os.chdir("..")
    
    
if __name__ == '__main__':
    run()