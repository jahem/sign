<?php

/**
 * @author jahem<1094080047@qq.com>
 */

namespace Sign;

class Sign {

    /**
     * 字典排序字符串签名
     * @param array $data
     * @return string
     */
    public static function stringSign($data) {
        $tmp = [];
        foreach ($data as $k => $v) {
            $tmp[$k] = "{$k}={$v}";
        }
        ksort($tmp);
        $string = implode("&", $tmp);
        return md5($string);
    }

}
