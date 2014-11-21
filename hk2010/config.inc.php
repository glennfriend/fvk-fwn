<?php

class Config
{
    public static function get( $key )
    {
        $data = array(
            'imagePath'     => '../media/hk2010',
            'tmpImagePath'  => '../media/tmp/hk2010',
            'portal'        => 'main.php',
            'title'         => '::2010年香港自由行::',
            'imageFolder'   => 'hk2010',
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
            )
        );
    }

}
