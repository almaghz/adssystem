<?php


function status(){
    return [
        'Active' => adminTrans('home' ,'Active'),
        'Deactive' => adminTrans('home' ,'Deactive'),
    ];
}

function setting_type(){
    return [
        'text' => adminTrans('home' ,'text'),
        'textarea' => adminTrans('home' ,'textarea'),
        'image' => adminTrans('home' ,'image'),
    ];

}

function type(){
    return [
        'Main' => adminTrans('home' ,'main'),
        'Sub' => adminTrans('home' ,'sub'),
    ];
}


function menuTarget(){
    return [
        'blank' => adminTrans('home' ,'blank'),
        'self' => adminTrans('home' ,'self'),
    ];
}

function productStatus(){
    return [
        'wating' => adminTrans('product' ,'wating'),
        'reject' => adminTrans('product' ,'reject'),
        'success' => adminTrans('product' ,'success'),
    ];
}



function permissionType(){
    return [
        'on' => adminTrans('home' ,'on'),
        'off' => adminTrans('home' ,'off'),
    ];
}

function removeFromArray($orignalArray , $expectArray){
    return array_values(array_diff($orignalArray, $expectArray));
}

function rename_keys($array, $replacement_keys)  {
    if(count($replacement_keys) > 0){
        return array_combine($replacement_keys, array_values($array));
    }
}