<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '5, 8, 2, 6, 1, 9, 4, 7',
		'favorite' =>  '5',
		'union1' => '5, 7, 2, 3, 8, 1, 9, 12, 6',//count:9
		'union2' => '5, 7, 2, 8, 1, 9, 12, 6',//count:8
		'diff' => '3',//count diff:1
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 9, 3, 5, 8, 7, 6, 4, 10, 1',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 4, 9, 1',//count:7
		'union2' => '2, 12, 6, 4, 9, 3, 1',//count:7
		'diff' => '',//count diff:0
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '1, 2, 5, 4, 3, 9, 8, 7, 6',
		'favorite' =>  '1',
		'union1' => '1, 2, 5, 6, 12, 3, 7',//count:7
		'union2' => '1, 2, 5, 12, 6, 7',//count:6
		'diff' => '3',//count diff:1
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '6, 5, 1, 2, 3, 4, 8, 7, 10, 9',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 5, 7, 2, 3',//count:8
		'union2' => '6, 4, 8, 5, 7, 2, 1',//count:7
		'diff' => '3',//count diff:1
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '4, 2, 1, 9, 6, 3, 10, 5, 8, 7',
		'favorite' =>  '4',
		'union1' => '4, 2, 7, 8, 12, 6, 3, 1, 5',//count:9
		'union2' => '4, 2, 7, 12, 6, 1, 5',//count:7
		'diff' => '8, 3',//count diff:2
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '2, 5, 1, 6, 8, 7, 9, 4, 10, 12, 3, 11',
		'favorite' =>  '2',
		'union1' => '2, 12, 6, 3, 5, 7, 1',//count:7
		'union2' => '2, 12, 6, 5, 7, 1',//count:6
		'diff' => '3',//count diff:1
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '6, 2, 5, 4, 3, 9, 1, 8, 7, 11, 10',
		'favorite' =>  '6',
		'union1' => '6, 4, 8, 1, 2, 12, 3, 5, 7',//count:9
		'union2' => '6, 4, 8, 2, 12, 5, 7',//count:7
		'diff' => '1, 3',//count diff:2
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '7, 10, 5, 1, 11, 4, 2, 8, 3, 9, 6',
		'favorite' =>  '7',
		'union1' => '7, 3, 5, 2, 10, 1, 4, 6',//count:8
		'union2' => '7, 3, 5, 10, 1, 4, 2',//count:7
		'diff' => '6',//count diff:1
	],
];
