<?php 
/*
Whois.php        PHP classes to conduct whois queries

Copyright (C)1999,2005 easyDNS Technologies Inc. & Mark Jeftovic

Maintained by David Saez (david@ols.es)

For the most recent version of this package visit:

http://phpwhois.sourceforge.net

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/* lunic.whois  2.0	David Saez <david@ols.es> 2003/01/26 */
/* lunic.whois	1.0	J.M. Roth <jmroth@iip.lu> 2002/11/03 */

if(!defined("__LU_HANDLER__")) define("__LU_HANDLER__",1);

require_once('whois.parser.php');

class lu_handler {

	function parse($data_str) {
		$items = array(
			"domain.name" => "domainname:",
			"domain.status" => "domaintype:",
			"domain.nserver." => "nserver:",
			"domain.created" => "registered:",
			"domain.source" => "source:",
			"owner.type" => "ownertype:",
			"owner.organization" => "org-name:",
			"owner.address." => "org-address:",
			"owner.address.pcode" => "org-zipcode:",
			"owner.address.city" => "org-city:",
			"owner.address.country" => "org-country:",
			"admin.name" => "adm-name:",
			"admin.address." => "adm-address:",
			"admin.address.pcode" => "adm-zipcode:",
			"admin.address.city" => "adm-city:",
			"admin.address.country" => "adm-country:",
			"admin.email" => "adm-email:",
			"tech.name" => "tec-name:",
			"tech.address." => "tec-address:",
                        "tech.address.pcode" => "tec-zipcode:",
                        "tech.address.city" => "tec-city:",
                        "tech.address.country" => "tec-country:",
                        "tech.email" => "tec-email:",
			"billing.name" => "bil-name:",
                        "billing.address." => "bil-address:",
                        "billing.address.pcode" => "bil-zipcode:",
                        "billing.address.city" => "bil-city:",
                        "billing.address.country" => "bil-country:",
                        "billing.email" => "bil-email:"
			);

		$r["rawdata"] = $data_str["rawdata"];
		$r["regyinfo"] = array( "referrer"=>"http://www.dns.lu",
					"registrar" => "DNS-LU");
		$r["regrinfo"] = generic_parser_b ($data_str["rawdata"],$items,'dmy');
		return($r);
	}
}

?>
