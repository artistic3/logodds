<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '4, 2, 1, 3, 7, 5, 9, 6, 10, 8',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 12, 6, 3, 1, 5',//count:9
		'union2' => '4, 2, 7, 12, 6, 1, 5',//count:7
		'diff' => '8, 3',//count diff:2
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '1, 6, 3, 5, 9, 4, 8, 2, 10, 7, 11',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 4, 8, 3',//count:7
		'union2' => '1, 2, 5, 6, 4, 8, 3',//count:7
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '4, 5, 6, 3, 1, 2',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 5, 3, 6, 1',//count:8
		'union2' => '4, 2, 7, 5, 6, 8',//count:6
		'diff' => '3, 1',//count diff:2
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 7, 8, 3, 6, 9, 4, 10, 12, 2, 5',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 9',//count:8
		'union2' => '1, 2, 5, 7, 3, 8, 9',//count:7
		'diff' => '6',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '9, 11, 8, 1, 5, 12, 3, 2, 7, 4, 10, 6',
		'favorite' =>  '9',
		'union1' => '4, 6, 9, 2, 5, 8, 11, 1',//count:8
		'union2' => '4, 6, 9, 5, 8, 11, 1',//count:7
		'diff' => '2',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '4, 8, 1, 9, 13, 2, 3, 7, 12, 11, 5, 6, 10, 14',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 9, 5, 6',//count:8
		'union2' => '4, 2, 7, 8, 1, 9, 5',//count:7
		'diff' => '6',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '3, 9, 4, 1, 10, 2, 5, 7, 6, 8',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 9, 7, 8',//count:8
		'union2' => '3, 1, 2, 4, 6, 9, 7',//count:7
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '1, 2, 5, 12, 7, 11, 8, 4, 3, 14, 9, 10, 13',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 12, 3, 7',//count:7
		'union2' => '1, 2, 5, 12, 6, 7',//count:6
		'diff' => '3',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '8, 10, 5, 11, 9, 1, 4, 6, 3, 2, 7, 12',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 10, 4, 6, 5, 7, 3',//count:10
		'union2' => '8, 1, 9, 10, 4, 5, 7, 2',//count:8
		'diff' => '6, 3',//count diff:2
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '2, 3, 4, 6, 10, 1, 8, 9, 12, 5, 7, 11',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 1, 4, 7, 8',//count:8
		'union2' => '2, 12, 6, 3, 1, 4, 7',//count:7
		'diff' => '8',//count diff:1
	],
];
