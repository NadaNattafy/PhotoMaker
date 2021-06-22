<?php

use App\Models\Setting;

function getsetting($name)
{
    $setting=Setting::where('name',$name)->first()->value;
    return $setting;

}

?>
