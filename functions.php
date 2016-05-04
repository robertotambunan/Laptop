<?php
function get_title($_title) {
    return('<title>' . $_title . '</title>');
}

function open_page($_title) {
    echo('<html><head>' . get_title($_title) . '</head></head><body>');
}

function close_page() {
    echo('</body></html>');
}

function redirect($_location) {
    header('Location: ' . $_location);
}

function writelog($script_name, $mode,$user,$file_name){
    $log_file= fopen($file_name, $mode);
    $time= date('Y/m/d H:i:s');
    fwrite($log_file, $time . $user.'#accessing ' . $script_name . "\n");
}
function open_file($file_name,$mode){
   $log_file= fopen($file_name,$mode);  
   return $log_file;
}

function close_file($log_file){
    return fclose($log_file);    
}

?>