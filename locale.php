<?php

function get_available_languages() {
/**
    References :
    1. http://en.wikipedia.org/wiki/ISO_3166-1#Officially_assigned_code_elements
*/
	$country_codes = array(
 
		'AF' => "AFGHANISTAN" , 
		'AL' => "ALBANIA" , 
		'DZ' => "ALGERIA" , 
		'AS' => "AMERICAN SAMOA" , 
		'AD' => "ANDORRA" , 
		'AO' => "ANGOLA" , 
		'AI' => "ANGUILLA" , 
		'AQ' => "ANTARCTICA" , 
		'AG' => "ANTIGUA AND BARBUDA" , 
		'AR' => "ARGENTINA" , 
		'AM' => "ARMENIA" , 
		'AW' => "ARUBA" , 
		'AU' => "AUSTRALIA" , 
		'AT' => "AUSTRIA" , 
		'AZ' => "AZERBAIJAN" , 
		'BS' => "BAHAMAS" , 
		'BH' => "BAHRAIN" , 
		'BD' => "BANGLADESH" , 
		'BB' => "BARBADOS" , 
		'BY' => "BELARUS" , 
		'BE' => "BELGIUM" , 
		'BZ' => "BELIZE" , 
		'BJ' => "BENIN" , 
		'BM' => "BERMUDA" , 
		'BT' => "BHUTAN" , 
		'BO' => "BOLIVIA" , 
		'BA' => "BOSNIA AND HERZEGOVINA" , 
		'BW' => "BOTSWANA" , 
		'BV' => "BOUVET ISLAND" , 
		'BR' => "BRAZIL" , 
		'IO' => "BRITISH INDIAN OCEAN TERRITORY" , 
		'BN' => "BRUNEI DARUSSALAM" , 
		'BG' => "BULGARIA" , 
		'BF' => "BURKINA FASO" , 
		'BI' => "BURUNDI" , 
		'KH' => "CAMBODIA" , 
		'CM' => "CAMEROON" , 
		'CA' => "CANADA" , 
		'CV' => "CAPE VERDE" , 
		'KY' => "CAYMAN ISLANDS" , 
		'CF' => "CENTRAL AFRICAN REPUBLIC" , 
		'TD' => "CHAD" , 
		'CL' => "CHILE" , 
		'CN' => "CHINA" , 
		'CX' => "CHRISTMAS ISLAND" , 
		'CC' => "COCOS (KEELING) ISLANDS" , 
		'CO' => "COLOMBIA" , 
		'KM' => "COMOROS" , 
		'CG' => "CONGO" , 
		'CD' => "CONGO, THE DEMOCRATIC REPUBLIC OF THE" , 
		'CK' => "COOK ISLANDS" , 
		'CR' => "COSTA RICA" , 
		'CI' => "COTE D'IVOIRE" , 
		'HR' => "CROATIA" , 
		'CU' => "CUBA" , 
		'CY' => "CYPRUS" , 
		'CZ' => "CZECH REPUBLIC" , 
		'DK' => "DENMARK" , 
		'DJ' => "DJIBOUTI" , 
		'DM' => "DOMINICA" , 
		'DO' => "DOMINICAN REPUBLIC" , 
		'EC' => "ECUADOR" , 
		'EG' => "EGYPT" , 
		'SV' => "EL SALVADOR" , 
		'GQ' => "EQUATORIAL GUINEA" , 
		'ER' => "ERITREA" , 
		'EE' => "ESTONIA" , 
		'ET' => "ETHIOPIA" , 
		'FK' => "FALKLAND ISLANDS (MALVINAS)" , 
		'FO' => "FAROE ISLANDS" , 
		'FJ' => "FIJI" , 
		'FI' => "FINLAND" , 
		'FR' => "FRANCE" , 
		'GF' => "FRENCH GUIANA" , 
		'PF' => "FRENCH POLYNESIA" , 
		'TF' => "FRENCH SOUTHERN TERRITORIES" , 
		'GA' => "GABON" , 
		'GM' => "GAMBIA" , 
		'GE' => "GEORGIA" , 
		'DE' => "GERMANY" , 
		'GH' => "GHANA" , 
		'GI' => "GIBRALTAR" , 
		'GR' => "GREECE" , 
		'GL' => "GREENLAND" , 
		'GD' => "GRENADA" , 
		'GP' => "GUADELOUPE" , 
		'GU' => "GUAM" , 
		'GT' => "GUATEMALA" , 
		'GN' => "GUINEA" , 
		'GW' => "GUINEA-BISSAU" , 
		'GY' => "GUYANA" , 
		'HT' => "HAITI" , 
		'HM' => "HEARD ISLAND AND MCDONALD ISLANDS" , 
		'VA' => "HOLY SEE (VATICAN CITY STATE)" , 
		'HN' => "HONDURAS" , 
		'HK' => "HONG KONG" , 
		'HU' => "HUNGARY" , 
		'IS' => "ICELAND" , 
		'IN' => "INDIA" , 
		'ID' => "INDONESIA" , 
		'IR' => "IRAN, ISLAMIC REPUBLIC OF" , 
		'IQ' => "IRAQ" , 
		'IE' => "IRELAND" , 
		'IL' => "ISRAEL" , 
		'IT' => "ITALY" , 
		'JM' => "JAMAICA" , 
		'JP' => "JAPAN" , 
		'JO' => "JORDAN" , 
		'KZ' => "KAZAKHSTAN" , 
		'KE' => "KENYA" , 
		'KI' => "KIRIBATI" , 
		'KP' => "KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF" , 
		'KR' => "KOREA, REPUBLIC OF" , 
		'KW' => "KUWAIT" , 
		'KG' => "KYRGYZSTAN" , 
		'LA' => "LAO PEOPLE'S DEMOCRATIC REPUBLIC" , 
		'LV' => "LATVIA" , 
		'LB' => "LEBANON" , 
		'LS' => "LESOTHO" , 
		'LR' => "LIBERIA" , 
		'LY' => "LIBYAN ARAB JAMAHIRIYA" , 
		'LI' => "LIECHTENSTEIN" , 
		'LT' => "LITHUANIA" , 
		'LU' => "LUXEMBOURG" , 
		'MO' => "MACAO" , 
		'MK' => "MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF" , 
		'MG' => "MADAGASCAR" , 
		'MW' => "MALAWI" , 
		'MY' => "MALAYSIA" , 
		'MV' => "MALDIVES" , 
		'ML' => "MALI" , 
		'MT' => "MALTA" , 
		'MH' => "MARSHALL ISLANDS" , 
		'MQ' => "MARTINIQUE" , 
		'MR' => "MAURITANIA" , 
		'MU' => "MAURITIUS" , 
		'YT' => "MAYOTTE" , 
		'MX' => "MEXICO" , 
		'FM' => "MICRONESIA, FEDERATED STATES OF" , 
		'MD' => "MOLDOVA, REPUBLIC OF" , 
		'MC' => "MONACO" , 
		'MN' => "MONGOLIA" , 
		'MS' => "MONTSERRAT" , 
		'MA' => "MOROCCO" , 
		'MZ' => "MOZAMBIQUE" , 
		'MM' => "MYANMAR" , 
		'NA' => "NAMIBIA" , 
		'NR' => "NAURU" , 
		'NP' => "NEPAL" , 
		'NL' => "NETHERLANDS" , 
		'AN' => "NETHERLANDS ANTILLES" , 
		'NC' => "NEW CALEDONIA" , 
		'NZ' => "NEW ZEALAND" , 
		'NI' => "NICARAGUA" , 
		'NE' => "NIGER" , 
		'NG' => "NIGERIA" , 
		'NU' => "NIUE" , 
		'NF' => "NORFOLK ISLAND" , 
		'MP' => "NORTHERN MARIANA ISLANDS" , 
		'NO' => "NORWAY" , 
		'OM' => "OMAN" , 
		'PK' => "PAKISTAN" , 
		'PW' => "PALAU" , 
		'PS' => "PALESTINIAN TERRITORY, OCCUPIED" , 
		'PA' => "PANAMA" , 
		'PG' => "PAPUA NEW GUINEA" , 
		'PY' => "PARAGUAY" , 
		'PE' => "PERU" , 
		'PH' => "PHILIPPINES" , 
		'PN' => "PITCAIRN" , 
		'PL' => "POLAND" , 
		'PT' => "PORTUGAL" , 
		'PR' => "PUERTO RICO" , 
		'QA' => "QATAR" , 
		'RE' => "REUNION" , 
		'RO' => "ROMANIA" , 
		'RU' => "RUSSIAN FEDERATION" , 
		'RW' => "RWANDA" , 
		'SH' => "SAINT HELENA" , 
		'KN' => "SAINT KITTS AND NEVIS" , 
		'LC' => "SAINT LUCIA" , 
		'PM' => "SAINT PIERRE AND MIQUELON" , 
		'VC' => "SAINT VINCENT AND THE GRENADINES" , 
		'WS' => "SAMOA" , 
		'SM' => "SAN MARINO" , 
		'ST' => "SAO TOME AND PRINCIPE" , 
		'SA' => "SAUDI ARABIA" , 
		'SN' => "SENEGAL" , 
		'CS' => "SERBIA AND MONTENEGRO" , 
		'SC' => "SEYCHELLES" , 
		'SL' => "SIERRA LEONE" , 
		'SG' => "SINGAPORE" , 
		'SK' => "SLOVAKIA" , 
		'SI' => "SLOVENIA" , 
		'SB' => "SOLOMON ISLANDS" , 
		'SO' => "SOMALIA" , 
		'ZA' => "SOUTH AFRICA" , 
		'GS' => "SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS" , 
		'ES' => "SPAIN" , 
		'LK' => "SRI LANKA" , 
		'SD' => "SUDAN" , 
		'SR' => "SURINAME" , 
		'SJ' => "SVALBARD AND JAN MAYEN" , 
		'SZ' => "SWAZILAND" , 
		'SE' => "SWEDEN" , 
		'CH' => "SWITZERLAND" , 
		'SY' => "SYRIAN ARAB REPUBLIC" , 
		'TW' => "TAIWAN, PROVINCE OF CHINA" , 
		'TJ' => "TAJIKISTAN" , 
		'TZ' => "TANZANIA, UNITED REPUBLIC OF" , 
		'TH' => "THAILAND" , 
		'TL' => "TIMOR-LESTE" , 
		'TG' => "TOGO" , 
		'TK' => "TOKELAU" , 
		'TO' => "TONGA" , 
		'TT' => "TRINIDAD AND TOBAGO" , 
		'TN' => "TUNISIA" , 
		'TR' => "TURKEY" , 
		'TM' => "TURKMENISTAN" , 
		'TC' => "TURKS AND CAICOS ISLANDS" , 
		'TV' => "TUVALU" , 
		'UG' => "UGANDA" , 
		'UA' => "UKRAINE" , 
		'AE' => "UNITED ARAB EMIRATES" , 
		'GB' => "UNITED KINGDOM" , 
		'US' => "UNITED STATES" , 
		'UM' => "UNITED STATES MINOR OUTLYING ISLANDS" , 
		'UY' => "URUGUAY" , 
		'UZ' => "UZBEKISTAN" , 
		'VU' => "VANUATU" , 
		'VE' => "VENEZUELA" , 
		'VN' => "VIET NAM" , 
		'VG' => "VIRGIN ISLANDS, BRITISH" , 
		'VI' => "VIRGIN ISLANDS, U.S." , 
		'WF' => "WALLIS AND FUTUNA" , 
		'EH' => "WESTERN SAHARA" , 
		'YE' => "YEMEN" , 
		'ZM' => "ZAMBIA" , 
		'ZW' => "ZIMBABWE" , 
	);
 
//End of country codes

/**
    ISO 639-1 Language Codes
    Useful in Locale analysis
     
    References :
    1. http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
*/
 
	$language_codes = array(
        'en' => 'English' , 
        'aa' => 'Afar' , 
        'ab' => 'Abkhazian' , 
        'af' => 'Afrikaans' , 
        'am' => 'Amharic' , 
        'ar' => 'Arabic' , 
        'as' => 'Assamese' , 
        'ay' => 'Aymara' , 
        'az' => 'Azerbaijani' , 
        'ba' => 'Bashkir' , 
        'be' => 'Byelorussian' , 
        'bg' => 'Bulgarian' , 
        'bh' => 'Bihari' , 
        'bi' => 'Bislama' , 
        'bn' => 'Bengali/Bangla' , 
        'bo' => 'Tibetan' , 
        'br' => 'Breton' , 
        'ca' => 'Catalan' , 
        'co' => 'Corsican' , 
        'cs' => 'Czech' , 
        'cy' => 'Welsh' , 
        'da' => 'Danish' , 
        'de' => 'German' , 
        'dz' => 'Bhutani' , 
        'el' => 'Greek' , 
        'eo' => 'Esperanto' , 
        'es' => 'Spanish' , 
        'et' => 'Estonian' , 
        'eu' => 'Basque' , 
        'fa' => 'Persian' , 
        'fi' => 'Finnish' , 
        'fj' => 'Fiji' , 
        'fo' => 'Faeroese' , 
        'fr' => 'French' , 
        'fy' => 'Frisian' , 
        'ga' => 'Irish' , 
        'gd' => 'Scots/Gaelic' , 
        'gl' => 'Galician' , 
        'gn' => 'Guarani' , 
        'gu' => 'Gujarati' , 
        'ha' => 'Hausa' , 
        'hi' => 'Hindi' , 
        'hr' => 'Croatian' , 
        'hu' => 'Hungarian' , 
        'hy' => 'Armenian' , 
        'ia' => 'Interlingua' , 
        'ie' => 'Interlingue' , 
        'ik' => 'Inupiak' , 
        'in' => 'Indonesian' , 
        'is' => 'Icelandic' , 
        'it' => 'Italian' , 
        'iw' => 'Hebrew' , 
        'ja' => 'Japanese' , 
        'ji' => 'Yiddish' , 
        'jw' => 'Javanese' , 
        'ka' => 'Georgian' , 
        'kk' => 'Kazakh' , 
        'kl' => 'Greenlandic' , 
        'km' => 'Cambodian' , 
        'kn' => 'Kannada' , 
        'ko' => 'Korean' , 
        'ks' => 'Kashmiri' , 
        'ku' => 'Kurdish' , 
        'ky' => 'Kirghiz' , 
        'la' => 'Latin' , 
        'ln' => 'Lingala' , 
        'lo' => 'Laothian' , 
        'lt' => 'Lithuanian' , 
        'lv' => 'Latvian/Lettish' , 
        'mg' => 'Malagasy' , 
        'mi' => 'Maori' , 
        'mk' => 'Macedonian' , 
        'ml' => 'Malayalam' , 
        'mn' => 'Mongolian' , 
        'mo' => 'Moldavian' , 
        'mr' => 'Marathi' , 
        'ms' => 'Malay' , 
        'mt' => 'Maltese' , 
        'my' => 'Burmese' , 
        'na' => 'Nauru' , 
        'ne' => 'Nepali' , 
        'nl' => 'Dutch' , 
        'no' => 'Norwegian' , 
        'oc' => 'Occitan' , 
        'om' => '(Afan)/Oromoor/Oriya' , 
        'pa' => 'Punjabi' , 
        'pl' => 'Polish' , 
        'ps' => 'Pashto/Pushto' , 
        'pt' => 'Portuguese' , 
        'qu' => 'Quechua' , 
        'rm' => 'Rhaeto-Romance' , 
        'rn' => 'Kirundi' , 
        'ro' => 'Romanian' , 
        'ru' => 'Russian' , 
        'rw' => 'Kinyarwanda' , 
        'sa' => 'Sanskrit' , 
        'sd' => 'Sindhi' , 
        'sg' => 'Sangro' , 
        'sh' => 'Serbo-Croatian' , 
        'si' => 'Singhalese' , 
        'sk' => 'Slovak' , 
        'sl' => 'Slovenian' , 
        'sm' => 'Samoan' , 
        'sn' => 'Shona' , 
        'so' => 'Somali' , 
        'sq' => 'Albanian' , 
        'sr' => 'Serbian' , 
        'ss' => 'Siswati' , 
        'st' => 'Sesotho' , 
        'su' => 'Sundanese' , 
        'sv' => 'Swedish' , 
        'sw' => 'Swahili' , 
        'ta' => 'Tamil' , 
        'te' => 'Tegulu' , 
        'tg' => 'Tajik' , 
        'th' => 'Thai' , 
        'ti' => 'Tigrinya' , 
        'tk' => 'Turkmen' , 
        'tl' => 'Tagalog' , 
        'tn' => 'Setswana' , 
        'to' => 'Tonga' , 
        'tr' => 'Turkish' , 
        'ts' => 'Tsonga' , 
        'tt' => 'Tatar' , 
        'tw' => 'Twi' , 
        'uk' => 'Ukrainian' , 
        'ur' => 'Urdu' , 
        'uz' => 'Uzbek' , 
        'vi' => 'Vietnamese' , 
        'vo' => 'Volapuk' , 
        'wo' => 'Wolof' , 
        'xh' => 'Xhosa' , 
        'yo' => 'Yoruba' , 
        'zh' => 'Chinese' , 
        'zu' => 'Zulu' , 
    );
		
	$locale_data = array();
         
	//Get locales from Linux terminal command locale
	$locales = shell_exec('locale -a');
	$locales = explode("\n" , $locales);
 
	foreach($locales as $c => $l) {
		if(strlen($l)) {
			$parts = explode('.' , $l);		
			$lc = $parts[0];         
			list($lcode , $ccode) = explode('_' , $lc);         
			$lcode = strtolower($lcode);		         
			$language = $language_codes[$lcode];
			$country = $country_codes[$ccode];         
			if(strlen($language) and strlen($country)) {
				$locale_data[$l] = "$language - $country - {$parts[1]}";
			}
		}
	}
	
	return $locale_data;
}
?>
