<?php

require('model/QuizDataManager.php');
require('model/QuizDisplayManager.php');
require('model/QuizResultManager.php');

$QuestionSport = new QuizDisplayManager();
$QuestionMaths = new QuizDisplayManager();

$Answer1 = new Answer();
$Answer2 = new Answer();
$Answer3 = new Answer();
$Answer4 = new Answer();

$Answer1->Answer1('New York Bulls');
$Answer1->Answer2('Los Angeles Kings');
$Answer1->Answer3('Golden State Warriros');
$Answer1->Answer4('Huston Rocket');

$Answer2->Answer1(10);
$Answer2->Answer2(11);
$Answer2->Answer3(12);
$Answer2->Answer4(13);

$Answer3->Answer1(1);
$Answer3->Answer2(2);
$Answer3->Answer3(3);
$Answer3->Answer4(4);

function quiz()
{
	//On appelle la fonction de récupération qui est dans le model et on met le résultat renvoyé dans la variable quizData
	$quizData = QuizDataManager::getQuizData();
	//On appelle la vue
	require('view/quizView.php');
}