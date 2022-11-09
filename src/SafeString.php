<?php

namespace SGakhramanov\MakeSafe;

class SafeString
{
    public function makeSafe($string)
    {
        return trim(strip_tags($string));
    }
}