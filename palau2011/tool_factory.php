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
    include_once('../protected/request.class.php');
    include_once('../protected/tool.function.php');

//--------------------------------------------------------------------------------
// render
//--------------------------------------------------------------------------------

    $createList = Array();
    foreach( Config::getMenus() as $key => $items ) {
        $createList[$key] = Array(
            'topic'     => $items['topic'],
            'url'       => getUrl($key),
            'htmlPage'  => 'page.'. $key .'.html',
        );
    }

    echo '<table cellpadding="5" cellspacing="0" style="border:1px solid; border-collapse:collapse; word-break:break-all; word-wrap:break-word; table-layout:fixed;"><tbody>';
    foreach( $createList as $key => $items ) {
        $topic    = $items['topic'];
        $url      = $items['url'];
        $htmlPage = $items['htmlPage'];
        echo "<tr>";
        echo "  <td><a href='{$url}' style='width:200px'>{$key}</a></td>";
        echo "  <td> &raquo; {$htmlPage} </td>";
        echo "  <td> {$topic} </td>";
        echo "</tr>";
    }
    echo '</tbody></table>';
    echo '<br />';
    echo '<a href="'. $_SERVER['SCRIPT_NAME'] .'?&isCreate=1">產生 html 靜態檔案</a>';

    if( !Request::getQuery('isCreate') ) {
        exit;
    }
    echo '<br /><br />';


    // 產生靜態 html 檔案
    foreach( $createList as $key => $items ) {

        $url  = $items['url'];
        $htmlPage = $items['htmlPage'];

        $content = file_get_contents( $url );
        $content = turnUrl( $content, $createList );
        echo "create {$htmlPage}<br />";
        file_put_contents( $htmlPage, $content ); 

    }

    // 網址的轉換
    function turnUrl( $html, $createList )
    {
        foreach( $createList as $items ) {
            $from  = $items['url'];
            $to = $items['htmlPage'];
            $html = str_replace( $from, $to, $html);
        }
        return $html;
    }

//