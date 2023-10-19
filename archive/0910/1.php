<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[10, 2], [10, 2, 1], [10, 11]] ,
		'qpl/trio' =>  [[8, 3, 1, 10, 2], [8, 1, 3, 10, 11], [8, 2, 11, 3, 5]] ,
		'inters' =>  [[8, 3, 1], [8, 3], [8, 2, 11, 3, 5]] ,
		'All QPL values'      =>  '8, 2, 11, 10, 3, 5, 1',
		'Tce'      =>  '2, 3, 5, 8, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[14], [7], [7, 6], [11], [14, 6], [7, 11]] ,
		'qpl/trio' =>  [[7, 3, 4, 11, 14], [3, 14, 11, 7, 6], [3, 1, 6, 7, 11], [11, 6, 10, 3, 7], [3, 12, 6, 7, 11], [5, 3, 11, 7, 6]] ,
		'inters' =>  [[7, 3, 4, 11], [7, 3, 14, 11, 4], [3, 14, 11, 4], [3, 14, 11], [7, 3, 14, 6], [7, 3, 11], [3, 14, 6], [3, 1, 6], [3, 1, 11], [11, 6, 10, 3], [3, 12, 6], [5, 3, 11]] ,
		'All QPL values'      =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4',
		'Tce'      =>  '3, 5, 6, 7, 11, 14',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[4], [4, 10], [10, 1, 3], [3]] ,
		'qpl/trio' =>  [[3, 7, 1, 10, 4], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [1, 3, 7, 8, 4], [4, 8, 10, 1, 3]] ,
		'inters' =>  [[3, 7, 1, 10], [8, 4, 10, 7, 3], [4, 8, 10, 1, 7], [1, 3, 7, 8], [1, 3, 7], [1, 7, 3, 4, 10], [4, 8], [4, 10, 8, 7]] ,
		'All QPL values'      =>  '4, 3, 7, 10, 8, 1',
		'Tce'      =>  '1, 3, 4, 7, 8, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [2], [7], [8]] ,
		'qpl/trio' =>  [[8, 6, 1, 2, 3], [8, 6, 2, 1, 5], [8, 2, 4, 1, 7], [7, 1, 5, 4, 8]] ,
		'inters' =>  [[8, 6, 1, 2, 3], [8, 6, 2, 1], [8, 6, 1, 3], [8, 2, 4, 1], [7, 1, 5, 4]] ,
		'All QPL values'      =>  '8, 7, 1, 4, 2, 5, 6, 3',
		'Tce'      =>  '1, 2, 4, 5, 7, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [8]] ,
		'qpl/trio' =>  [[10, 8, 4, 5, 1], [10, 8, 4, 5, 3], [10, 8, 2, 3, 5], [10, 8, 11, 1, 5], [5, 1, 3, 10, 8], [8, 10, 2, 1, 5]] ,
		'inters' =>  [[10, 8, 4, 5, 1], [10, 8, 4, 5, 3], [10, 8, 2, 3], [10, 8, 11, 1], [5, 1, 3, 10], [5, 1, 3, 10, 8], [8, 10, 2, 1], [8, 10, 11, 5, 1]] ,
		'All QPL values'      =>  '8, 5, 10, 1, 11, 4, 3, 2',
		'Tce'      =>  '1, 4, 5, 8, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[1], [2]] ,
		'qpl/trio' =>  [[6, 10, 4, 7, 1], [6, 10, 2, 7, 1], [6, 1, 10, 3, 2], [1, 7, 3, 6, 2]] ,
		'inters' =>  [[6, 10, 4, 7], [6, 10, 2, 7, 1], [6, 1, 10, 3], [1, 7, 3, 6, 2]] ,
		'All QPL values'      =>  '6, 1, 2, 10, 7, 3, 4',
		'Tce'      =>  '1, 2, 3, 6, 7, 10',
	],
];
