<?php
// +----------------------------------------------------------------------
// | Demo [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lmx0536.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <http://www.lmx0536.cn>
// +----------------------------------------------------------------------
// | Date: 2016/11/28 Time: 9:40
// +----------------------------------------------------------------------
namespace Test;

use \UnitTestCase;

class ServiceTest extends UnitTestCase
{
    public function testSessionCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('session'),
            'No Session Service'
        );
    }

    public function testCacheCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('cache'),
            'No Cache Service'
        );
    }

    public function testUrlCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('url'),
            'No Url Service'
        );
    }

    public function testConfigCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('config'),
            'No Config Service'
        );
    }

    public function testDbCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('db'),
            'No DB Service'
        );
    }

    public function testModelsMetadataCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('modelsMetadata'),
            'No DB Service'
        );
    }

    public function testRouterCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('router'),
            'No Router Service'
        );
    }

    public function testViewCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('view'),
            'No View Service'
        );
    }

    public function testDispatcherCase()
    {
        $di = di();
        $this->assertTrue(
            $di->has('dispatcher'),
            'No Dispatcher Service'
        );
    }
}