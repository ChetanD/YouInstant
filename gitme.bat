@echo off
git add .
git commit -am "changed greeting"
git push heroku master
if %ERRORLEVEL% EQU 0 echo OK

  