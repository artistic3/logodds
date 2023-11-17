<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '11, 7, 2, 9, 8, 6, 5, 4, 10',
		'favorite' =>  '3',
		'union1' => '5, 8, 11, 1, 3, 7, 2, 4, 12, 6',//count:10
		'union2' => '5, 8, 11, 1, 7, 3, 2, 12, 6',//count:9
		'diff' => '4',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '10, 5, 2, 7, 9, 6, 11, 1, 4, 12',
		'favorite' =>  '3',
		'union1' => '10, 1, 4, 6, 7, 5, 2, 3, 8, 12',//count:10
		'union2' => '10, 1, 4, 6, 5, 7, 2, 3, 12',//count:9
		'diff' => '8',//count diff:1
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '2, 3, 4, 7, 9, 8, 5',
		'favorite' =>  '6',
		'union1' => '2, 12, 6, 3, 4, 1, 7, 8',//count:8
		'union2' => '2, 12, 6, 3, 1, 4, 7, 8',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '6, 8, 5, 7, 11, 9, 1, 4, 10',
		'favorite' =>  '2',
		'union1' => '6, 4, 8, 1, 3, 9, 2, 5, 7',//count:9
		'union2' => '6, 4, 8, 1, 9, 2, 5, 7, 3',//count:9
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '4, 6, 1, 5, 9, 7',
		'favorite' =>  '8',
		'union1' => '4, 2, 7, 8, 1, 6, 3, 5',//count:8
		'union2' => '4, 2, 7, 8, 6, 1, 5',//count:7
		'diff' => '3',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '7, 10, 3, 12, 8, 4, 2, 9, 11, 6',
		'favorite' =>  '1',
		'union1' => '7, 3, 5, 2, 4, 10, 1, 6',//count:8
		'union2' => '7, 3, 5, 2, 10, 1, 4, 6',//count:8
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '11, 3, 2, 7, 10, 5, 9, 12, 6, 8',
		'favorite' =>  '1',
		'union1' => '5, 8, 11, 1, 3, 2, 4, 6, 12',//count:9
		'union2' => '5, 8, 11, 1, 3, 2, 4, 12, 6',//count:9
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '4, 1, 7, 8, 6, 2, 10, 3, 11',
		'favorite' =>  '12',
		'union1' => '4, 2, 7, 8, 1, 5, 6, 3',//count:8
		'union2' => '4, 2, 7, 8, 1, 5, 6, 3',//count:8
		'diff' => '',//count diff:0
	],
];
