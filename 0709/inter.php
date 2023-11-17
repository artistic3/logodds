<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '2, 1, 7, 5, 6, 9, 11, 4, 8, 12',
		'favorite' =>  '3',
		'union1' => '2, 12, 6, 3, 4, 1, 5, 7',//count:8
		'union2' => '2, 12, 6, 3, 1, 5, 7',//count:7
		'diff' => '4',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 4, 3, 5',
		'favorite' =>  '1',
		'union1' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'union2' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '4, 5, 6, 3, 11, 13, 9, 1, 12, 8, 14, 7',
		'favorite' =>  '2',
		'union1' => '4, 2, 7, 8, 1, 5, 3, 6',//count:8
		'union2' => '4, 2, 7, 8, 5, 3, 6, 1',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '8, 10, 7, 5, 4, 12, 6, 3, 1, 9',
		'favorite' =>  '2',
		'union1' => '8, 1, 9, 2, 6, 10, 4, 7, 3, 5',//count:10
		'union2' => '8, 1, 9, 2, 10, 4, 6, 7, 3, 5',//count:10
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '9, 6, 8, 5, 11, 1, 4, 10, 12',
		'favorite' =>  '7',
		'union1' => '4, 6, 9, 2, 7, 8, 1, 3',//count:8
		'union2' => '4, 6, 9, 2, 8, 1',//count:6
		'diff' => '7, 3',//count diff:2
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '6, 3, 11, 4, 9, 1, 12, 10, 5, 8',
		'favorite' =>  '2',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 11',//count:8
		'union2' => '6, 4, 8, 1, 3, 2, 5, 11',//count:8
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '6, 2, 14, 10, 8, 7, 1, 13, 11, 5, 12',
		'favorite' =>  '4',
		'union1' => '6, 4, 8, 1, 3, 2, 12, 14, 5',//count:9
		'union2' => '6, 4, 8, 1, 2, 12, 3, 14, 5',//count:9
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '8, 6, 1, 11, 2, 5, 9, 3, 4, 12',
		'favorite' =>  '10',
		'union1' => '8, 1, 9, 2, 6, 4, 3, 5, 7',//count:9
		'union2' => '8, 1, 9, 2, 6, 4, 5',//count:7
		'diff' => '3, 7',//count diff:2
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '11, 2, 6, 14, 1, 7, 10, 9, 4, 8, 13, 12',
		'favorite' =>  '3',
		'union1' => '5, 8, 11, 1, 3, 2, 12, 6, 4',//count:9
		'union2' => '5, 8, 11, 1, 2, 12, 6, 3, 4',//count:9
		'diff' => '',//count diff:0
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '12, 5, 9, 4, 7, 10, 8, 2, 6, 11',
		'favorite' =>  '1',
		'union1' => '5, 6, 10, 11, 1, 7, 2, 3, 8, 4, 9',//count:11
		'union2' => '5, 6, 10, 11, 7, 2, 3, 4, 9',//count:9
		'diff' => '1, 8',//count diff:2
	],
	'11' => [
		/**
		Race 11
		*/
		'All Runners   '  =>  '13, 6, 3, 9, 10, 4, 11, 7, 2, 5, 1, 12',
		'favorite' =>  '14',
		'union1' => '8, 9, 1, 2, 3, 6, 4',//count:7
		'union2' => '8, 9, 1, 2, 6, 4, 3',//count:7
		'diff' => '',//count diff:0
	],
];
