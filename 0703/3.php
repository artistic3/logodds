<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1, 3], [3]] ,
		'qpl/trio' =>  [[1, 7, 2, 4, 11], [1, 3, 2, 4, 11], [3, 5, 2, 4, 11]] ,
		'inters' =>  [[1, 2, 4, 7, 11], [1, 2, 3, 4, 11], [2, 4, 11], [2, 4, 5, 11]] ,
		'WIN' =>  '1, 3',
		'I' =>  '1, 2, 4, 11',
		'S' =>  '2, 3, 4, 11',
		'all' =>  '1, 2, 3, 4, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[2, 4], [2]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'inters' =>  [[1, 3, 6], [1, 2, 3, 4, 6], [1, 3, 4, 6]] ,
		'WIN' =>  '2',
		'I' =>  '1, 3, 6',
		'S' =>  '1, 2, 3, 6',
		'all' =>  '1, 2, 3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[1]] ,
		'qpl/trio' =>  [[1, 7, 2, 4, 10]] ,
		'inters' =>  [[2, 4, 7, 10], [1, 2, 4, 7, 10]] ,
		'WIN' =>  '1',
		'I' =>  '2, 4, 7, 10',
		'S' =>  '1, 2, 4, 7, 10',
		'all' =>  '1, 2, 4, 7, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2], [2, 9]] ,
		'qpl/trio' =>  [[1, 3, 9, 2, 6]] ,
		'inters' =>  [[1, 3, 6, 9], [1, 3, 6], [1, 2, 3, 6, 9]] ,
		'WIN' =>  '2',
		'I' =>  '1, 3, 6',
		'S' =>  '1, 2, 3, 6',
		'all' =>  '1, 2, 3, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [] ,
		'qpl/trio' =>  [[1, 3, 12, 4, 6]] ,
		'inters' =>  [[1, 3, 4, 6, 12]] ,
		'WIN' =>  '',
		'I' =>  '',
		'S' =>  '',
		'all' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4, 5, 6]] ,
		'qpl/trio' =>  [[3, 5, 4, 6, 11]] ,
		'inters' =>  [[3, 11]] ,
		'WIN' =>  '4, 5, 6',
		'I' =>  '',
		'S' =>  '4, 5, 6',
		'all' =>  '4, 5, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [] ,
		'qpl/trio' =>  [[3, 5, 7, 2, 10], [3, 5, 7, 4, 10]] ,
		'inters' =>  [[2, 3, 5, 7, 10], [3, 4, 5, 7, 10]] ,
		'WIN' =>  '',
		'I' =>  '3, 5, 7, 10',
		'S' =>  '3, 5, 7, 10',
		'all' =>  '3, 5, 7, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[11], [5]] ,
		'qpl/trio' =>  [[3, 5, 7, 6, 11], [5, 7, 4, 6, 11]] ,
		'inters' =>  [[3, 5, 6, 7], [3, 5, 6, 7, 11], [4, 6, 7, 11]] ,
		'WIN' =>  '',
		'I' =>  '3, 6, 7',
		'S' =>  '6, 7',
		'all' =>  '3, 6, 7',
	],
];
