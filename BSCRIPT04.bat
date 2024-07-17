@echo off

rem Sorting text files by date...
dir /s /b /od /tc C:\*.txt > sorted_files.txt

REM Archive older files to a folder on Drive Z:
echo Archiving older files to a folder on Drive Z:...
robocopy C:\ Z:\Archive /s /maxage:30 /mov

REM Sort the archived files by size
echo Sorting the archived files by size...
cd /d Z:\Archive
dir /b /os > sorted_archived_files.txt

rem Prompting user for permission to delete old, large files...
setlocal enabledelayedexpansion
for /f "tokens=*" %%A in (sorted_archived_files.txt) do (
    set "file=%%A"
    echo %%A
    set /p delete=Do you want to delete !file!? (Y/N): 
    if "!delete!"=="Y" (
        echo Yes chosen
        del "!file!" 
    ) else if "!delete!"=="N" (
        echo No chosen
    ) else (
        echo Invalid choice
    )
)
endlocal

pause