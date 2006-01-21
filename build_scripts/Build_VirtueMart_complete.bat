@echo off
rem ----------------------------------------------------------------------------
rem Configuration
rem ----------------------------------------------------------------------------

rem ... The Version Number for the Filenames
set version="1.1.0"

rem ... The Path to your CVS Repository
set CVS_PATH="C:\downloads\Joomla\virtuemart\"

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
rem http://virtuemart.net
rem
rem virtuemart is free software; you can redistribute it and/or modify
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
%zip% a -ttar -r %CVS_PATH%\admin_files.tar %CVS_PATH%\classes %CVS_PATH%\html %CVS_PATH%\languages %CVS_PATH%\sql
%zip% d %CVS_PATH%\admin_files.tar languages\*.php -x!languages\english.php
%zip% d -r %CVS_PATH%\admin_files.tar CVS\
%zip% a -tgzip %CVS_PATH%\admin_files.tar.gz %CVS_PATH%\admin_files.tar 
del %CVS_PATH%\admin_files.tar

%zip% a -ttar -r %CVS_PATH%\frontend_files.tar %CVS_PATH%\js %CVS_PATH%\shop_image %CVS_PATH%\virtuemart.php %CVS_PATH%\virtuemart_parser.php %CVS_PATH%\show_image_in_imgtag.php
%zip% a -ttar %CVS_PATH%\frontend_files.tar %CVS_PATH%\index.html
%zip% d -r %CVS_PATH%\frontend_files.tar CVS\
%zip% a -tgzip %CVS_PATH%\frontend_files.tar.gz %CVS_PATH%\frontend_files.tar 
del %CVS_PATH%\frontend_files.tar

%zip% a -ttar -r- %CVS_PATH%\com_virtuemart.tar %CVS_PATH%\*.*
%zip% d %CVS_PATH%\com_virtuemart.tar virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

FOR /F "tokens=1,2,3,4 delims=/. " %%a in ('date/T') do set CDATE=%%c%%b%%a
%zip% a -tgzip %CVS_PATH%\com_virtuemart_%version%.tar.gz %CVS_PATH%\com_virtuemart.tar

del %CVS_PATH%\admin_files.tar.gz
del %CVS_PATH%\frontend_files.tar.gz
del %CVS_PATH%\com_virtuemart.tar

%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\dtree %CVS_PATH%\modules\vm_transmenu %CVS_PATH%\modules\mod_virtuemart.php %CVS_PATH%\modules\mod_virtuemart.xml %CVS_PATH%\modules\vm_dtree.php %CVS_PATH%\modules\vm_JSCookTree.php %CVS_PATH%\modules\vm_JSCook.php %CVS_PATH%\modules\vm_transmenu.php
%zip% d -r %CVS_PATH%\mod_virtuemart.tar CVS\
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar

%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_allinone.php %CVS_PATH%\modules\mod_virtuemart_allinone.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_allinone_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_cart.php %CVS_PATH%\modules\mod_virtuemart_cart.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_cart_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_featureprod.php %CVS_PATH%\modules\mod_virtuemart_featureprod.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_featureprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_latestprod.php %CVS_PATH%\modules\mod_virtuemart_latestprod.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_latestprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_manufacturers.php %CVS_PATH%\modules\mod_virtuemart_manufacturers.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_productscroller.php %CVS_PATH%\modules\mod_productscroller.xml
%zip% a -tgzip %CVS_PATH%\mod_productscroller_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_product_categories.php %CVS_PATH%\modules\mod_product_categories.xml
%zip% a -tgzip %CVS_PATH%\mod_product_categories_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_randomprod.php %CVS_PATH%\modules\mod_virtuemart_randomprod.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_randomprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_search.php %CVS_PATH%\modules\mod_virtuemart_search.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_search_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mod_virtuemart.tar %CVS_PATH%\modules\mod_virtuemart_topten.php %CVS_PATH%\modules\mod_virtuemart_topten.xml
%zip% a -tgzip %CVS_PATH%\mod_virtuemart_topten_%version%.tar.gz %CVS_PATH%\mod_virtuemart.tar
del %CVS_PATH%\mod_virtuemart.tar

%zip% a -ttar -r %CVS_PATH%\mambot_virtuemart.tar %CVS_PATH%\mambots\mosproductsnap.php %CVS_PATH%\mambots\mosproductsnap.xml
%zip% a -tgzip %CVS_PATH%\mosproductsnap_%version%.tar.gz %CVS_PATH%\mambot_virtuemart.tar
del %CVS_PATH%\mambot_virtuemart.tar
%zip% a -ttar -r %CVS_PATH%\mambot_virtuemart.tar %CVS_PATH%\mambots\virtuemart.searchbot.php %CVS_PATH%\mambots\virtuemart.searchbot.xml
%zip% a -tgzip %CVS_PATH%\virtuemart.searchbot_%version%.tar.gz %CVS_PATH%\mambot_virtuemart.tar
del %CVS_PATH%\mambot_virtuemart.tar

%zip% a -tzip %WRITE_PATH%\VirtueMart_%version%_COMPLETE_PACKAGE.zip %CVS_PATH%\com_virtuemart_%version%.tar.gz %CVS_PATH%\mod_virtuemart_%version%.tar.gz %CVS_PATH%\mod_virtuemart_allinone_%version%.tar.gz %CVS_PATH%\mod_virtuemart_cart_%version%.tar.gz %CVS_PATH%\mod_virtuemart_featureprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart_latestprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart_randomprod_%version%.tar.gz %CVS_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz %CVS_PATH%\mod_product_categories_%version%.tar.gz %CVS_PATH%\mod_productscroller_%version%.tar.gz %CVS_PATH%\mod_virtuemart_search_%version%.tar.gz %CVS_PATH%\mod_virtuemart_topten_%version%.tar.gz %CVS_PATH%\mosproductsnap_%version%.tar.gz %CVS_PATH%\virtuemart.searchbot_%version%.tar.gz %CVS_PATH%\REAMDE.php

%zip% a -ttar -r %CVS_PATH%\languages.tar %CVS_PATH%\languages
%zip% d -r %CVS_PATH%\languages.tar CVS\ languages\english.php
%zip% a -tgzip %WRITE_PATH%\Language_Pack_for_VirtueMart_%version%.tar.gz %CVS_PATH%\languages.tar 
del %CVS_PATH%\languages.tar

del %CVS_PATH%\mod_virtuemart_%version%.tar.gz
del %CVS_PATH%\com_virtuemart_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_allinone_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_cart_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_featureprod_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_latestprod_%version%.tar.gz
del %CVS_PATH%\mod_productscroller_%version%.tar.gz
del %CVS_PATH%\mod_product_categories_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_randomprod_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_manufacturers_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_search_%version%.tar.gz
del %CVS_PATH%\mod_virtuemart_topten_%version%.tar.gz
del %CVS_PATH%\mosproductsnap_%version%.tar.gz
del %CVS_PATH%\virtuemart.searchbot_%version%.tar.gz
