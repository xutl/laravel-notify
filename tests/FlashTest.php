<?php
namespace XuTL\Flash\Tests;

use Illuminate\Session\Store;
use PHPUnit\Framework\TestCase;
use XuTL\Flash\FlashNotify;

class FlashTest extends TestCase
{
    /**
     * @var FlashNotify
     */
    public $flash;

    public function setUp()
    {
        $this->flash = new FlashNotify();
    }

    public function testsuccess()
    {
        $this->flash->success('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testerror()
    {
        $this->flash->error('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testinfo()
    {
        $this->flash->info('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }

    public function testwarning()
    {
        $this->flash->warning('Hello');
        $this->assertEquals(Session::get('flash.message'), 'Hello');
    }
}