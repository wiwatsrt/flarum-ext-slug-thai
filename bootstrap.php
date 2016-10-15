<?php

use Flarum\Event\DiscussionWillBeSaved;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    $events->listen(DiscussionWillBeSaved::class, function (DiscussionWillBeSaved $event) {
        $text = $event->discussion->title;
        $text = \WiwatSrt\SlugThai\SlugThai::genSlug($text);
        $event->discussion->slug = $text;
    });
};