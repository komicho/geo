<?php

namespace komicho;

include_once 'geoip.inc';

class geo
{
    // get code country
    public static function code()
    {
        
        $_ip = $_SERVER['REMOTE_ADDR'];
        
        if((strpos($_ip, ":") === false)) {
            //ipv4 -> 72.229.28.185
            $gi = geoip_open("GeoIPv4.dat",GEOIP_STANDARD);
            $out = geoip_country_code_by_addr($gi, $_ip);
        }
        else {
            //ipv6 -> 2601:8:be00:cf20:ca60:ff:fe09:35b5
            $gi = geoip_open("GeoIPv6.dat",GEOIP_STANDARD);
            $out = geoip_country_code_by_addr_v6($gi, $_ip);
        }
        return $out;
    }
    // get name country
    public static function name()
    {
        
        $_ip = $_SERVER['REMOTE_ADDR'];
        
        if((strpos($_ip, ":") === false)) {
            //ipv4
            $gi = geoip_open("GeoIPv4.dat",GEOIP_STANDARD);
            $out = geoip_country_name_by_addr($gi, $_ip);
        }
        else {
            //ipv6
            $gi = geoip_open("GeoIPv6.dat",GEOIP_STANDARD);
            $out = geoip_country_name_by_addr_v6($gi, $_ip);
        }
        return $out;
    }
}