<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2], [6], [1, 2], [6, 1], [4, 12]] ,
		'qpl/trio' =>  [[3, 12, 2, 4, 6], [3, 12, 2, 6, 11], [1, 3, 2, 4, 6], [3, 5, 2, 4, 6], [5, 12, 2, 4, 6]] ,
		'inters' =>  [[3, 4, 6, 12], [2, 3, 4, 12], [3, 6, 11, 12], [3, 4, 6], [2, 4, 3], [2, 4, 3, 5], [2, 5, 6]] ,
		'All QPL values'      =>  '2, 5, 4, 6, 12, 3, 11, 1',
		'Tce '      =>  '2, 3, 4, 5, 6, 12',
		'Wins'      =>  '1, 2, 4, 6, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5, 6], [5, 6, 7]] ,
		'qpl/trio' =>  [[5, 7, 2, 4, 6]] ,
		'inters' =>  [[2, 4, 7], [2, 4]] ,
		'All QPL values'      =>  '4, 2, 7, 6, 5',
		'Tce '      =>  '2, 4, 5, 6, 7',
		'Wins'      =>  '5, 6, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9], [8, 9]] ,
		'qpl/trio' =>  [[5, 9, 12, 2, 8], [5, 9, 12, 8, 11], [5, 9, 12, 2, 11]] ,
		'inters' =>  [[2, 5, 8, 12], [5, 11, 12], [2, 5, 12], [5, 12, 8, 11], [5, 12, 11, 2]] ,
		'All QPL values'      =>  '5, 11, 9, 2, 12, 8',
		'Tce '      =>  '2, 5, 8, 9, 11, 12',
		'Wins'      =>  '8, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[6, 4]] ,
		'qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'inters' =>  [[2, 1, 3]] ,
		'All QPL values'      =>  '3, 6, 4, 1, 2',
		'Tce '      =>  '1, 2, 3, 4, 6',
		'Wins'      =>  '4, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4], [4, 9]] ,
		'qpl/trio' =>  [[9, 12, 4, 6, 11], [9, 12, 2, 4, 6], [9, 12, 4, 6, 10]] ,
		'inters' =>  [[6, 9, 11, 12], [2, 6, 12], [2, 6, 9, 12], [6, 10, 12, 9]] ,
		'All QPL values'      =>  '6, 12, 4, 9, 10, 2, 11',
		'Tce '      =>  '2, 4, 6, 9, 10, 12',
		'Wins'      =>  '4, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[8], [11]] ,
		'qpl/trio' =>  [[1, 12, 4, 8, 11], [1, 12, 4, 6, 11], [1, 12, 2, 4, 8], [3, 12, 2, 4, 8]] ,
		'inters' =>  [[1, 4, 11, 12], [1, 4, 8, 12], [1, 4, 6, 11, 12], [1, 4, 6, 12], [4, 8, 12, 2, 1], [4, 8, 12, 2, 3]] ,
		'All QPL values'      =>  '4, 12, 8, 2, 3, 1, 6',
		'Tce '      =>  '1, 2, 3, 4, 8, 12',
		'Wins'      =>  '8, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5, 7, 9], [4], [9], [3, 4], [3]] ,
		'qpl/trio' =>  [[5, 7, 9, 2, 4], [5, 7, 12, 4, 8], [5, 7, 12, 4, 11], [3, 5, 7, 4, 11], [5, 7, 9, 4, 11]] ,
		'inters' =>  [[2, 4], [4, 5, 7, 8, 12], [4, 5, 7, 11, 12], [3, 4, 5, 7, 11], [3, 5, 7, 11], [4, 5, 7, 11], [4, 5, 7, 9, 11], [5, 7, 11]] ,
		'All QPL values'      =>  '5, 7, 9, 4, 11, 3, 8, 12, 2',
		'Tce '      =>  '3, 4, 5, 7, 9, 11',
		'Wins'      =>  '3, 4, 5, 7, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8], [9, 8], [9]] ,
		'qpl/trio' =>  [[3, 5, 2, 8, 11], [3, 5, 9, 8, 11], [3, 5, 9, 2, 8], [3, 5, 9, 2, 11]] ,
		'inters' =>  [[2, 3, 5, 8, 11], [2, 3, 5, 11], [3, 5, 11], [3, 5, 2]] ,
		'All QPL values'      =>  '2, 3, 11, 8, 5, 9',
		'Tce '      =>  '2, 3, 5, 8, 9, 11',
		'Wins'      =>  '8, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [1, 8], [1], [1, 9], [8, 9], [7], [6, 7], [7, 9, 8]] ,
		'qpl/trio' =>  [[1, 5, 9, 8, 11], [1, 5, 7, 8, 11], [5, 7, 9, 8, 11], [1, 5, 7, 2, 8], [1, 5, 7, 6, 8], [1, 5, 9, 6, 8]] ,
		'inters' =>  [[1, 5, 8, 11], [5, 7, 11], [5, 7, 8, 11], [5, 8, 11], [1, 5, 7, 8, 11], [1, 2, 5, 7, 8], [2, 5, 7, 8], [1, 2, 5, 8], [1, 5, 8], [5, 11], [5, 1, 8, 6]] ,
		'All QPL values'      =>  '5, 8, 6, 2, 9, 11, 1, 7',
		'Tce '      =>  '2, 5, 6, 8, 9, 11',
		'Wins'      =>  '1, 6, 7, 8, 9',
	],
];
