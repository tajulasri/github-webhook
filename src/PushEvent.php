<?php
namespace WebhookHandler;

use WebhookHandler\Event;

class PushEvent extends Event
{
    public function eventKey()
    {
        return 'push';
    }
}
