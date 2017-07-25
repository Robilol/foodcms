<?php

class Tools
{

    static function dateConverter($date) {
        $convertedDate = new DateTime($date);
        return $convertedDate->format("j M Y");
    }

    static function antiXSS($text) {
        $text = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $text);
        return $text;
    }
}