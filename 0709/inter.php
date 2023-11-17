<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 10, 2, 1, 7, 5, 6, 9, 11, 4, 8, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 10, 7, 12',//count:8
		'union2' => '3, 1, 2, 4, 10, 6, 12',//count:7
		'diff' => '7',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '1, 6, 2, 4, 3, 5',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 3, 12',//count:9
		'union2' => '1, 2, 5, 6, 4, 8, 12, 3',//count:8
		'diff' => '7',//count diff:1
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '2, 10, 4, 5, 6, 3, 11, 13, 9, 1, 12, 8, 14, 7',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 10, 1, 7, 8',//count:9
		'union2' => '2, 12, 6, 3, 10, 1, 4, 7, 8',//count:9
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '2, 11, 8, 10, 7, 5, 4, 12, 6, 3, 1, 9',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 8, 11, 1, 9',//count:10
		'union2' => '2, 12, 6, 3, 5, 8, 11, 1, 9',//count:9
		'diff' => '4',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '7, 3, 9, 6, 8, 5, 11, 1, 4, 10, 12',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 1, 6, 9',//count:8
		'union2' => '7, 3, 5, 2, 1, 4, 6, 9',//count:8
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '2, 7, 6, 3, 11, 4, 9, 1, 12, 10, 5, 8',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 7, 5, 8, 1',//count:9
		'union2' => '2, 12, 6, 3, 7, 5, 4, 8, 1',//count:9
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '4, 9, 6, 2, 14, 10, 8, 7, 1, 13, 11, 5, 12',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 6, 9, 3',//count:8
		'union2' => '4, 2, 7, 8, 6, 9, 1',//count:7
		'diff' => '3',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '10, 7, 8, 6, 1, 11, 2, 5, 9, 3, 4, 12',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 3, 5, 2, 8, 9',//count:10
		'union2' => '10, 1, 4, 6, 7, 3, 5, 2, 8, 9',//count:10
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '3, 5, 11, 2, 6, 14, 1, 7, 10, 9, 4, 8, 13, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8, 11',//count:9
		'union2' => '3, 1, 2, 4, 5, 7, 8, 11',//count:8
		'diff' => '6',//count diff:1
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '1, 3, 12, 5, 9, 4, 7, 10, 8, 2, 6, 11',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 10, 11',//count:9
		'union2' => '1, 2, 5, 6, 3, 4, 10, 11',//count:8
		'diff' => '7',//count diff:1
	],
	'11' => [
		/**
		Race 11
		*/
		'All Runners   '  =>  '14, 8, 13, 6, 3, 9, 10, 4, 11, 7, 2, 5, 1, 12',
		'favorite' =>  '14',
		'union1' => '14, 1, 2, 5, 6, 8, 9, 3',//count:8
		'union2' => '14, 1, 2, 5, 8, 9',//count:6
		'diff' => '6, 3',//count diff:2
	],
];
