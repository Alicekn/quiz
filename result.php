<?php
require_once('common.php');

$qid = $_GET['qid'];
$answer = $_GET['answer'];

if($question[$qid] == $answer){
	echo "正解";
}
else{
	echo "不正解";
}
