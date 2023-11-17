<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '12, 3, 11, 4, 1, 7, 5, 9, 8, 6',
		'favorite' =>  '10',
		'union1' => '5, 6, 10, 11, 1, 3, 2, 4, 8',//count:9
		'union2' => '5, 6, 10, 11, 3, 1, 2, 4, 8',//count:9
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '1, 6, 7, 8, 5, 3',
		'favorite' =>  '4',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 3',//count:8
		'union2' => '1, 2, 5, 6, 4, 8, 7, 3',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 9, 3, 6, 4, 12, 5, 8, 10, 7',
		'favorite' =>  '11',
		'union1' => '1, 2, 5, 6, 7, 4, 9, 3',//count:8
		'union2' => '1, 2, 5, 6, 4, 9, 3',//count:7
		'diff' => '7',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '11, 2, 3, 9, 5, 6, 8, 10, 12, 7',
		'favorite' =>  '1',
		'union1' => '5, 8, 11, 1, 3, 2, 12, 6, 4',//count:9
		'union2' => '5, 8, 11, 1, 2, 12, 6, 3, 4',//count:9
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 12, 5, 11, 9, 4, 10, 7, 3, 6',
		'favorite' =>  '2',
		'union1' => '8, 1, 9, 2, 6, 5, 10, 11, 7, 3',//count:10
		'union2' => '8, 1, 9, 2, 5, 6, 10, 11, 7, 3',//count:10
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '4, 6, 8, 12, 9, 5, 2, 7, 10, 11',
		'favorite' =>  '1',
		'union1' => '4, 2, 7, 8, 1, 6, 3, 9',//count:8
		'union2' => '4, 2, 7, 8, 6, 1, 9',//count:7
		'diff' => '3',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '9, 10, 3, 1, 6, 2, 7, 5',
		'favorite' =>  '4',
		'union1' => '4, 6, 9, 2, 7, 10, 1, 3',//count:8
		'union2' => '4, 6, 9, 2, 10, 1, 3',//count:7
		'diff' => '7',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '1, 5, 7, 12, 10, 8, 9, 2, 11, 6',
		'favorite' =>  '3',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 4',//count:8
		'union2' => '1, 2, 5, 6, 7, 3',//count:6
		'diff' => '8, 4',//count diff:2
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '4, 9, 2, 1, 3, 5, 7, 10, 8, 12',
		'favorite' =>  '6',
		'union1' => '4, 2, 7, 8, 1, 6, 9, 12, 3',//count:9
		'union2' => '4, 2, 7, 8, 6, 9, 12, 3',//count:8
		'diff' => '1',//count diff:1
	],
];
