if not "%minimized%"=="" goto :minimized
set minimized=false
@echo off

cd "C:\Apache24\htdocs\untitled"

start /min cmd /C "npm run dev"
goto :EOF
:minimized