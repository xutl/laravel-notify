<?php
namespace XuTL\Notify;

use Illuminate\Support\Facades\Facade;

/**
 * Class Notify
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class Notify extends Facade
{

    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'flashNotify';
    }
}