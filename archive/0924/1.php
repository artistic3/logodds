<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[2, 1, 3]] ,
		'qpl/trio' =>  [[4, 6, 2, 1, 3]] ,
		'All QPL values'      =>  '4, 2, 1, 3, 6',
		'new qpl/trio' =>  [[4, 6, 2, 1, 3]] ,
		'New QPL values' =>  '1, 2, 3, 4, 6',
		'Tce'            =>  '1, 2, 3, 4, 6',
		'diff1'          =>  '',
		'diff2'          =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 1, 10], [9, 7, 8], [9, 11], [9, 7], [9], [9, 8], [9, 1]] ,
		'qpl/trio' =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1]] ,
		'All QPL values'      =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'new qpl/trio' =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 11, 9, 7, 8]] ,
		'New QPL values' =>  '1, 3, 7, 8, 9, 10, 11',
		'Tce'            =>  '1, 5, 8, 9, 11, 12',
		'diff1'          =>  '5, 12',
		'diff2'          =>  '3, 10, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio' =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'All QPL values'      =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'new qpl/trio' =>  [[7, 12, 4, 9, 8], [13, 4, 8, 9, 7]] ,
		'New QPL values' =>  '4, 7, 8, 9, 12, 13',
		'Tce'            =>  '1, 2, 4, 8, 9, 13',
		'diff1'          =>  '1, 2',
		'diff2'          =>  '7, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 8], [7, 11], [8], [7], [1, 7], [1, 7, 8], [1]] ,
		'qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [5, 12, 2, 11, 1]] ,
		'All QPL values'      =>  '1, 2, 5, 12, 7, 11, 8',
		'new qpl/trio' =>  [[1, 5, 11, 7, 8], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7]] ,
		'New QPL values' =>  '1, 2, 5, 7, 8, 11, 12',
		'Tce'            =>  '1, 2, 5, 7, 11, 12',
		'diff1'          =>  '',
		'diff2'          =>  '8',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2], [9], [8, 9], [2, 9], [2, 4, 10], [2, 4]] ,
		'qpl/trio' =>  [[4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [1, 3, 2, 4, 9], [2, 4, 6, 1, 3], [2, 4, 3, 8, 9]] ,
		'All QPL values'      =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'new qpl/trio' =>  [[2, 4, 10, 3, 1]] ,
		'New QPL values' =>  '1, 2, 3, 4, 10',
		'Tce'            =>  '1, 2, 3, 4, 6, 10',
		'diff1'          =>  '6',
		'diff2'          =>  '',
	],
];
