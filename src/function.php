<?php


if (!function_exists('flash')) {

    /**
     * @param string $message
     * @return \XuTL\Flash\FlashNotify
     */
    function flash($message = '')
    {
        /**
         * @var \XuTL\Flash\FlashNotify $notify
         */
        $notify = app('flashNotify');
        if (!is_null($message)) {
            return $notify->success($message); //默认为success
        }
        return $notify;
    }
}