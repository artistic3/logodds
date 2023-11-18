<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '10, 2, 8, 1, 9, 5, 6, 3, 4, 12, 7',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 2, 12, 3, 8, 9',//count:10
		'union2' => '10, 1, 4, 6, 2, 12, 3, 8, 9',//count:9
		'diff' => '7',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 4, 6, 5, 1, 3',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'union2' => '2, 12, 6, 3, 4, 7, 8, 1',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '6, 12, 1, 10, 5, 9, 8, 11, 3, 4, 7, 2',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 5, 10, 11, 2, 7',//count:10
		'union2' => '6, 4, 8, 1, 5, 10, 11, 2',//count:8
		'diff' => '3, 7',//count diff:2
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '3, 7, 4, 2, 8, 5, 9, 11, 6, 1, 10',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 7, 5, 8',//count:8
		'union2' => '3, 1, 2, 4, 7, 5, 8',//count:7
		'diff' => '6',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '7, 4, 12, 9, 8, 11, 1, 6, 10, 5, 2, 3',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 8, 1, 6, 10, 11',//count:10
		'union2' => '7, 3, 5, 2, 4, 8, 6, 10, 11',//count:9
		'diff' => '1',//count diff:1
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '6, 9, 5, 1, 3, 10, 12, 7, 2, 11, 8, 4',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 9, 2, 7, 5',//count:9
		'union2' => '6, 4, 8, 1, 9, 2, 5, 7, 3',//count:9
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '6, 1, 5, 2, 7, 9, 12, 8, 10, 3, 11, 4',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 5, 7',//count:8
		'union2' => '6, 4, 8, 1, 2, 5, 7, 3',//count:8
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '1, 5, 4, 6, 8, 2, 11, 3, 12, 9, 7, 10',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 4',//count:8
		'union2' => '1, 2, 5, 6, 7, 3, 4, 8',//count:8
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '6, 2, 1, 5, 8, 3, 4, 7, 9, 10, 12, 11',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 2, 12, 5, 7',//count:9
		'union2' => '6, 4, 8, 1, 2, 12, 3, 5',//count:8
		'diff' => '7',//count diff:1
	],
];
