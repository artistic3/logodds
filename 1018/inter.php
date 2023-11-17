<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 5, 4, 9, 11, 10, 6, 8, 1, 2, 7, 12',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 5, 7, 8',//count:8
		'union2' => '3, 1, 2, 4, 5, 7, 8',//count:7
		'diff' => '6',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '3, 4, 12, 5, 2, 1, 10, 9, 7, 11, 6, 8',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 7, 8, 5, 10, 11',//count:10
		'union2' => '3, 1, 2, 4, 7, 8, 5, 6, 10, 11',//count:10
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 8, 4, 2, 5, 9, 6, 3, 11, 10, 7, 12',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 8, 9, 4',//count:8
		'union2' => '1, 2, 5, 6, 8, 9, 4, 7',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '2, 6, 3, 7, 11, 9, 4, 1, 5, 10, 8, 12',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 8, 1',//count:7
		'union2' => '2, 12, 6, 3, 4, 8, 1',//count:7
		'diff' => '',//count diff:0
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 4, 1, 11, 9, 2, 3, 5, 6, 12, 7',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 4, 7, 5',//count:8
		'union2' => '8, 1, 9, 2, 4, 7, 5, 6',//count:8
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '6, 3, 11, 2, 5, 9, 8, 1, 10, 12, 4, 7',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 11',//count:8
		'union2' => '6, 4, 8, 1, 3, 2, 5, 11',//count:8
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '2, 4, 3, 12, 5, 7, 10, 11, 9, 1, 6, 8',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'union2' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '3, 6, 1, 7, 11, 4, 10, 2, 12, 8, 9, 5',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 5, 7',//count:8
		'union2' => '3, 1, 2, 4, 6, 8, 5',//count:7
		'diff' => '7',//count diff:1
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '1, 10, 5, 8, 6, 9, 2, 3, 12, 7, 11, 4',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 10, 4, 3, 8',//count:9
		'union2' => '1, 2, 5, 6, 10, 4, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
];
