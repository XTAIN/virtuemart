#!/bin/sh
# ----------------------------------------------------------------------------
# Configuration
# ----------------------------------------------------------------------------

# ... The Path to your SVN Repository
SVN_PATH=/home/soeren/Joomla/virtuemart/SVN/virtuemart

# ... The Path were the built file is located...
BUILD_PATH=/home/soeren/Joomla/virtuemart/build

# YOU MUST HAVE INSTALLED THE 4.x BETA VERSION OF p7zip (the command line version of 7-Zip for Unix/Linux).
# It's usually globally accessible (in the directory /usr/local/bin/)

# ----------------------------------------------------------------------------
#
# Component Install Archive Builder
#
# This file is part of virtuemart
#
# virtuemart
# http://virtuemart.net
#
# virtuemart is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# virtuemart is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with virtuemart; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
# ----------------------------------------------------------------------------
DATE=$(date +%Y%m%d)

7za a -ttar -r $BUILD_PATH/admin_files.tar $SVN_PATH/classes $SVN_PATH/html $SVN_PATH/languages $SVN_PATH/sql
7za d $BUILD_PATH/admin_files.tar languages/account/*.php -x!languages/account/english.php
7za d $BUILD_PATH/admin_files.tar languages/admin/*.php -x!languages/admin/english.php
7za d $BUILD_PATH/admin_files.tar languages/affiliate/*.php -x!languages/affiliate/english.php
7za d $BUILD_PATH/admin_files.tar languages/checkout/*.php -x!languages/checkout/english.php
7za d $BUILD_PATH/admin_files.tar languages/common/*.php -x!languages/common/english.php
7za d $BUILD_PATH/admin_files.tar languages/coupon/*.php -x!languages/coupon/english.php
7za d $BUILD_PATH/admin_files.tar languages/help/*.php -x!languages/help/english.php
7za d $BUILD_PATH/admin_files.tar languages/manufacturer/*.php -x!languages/manufacturer/english.php
7za d $BUILD_PATH/admin_files.tar languages/msgs/*.php -x!languages/msgs/english.php
7za d $BUILD_PATH/admin_files.tar languages/order/*.php -x!languages/order/english.php
7za d $BUILD_PATH/admin_files.tar languages/product/*.php -x!languages/product/english.php
7za d $BUILD_PATH/admin_files.tar languages/reportbasic/*.php -x!languages/reportbasic/english.php
7za d $BUILD_PATH/admin_files.tar languages/shipping/*.php -x!languages/shipping/english.php
7za d $BUILD_PATH/admin_files.tar languages/shop/*.php -x!languages/shop/english.php
7za d $BUILD_PATH/admin_files.tar languages/shopper/*.php -x!languages/shopper/english.php
7za d $BUILD_PATH/admin_files.tar languages/store/*.php -x!languages/store/english.php
7za d $BUILD_PATH/admin_files.tar languages/tax/*.php -x!languages/tax/english.php
7za d $BUILD_PATH/admin_files.tar languages/vendor/*.php -x!languages/vendor/english.php
7za d $BUILD_PATH/admin_files.tar languages/zone/*.php -x!languages/zone/english.php
7za d -r $BUILD_PATH/admin_files.tar .svn/
7za a -tgzip $BUILD_PATH/admin_files.tar.gz $BUILD_PATH/admin_files.tar 
rm $BUILD_PATH/admin_files.tar

7za a -ttar -r $BUILD_PATH/frontend_files.tar $SVN_PATH/js $SVN_PATH/css $SVN_PATH/shop_image $SVN_PATH/themes $SVN_PATH/fetchscript.php $SVN_PATH/virtuemart.php $SVN_PATH/virtuemart_parser.php $SVN_PATH/show_image_in_imgtag.php
7za a -ttar $BUILD_PATH/frontend_files.tar $SVN_PATH/index.html
7za d -r $BUILD_PATH/frontend_files.tar .svn/
7za a -tgzip $BUILD_PATH/frontend_files.tar.gz $BUILD_PATH/frontend_files.tar 
rm $BUILD_PATH/frontend_files.tar

7za a -ttar -r- $BUILD_PATH/com_virtuemart.tar $BUILD_PATH/*.*
7za a -ttar -r- $BUILD_PATH/com_virtuemart.tar $SVN_PATH/*.*
7za d $BUILD_PATH/com_virtuemart.tar fetchscript.php virtuemart.php virtuemart_parser.php show_image_in_imgtag.php

7za a -tgzip $BUILD_PATH/com_virtuemart_$DATE.tar.gz $BUILD_PATH/com_virtuemart.tar

rm $BUILD_PATH/admin_files.tar.gz
rm $BUILD_PATH/frontend_files.tar.gz
rm $BUILD_PATH/com_virtuemart.tar
