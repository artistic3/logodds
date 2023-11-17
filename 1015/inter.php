<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '7, 1, 6, 5, 8, 2',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 1, 6, 8',//count:8
		'union2' => '7, 3, 5, 2, 1, 6, 4, 8',//count:8
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '4, 11, 7, 8, 9, 14, 2, 13, 1, 6, 10, 12',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 5, 11, 3',//count:8
		'union2' => '4, 2, 7, 8, 5, 11, 1, 3',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '2, 7, 1, 6, 14, 9, 4, 12, 3, 11, 13, 10',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 7, 5, 1',//count:8
		'union2' => '2, 12, 6, 3, 7, 5, 1',//count:7
		'diff' => '4',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '5, 4, 6, 3, 13, 2, 14, 10, 8, 11, 7, 12',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 4, 1, 6',//count:8
		'union2' => '5, 7, 2, 3, 4, 8, 6, 1',//count:8
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 11, 2, 10, 6, 3, 1, 5, 7, 14, 12',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 11, 3, 12, 4',//count:10
		'union2' => '8, 1, 9, 2, 5, 11, 12, 6, 3',//count:9
		'diff' => '4',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '1, 11, 7, 9, 2, 4, 3, 10, 5, 14, 8, 13',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 8, 11, 3, 4',//count:9
		'union2' => '1, 2, 5, 6, 8, 11, 7, 3',//count:8
		'diff' => '4',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '8, 5, 7, 9, 4, 2, 10, 6',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 3, 4',//count:9
		'union2' => '8, 1, 9, 2, 5, 7, 3',//count:7
		'diff' => '6, 4',//count diff:2
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '14, 10, 8, 1, 7, 13, 6, 12, 11, 5, 4, 3',
		'favorite' =>  '14',
		'union1' => '14, 1, 2, 5, 6, 10, 4, 7, 8, 9',//count:10
		'union2' => '14, 1, 2, 5, 10, 4, 6, 8, 9',//count:9
		'diff' => '7',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '3, 11, 12, 4, 8, 1, 13, 7, 5, 14, 10, 9',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 8, 11, 10',//count:9
		'union2' => '3, 1, 2, 4, 5, 8, 11, 6, 10',//count:9
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '8, 4, 12, 1, 9, 6, 10, 14, 5, 7, 11, 13',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 4, 7, 5, 10, 11',//count:10
		'union2' => '8, 1, 9, 2, 4, 7, 5, 6, 10, 11',//count:10
		'diff' => '',//count diff:0
	],
];
