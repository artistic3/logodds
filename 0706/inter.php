<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '8, 1, 9, 5, 6, 3, 4, 12, 7',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 5, 7, 4',//count:8
		'union2' => '8, 1, 9, 2, 5, 6, 4',//count:7
		'diff' => '7',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '6, 5, 1, 3',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 5, 7, 2',//count:8
		'union2' => '6, 4, 8, 1, 5, 7, 2, 3',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 10, 5, 9, 8, 11, 3, 4, 7, 2',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 10, 4, 3, 8',//count:9
		'union2' => '1, 2, 5, 6, 10, 4, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '4, 2, 8, 5, 9, 11, 6, 1, 10',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 12, 6, 3, 9',//count:9
		'union2' => '4, 2, 7, 8, 12, 6, 3, 1, 9',//count:9
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '12, 9, 8, 11, 1, 6, 10, 5, 2, 3',
		'favorite' =>  '12',
		'union1' => '5, 6, 10, 11, 1, 4, 9, 2, 7, 8',//count:10
		'union2' => '5, 6, 10, 11, 4, 9, 2, 8, 1',//count:9
		'diff' => '7',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '5, 1, 3, 10, 12, 7, 2, 11, 8, 4',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 1, 6, 4',//count:8
		'union2' => '5, 7, 2, 3, 1, 6, 4',//count:7
		'diff' => '8',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '5, 2, 7, 9, 12, 8, 10, 3, 11, 4',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 12, 6, 4',//count:8
		'union2' => '5, 7, 2, 3, 12, 6',//count:6
		'diff' => '8, 4',//count diff:2
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '4, 6, 8, 2, 11, 3, 12, 9, 7, 10',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 6, 3, 9',//count:8
		'union2' => '4, 2, 7, 8, 6, 1, 9',//count:7
		'diff' => '3',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 5, 8, 3, 4, 7, 9, 10, 12, 11',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 9',//count:8
		'union2' => '1, 2, 5, 6, 7, 3, 8, 9',//count:8
		'diff' => '',//count diff:0
	],
];
