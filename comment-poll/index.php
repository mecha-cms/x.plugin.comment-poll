<?php

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'comment-poll.min.css');

function fn_comment_poll($a, $comment) {
    $a = ['poll' => Shield::get(Plugin::state('comment-poll', 'poll', 'poll/like'), [
        'path' => Path::F($comment->path, LOT, '/')
    ], false)] + $a;
    return $a;
}

Hook::set('page.a.comment', 'fn_comment_poll');