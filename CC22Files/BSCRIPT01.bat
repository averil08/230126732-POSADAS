echo off
rem Open five websites
start "" "https://www.google.com"
start "" "https://uc-bcf.instructure.com"
start "" "https://messenger.com"
start "" "https://leonardreyes.notion.site"
start "" "https://mystudentportal.uc-bcf.edu.ph"

rem Launch calcu
start calc.exe

rem Launch notepad
start notepad.exe

rem Intiate system shutdown 
shutdown /s /t 60

rem Pause for user to see message before the actual shutting down
echo System shutdown in 60 seconds. Press any key to stop.
Pause
shutdown /a