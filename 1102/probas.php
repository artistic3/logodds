<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'7, 6, 9, 3, 4, 5, 1, 2',
		'Poor man\'s bet' ,
			'Win' => '3, 5, 6, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'7, 6, 9, 3',
		'Qpl($30, ideal $50)' ,
			'7 X 6, 4, 2',
		'Qpl($10, ideal $20)' ,
			'7, 6, 9 X 6, 4, 2',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 6, 9 X 3, 5, 1',
	],
	'2' => [
		/**
		Race 2
		*/
		'11, 4, 9, 10, 7, 12, 3, 1, 2, 13, 8, 6, 5',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 9, 10, 11',
		'Qin(opt $20, ideal $40)' ,
			'11, 4, 9, 10',
		'Qpl($30, ideal $50)' ,
			'11 X 9, 7, 12',
		'Qpl($10, ideal $20)' ,
			'11, 4, 9 X 3, 1, 5',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'11, 4, 9 X 13, 8, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'4, 1, 7, 8, 5, 9, 2, 3',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 4, 7, 8',
		'Qin(opt $20, ideal $40)' ,
			'4, 1, 7, 8',
		'Qpl($30, ideal $50)' ,
			'4 X 1, 7, 5',
		'Qpl($10, ideal $20)' ,
			'4, 1, 7, 8 X 5, 9, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 1, 7, 8 X 4, 8, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'2, 3, 16, 4, 7, 1, 21, 22, 24, 5, 6, 15, 23, 9, 12, 13, 8, 11, 19, 18, 14, 17, 10',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 16, 22, 24',
		'Qin(opt $20, ideal $40)' ,
			'2, 3, 16, 4',
		'Qpl($30, ideal $50)' ,
			'2 X 3, 16, 7',
		'Qpl($10, ideal $20)' ,
			'2, 3, 16, 4 X 19, 18, 14',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 3, 16, 4 X 11, 17, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'11, 5, 10, 2, 1, 6, 12, 7, 9, 13, 8, 3, 4',
		'Poor man\'s bet' ,
			'Win' => '2, 5, 6, 10, 11',
		'Qin(opt $20, ideal $40)' ,
			'11, 5, 10, 2',
		'Qpl($30, ideal $50)' ,
			'11 X 5, 1, 12',
		'Qpl($10, ideal $20)' ,
			'11, 5, 10 X 7, 9, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'11, 5, 10 X 13, 8, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'14, 9, 6, 2, 4, 7, 16, 8, 11, 13, 5, 10, 12, 3',
		'Poor man\'s bet' ,
			'Win' => '2, 6, 7, 9, 14, 16',
		'Qin(opt $20, ideal $40)' ,
			'14, 9, 6, 2',
		'Qpl($30, ideal $50)' ,
			'14 X 6, 2, 4',
		'Qpl($10, ideal $20)' ,
			'14, 9, 6 X 11, 13, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'14, 9, 6 X 5, 12, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'6, 5, 14, 10, 11, 4, 16, 8, 12, 13, 7, 3, 15, 2, 17',
		'Poor man\'s bet' ,
			'Win' => '4, 5, 6, 10, 11, 14',
		'Qin(opt $20, ideal $40)' ,
			'6, 5, 14, 10',
		'Qpl($30, ideal $50)' ,
			'6 X 5, 14, 16',
		'Qpl($10, ideal $20)' ,
			'6, 5, 14, 10 X 12, 7, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 5, 14, 10 X 15, 2, 17',
	],
];
