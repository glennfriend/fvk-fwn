<?php

class Config
{
    public static function get( $key )
    {
        $data = array(
            'imagePath'     => '../media/palau2011',
            'tmpImagePath'  => '../media/tmp/palau2011',
            'portal'        => 'main.php',
            'title'         => '::2011年帛琉阿勇團五天四夜無人島::',
            'imageFolder'   => 'palau2011',
        );
        if ( isset($data[$key]) ) {
            return $data[$key];
        }
        return '';
    }

    public static function getMenus()
    {
        return array(
            'foreword' => array(
                'topic' => '序',
            ),
            'travel' => array(
                'topic' => '帛琉旅程',
            ),
            'milk' => array(
                'topic' => '牛奶湖',
            ),
            'jellyfish' => array(
                'topic' => '水母湖',
            ),
            'coral' => array(
                'topic' => '珊瑚區餵魚',
            ),
            /*
            'shark' => array(
                'topic' => '鯊魚城',
            ),
            */
            'big_drop_off' => array(
                'topic' => '大斷層 (Big Drop Off)',
            ),

            'double_dog' => array(
                'topic' => '雙狗島',
            ),
            /*
            'hotel' => array(
                'topic' => '飯店',
            ),
            */
            'other' => array(
                'topic' => '其它補充',
            ),
        );
    }

}
