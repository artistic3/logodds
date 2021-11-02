<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'7, 9, 6, 4, 3, 5, 1, 2',
		'Poor man\'s bet' ,
			'Win' => '3, 4, 5, 6, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'7, 9, 6, 4',
		'Qpl($30, ideal $50)' ,
			'7 X 6, 4, 2',
		'Qpl($10, ideal $20)' ,
			'7, 9, 6 X 6, 4, 2',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 9, 6 X 3, 5, 1',
	],
	'2' => [
		/**
		Race 2
		*/
		'4, 11, 7, 9, 3, 2, 8, 1, 13, 12, 10, 6, 5',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 7, 8, 9, 11',
		'Qin(opt $20, ideal $40)' ,
			'4, 11, 7, 9',
		'Qpl($30, ideal $50)' ,
			'4 X 7, 9, 3',
		'Qpl($10, ideal $20)' ,
			'4, 11, 7 X 1, 12, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 11, 7 X 13, 10, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'1, 4, 7, 8, 9, 5, 2, 3',
		'Poor man\'s bet' ,
			'Win' => '1, 4, 5, 7, 8, 9',
		'Qin(opt $20, ideal $40)' ,
			'1, 4, 7, 8',
		'Qpl($30, ideal $50)' ,
			'1 X 4, 8, 2',
		'Qpl($10, ideal $20)' ,
			'1, 4, 7 X 4, 8, 2',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 4, 7 X 9, 5, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'2, 3, 16, 1, 4, 7, 6, 22, 5, 15, 24, 21, 19, 23, 12, 9, 11, 13, 8, 17, 14, 18, 10',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 6, 16, 22',
		'Qin(opt $20, ideal $40)' ,
			'2, 3, 16, 1',
		'Qpl($30, ideal $50)' ,
			'2 X 3, 16, 1',
		'Qpl($10, ideal $20)' ,
			'2, 3, 16, 4 X 9, 14, 18',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 3, 16, 4 X 8, 17, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'11, 5, 2, 10, 1, 7, 12, 9, 6, 8, 13, 3, 4',
		'Poor man\'s bet' ,
			'Win' => '2, 5, 6, 10, 11',
		'Qin(opt $20, ideal $40)' ,
			'11, 5, 2, 10',
		'Qpl($30, ideal $50)' ,
			'11 X 5, 1, 7',
		'Qpl($10, ideal $20)' ,
			'11, 5, 2 X 12, 9, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'11, 5, 2 X 8, 13, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'14, 2, 9, 6, 4, 8, 7, 16, 13, 12, 5, 3, 11, 10',
		'Poor man\'s bet' ,
			'Win' => '2, 6, 7, 9, 14, 16',
		'Qin(opt $20, ideal $40)' ,
			'14, 2, 9, 6',
		'Qpl($30, ideal $50)' ,
			'14 X 2, 6, 4',
		'Qpl($10, ideal $20)' ,
			'14, 2, 9 X 13, 11, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'14, 2, 9 X 12, 5, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'6, 5, 10, 14, 4, 16, 11, 13, 7, 12, 8, 15, 2, 3, 17',
		'Poor man\'s bet' ,
			'Win' => '4, 5, 6, 10, 11, 14',
		'Qin(opt $20, ideal $40)' ,
			'6, 5, 10, 14',
		'Qpl($30, ideal $50)' ,
			'6 X 5, 14, 16',
		'Qpl($10, ideal $20)' ,
			'6, 5, 10 X 7, 12, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 5, 10 X 15, 2, 17',
	],
];
