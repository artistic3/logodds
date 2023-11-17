<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '1, 3, 7, 5, 9, 6, 10, 8',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4',//count:7
		'union2' => '1, 2, 5, 6, 3, 4, 7',//count:7
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 5, 9, 4, 8, 2, 10, 7, 11',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8, 9',//count:9
		'union2' => '3, 1, 2, 4, 5, 7, 6, 9',//count:8
		'diff' => '8',//count diff:1
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '6, 3, 1, 2',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 7',//count:8
		'union2' => '6, 4, 8, 1, 3, 2, 5',//count:7
		'diff' => '7',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '8, 3, 6, 9, 4, 10, 12, 2, 5',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 3, 4',//count:7
		'union2' => '8, 1, 9, 2, 3, 4, 6',//count:7
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 1, 5, 12, 3, 2, 7, 4, 10, 6',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 3',//count:8
		'union2' => '8, 1, 9, 2, 5, 6, 7, 3',//count:8
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '1, 9, 13, 2, 3, 7, 12, 11, 5, 6, 10, 14',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 9, 8, 3',//count:9
		'union2' => '1, 2, 5, 6, 4, 9, 8',//count:7
		'diff' => '7, 3',//count diff:2
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '4, 1, 10, 2, 5, 7, 6, 8',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 5, 6, 10',//count:8
		'union2' => '4, 2, 7, 8, 1, 5, 6, 10',//count:8
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '5, 12, 7, 11, 8, 4, 3, 14, 9, 10, 13',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 6, 10, 11, 1, 4',//count:10
		'union2' => '5, 7, 2, 3, 6, 10, 11',//count:7
		'diff' => '8, 1, 4',//count diff:3
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '5, 11, 9, 1, 4, 6, 3, 2, 7, 12',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 11, 1, 4, 6, 9',//count:10
		'union2' => '5, 7, 2, 3, 8, 11, 1, 4, 6, 9',//count:10
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '4, 6, 10, 1, 8, 9, 12, 5, 7, 11',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 6, 3, 10',//count:8
		'union2' => '4, 2, 7, 8, 6, 1, 10',//count:7
		'diff' => '3',//count diff:1
	],
];
