<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '6, 7, 2, 3, 4',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 7, 5, 2, 12',//count:9
		'union2' => '6, 4, 8, 1, 7, 3, 5, 2, 12',//count:9
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '4, 8, 2, 5, 6, 3',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 9, 6, 12, 3',//count:9
		'union2' => '4, 2, 7, 8, 1, 9, 12, 6, 3',//count:9
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '4, 6, 8, 2, 5',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 6, 3, 9',//count:8
		'union2' => '4, 2, 7, 8, 6, 1, 9',//count:7
		'diff' => '3',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '7, 1, 2, 8, 6, 3',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 1, 6, 12',//count:8
		'union2' => '7, 3, 5, 2, 1, 6, 12',//count:7
		'diff' => '4',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '2, 11, 4, 5, 1, 7, 9, 6, 10, 12',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 5, 8, 11, 1, 7',//count:10
		'union2' => '2, 12, 6, 3, 5, 8, 11, 1, 4, 7',//count:10
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '10, 7, 1, 4, 8, 9, 2, 5, 12, 11',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 3, 5, 2',//count:8
		'union2' => '10, 1, 4, 6, 7, 3, 5, 2',//count:8
		'diff' => '',//count diff:0
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '3, 10, 7, 9, 2, 11, 6, 12, 4',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 10, 7, 5',//count:8
		'union2' => '3, 1, 2, 4, 10, 6, 7, 5',//count:8
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '6, 10, 1, 2, 3, 9, 7, 8',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 3, 10, 7, 2, 5',//count:9
		'union2' => '6, 4, 8, 1, 10, 2, 5',//count:7
		'diff' => '3, 7',//count diff:2
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '7, 2, 3, 9, 4, 5, 6, 8, 11',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 4, 12, 6, 1',//count:8
		'union2' => '7, 3, 5, 2, 12, 6, 1, 4',//count:8
		'diff' => '',//count diff:0
	],
];
