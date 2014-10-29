<?php

class Config
{
    public static function get( $key )
    {
        $data = array(
            'imagePath'     => '../media/korea2009',
            'tmpImagePath'  => '../media/tmp/korea2009',
            'portal'        => 'main.php',
            'title'         => '::2009年秋季濟州島行::',    // 20090925_jeju_韓國濟州島四日
            'imageFolder'   => 'korea2009',
        );
        if ( isset($data[$key]) ) {
            return $data[$key];
        }
        return '';
    }

    public static function getMenus()
    {
        return array(
            'day0' => Array(
                'topic' => '序'
            ),
            'day1' => Array(
                'topic' => '第一天'
            ),
            'day2' => Array(
                'topic' => '第二天'
            ),
            'day3' => Array(
                'topic' => '第三天'
            ),
            'day4' => Array(
                'topic' => '第四天'
            ),
            'store' => Array(
                'topic' => '便利商店特集'
            ),
            'mountain' => Array(
                'topic' => '特別收錄漢拏山頂景'
            )
        );
    }

}
