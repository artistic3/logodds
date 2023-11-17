<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 9, 14, 4, 12, 5, 8, 2, 11, 6, 13, 7',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 9, 7, 14, 5',//count:9
		'union2' => '3, 1, 2, 4, 6, 9, 14, 5',//count:8
		'diff' => '7',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 7, 5, 2, 6, 1, 8, 10, 11, 9, 14, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 7, 5, 8',//count:8
		'union2' => '3, 1, 2, 4, 7, 5',//count:6
		'diff' => '6, 8',//count diff:2
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '13, 3, 11, 5, 6, 9, 14, 12, 4, 2, 10, 8',
		'favorite' =>  '13',
		'union1' => '8, 9, 1, 2, 3, 4, 6, 5, 11',//count:9
		'union2' => '8, 9, 1, 2, 3, 4, 5, 11',//count:8
		'diff' => '6',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '4, 2, 9, 7, 5, 14, 11, 6, 1, 12, 10, 8',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 12, 6, 3, 9',//count:9
		'union2' => '4, 2, 7, 8, 12, 6, 3, 9',//count:8
		'diff' => '1',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '10, 4, 11, 5, 2, 7, 3, 8, 12, 13, 14, 9',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 2, 8, 5, 11, 3',//count:10
		'union2' => '10, 1, 4, 6, 2, 7, 8, 5, 11',//count:9
		'diff' => '3',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '1, 14, 4, 9, 2, 13, 12, 11, 6, 10, 5, 8',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 14, 4, 8',//count:8
		'union2' => '1, 2, 5, 6, 14, 4, 7, 8',//count:8
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '2, 5, 1, 9, 6, 10, 8, 13, 14, 3, 12, 11',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 7, 8, 1',//count:9
		'union2' => '2, 12, 6, 3, 5, 7, 1',//count:7
		'diff' => '4, 8',//count diff:2
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '10, 8, 4, 1, 5, 3, 7, 13, 12, 11, 9',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 8, 9, 2',//count:8
		'union2' => '10, 1, 4, 6, 8, 9, 2, 7',//count:8
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '11, 7, 12, 4, 3, 13, 8, 1, 14, 5, 9, 10',
		'favorite' =>  '11',
		'union1' => '5, 8, 11, 1, 3, 7, 2, 4, 6, 10',//count:10
		'union2' => '5, 8, 11, 1, 7, 3, 2, 6, 10',//count:9
		'diff' => '4',//count diff:1
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '13, 2, 5, 7, 4, 3, 14, 12, 1, 9, 11, 10',
		'favorite' =>  '13',
		'union1' => '8, 9, 1, 2, 3, 12, 6, 4, 5, 7',//count:10
		'union2' => '8, 9, 1, 2, 12, 6, 3, 5, 7',//count:9
		'diff' => '4',//count diff:1
	],
];
