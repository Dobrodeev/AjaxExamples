<?php


/**
 * Class MindConnect
 * @package workwithtext
 * @author Dobrodeev V.
 * @copyright 2019
 */
class MindConnect
{
    /**
     * returns the length of the last word of a given sentence, or 0 for empty string
     * @param $sentence
     * @return int
     */
    public static function last_word($sentence)
    {
        if ($sentence == '') {
            return 0;
        }
        $words = explode(" ", $sentence);
        $words = $words[count($words) - 1];
        return strlen($words);
    }

    /**
     * returns a date formatted in sql date format
     * @param $dateStr
     * @return string
     */
    public static function sql_date_format($dateStr)
    {
        return strftime("%Y-%m-%d", strtotime($dateStr));
    }

    /**
     * returns a part of a string that is marked with square parenthesis, if exists. For example: for "The quick
     * [brown fox]." It will return "brown fox". For "Hello World" it will return ""
     * @param $str
     * @return array
     */
    public static function extract_string($str)
    {
        $mas_parenthesis = array();
        $work_str = $str;
        while (1) {
            $pos1 = strpos($work_str, '[');
            $pos2 = strpos($work_str, ']');
            if ($pos1 === false || $pos2 === false) {
                break;
            }
            $newInsert = substr($work_str, $pos1, $pos2 - $pos1 + 1);
            $mas_parenthesis[] = $newInsert;
            $work_str = str_replace($newInsert, '', $work_str);
        }
        return $mas_parenthesis;
    }
}