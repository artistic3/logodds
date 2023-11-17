<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '6, 1, 8, 5, 4, 9, 10, 3',
		'favorite' =>  '7',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 7, 9',//count:9
		'union2' => '6, 4, 8, 1, 2, 5, 9',//count:7
		'diff' => '3, 7',//count diff:2
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '4, 8, 2, 10, 1, 7, 13, 11, 14, 9, 12, 5',
		'favorite' =>  '3',
		'union1' => '4, 2, 7, 8, 1, 9, 6, 12, 3',//count:9
		'union2' => '4, 2, 7, 8, 1, 9, 12, 6, 3',//count:9
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '7, 2, 9, 3, 8, 6, 4, 10',
		'favorite' =>  '5',
		'union1' => '7, 3, 5, 2, 4, 12, 6, 9',//count:8
		'union2' => '7, 3, 5, 2, 12, 6, 4, 9',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 12, 5, 2, 11, 3, 9, 10, 6, 8',
		'favorite' =>  '7',
		'union1' => '1, 2, 5, 6, 7, 10, 11, 3, 8',//count:9
		'union2' => '1, 2, 5, 6, 10, 11, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '9, 6, 3, 10, 2, 7, 4, 5',
		'favorite' =>  '8',
		'union1' => '4, 6, 9, 2, 7, 8, 1, 3',//count:8
		'union2' => '4, 6, 9, 2, 8, 1, 3',//count:7
		'diff' => '7',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '5, 14, 4, 13, 1, 10, 12, 3, 6, 8, 11, 7',
		'favorite' =>  '9',
		'union1' => '5, 7, 2, 3, 8, 14, 1, 6, 4',//count:9
		'union2' => '5, 7, 2, 3, 14, 1, 4, 8',//count:8
		'diff' => '6',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '7, 2, 5, 6, 3, 4, 9, 10',
		'favorite' =>  '1',
		'union1' => '7, 3, 5, 2, 4, 12, 6, 8',//count:8
		'union2' => '7, 3, 5, 2, 12, 6',//count:6
		'diff' => '4, 8',//count diff:2
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '4, 6, 3, 7, 5',
		'favorite' =>  '2',
		'union1' => '4, 2, 7, 8, 1, 6, 3',//count:7
		'union2' => '4, 2, 7, 8, 6, 1, 3',//count:7
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '5, 6, 3, 2, 8, 12, 4, 7, 14, 10, 11, 13',
		'favorite' =>  '1',
		'union1' => '5, 7, 2, 3, 8, 6, 4, 1',//count:8
		'union2' => '5, 7, 2, 3, 6, 4, 8, 1',//count:8
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '2, 1, 6, 12, 7, 5, 3, 11, 9, 10',
		'favorite' =>  '8',
		'union1' => '2, 12, 6, 3, 4, 1, 5, 7, 8',//count:9
		'union2' => '2, 12, 6, 3, 1, 5, 4, 8',//count:8
		'diff' => '7',//count diff:1
	],
];
