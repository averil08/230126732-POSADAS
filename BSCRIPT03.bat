@echo off
rem This batch file enables the user to select and execute fundamental Windows utilities
rem Passed by: Posadas, Averil Roshan F. Posadas

:menu
cls
echo Choose a Windows utility to execute:
echo 1: ipconfig
echo 2: tasklist
echo 3: taskkill
echo 4: chkdsk
echo 5: format
echo 6: defrag
echo 7: find
echo 8: attrib
echo 9: Exit
choice /c 123456789 /m "Enter chosen number: "

if errorlevel 9 goto end
if errorlevel 8 goto attrib
if errorlevel 7 goto find
if errorlevel 6 goto defrag
if errorlevel 5 goto format
if errorlevel 4 goto chkdsk
if errorlevel 3 goto taskkill
if errorlevel 2 goto tasklist
if errorlevel 1 goto ipconfig

:ipconfig
cls
echo Running ipconfig...
ipconfig
pause
goto menu

:tasklist
cls
echo Running tasklist...
tasklist
pause
goto menu

:taskkill
cls
set /p pid="Enter the PID of the process to kill: "
if "%pid%"=="" (
    echo PID cannot be empty.
    pause
    goto menu
)
taskkill /PID %pid%
if errorlevel 1 (
    echo Failed to kill process with PID %pid%.
) else (
    echo Process with PID %pid% killed successfully.
)
pause
goto menu

:chkdsk
cls
set /p drive="Enter the drive letter to check (e.g., C:): "
if "%drive%"=="" (
    echo Drive letter cannot be empty.
    pause
    goto menu
)
chkdsk %drive%
pause
goto menu

:format
cls
set /p drive="Enter the drive letter to format (e.g., E:): "
if "%drive%"=="" (
    echo Drive letter cannot be empty.
    pause
    goto menu
)
echo WARNING: Formatting will erase all data on %drive%
pause
format %drive%
pause
goto menu

:defrag
cls
set /p drive="Enter the drive letter to defragment (e.g., C:): "
if "%drive%"=="" (
    echo Drive letter cannot be empty.
    pause
    goto menu
)
defrag %drive%
pause
goto menu

:find
cls
set /p search="Enter the string to find: "
set /p file="Enter the file to search in: "
if "%search%"=="" (
    echo Search string cannot be empty.
    pause
    goto menu
)
if "%file%"=="" (
    echo File cannot be empty.
    pause
    goto menu
)
find "%search%" "%file%"
pause
goto menu

:attrib
cls
set /p file="Enter the file or directory to change attributes: "
if "%file%"=="" (
    echo File or directory cannot be empty.
    pause
    goto menu
)
set /p attrs="Enter the attributes to set (e.g., +r -h): "
if "%attrs%"=="" (
    echo Attributes cannot be empty.
    pause
    goto menu
)
attrib %attrs% "%file%"
pause
goto menu

:end
echo Exiting script.
pause
goto :eof