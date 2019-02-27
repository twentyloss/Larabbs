<?php
/**
 * Created by PhpStorm.
 * User: 0000
 * Date: 2019/2/27
 * Time: 9:15
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}