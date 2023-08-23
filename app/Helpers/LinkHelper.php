<?php

namespace App\Helpers;

class LinkHelper
{
    public static function linkify($text)
    {
        $pattern = '/(https?:\/\/[^\s]+)/';

        $result = preg_replace_callback(
            $pattern,
            function($matches) {
                $url = $matches[0];
                $replacement = '<a href="' . $url . '" class="underline hover:text-purple-100">' . $url . '</a>';
                return $replacement;
            },
            $text
        );

        return $result;
    }
}
