<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 4, 7, 1, 6, 5, 8, 2',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 7, 8, 5',//count:8
		'union2' => '3, 1, 2, 4, 7, 8, 5',//count:7
		'diff' => '6',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 5, 4, 11, 7, 8, 9, 14, 2, 13, 1, 6, 10, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8',//count:8
		'union2' => '3, 1, 2, 4, 5, 7, 8',//count:7
		'diff' => '6',//count diff:1
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '5, 8, 2, 7, 1, 6, 14, 9, 4, 12, 3, 11, 13, 10',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 1, 9, 6, 12, 4',//count:10
		'union2' => '5, 7, 2, 3, 8, 1, 9, 12, 6',//count:9
		'diff' => '4',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 9, 5, 4, 6, 3, 13, 2, 14, 10, 8, 11, 7, 12',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 9, 3, 8',//count:9
		'union2' => '1, 2, 5, 6, 4, 9, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '13, 9, 8, 11, 2, 10, 6, 3, 1, 5, 7, 14, 12',
		'favorite' =>  '13',
		'union1' => '8, 9, 1, 2, 3, 4, 6, 7',//count:8
		'union2' => '8, 9, 1, 2, 4, 6',//count:6
		'diff' => '3, 7',//count diff:2
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '12, 6, 1, 11, 7, 9, 2, 4, 3, 10, 5, 14, 8, 13',
		'favorite' =>  '12',
		'union1' => '5, 6, 10, 11, 1, 4, 8, 3, 2, 7',//count:10
		'union2' => '5, 6, 10, 11, 4, 8, 1, 2',//count:8
		'diff' => '3, 7',//count diff:2
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '3, 1, 8, 5, 7, 9, 4, 2, 10, 6',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8, 9',//count:9
		'union2' => '3, 1, 2, 4, 5, 6, 8, 9',//count:8
		'diff' => '7',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '2, 9, 14, 10, 8, 1, 7, 13, 6, 12, 11, 5, 4, 3',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 9, 7, 14, 1, 5',//count:10
		'union2' => '2, 12, 6, 3, 4, 9, 14, 1, 5',//count:9
		'diff' => '7',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '6, 2, 3, 11, 12, 4, 8, 1, 13, 7, 5, 14, 10, 9',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 12',//count:7
		'union2' => '6, 4, 8, 1, 2, 12, 3',//count:7
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '3, 2, 8, 4, 12, 1, 9, 6, 10, 14, 5, 7, 11, 13',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 12, 8, 9',//count:8
		'union2' => '3, 1, 2, 4, 12, 6, 8, 9',//count:8
		'diff' => '',//count diff:0
	],
];
