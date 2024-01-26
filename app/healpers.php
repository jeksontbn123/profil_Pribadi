<?php

use App\Models\partner;
use App\Models\section;
use App\Models\setting;

function get_setting_value($key)
{
    $data = setting::where('key', $key)->first();
    if (isset($data->value)) {
        return $data->value;
    } else {
        return 'empy';
    }
}

function get_section_data($key)
{
    $data = section::where('post_as', $key)->first();
    if (isset($data)) {
        return $data;
    }
}

function get_partner()
{
    $data = partner::all();
    return $data;
}
