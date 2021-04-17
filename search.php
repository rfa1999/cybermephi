<?php 
$dbhost = "localhost";
$dbname = "poisk_test";
$dbuser = "root";
$dbpass = "";
global $tutorial_db;
$tutorial_db = new mysqli();
$tutorial_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$tutorial_db->set_charset("utf8");
if ($tutorial_db->connect_errno) {printf("Connect failed: %s\n", $tutorial_db->connect_error);exit();}
$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<h3>nameString</h3>';
$html .= '<h4>functionString</h4>';
$html .= '</a>';
$html .= '</li>';
$search_string = preg_replace("/[^АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя0-9]/", " ", $_POST['query']);
$search_string = $tutorial_db->real_escape_string($search_string);
if (strlen($search_string) > 1 && $search_string !== ' ') {$query = 'SELECT * FROM search_1 WHERE function LIKE "%'.$search_string.'%" OR name LIKE "%'.$search_string.'%"';
$result = $tutorial_db->query($query);
while($results = $result->fetch_array()) {$result_array[] = $results;}
   if (isset($result_array)) {foreach ($result_array as $result) {
   $display_function = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['function']);
   $display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);
$display_url = 'https://rsv.ru/'.urlencode($result['function']);
   $output = str_replace('nameString', $display_name, $html);
   $output = str_replace('functionString', $display_function, $output);
   $output = str_replace('urlString', $display_url, $output);
   echo($output);}}else{
      $output = str_replace('urlString', 'javascript:void(0);', $html);
      $output = str_replace('nameString', '<b>Результатов не найдено.</b>', $output);
      $output = str_replace('functionString', 'Извините!', $output);echo($output);}}
?>