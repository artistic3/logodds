<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '4, 6, 1, 3, 5, 2',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 6, 1, 5',//count:7
		'union2' => '4, 2, 7, 6, 8, 1, 5',//count:7
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '6, 12, 5, 8, 1, 2, 4, 14, 9, 3, 7, 13, 10',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 5, 10, 11, 7, 2, 3',//count:10
		'union2' => '6, 4, 8, 5, 10, 7, 2',//count:7
		'diff' => '1, 11, 3',//count diff:3
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '6, 5, 3, 4, 1',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 5, 7, 2, 3',//count:8
		'union2' => '6, 4, 8, 5, 7, 2, 3, 1',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '3, 14, 9, 2, 5, 13, 4, 7, 8, 11, 6, 10, 1, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 14, 5, 6, 9',//count:8
		'union2' => '3, 1, 2, 14, 4, 6, 9',//count:7
		'diff' => '5',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '1, 2, 11, 8, 5, 7, 4, 3, 6, 12, 10, 9',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 12, 3, 8, 11',//count:8
		'union2' => '1, 2, 5, 12, 6, 8, 11',//count:7
		'diff' => '3',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '7, 2, 3, 5, 11, 12, 10, 8, 1, 6, 4, 9',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 12, 6, 1, 4',//count:8
		'union2' => '7, 3, 5, 2, 12, 6, 1',//count:7
		'diff' => '4',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '4, 3, 9, 1, 5, 6, 2, 8, 7',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 3, 1, 6, 9',//count:8
		'union2' => '4, 2, 7, 3, 1, 6, 9',//count:7
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '8, 13, 3, 1, 6, 10, 4, 2, 5, 9, 11, 7, 12, 14',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 3, 4',//count:6
		'union2' => '8, 1, 9, 3, 2',//count:5
		'diff' => '4',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 6, 5, 2, 4, 9, 8, 10, 14, 13, 11, 3, 12, 7',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 4, 8, 7, 3',//count:8
		'union2' => '1, 2, 5, 6, 4, 8, 7',//count:7
		'diff' => '3',//count diff:1
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '2, 9, 10, 5, 8, 12, 3, 1, 6, 4, 7, 11',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 9, 10, 1',//count:8
		'union2' => '2, 12, 6, 4, 9, 10, 1',//count:7
		'diff' => '3',//count diff:1
	],
];
