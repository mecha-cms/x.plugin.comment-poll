<?php

Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'comment-poll.min.css');

function fn_comment_poll($a, $comment) {
    $lot = ['path' => str_replace(DS, '/', Path::F($comment->path, LOT))];
    ob_start();
    include EXTEND . DS . 'poll' . DS . 'lot' . DS . 'worker' . DS . Plugin::state(__DIR__, 'poll', 'poll/like') . '.php';
    array_unshift($a, ob_get_clean());
    return $a;
}

Hook::set('page.a.comment', 'fn_comment_poll');