<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '2, 5, 4, 6, 12, 3, 1, 7, 11, 8, 9',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 7, 8, 1',//count:9
		'union2' => '2, 12, 6, 3, 5, 7, 4, 8',//count:8
		'diff' => '1',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '4, 2, 7, 6, 5, 8, 10, 1, 11, 9, 3, 12',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 12, 6, 3, 5',//count:9
		'union2' => '4, 2, 7, 8, 12, 6, 3, 5',//count:8
		'diff' => '1',//count diff:1
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '5, 11, 9, 2, 12, 8, 4, 1, 7, 3, 6, 10',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 11, 1, 4, 6, 9',//count:10
		'union2' => '5, 7, 2, 3, 8, 11, 1, 4, 6, 9',//count:10
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '3, 6, 4, 1, 12, 2, 8, 10, 11, 9',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 7',//count:7
		'union2' => '3, 1, 2, 4, 6, 8, 7',//count:7
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '6, 12, 4, 9, 3, 7, 10, 8, 2, 11, 5, 1',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 5, 10, 11, 2, 7',//count:10
		'union2' => '6, 4, 8, 1, 5, 10, 11, 2, 7',//count:9
		'diff' => '3',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '4, 12, 8, 2, 3, 1, 7, 6, 9, 5, 10',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 5, 6, 10, 11, 9',//count:10
		'union2' => '4, 2, 7, 8, 5, 6, 10, 11, 1, 9',//count:10
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '5, 7, 9, 4, 11, 3, 8, 10, 12, 2, 1, 6',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 4, 6, 9',//count:8
		'union2' => '5, 7, 2, 3, 4, 6, 9',//count:7
		'diff' => '8',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '2, 3, 11, 8, 4, 5, 9, 7, 1, 6, 10, 12',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 1, 5, 8, 11',//count:9
		'union2' => '2, 12, 6, 3, 1, 4, 5, 8, 11',//count:9
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '5, 8, 6, 2, 9, 11, 1, 7, 3, 10, 12, 4',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 1, 9, 6, 4',//count:9
		'union2' => '5, 7, 2, 3, 8, 1, 9, 6, 4',//count:9
		'diff' => '',//count diff:0
	],
];
