<?php
if(isset($_POST['submit'])){
$question = "Question:".$_POST['question']."
";
$currentDate = date('l, F j, Y');
$file=fopen("questions.txt", 'a');
fwrite($file, $currentDate);
fwrite($file, "\n");
fwrite($file, $question);
fwrite($file, "\n");
fclose($file);
}
?>