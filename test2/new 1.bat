@echo off
set /p pass=Enter password :
if %pass% == admin goto :done
if not %pass% == admin goto :not

:done
cls
start C:\xampp\xampp_start.exe
timeout 5

:start
DEL new.csv
convert.vbs rfid.xls new.csv
timeout 5
start http://127.0.0.1/test2/
timeout 5
:start2
DEL new.csv
convert.vbs rfid.xls new.csv
timeout 5
goto :start2
pause
exit
:not 
echo you are not admin
pause




