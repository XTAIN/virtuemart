Echo Start
::cmd /e:on
SET msource=%USERPROFILE%\Coden\workspace\virtuemart1.5

SET aiodest=%USERPROFILE%\Coden\workspace\VM2-AllInOnceInstaller
SET mdest=%USERPROFILE%\Coden\workspace\VM2-AllInOnceInstaller\admin
set OLDDIR=%CD%

Echo Installer Script
SET dest=%mdest%\
CD "%dest%"
xcopy "%aiodest%\script.vmallinone.php"

ECHO Plugins
::weight_countries
SET dest=%mdest%\plugins\vmshipment\weight_countries\
CD "%dest%"
xcopy "%msource%\plugins\vmshipment\weight_countries.php"
xcopy "%msource%\plugins\vmshipment\weight_countries.xml"

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

::textinput
SET dest=%mdest%\plugins\vmcustom\stockable\
CD "%dest%"
xcopy "%msource%\plugins\vmcustom\stockable.php"
xcopy "%msource%\plugins\vmcustom\stockable.xml"

::specification
SET dest=%mdest%\plugins\vmcustom\specification\
CD "%dest%"
xcopy "%msource%\plugins\vmcustom\specification.php"
xcopy "%msource%\plugins\vmcustom\specification.xml"

::search
SET dest=%mdest%\plugins\search\virtuemart\
CD "%dest%"
xcopy "%msource%\plugins\search\virtuemart.php"
xcopy "%msource%\plugins\search\virtuemart.xml"

::Modules
SET source=%msource%\modules
SET dest=%mdest%\modules
CD "%dest%"
xcopy "%source%" /E /Y /I /EXCLUDE:%OLDDIR%\filefilter.txt

::langFE
SET source=%msource%\language\*.*
SET dest=%mdest%\languageFE\
CD "%dest%"
xcopy "%source%" /E /Y /I /EXCLUDE:%OLDDIR%\filefilter.txt

::langBE
SET source=%msource%\administrator\language\*.*
SET dest=%mdest%\languageBE\
CD "%dest%"
xcopy "%source%" /E /Y /I /EXCLUDE:%OLDDIR%\filefilter.txt

chdir /d "%OLDDIR%"

