<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '1, 5, 6, 7, 2, 3, 4',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 8, 4',//count:8
		'union2' => '1, 2, 5, 6, 7, 3, 4, 8',//count:8
		'diff' => '',//count diff:0
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '1, 7, 4, 8, 2, 5, 6, 3',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 3, 4, 8',//count:8
		'union2' => '1, 2, 5, 6, 7, 3, 4, 8',//count:8
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '3, 7, 4, 6, 8, 2, 5',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 7, 5, 8',//count:8
		'union2' => '3, 1, 2, 4, 7, 5, 8',//count:7
		'diff' => '6',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '5, 4, 7, 1, 2, 8, 6, 3',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 4, 1',//count:7
		'union2' => '5, 7, 2, 3, 4, 8',//count:6
		'diff' => '1',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '8, 3, 2, 11, 4, 5, 1, 7, 9, 6, 10, 12',
		'favorite' =>  '8',
		'union1' => '8, 1, 9, 2, 6, 3, 4, 12',//count:8
		'union2' => '8, 1, 9, 2, 3, 4, 12, 6',//count:8
		'diff' => '',//count diff:0
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '3, 6, 10, 7, 1, 4, 8, 9, 2, 5, 12, 11',
		'favorite' =>  '3',
		'union1' => '3, 1, 2, 4, 6, 8, 10, 7',//count:8
		'union2' => '3, 1, 2, 4, 6, 8, 10',//count:7
		'diff' => '7',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '1, 8, 3, 10, 7, 9, 2, 11, 6, 12, 4',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 7, 8, 9, 3, 4',//count:9
		'union2' => '1, 2, 5, 6, 8, 9, 3, 4',//count:8
		'diff' => '7',//count diff:1
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '5, 4, 6, 10, 1, 2, 3, 9, 7, 8',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 4, 1, 6',//count:8
		'union2' => '5, 7, 2, 3, 4, 8, 6, 1',//count:8
		'diff' => '',//count diff:0
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '10, 1, 7, 2, 3, 9, 4, 5, 6, 8, 11',
		'favorite' =>  '10',
		'union1' => '10, 1, 4, 6, 7, 2, 5, 3',//count:8
		'union2' => '10, 1, 4, 6, 2, 5, 7, 3',//count:8
		'diff' => '',//count diff:0
	],
];
