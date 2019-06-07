@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\KIMERA_RL\RED_LOCAL\xampp\hypersonic\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\ingres\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\ingres\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\mysql\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\mysql\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\postgresql\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\postgresql\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\apache\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\apache\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\openoffice\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\openoffice\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\apache-tomcat\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\resin\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\resin\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\jboss\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\jboss\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\jetty\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\jetty\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\subversion\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\KIMERA_RL\RED_LOCAL\xampp\lucene\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\lucene\scripts\ctl.bat START)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\third_application\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\KIMERA_RL\RED_LOCAL\xampp\third_application\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\third_application\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\lucene\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\KIMERA_RL\RED_LOCAL\xampp\subversion\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\subversion\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\jetty\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\jetty\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\hypersonic\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\jboss\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\jboss\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\resin\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\resin\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\KIMERA_RL\RED_LOCAL\xampp\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\openoffice\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\openoffice\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\apache\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\apache\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\ingres\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\ingres\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\mysql\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\mysql\scripts\ctl.bat STOP)
if exist C:\KIMERA_RL\RED_LOCAL\xampp\postgresql\scripts\ctl.bat (start /MIN /B C:\KIMERA_RL\RED_LOCAL\xampp\postgresql\scripts\ctl.bat STOP)

:end

