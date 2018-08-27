<?php


if (!function_exists('notify')) {

    /**
     * @return \XuTL\Notify\FlashNotify
     */
    function notify($message = '')
    {
        return app('flashNotify');
    }
}