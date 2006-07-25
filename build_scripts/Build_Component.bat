@echo off
rem ----------------------------------------------------------------------------
rem Configuration
rem ----------------------------------------------------------------------------

rem ... The Path to your CVS Repository
set CVS_PATH="C:\downloads\Joomla\virtuemart\"

rem YOU MUST HAVE INSTALLED THE 4.x BETA VERSION OF 7-ZIP.
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

%zip% a -ttar -r %CVS_PATH%\frontend_files.tar %CVS_PATH%\js %CVS_PATH%\shop_image %CVS_PATH%\themes %CVS_PATH%\virtuemart.php %CVS_PATH%\virtuemart_parser.php %CVS_PATH%\show_image_in_imgtag.php
%zip% a -ttar %CVS_PATH%\frontend_files.tar %CVS_PATH%\index.html
%zip% d -r %CVS_PATH%\frontend_files.tar CVS\
%zip% a -tgzip %CVS_PATH%\frontend_files.tar.gz %CVS_PATH%\frontend_files.tar 
del %CVS_PATH%\frontend_files.tar

%zip% a -ttar -r- %CVS_PATH%\com_virtuemart.tar %CVS_PATH%\*.*
%zip% d %CVS_PATH%\com_virtuemart.tar virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

FOR /F "tokens=1,2,3,4 delims=/. " %%a in ('date/T') do set CDATE=%%c%%b%%a
%zip% a -tgzip %CVS_PATH%\com_virtuemart_%CDATE%.tar.gz %CVS_PATH%\com_virtuemart.tar

del %CVS_PATH%\admin_files.tar.gz
del %CVS_PATH%\frontend_files.tar.gz
del %CVS_PATH%\com_virtuemart.tar
