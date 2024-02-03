<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2023 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * include/iptc.inc.php
 * @since  1.6.26
 */

function strip_IPTC ($data)
{
	if (is_array($data)) {
		foreach ($data as $key=>$item) {
			$data[$key] = strip_IPTC($item);
		}
	} else {
		$data = htmlentities(strip_tags(trim($data,"\x7f..\xff\x0..\x1f")), ENT_QUOTES);	//sanitize data against sql/html injection; trim any nongraphical non-ASCII character:
	}
	return $data;
}

function val_IPTC ($ary, $idx, $z=true)
{
	if (isset($ary[$idx])) {
		return $z ? $ary[$idx][0] : $ary[$idx];
	}
	return $z ? '' : [];
}

function get_IPTC ($filename)
{
	$IPTC_data=array();
	$size = GetImageSize($filename, $info);
	if (isset($info['APP13'])) {
		$iptc = iptcparse($info['APP13']);
		if (is_array($iptc)) {
			$IPTC_data = [
				'Title' => val_IPTC($iptc,'2#005'), 	# Max 65 octets, non-repeatable, alphanumeric
				'Urgency' => val_IPTC($iptc,'2#010'),	# Max 1 octet, non-repeatable, numeric, 1 - High, 8 - Low
				'Category' => val_IPTC($iptc,'2#015'),	# Max 3 octets, non-repeatable, alpha
				'SubCategories' => val_IPTC($iptc,'2#020', false),	# Max 32 octets, repeatable, alphanumeric
				'Keywords' => val_IPTC($iptc,'2#025', false),	# Max 64 octets, repeatable, alphanumeric
				'Instructions' => val_IPTC($iptc,'2#040'),	# Max 256 octets, non-repeatable, alphanumeric
				'CreationDate' => val_IPTC($iptc,'2#055'),	# Max 8 octets, non-repeatable, numeric, YYYYMMDD
				'CreationTime' => val_IPTC($iptc,'2#060'),	# Max 11 octets, non-repeatable, numeric+-, HHMMSS(+|-)HHMM
				'ProgramUsed' => val_IPTC($iptc,'2#065'),	# Max 32 octets, non-repeatable, alphanumeric
				'Author' => val_IPTC($iptc,'2#080'),	#!Max 32 octets, repeatable, alphanumeric
				'Position' => val_IPTC($iptc,'2#085'),	#!Max 32 octets, repeatable, alphanumeric
				'City' => val_IPTC($iptc,'2#090'),	# Max 32 octets, non-repeatable, alphanumeric
				'State' => val_IPTC($iptc,'2#095'),	# Max 32 octets, non-repeatable, alphanumeric
				'Country' => val_IPTC($iptc,'2#101'),	# Max 64 octets, non-repeatable, alphanumeric
				'TransmissionReference' => val_IPTC($iptc,'2#103'),	# Max 32 octets, non-repeatable, alphanumeric
				'Headline' => val_IPTC($iptc,'2#105'),	# Max 256 octets, non-repeatable, alphanumeric
				'Credit' => val_IPTC($iptc,'2#110'),	# Max 32 octets, non-repeatable, alphanumeric
				'Source' => val_IPTC($iptc,'2#115'),	# Max 32 octets, non-repeatable, alphanumeric
				'Copyright' => val_IPTC($iptc,'2#116'),	# Max 128 octets, non-repeatable, alphanumeric
				'Caption'  => val_IPTC($iptc,'2#120'),	# Max 2000 octets, non-repeatable, alphanumeric
				'CaptionWriter' => val_IPTC($iptc,'2#122')	# Max 32 octets, non-repeatable, alphanumeric
			];
			$IPTC_data = strip_IPTC($IPTC_data);	//sanitize data against sql/html injection; trim any nongraphical non-ASCII character:
			$IPTC_data = filter_content($IPTC_data);	//run the data against the bad word list
		}
	}
	return $IPTC_data;
}
//EOF