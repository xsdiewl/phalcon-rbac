<?php
// +----------------------------------------------------------------------
// | 捕获错误日志 [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2016/11/26 Time: 16:19
// +----------------------------------------------------------------------
if ($config->log->error) {
    register_shutdown_function(function () {
        if ($e = error_get_last()) {
            $log = $e['message'] . " in " . $e['file'] . ' line ' . $e['line'];
            logger($log, 'error', 'error.log');
        }
    });
}
