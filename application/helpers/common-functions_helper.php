<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("error_reporting", E_ALL);
error_reporting(E_ALL);
if ( ! function_exists('fnCheckLoginStatus'))
{
    /**
     * Function fnGenerateActivationKey
     * Function to generate activation key.
     * @author Himanshu Charegaonkar
     * @access Public
     * @return string
     */
    function fnGenerateActivationKey()
    {
        $strActivationKey = date("y").date("m");
        $strActivationKey .= substr(number_format(time() * rand(),0,'',''),0,6);
        # Set the transaction by concatenating the random string and prefix.
        return $strActivationKey;
    }
}