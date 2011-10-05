Echo Start
::cmd /e:on
SET msource=%USERPROFILE%\Coden\workspace\virtuemart1.5
SET mdest=%USERPROFILE%\Coden\workspace\VM2-AllInOnceInstaller\admin
set OLDDIR=%CD%

ECHO Plugins
ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO ECHO 
::weight_countries
SET dest=%mdest%\plugins\vmshipper\weight_countries\
CD "%dest%"
xcopy "%msource%\plugins\vmshipper\weight_countries.php"
xcopy "%msource%\plugins\vmshipper\weight_countries.xml"

::paypal
SET dest=%mdest%\plugins\vmpayment\paypal\
CD "%dest%"
xcopy "%msource%\plugins\vmpayment\paypal.php"
xcopy "%msource%\plugins\vmpayment\paypal.xml"

::standard
SET dest=%mdest%\plugins\vmpayment\standard\
CD "%dest%"
xcopy "%msource%\plugins\vmpayment\standard.php"
xcopy "%msource%\plugins\vmpayment\standard.xml"

::textinput
SET dest=%mdest%\plugins\vmcustom\textinput\
CD "%dest%"
xcopy "%msource%\plugins\vmcustom\textinput.php"
xcopy "%msource%\plugins\vmcustom\textinput.xml"

::search
SET dest=%mdest%\plugins\search\virtuemart\
CD "%dest%"
xcopy "%msource%\plugins\search\virtuemart.php"
xcopy "%msource%\plugins\search\virtuemart.xml"

::Modules
SET source=%msource%\modules
SET dest=%mdest%\modules
CD "%dest%"
xcopy "%source%" /E /Y /I

::langFE
SET source=%msource%\language\*.*
SET dest=%mdest%\languageFE\
CD "%dest%"
xcopy "%source%" /E /Y /I

::langBE
SET source=%msource%\administrator\language\*.*
SET dest=%mdest%\languageBE\
CD "%dest%"
xcopy "%source%" /E /Y /I

chdir /d "%OLDDIR%"

