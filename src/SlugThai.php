<?php

namespace WiwatSrt\SlugThai;

class SlugThai {
    /**
     * Create a slug out of the given string.
     *
     * Non-alphanumeric characters are converted to hyphens.
     *
     * @param string $str
     * @return string
     */
    public static function genSlug($str)
    {
        $str = strtolower($str);
        $str = preg_replace('/[^a-z0-9ก-๙เแ]/i', '-', $str);
        $str = preg_replace('/-+/', '-', $str);
        $str = preg_replace('/-$|^-/', '', $str);

        return $str ?: '-';
    }
}