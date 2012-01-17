
Echo Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START Start START

SET msource=%USERPROFILE%\Coden\workspace\VM2_j17
SET aiodest=%USERPROFILE%\Coden\workspace\VM2-AllInOnceInstaller
SET mdest=%USERPROFILE%\Coden\workspace\VM2-AllInOnceInstaller\admin
set OLDDIR=%CD%

xcopy "%aiodest%\script.vmallinone.php" "%mdest%\script.vmallinone.php" /Y

ECHO Plugins 
xcopy %msource%\plugins\vmshipment %mdest%\plugins\vmshipment /Y /T /E /S

xcopy %msource%\plugins\vmpayment %mdest%\plugins\vmpayment /Y /T /E /S

xcopy %msource%\plugins\vmcustom %mdest%\plugins\vmcustom /Y /T /E /S

xcopy %msource%\plugins\search\virtuemart %mdest%\plugins\search\virtuemart /Y /T /E /S

ECHO Modules
xcopy %msource%\modules %mdest%\modules /Y /T /E /S

ECHO Languages
xcopy %msource%\language %mdest%\languageFE /Y /T /E /S

xcopy %msource%\administrator\language %mdest%\languageBE /Y /T /E /S

