<?php

return [
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[1, 12], [9, 1], [9, 1, 11, 2], [9, 7], [9]] ,
		'qpl/trio' =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'All QPL values'      =>  '9, 11, 1, 7, 2, 3, 12',
		'new qpl/trio' =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'New QPL values' =>  '1, 2, 3, 7, 9, 11, 12',
		'Tce'            =>  '1, 2, 3, 7, 9, 11',
		'diff1'          =>  '3',
		'diff2'          =>  '3',
		'inter1'         =>  '1, 2, 7, 9, 11, 12',
		'inter2'         =>  '1, 2, 7, 9, 11, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9, 8], [8, 9, 7], [9], [9, 2]] ,
		'qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'All QPL values'      =>  '9, 2, 3, 1, 7, 8, 4',
		'new qpl/trio' =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'New QPL values' =>  '1, 2, 3, 4, 7, 8, 9',
		'Tce'            =>  '1, 2, 3, 7, 8, 9',
		'diff1'          =>  '1, 3, 4',
		'diff2'          =>  '1, 3, 4',
		'inter1'         =>  '2, 7, 8, 9',
		'inter2'         =>  '2, 7, 8, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [6, 1]] ,
		'qpl/trio' =>  [[6, 11, 10, 7, 9], [11, 10, 3, 7, 6], [11, 4, 3, 7, 6], [11, 4, 7, 9, 6], [11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'All QPL values'      =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'new qpl/trio' =>  [[11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'New QPL values' =>  '1, 2, 4, 6, 7, 11',
		'Tce'            =>  '1, 4, 6, 7, 10, 11',
		'diff1'          =>  '2, 4, 7, 11',
		'diff2'          =>  '2, 3, 4, 7, 9, 10, 11',
		'inter1'         =>  '1, 6',
		'inter2'         =>  '1, 6',
	],
];
