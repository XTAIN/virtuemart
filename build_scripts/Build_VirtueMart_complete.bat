@echo off
rem ----------------------------------------------------------------------------
rem Configuration
rem ----------------------------------------------------------------------------

rem ... The Version Number for the Filenames
set version="1.1.0"

rem ... The Path to your SVN Repository
set SVN_PATH="C:\downloads\Joomla\virtuemart\"

rem ... The Path to your Result Directory
set WRITE_PATH="C:\downloads\Joomla\virtuemart\"%version%

rem ... The Path to 7Zip
set zip=c:\programme\7-zip\7z.exe

rem ----------------------------------------------------------------------------
rem
rem Component Install Archive Builder
rem
rem This file is part of virtuemart
rem
rem virtuemart
rem http:\\virtuemart.net
rem
rem virtuemart is free software; you can redistribute it and\or modify
rem it under the terms of the GNU General Public License as published by
rem the Free Software Foundation; either version 2 of the License, or
rem (at your option) any later version.
rem
rem virtuemart is distributed in the hope that it will be useful,
rem but WITHOUT ANY WARRANTY; without even the implied warranty of
rem MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
rem GNU General Public License for more details.
rem
rem You should have received a copy of the GNU General Public License
rem along with eDe; if not, write to the Free Software
rem Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
rem ----------------------------------------------------------------------------
@echo on
%zip% a -ttar -r %SVN_PATH%\admin_files.tar %SVN_PATH%\classes %SVN_PATH%\html %SVN_PATH%\languages %SVN_PATH%\sql
%zip% d %SVN_PATH%\admin_files.tar languages\*.php -x!languages\english.php
%zip% d -r %SVN_PATH%\admin_files.tar .svn\
%zip% a -tgzip %SVN_PATH%\admin_files.tar.gz %SVN_PATH%\admin_files.tar 
del %SVN_PATH%\admin_files.tar

%zip% a -ttar -r %SVN_PATH%\frontend_files.tar %SVN_PATH%\js %SVN_PATH%\shop_image %SVN_PATH%\themes %SVN_PATH%\fetchscript.php %SVN_PATH%\virtuemart.php %SVN_PATH%\virtuemart_parser.php %SVN_PATH%\show_image_in_imgtag.php
%zip% a -ttar %SVN_PATH%\frontend_files.tar %SVN_PATH%\index.html
%zip% d -r %SVN_PATH%\frontend_files.tar .svn\
%zip% a -tgzip %SVN_PATH%\frontend_files.tar.gz %SVN_PATH%\frontend_files.tar 
del %SVN_PATH%\frontend_files.tar

%zip% a -ttar -r- %SVN_PATH%\com_virtuemart.tar %SVN_PATH%\*.*
%zip% d %SVN_PATH%\com_virtuemart.tar fetchscript.php virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

FOR \F "tokens=1,2,3,4 delims=\. " %%a in ('date\T') do set CDATE=%%c%%b%%a
%zip% a -tgzip %SVN_PATH%\com_virtuemart_%version%.tar.gz %SVN_PATH%\com_virtuemart.tar

del %SVN_PATH%\admin_files.tar.gz
del %SVN_PATH%\frontend_files.tar.gz
del %SVN_PATH%\com_virtuemart.tar

%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\dtree %SVN_PATH%\modules\vm_transmenu %SVN_PATH%\modules\mod_virtuemart.php %SVN_PATH%\modules\mod_virtuemart.xml %SVN_PATH%\modules\vm_dtree.php %SVN_PATH%\modules\vm_JSCookTree.php %SVN_PATH%\modules\vm_JSCook.php %SVN_PATH%\modules\vm_transmenu.php
%zip% d -r %SVN_PATH%\mod_virtuemart.tar .svn\
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar

%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_allinone.php %SVN_PATH%\modules\mod_virtuemart_allinone.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_allinone_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_cart.php %SVN_PATH%\modules\mod_virtuemart_cart.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_cart_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_currencies.php %SVN_PATH%\modules\mod_virtuemart_currencies.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_currencies_%VERSION%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_featureprod.php %SVN_PATH%\modules\mod_virtuemart_featureprod.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_featureprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_latestprod.php %SVN_PATH%\modules\mod_virtuemart_latestprod.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_latestprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_manufacturers.php %SVN_PATH%\modules\mod_virtuemart_manufacturers.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_productscroller.php %SVN_PATH%\modules\mod_productscroller.xml
%zip% a -tgzip %SVN_PATH%\mod_productscroller_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_product_categories.php %SVN_PATH%\modules\mod_product_categories.xml
%zip% a -tgzip %SVN_PATH%\mod_product_categories_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_randomprod.php %SVN_PATH%\modules\mod_virtuemart_randomprod.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_randomprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_search.php %SVN_PATH%\modules\mod_virtuemart_search.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_search_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mod_virtuemart.tar %SVN_PATH%\modules\mod_virtuemart_topten.php %SVN_PATH%\modules\mod_virtuemart_topten.xml
%zip% a -tgzip %SVN_PATH%\mod_virtuemart_topten_%version%.tar.gz %SVN_PATH%\mod_virtuemart.tar
del %SVN_PATH%\mod_virtuemart.tar

%zip% a -ttar -r %SVN_PATH%\mambot_virtuemart.tar %SVN_PATH%\mambots\mosproductsnap.php %SVN_PATH%\mambots\mosproductsnap.xml
%zip% a -tgzip %SVN_PATH%\mosproductsnap_%version%.tar.gz %SVN_PATH%\mambot_virtuemart.tar
del %SVN_PATH%\mambot_virtuemart.tar
%zip% a -ttar -r %SVN_PATH%\mambot_virtuemart.tar %SVN_PATH%\mambots\virtuemart.searchbot.php %SVN_PATH%\mambots\virtuemart.searchbot.xml
%zip% a -tgzip %SVN_PATH%\virtuemart.searchbot_%version%.tar.gz %SVN_PATH%\mambot_virtuemart.tar
del %SVN_PATH%\mambot_virtuemart.tar

%zip% a -tzip %WRITE_PATH%\VirtueMart_%version%_COMPLETE_PACKAGE.zip %SVN_PATH%\com_virtuemart_%version%.tar.gz %SVN_PATH%\mod_virtuemart_%version%.tar.gz %SVN_PATH%\mod_virtuemart_allinone_%version%.tar.gz %SVN_PATH%\mod_virtuemart_cart_%version%.tar.gz %SVN_PATH%\mod_virtuemart_currencies_%VERSION%.tar.gz %SVN_PATH%\mod_virtuemart_featureprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart_latestprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart_randomprod_%version%.tar.gz %SVN_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz %SVN_PATH%\mod_product_categories_%version%.tar.gz %SVN_PATH%\mod_productscroller_%version%.tar.gz %SVN_PATH%\mod_virtuemart_search_%version%.tar.gz %SVN_PATH%\mod_virtuemart_topten_%version%.tar.gz %SVN_PATH%\mosproductsnap_%version%.tar.gz %SVN_PATH%\virtuemart.searchbot_%version%.tar.gz %SVN_PATH%\REAMDE.php

%zip% a -ttar -r %SVN_PATH%\languages.tar %SVN_PATH%\languages
%zip% d -r %SVN_PATH%\languages.tar .svn\ languages\english.php
%zip% a -tgzip %WRITE_PATH%\Language_Pack_for_VirtueMart_%version%.tar.gz %SVN_PATH%\languages.tar 
del %SVN_PATH%\languages.tar

del %SVN_PATH%\mod_virtuemart_%version%.tar.gz
del %SVN_PATH%\com_virtuemart_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_allinone_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_cart_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_currencies_%VERSION%.tar.gz
del %SVN_PATH%\mod_virtuemart_featureprod_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_latestprod_%version%.tar.gz
del %SVN_PATH%\mod_productscroller_%version%.tar.gz
del %SVN_PATH%\mod_product_categories_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_randomprod_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_search_%version%.tar.gz
del %SVN_PATH%\mod_virtuemart_topten_%version%.tar.gz
del %SVN_PATH%\mosproductsnap_%version%.tar.gz
del %SVN_PATH%\virtuemart.searchbot_%version%.tar.gz
