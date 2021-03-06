<?php
namespace Payum\Core\Request;

class NotifyRequest extends BaseModelRequest
{
    /**
     * @var array
     */
    protected $notification;

    /**
     * @param array $notification
     * @param mixed $model
     */
    public function __construct(array $notification, $model = null)
    {
        $this->notification = $notification;

        parent::__construct($model);
    }

    /**
     * @return array
     */
    public function getNotification()
    {
        return $this->notification;
    }
}