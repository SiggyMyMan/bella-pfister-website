
Skip to content
Pull requests
Issues
Marketplace
Explore
@SiggyMyMan
moy /
piwigo-random
Public

Code
Issues 1
Pull requests
Actions
Projects
Wiki
Security

    Insights

piwigo-random/prb-settings.php.example /
@moy
moy Split settings to a separate file.
Latest commit 2db0a78 on Jul 5, 2021
History
1 contributor
36 lines (33 sloc) 2.02 KB
<?php // -*- mode:php c-basic-offset: 2 -*-
// +-----------------------------------------------------------------------+
// | Piwigo RANDOM - Insert images from a Piwigo Galery in a website       |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2014, 2015 Matthieu Moy                                  |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation; either version 2 of the License, or     |
// | (at your option) any later version.                                   |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+

// Your piwigo gallery here:
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443 || $_SERVER['HTTP_X_FORWARDED_PORT'] == 443) ? "https://" : "http://";
$site = $protocol . "https://bellapfister.co/piwigo/";

// You should not have to modify anything below:
$maximages = 1;
$cat_id = null;
// tag_name mode, instead of album cat_id
$tag_name = null;
$element_name = 'random_image';
$mode = 'javascript';
$target = '_blank';
$size = 'thumb';

