<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '7, 2, 6, 1, 8, 5, 4, 9, 10, 3',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 12, 6, 8, 1, 9',//count:10
		'union2' => '7, 3, 5, 2, 12, 6, 4, 8, 1, 9',//count:10
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 6, 4, 8, 2, 10, 1, 7, 13, 11, 14, 9, 12, 5',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 7, 9, 12',//count:9
		'union2' => '3, 1, 2, 4, 6, 8, 7, 9, 12',//count:9
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '5, 1, 7, 2, 9, 3, 8, 6, 4, 10',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 1, 6, 4, 12, 9',//count:10
		'union2' => '5, 7, 2, 3, 1, 6, 12, 4, 9',//count:9
		'diff' => '8',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '7, 4, 1, 12, 5, 2, 11, 3, 9, 10, 6, 8',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 8, 1, 6, 10, 11',//count:10
		'union2' => '7, 3, 5, 2, 4, 8, 1, 6, 10, 11',//count:10
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 1, 9, 6, 3, 10, 2, 7, 4, 5',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 4, 3',//count:9
		'union2' => '8, 1, 9, 2, 5, 6, 4, 3',//count:8
		'diff' => '7',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '9, 2, 5, 14, 4, 13, 1, 10, 12, 3, 6, 8, 11, 7',
		'favorite' =>  '9',
		'union1' => '4, 6, 9, 2, 7, 12, 3, 5, 8, 14, 1',//count:11
		'union2' => '4, 6, 9, 2, 12, 3, 5, 7, 14, 1, 8',//count:11
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '1, 8, 7, 2, 5, 6, 3, 4, 9, 10',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 8, 9, 3, 4, 12',//count:10
		'union2' => '1, 2, 5, 6, 8, 9, 7, 3, 12',//count:9
		'diff' => '4',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '2, 1, 4, 6, 3, 7, 5',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 1, 5, 7, 8',//count:9
		'union2' => '2, 12, 6, 3, 1, 5, 4, 7, 8',//count:9
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 9, 5, 6, 3, 2, 8, 12, 4, 7, 14, 10, 11, 13',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 9, 3, 8',//count:9
		'union2' => '1, 2, 5, 6, 4, 9, 7, 3, 8',//count:9
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '8, 4, 2, 1, 6, 12, 7, 5, 3, 11, 9, 10',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 4, 7, 12, 3, 5',//count:10
		'union2' => '8, 1, 9, 2, 4, 7, 12, 6, 3, 5',//count:10
		'diff' => '',//count diff:0
	],
];
