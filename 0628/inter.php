<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 5, 7, 6, 4',
		'favorite' =>  '1',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8',//count:8
		'union2' => '3, 1, 2, 4, 5, 7',//count:6
		'diff' => '6, 8',//count diff:2
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '9, 5, 11, 7, 8, 12, 6, 2, 10, 4',
		'favorite' =>  '3',
		'union1' => '4, 6, 9, 2, 7, 5, 3, 8, 11, 1',//count:10
		'union2' => '4, 6, 9, 2, 5, 7, 3, 8, 11, 1',//count:10
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '5, 3, 1, 2, 8, 10, 4, 7, 11, 6',
		'favorite' =>  '12',
		'union1' => '5, 7, 2, 3, 8, 1, 4, 6',//count:8
		'union2' => '5, 7, 2, 3, 1, 4, 6',//count:7
		'diff' => '8',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '10, 6, 12, 8, 4, 7, 3, 2, 11, 5',
		'favorite' =>  '9',
		'union1' => '10, 1, 4, 6, 7, 8, 3, 5, 11',//count:9
		'union2' => '10, 1, 4, 6, 8, 5, 11',//count:7
		'diff' => '7, 3',//count diff:2
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '3, 10, 11, 6, 7, 2, 9, 8, 12, 4',
		'favorite' =>  '1',
		'union1' => '3, 1, 2, 4, 6, 10, 7, 5, 8, 11',//count:10
		'union2' => '3, 1, 2, 4, 10, 6, 5, 8, 11',//count:9
		'diff' => '7',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '8, 12, 4, 3, 2, 9, 11, 10, 1, 5',
		'favorite' =>  '6',
		'union1' => '8, 1, 9, 2, 6, 5, 10, 11, 4, 7',//count:10
		'union2' => '8, 1, 9, 2, 5, 6, 10, 11, 4, 7',//count:10
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '11, 4, 2, 7, 6, 10, 8, 12, 9, 3',
		'favorite' =>  '1',
		'union1' => '5, 8, 11, 1, 3, 4, 2, 7, 12, 6',//count:10
		'union2' => '5, 8, 11, 1, 4, 2, 7, 12, 6, 3',//count:10
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '5, 9, 7, 8, 1, 3, 12, 2, 11, 10',
		'favorite' =>  '4',
		'union1' => '5, 7, 2, 3, 8, 4, 6, 9',//count:8
		'union2' => '5, 7, 2, 3, 4, 6, 9',//count:7
		'diff' => '8',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 3, 9, 11, 12, 5, 10, 7, 8, 4',
		'favorite' =>  '2',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 9',//count:8
		'union2' => '1, 2, 5, 6, 3, 4, 9',//count:7
		'diff' => '7',//count diff:1
	],
];
