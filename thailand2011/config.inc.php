<?php

class Config
{
    public static function get( $key )
    {
        $data = array(
            'imagePath'     => '../media/thailand2011',
            'tmpImagePath'  => '../media/tmp/thailand2011',
            'portal'        => 'main.php',
            'title'         => '::2011年泰國五天四夜團體旅行::',    // 20111012_泰國五日遊
            'imageFolder'   => 'thailand2011',
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
                'topic' => '序',
            ),
            'day1' => Array(
                'topic' => '12日．星期三'
            ),
            'day2' => Array(
                'topic' => '13日．星期四'
            ),
            'day3' => Array(
                'topic' => '14日．星期五'
            ),
            'day4' => Array(
                'topic' => '15日．星期六'
            ),
            'day5' => Array(
                'topic' => '16日．星期日'
            ),
            'day6' => Array(
                'topic' => '17日．星期一'
            ),
            'store' => Array(
                'topic' => '便利商店集'
            ),
            'car' => Array(
                'topic' => '車上隨拍集'
            ),
            'show' => Array(
                'topic' => '秀場表演集'
            )
        );
    }

}
