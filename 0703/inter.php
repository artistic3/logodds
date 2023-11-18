<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '11, 4, 14, 2, 3, 7, 1, 13, 5, 9, 6, 10, 8, 12',
		'favorite' =>  '11',
		'union1' => '5, 8, 11, 1, 4, 2, 7, 14',//count:8
		'union2' => '5, 8, 11, 4, 2, 7, 14, 1',//count:8
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 1, 4, 6, 9, 3, 10, 5, 11, 12, 7, 8',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 1, 5, 4, 7, 8',//count:9
		'union2' => '2, 12, 6, 1, 5, 4, 7',//count:7
		'diff' => '3, 8',//count diff:2
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '4, 7, 3, 1, 9, 10, 6, 2, 11, 8, 5, 12',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 3, 5, 1',//count:7
		'union2' => '4, 2, 7, 3, 5, 1',//count:6
		'diff' => '8',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '2, 1, 6, 3, 9, 11, 8, 12, 4, 5, 7, 10',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 1, 5, 4, 8',//count:8
		'union2' => '2, 12, 6, 1, 5, 4, 8',//count:7
		'diff' => '3',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '3, 6, 4, 1, 11, 12, 9, 2, 7, 13, 10, 5, 8',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 7',//count:7
		'union2' => '3, 1, 2, 6, 4, 8, 7',//count:7
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '4, 5, 3, 11, 6, 12, 1, 8, 7, 2, 9, 10',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 5, 3, 1',//count:7
		'union2' => '4, 2, 7, 5, 3, 1',//count:6
		'diff' => '8',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '3, 5, 2, 10, 7, 1, 11, 4, 6, 13, 14, 8, 9, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 5, 7, 12, 6',//count:8
		'union2' => '3, 1, 2, 5, 7, 12, 6',//count:7
		'diff' => '4',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '6, 5, 11, 4, 13, 7, 1, 3, 12, 9, 8, 10, 2, 14',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 5, 7, 2, 3, 11',//count:9
		'union2' => '6, 4, 8, 5, 7, 2, 11',//count:7
		'diff' => '1, 3',//count diff:2
	],
];
