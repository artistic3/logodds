<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[7, 6], [6], [7, 2, 11], [7], [3]] ,
		'qpl/trio' =>  [[1, 3, 7, 2, 6], [1, 3, 7, 2, 11], [1, 3, 7, 6, 11], [1, 3, 7, 10, 11]] ,
		'All QPL values'      =>  '7, 11, 3, 10, 2, 6, 1',
		'new qpl/trio' =>  [[1, 3, 7, 2, 6], [1, 3, 7, 6, 11]] ,
		'New QPL values' =>  '1, 2, 3, 6, 7, 11',
		'Tce'            =>  '2, 3, 6, 7, 10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[8, 9], [9], [7]] ,
		'qpl/trio' =>  [[7, 9, 2, 8, 10], [3, 9, 2, 6, 10], [3, 7, 2, 6, 10], [3, 7, 2, 6, 11]] ,
		'All QPL values'      =>  '6, 2, 11, 8, 3, 7, 9',
		'new qpl/trio' =>  [[7, 9, 2, 8, 10]] ,
		'New QPL values' =>  '2, 7, 8, 9, 10',
		'Tce'            =>  '2, 3, 6, 7, 8, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[27, 17], [27, 10], [10, 5], [5], [18, 17], [17], [18]] ,
		'qpl/trio' =>  [[3, 5, 27, 10, 17], [3, 5, 10, 13, 17], [3, 5, 6, 10, 13], [3, 5, 18, 10, 13], [3, 14, 18, 10, 17]] ,
		'All QPL values'      =>  '3, 10, 17, 18, 13, 14, 5, 6, 27',
		'new qpl/trio' =>  [[3, 5, 27, 10, 17], [3, 5, 10, 13, 17], [3, 5, 6, 10, 13], [3, 5, 18, 10, 13], [3, 14, 18, 10, 17]] ,
		'New QPL values' =>  '3, 5, 6, 10, 13, 14, 17, 18, 27',
		'Tce'            =>  '3, 10, 13, 14, 17, 18',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 7], [9, 5], [9], [4]] ,
		'qpl/trio' =>  [[7, 9, 4, 6, 10], [5, 9, 6, 8, 10], [7, 9, 4, 10, 11]] ,
		'All QPL values'      =>  '10, 9, 11, 4, 7, 5, 8, 6',
		'new qpl/trio' =>  [[7, 9, 4, 6, 10], [7, 9, 4, 10, 11], [5, 9, 6, 8, 10]] ,
		'New QPL values' =>  '4, 5, 6, 7, 8, 9, 10, 11',
		'Tce'            =>  '4, 5, 7, 9, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[7], [10, 1], [10]] ,
		'qpl/trio' =>  [[3, 7, 2, 4, 6], [3, 7, 2, 6, 8], [1, 3, 6, 8, 10], [1, 3, 7, 6, 10], [1, 3, 9, 6, 10]] ,
		'All QPL values'      =>  '3, 6, 10, 1, 2, 9, 7, 4, 8',
		'new qpl/trio' =>  [[1, 3, 6, 8, 10], [1, 3, 7, 6, 10], [1, 3, 9, 6, 10]] ,
		'New QPL values' =>  '1, 3, 6, 7, 8, 9, 10',
		'Tce'            =>  '1, 2, 3, 6, 9, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[10], [6], [7], [6, 7]] ,
		'qpl/trio' =>  [[1, 5, 7, 6, 10], [1, 7, 9, 6, 10], [1, 7, 2, 6, 10], [5, 7, 2, 6, 10]] ,
		'All QPL values'      =>  '6, 10, 7, 2, 5, 1, 9',
		'new qpl/trio' =>  [[1, 5, 7, 6, 10], [1, 7, 9, 6, 10], [1, 7, 2, 6, 10], [5, 7, 2, 6, 10]] ,
		'New QPL values' =>  '1, 2, 5, 6, 7, 9, 10',
		'Tce'            =>  '1, 2, 5, 6, 7, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8], [2, 9], [9], [8, 9]] ,
		'qpl/trio' =>  [[1, 3, 6, 8, 10], [1, 9, 2, 6, 8], [3, 9, 2, 6, 8], [3, 9, 4, 6, 8], [3, 9, 6, 8, 11], [3, 9, 6, 8, 15]] ,
		'All QPL values'      =>  '8, 3, 9, 6, 1, 15, 2, 4, 11, 10',
		'new qpl/trio' =>  [[1, 9, 2, 6, 8], [3, 9, 2, 6, 8], [3, 9, 4, 6, 8], [3, 9, 6, 8, 11], [3, 9, 6, 8, 15]] ,
		'New QPL values' =>  '1, 2, 3, 4, 6, 8, 9, 11, 15',
		'Tce'            =>  '1, 3, 6, 8, 9, 15',
	],
];
