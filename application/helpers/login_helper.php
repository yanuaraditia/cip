<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('get_hash'))
{
    function get_hash($PlainPassword)
    {
    	return password_hash($PlainPassword, PASSWORD_DEFAULT);
   }
}

if(!function_exists('hash_verified'))
{    
    function hash_verified($PlainPassword,$HashPassword)
    {
    	return password_verify($PlainPassword,$HashPassword) ? true : false;

   }
}