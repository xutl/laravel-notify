<?php

namespace XuTL\Notify;

use Illuminate\Session\Store;

/**
 * Class FlashNotifiy
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class FlashNotify
{
    /**
     * @var Store
     */
    public $session;

    /**
     * FlashNotifiy constructor.
     * @param Store $sesstion
     */
    public function __construct(Store $sesstion)
    {
        $this->session = $sesstion;
    }

    /**
     * @param string $message
     * @param string $title
     * @return FlashNotify
     */
    public function success($message, $title = null)
    {
        return $this->message($message, 'success', $title);
    }

    /**
     * @param string $message
     * @param string $title
     * @return FlashNotify
     */
    public function error($message, $title = null)
    {
        return $this->message($message, 'error', $title);
    }

    /**
     * @param string $message
     * @param string $title
     * @return FlashNotify
     */
    public function warning($message, $title = null)
    {
        return $this->message($message, 'warning', $title);
    }

    /**
     * @param string $message
     * @param string $title
     * @return FlashNotify
     */
    public function info($message, $title = null)
    {
        return $this->message($message, 'info', $title);
    }

    /**
     * @param string $message
     * @param string $type
     * @param string $title
     * @return FlashNotify
     */
    public function message($message, $type, $title)
    {
        $this->session->flash('notifiy.title', $title);
        $this->session->flash('notifiy.message', $message);
        $this->session->flash('notifiy.type', $type);
        return $this;
    }
}