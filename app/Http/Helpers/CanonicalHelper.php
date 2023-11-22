<?php

namespace App\Http\Helpers;

class CanonicalHelper
{
    public static function canonicalUrl($url = null)
    {
        if ($url) {
            $newurl = str_replace ( 'www.', '', $url, $count) ;
            return "<link rel=\"canonical\" href=\"" . $newurl . "\" />";
        } else {
            return "";
        }
    }
}
