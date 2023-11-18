<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '1, 10, 3, 9, 14, 4, 12, 5, 8, 2, 11, 6, 13, 7',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 10, 4, 3',//count:7
		'union2' => '1, 2, 5, 10, 4, 3',//count:6
		'diff' => '6',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '4, 13, 3, 7, 5, 2, 6, 1, 8, 10, 11, 9, 14, 12',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 9, 1, 3',//count:7
		'union2' => '4, 2, 7, 8, 9, 1, 3',//count:7
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '7, 1, 13, 3, 11, 5, 6, 9, 14, 12, 4, 2, 10, 8',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 1, 6, 8, 9',//count:8
		'union2' => '7, 3, 5, 1, 2, 8, 9',//count:7
		'diff' => '6',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '3, 13, 4, 2, 9, 7, 5, 14, 11, 6, 1, 12, 10, 8',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 8, 9, 7',//count:7
		'union2' => '3, 1, 2, 8, 9, 4, 7',//count:7
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '6, 1, 10, 4, 11, 5, 2, 7, 3, 8, 12, 13, 14, 9',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 2, 5, 10',//count:7
		'union2' => '6, 4, 8, 1, 2, 5, 10',//count:7
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '7, 3, 1, 14, 4, 9, 2, 13, 12, 11, 6, 10, 5, 8',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 1, 4, 6',//count:7
		'union2' => '7, 3, 5, 1, 2',//count:5
		'diff' => '4, 6',//count diff:2
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '4, 7, 2, 5, 1, 9, 6, 10, 8, 13, 14, 3, 12, 11',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 3, 5, 12, 6',//count:8
		'union2' => '4, 2, 7, 3, 5, 12, 6',//count:7
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '2, 6, 10, 8, 4, 1, 5, 3, 7, 13, 12, 11, 9',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 8, 1, 10',//count:8
		'union2' => '2, 12, 6, 4, 8, 10, 1',//count:7
		'diff' => '3',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '2, 6, 11, 7, 12, 4, 3, 13, 8, 1, 14, 5, 9, 10',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 8, 1, 5, 11',//count:9
		'union2' => '2, 12, 6, 4, 8, 5, 11',//count:7
		'diff' => '3, 1',//count diff:2
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '8, 6, 13, 2, 5, 7, 4, 3, 14, 12, 1, 9, 11, 10',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 4',//count:6
		'union2' => '8, 1, 9, 6, 4',//count:5
		'diff' => '2',//count diff:1
	],
];
