<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }   
}

if ( ! function_exists('tracking_number'))
{
    function tracking_number($var = '')
    {
        return strtoupper(uniqid($var));
    }   
}

if ( ! function_exists('convert_html_value_array'))
{
	function convert_html_value_array( $array = array() ){
		
		$arr = array();

		foreach($array as $k => $v) {

			if( is_array($v) ) {

				foreach( $v as $k1 => $v1 ) {
					$arr[$k1][$k] = $v1;
				}

			} else {

				return array();
				
			}

		}

		return $arr;

	}
}