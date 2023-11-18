<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '9, 7, 2, 5, 1, 3, 10, 11, 4, 12, 8, 6',
		'favorite' =>  '9',
		'union1' => '4, 6, 9, 2, 7, 3, 5, 12',//count:8
		'union2' => '4, 6, 9, 2, 7, 3, 5, 12',//count:8
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 3, 6, 11, 1, 8, 10, 12, 4, 7, 9, 5',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 1, 8',//count:7
		'union2' => '2, 12, 6, 3, 1, 4, 8',//count:7
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '5, 11, 4, 10, 9, 12, 3, 7, 1, 6, 8, 2',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 11, 1, 4',//count:8
		'union2' => '5, 7, 2, 3, 8, 11, 1, 4',//count:8
		'diff' => '',//count diff:0
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '1, 5, 10, 11, 8, 9, 3, 2, 6, 12, 4, 7',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 10, 4',//count:9
		'union2' => '1, 2, 5, 6, 7, 3, 10, 4',//count:8
		'diff' => '8',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '1, 6, 8, 2, 7, 3, 12, 5, 4, 11, 10, 9',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 4, 8, 3, 9',//count:9
		'union2' => '1, 2, 5, 6, 4, 8, 9',//count:7
		'diff' => '7, 3',//count diff:2
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '1, 7, 12, 3, 9, 11, 4, 2, 5, 6, 10, 8',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 10, 11',//count:9
		'union2' => '1, 2, 5, 6, 7, 3, 10, 11',//count:8
		'diff' => '4',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '2, 6, 4, 5, 3, 8, 10, 11, 1, 7, 9, 12',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 8, 1, 7',//count:8
		'union2' => '2, 12, 6, 3, 4, 8, 1, 7',//count:8
		'diff' => '',//count diff:0
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '4, 7, 6, 8, 1, 2, 9, 5, 3, 11, 10',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 1, 3, 5, 6',//count:8
		'union2' => '4, 2, 7, 8, 3, 5, 6, 1',//count:8
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '10, 1, 5, 11, 8, 4, 3, 7, 6, 2, 9, 12',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 2, 5, 3, 8',//count:9
		'union2' => '10, 1, 4, 6, 2, 5, 7, 3',//count:8
		'diff' => '8',//count diff:1
	],
];
