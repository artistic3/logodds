<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '8, 2, 11, 10, 3, 5, 1, 7, 6, 4, 9',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 12, 3, 4, 5, 11',//count:10
		'union2' => '8, 1, 9, 2, 12, 6, 3, 5, 11',//count:9
		'diff' => '4',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 5, 6, 4, 9, 8, 3, 7, 1',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 7, 8, 1',//count:9
		'union2' => '2, 12, 6, 3, 5, 7, 4, 8, 1',//count:9
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 4, 2, 9, 7, 8, 6, 5, 3',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 12, 3',//count:9
		'union2' => '1, 2, 5, 6, 4, 7, 8, 12, 3',//count:9
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 2, 4, 3, 6, 5',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 12, 3, 4, 8',//count:9
		'union2' => '1, 2, 5, 6, 12, 3, 4, 7, 8',//count:9
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '7, 11, 5, 6, 3, 14, 12, 1, 10, 4, 13, 8, 9, 2',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 8, 11, 1',//count:8
		'union2' => '7, 3, 5, 2, 8, 11, 1',//count:7
		'diff' => '4',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '4, 3, 7, 10, 8, 1, 5, 2, 9, 6',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 3, 6, 5',//count:8
		'union2' => '4, 2, 7, 8, 3, 1, 5',//count:7
		'diff' => '6',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '8, 7, 1, 4, 2, 5, 6, 9, 3, 10',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 7, 3, 5, 4',//count:9
		'union2' => '8, 1, 9, 2, 7, 3, 5, 6',//count:8
		'diff' => '4',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '8, 5, 10, 1, 11, 4, 3, 2, 12, 9',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 3, 10, 4',//count:10
		'union2' => '8, 1, 9, 2, 5, 7, 3, 10, 4, 6',//count:10
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 6, 4, 9, 5, 2, 10, 7',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 3',//count:8
		'union2' => '1, 2, 5, 6, 4, 8, 7',//count:7
		'diff' => '3',//count diff:1
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '6, 1, 2, 10, 3, 7, 4, 8, 9, 5',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 7, 12',//count:9
		'union2' => '6, 4, 8, 1, 2, 5, 12, 3',//count:8
		'diff' => '7',//count diff:1
	],
];
