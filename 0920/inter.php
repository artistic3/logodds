<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '4, 1, 5, 7',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 5, 6, 3',//count:8
		'union2' => '4, 2, 7, 8, 1, 5, 6, 3',//count:8
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '8, 5, 1, 11, 2, 3, 10, 7, 9',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 3',//count:8
		'union2' => '8, 1, 9, 2, 5, 7, 3, 6',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 3, 2, 6',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 12',//count:8
		'union2' => '1, 2, 5, 6, 3, 4, 12',//count:7
		'diff' => '7',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 7, 2, 3, 8, 12, 10, 4, 5, 6',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 12',//count:8
		'union2' => '1, 2, 5, 6, 7, 3, 12',//count:7
		'diff' => '4',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '2, 5, 9, 4, 6, 1, 8, 10',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 7, 8, 9',//count:9
		'union2' => '2, 12, 6, 3, 5, 7, 4, 9',//count:8
		'diff' => '8',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '3, 1, 7, 8, 4, 5, 6, 10',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7',//count:7
		'union2' => '3, 1, 2, 4, 5, 6, 7',//count:7
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '3, 2, 5, 4, 6, 8, 10, 11, 9',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 12, 5, 7, 8',//count:9
		'union2' => '3, 1, 2, 4, 12, 6, 5, 7',//count:8
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '7, 1, 4, 10, 2, 3, 9, 5, 8, 12',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 1, 6, 8',//count:8
		'union2' => '7, 3, 5, 2, 1, 6, 4, 8',//count:8
		'diff' => '',//count diff:0
	],
];
