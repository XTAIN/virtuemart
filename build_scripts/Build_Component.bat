@echo off
rem ----------------------------------------------------------------------------
rem Configuration
rem ----------------------------------------------------------------------------

rem ... The Path to your SVN Repository
set SVN_PATH="C:\vm\virtuemart"

rem YOU MUST HAVE INSTALLED THE 4.x BETA VERSION OF 7-ZIP.
rem ... The Path to 7Zip
set zip=C:\Programmi\7za.exe

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

%zip% a -ttar -r %SVN_PATH%\admin_files.tar %SVN_PATH%\classes %SVN_PATH%\html %SVN_PATH%\languages %SVN_PATH%\sql
%zip% d %SVN_PATH%\admin_files.tar languages\account\*.php -x!languages\account\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\admin\*.php -x!languages\admin\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\affiliate\*.php -x!languages\affiliate\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\checkout\*.php -x!languages\checkout\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\common\*.php -x!languages\common\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\coupon\*.php -x!languages\coupon\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\help\*.php -x!languages\help\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\manufacturer\*.php -x!languages\manufacturer\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\msgs\*.php -x!languages\msgs\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\order\*.php -x!languages\order\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\product\*.php -x!languages\product\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\reportbasic\*.php -x!languages\reportbasic\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\shipping\*.php -x!languages\shipping\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\shop\*.php -x!languages\shop\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\shopper\*.php -x!languages\shopper\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\store\*.php -x!languages\store\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\tax\*.php -x!languages\tax\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\vendor\*.php -x!languages\vendor\english.php
%zip% d %SVN_PATH%\admin_files.tar languages\zone\*.php -x!languages\zone\english.php
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

FOR /F "tokens=1,2,3,4 delims=/. " %%a in ('date/T') do set CDATE=%%c%%b%%a
%zip% a -tgzip %SVN_PATH%\com_virtuemart_%CDATE%.tar.gz %SVN_PATH%\com_virtuemart.tar

del %SVN_PATH%\admin_files.tar.gz
del %SVN_PATH%\frontend_files.tar.gz
del %SVN_PATH%\com_virtuemart.tar
