<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 7, 13, 8, 2, 4, 10, 14, 11, 9, 1',
		'favorite' =>  '5',
		'union1' => '3, 1, 2, 4, 6, 7, 5, 8, 9',//count:9
		'union2' => '3, 1, 2, 4, 7, 5, 8, 9',//count:8
		'diff' => '6',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '5, 1, 11, 10, 12, 7, 8, 3, 4, 13, 6',
		'favorite' =>  '2',
		'union1' => '5, 7, 2, 3, 8, 1, 6, 11',//count:8
		'union2' => '5, 7, 2, 3, 1, 6, 8, 11',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '12, 6, 10, 3, 14, 7, 2, 9, 4, 5, 11, 13',
		'favorite' =>  '1',
		'union1' => '5, 6, 10, 11, 1, 4, 8, 3, 7',//count:9
		'union2' => '5, 6, 10, 11, 4, 8, 1',//count:7
		'diff' => '3, 7',//count diff:2
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 2, 6, 8, 5, 7, 13, 12, 3, 9, 14, 11',
		'favorite' =>  '4',
		'union1' => '1, 2, 5, 6, 7, 12, 3, 4, 8',//count:9
		'union2' => '1, 2, 5, 6, 12, 3, 4, 8',//count:8
		'diff' => '7',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '4, 2, 3, 12, 1, 7, 5, 6, 13, 14, 11, 10',
		'favorite' =>  '9',
		'union1' => '4, 2, 7, 8, 1, 12, 6, 3',//count:8
		'union2' => '4, 2, 7, 8, 12, 6, 3, 1',//count:8
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '9, 3, 6, 7, 14, 13, 11, 2, 8, 4, 10, 12',
		'favorite' =>  '1',
		'union1' => '4, 6, 9, 2, 7, 3, 1, 8',//count:8
		'union2' => '4, 6, 9, 2, 3, 1, 8',//count:7
		'diff' => '7',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '9, 1, 12, 8, 7, 3, 6, 11, 5, 10, 13, 4',
		'favorite' =>  '14',
		'union1' => '4, 6, 9, 2, 7, 1, 5, 10, 11',//count:9
		'union2' => '4, 6, 9, 2, 1, 5, 10, 11',//count:8
		'diff' => '7',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '6, 5, 4, 3, 11, 9, 10, 1, 12, 7',
		'favorite' =>  '2',
		'union1' => '6, 4, 8, 1, 3, 5, 7, 2',//count:8
		'union2' => '6, 4, 8, 1, 5, 7, 2, 3',//count:8
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '2, 6, 4, 12, 9, 7, 13, 5, 3, 14, 11, 10',
		'favorite' =>  '1',
		'union1' => '2, 12, 6, 3, 4, 8, 1, 7',//count:8
		'union2' => '2, 12, 6, 3, 4, 8, 1, 7',//count:8
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '11, 9, 10, 13, 3, 14, 5, 1, 2, 8, 7, 12',
		'favorite' =>  '4',
		'union1' => '5, 8, 11, 1, 3, 4, 6, 9, 2, 7, 10',//count:11
		'union2' => '5, 8, 11, 1, 4, 6, 9, 2, 10',//count:9
		'diff' => '3, 7',//count diff:2
	],
	'11' => [
		/**
		Race 11
		*/
		'All Runners   '  =>  '5, 4, 8, 9, 10, 13, 1, 3, 6, 12, 11',
		'favorite' =>  '2',
		'union1' => '5, 7, 2, 3, 8, 4, 1, 9, 6',//count:9
		'union2' => '5, 7, 2, 3, 4, 8, 1, 9',//count:8
		'diff' => '6',//count diff:1
	],
];
