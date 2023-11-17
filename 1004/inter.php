<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 1, 11, 7, 2, 9, 8, 6, 5, 4, 10',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8, 11, 12',//count:10
		'union2' => '3, 1, 2, 4, 5, 6, 8, 11, 7, 12',//count:10
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 8, 10, 5, 2, 7, 9, 6, 11, 1, 4, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 9, 10, 7, 5, 12',//count:11
		'union2' => '3, 1, 2, 4, 8, 9, 10, 6, 5, 7, 12',//count:11
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '6, 1, 2, 3, 4, 7, 9, 8, 5',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 7, 12',//count:9
		'union2' => '6, 4, 8, 1, 2, 5, 12, 3, 7',//count:9
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '2, 3, 6, 8, 5, 7, 11, 9, 1, 4, 10',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 1, 8, 9, 5, 7',//count:10
		'union2' => '2, 12, 6, 3, 1, 4, 8, 9, 5, 7',//count:10
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 3, 4, 6, 1, 5, 9, 7',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 3, 4, 7, 5',//count:9
		'union2' => '8, 1, 9, 2, 3, 4, 7, 6, 5',//count:9
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '1, 5, 7, 10, 3, 12, 8, 4, 2, 9, 11, 6',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 4, 10',//count:9
		'union2' => '1, 2, 5, 6, 7, 3, 10, 4',//count:8
		'diff' => '8',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '1, 4, 11, 3, 2, 7, 10, 5, 9, 12, 6, 8',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 11, 3, 12',//count:10
		'union2' => '1, 2, 5, 6, 4, 7, 8, 11, 3, 12',//count:10
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '12, 5, 4, 1, 7, 8, 6, 2, 10, 3, 11',
		'favorite' =>  '12',
		'union1' => '5, 6, 10, 11, 1, 7, 2, 3, 8, 4',//count:10
		'union2' => '5, 6, 10, 11, 7, 2, 3, 4, 8, 1',//count:10
		'diff' => '',//count diff:0
	],
];
