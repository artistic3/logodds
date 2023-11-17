<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '1, 3, 5, 2',
		'favorite' =>  '4',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 8',//count:8
		'union2' => '1, 2, 5, 6, 3, 4, 7',//count:7
		'diff' => '8',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '5, 8, 1, 2, 4, 14, 9, 3, 7, 13, 10',
		'favorite' =>  '6',
		'union1' => '5, 7, 2, 3, 8, 1, 9, 6',//count:8
		'union2' => '5, 7, 2, 3, 8, 1, 9, 6',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '3, 4, 1',
		'favorite' =>  '6',
		'union1' => '3, 1, 2, 4, 6, 7, 8, 5',//count:8
		'union2' => '3, 1, 2, 4, 7, 8, 5, 6',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '9, 2, 5, 13, 4, 7, 8, 11, 6, 10, 1, 12',
		'favorite' =>  '3',
		'union1' => '4, 6, 9, 2, 7, 12, 3, 5, 8',//count:9
		'union2' => '4, 6, 9, 2, 12, 3, 5, 7',//count:8
		'diff' => '8',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '11, 8, 5, 7, 4, 3, 6, 12, 10, 9',
		'favorite' =>  '1',
		'union1' => '5, 8, 11, 1, 3, 9, 2, 6, 7',//count:9
		'union2' => '5, 8, 11, 1, 9, 2, 7, 3',//count:8
		'diff' => '6',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '3, 5, 11, 12, 10, 8, 1, 6, 4, 9',
		'favorite' =>  '7',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8, 11',//count:9
		'union2' => '3, 1, 2, 4, 5, 7, 8, 11',//count:8
		'diff' => '6',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '9, 1, 5, 6, 2, 8, 7',
		'favorite' =>  '4',
		'union1' => '4, 6, 9, 2, 7, 1, 5, 3, 8',//count:9
		'union2' => '4, 6, 9, 2, 1, 5, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '3, 1, 6, 10, 4, 2, 5, 9, 11, 7, 12, 14',
		'favorite' =>  '8',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8',//count:8
		'union2' => '3, 1, 2, 4, 5, 6, 8',//count:7
		'diff' => '7',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '5, 2, 4, 9, 8, 10, 14, 13, 11, 3, 12, 7',
		'favorite' =>  '1',
		'union1' => '5, 7, 2, 3, 8, 12, 6, 4, 1',//count:9
		'union2' => '5, 7, 2, 3, 12, 6, 4, 8',//count:8
		'diff' => '1',//count diff:1
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '10, 5, 8, 12, 3, 1, 6, 4, 7, 11',
		'favorite' =>  '2',
		'union1' => '10, 1, 4, 6, 7, 5, 2, 3, 8, 9',//count:10
		'union2' => '10, 1, 4, 6, 5, 7, 2, 3, 8, 9',//count:10
		'diff' => '',//count diff:0
	],
];
