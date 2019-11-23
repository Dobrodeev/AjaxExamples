<?php
/*spl_autoload_register(function ($class){
    include $class . '.class.php';
});
$stringMindConnect = new MindConnect();*/
include 'MindConnect.php';
echo MindConnect::last_word('returns the length of the
    last word of a given sentence, or 0 for empty string');
echo '<br>';
echo MindConnect::sql_date_format(date('Y-m-d'));
echo '<br>';
print_r(MindConnect::extract_string('The quick
    [brown fox]. Moscow [Kiev].'));
