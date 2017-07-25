<?php

class Tools
{

    static function dateConverter($date) {
        $convertedDate = new DateTime($date);
        return $convertedDate->format("j M Y");
    }


}