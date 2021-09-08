<?php

class AllowCrossOrigin{
    /**
     * 跨域解决
     * @param string $domain 域名，默认全部
     * @param string    $allowMethods 允许的方法，默认全部允许
     * @param string  $allowHeaders 允许的请求头
     * @param int  $maxAge 有效期，单位秒
     */
    public static function allow($domain = null, $allowMethods = null, $allowHeaders = null, $maxAge = '86400'){
        if(empty($domain)){
            $domain = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '*';
        }
        header("Access-Control-Allow-Origin: {$domain}");
        header("Access-Control-Allow-Methods: {$allowMethods}");
        header("Access-Control-Allow-Headers: {$allowHeaders}");
        header("Access-Control-Max-Age: {$maxAge}");
    }
}

