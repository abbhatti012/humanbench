<?php

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}
function getPercentile($score){
    if($score <= 110){
        $percentile = 'Top 0.94%';
    } elseif($score > 110 && $score <= 120){
        $percentile = 'Top 2.12%';
    } elseif($score > 120 && $score <= 130){
        $percentile = 'Top 3.62%';
    } elseif($score > 130 && $score <= 140){
        $percentile = 'Top 5.92%';
    } elseif($score > 140 && $score <= 150){
        $percentile = 'Top 9.47%';
    } elseif($score > 150 && $score <= 160){
        $percentile = 'Top 14.80%';
    } elseif($score > 160 && $score <= 190){
        $percentile = 'Top 22.05%';
    } elseif($score > 190 && $score <= 250){
        $percentile = 'Top 30.70%';
    } elseif($score > 250 && $score <= 270){
        $percentile = 'Top 40%';
    } elseif($score > 270 && $score <= 300){
        $percentile = 'Top 50%';
    } elseif($score > 300 && $score <= 330){
        $percentile = 'Btm 50%';
    } elseif($score > 330 && $score <= 350){
        $percentile = 'Btm 22.13%';
    } elseif($score > 350 && $score <= 370){
        $percentile = 'Btm 15.75%';
    } elseif($score > 370 && $score <= 400){
        $percentile = 'Btm 10.36%';
    } elseif($score > 400 && $score <= 450){
        $percentile = 'Btm 6.18%';
    } elseif($score > 450 && $score <= 500){
        $percentile = 'Btm 3.69%';
    } elseif($score > 500 && $score <= 600){
        $percentile = 'Btm 2.18%';
    } elseif($score > 600 && $score <= 750){
        $percentile = 'Btm 1.18%';
    } elseif($score > 750 && $score <= 1000){
        $percentile = 'Btm 0.9%';
    } elseif($score > 1000){
        $percentile = 'Btm 0.3%';
    }
    return $percentile;
}
function getPercentage($score){
    $score = (float) filter_var( $score, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
    return $score;
}