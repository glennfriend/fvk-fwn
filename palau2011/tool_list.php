<?php

if ( !isset($_SERVER['DEVELOPER_MODE']) ) {
    exit;
}

//--------------------------------------------------------------------------------
// default setting
//--------------------------------------------------------------------------------
    define('APP_DIR', __DIR__ );
    include_once('config.inc.php');
    set_time_limit(600);  // 10 min * 60 sec= 600 sec

//--------------------------------------------------------------------------------
// init
//--------------------------------------------------------------------------------
    include_once('../protected/tool.function.php');

//--------------------------------------------------------------------------------
// output
//--------------------------------------------------------------------------------

    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
    echo '<meta http-equiv="Content-Language" content="zh-tw" />';

    $condition = APP_DIR .'/'. Config::get('imagePath') .'/*';
    $folders = glob( $condition, GLOB_ONLYDIR );

    foreach( $folders as $folder ) {

        $folderName = basename($folder);
        $files = get_files_by_directory( $folder.'/*' );

        echo '<p>';
        foreach( $files as $file ) {
            echo '{{height, '. $folderName .'/'. $file .'}}<br />';
        }
        echo '</p>';

    }

//