<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 1, 4)' => '1, 4',
		'Candidate(Favs 3, 1, 5)' => '1, 5',
		'Candidate(Favs 3, 2, 5)' => '2, 5',
		'union' => '1, 2, 4, 5',//count: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3',
		'Candidate(Favs 3, 2, 6)' => '2, 6',
		'Candidate(Favs 3, 4, 5)' => '4, 5',
		'union' => '2, 4, 5, 6',//count: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 1, 3)' => '1, 3',
		'Candidate(Favs 6, 3, 4)' => '3, 4',
		'Candidate(Favs 6, 4, 5)' => '4, 5',
		'union' => '1, 3, 4, 5',//count: 4
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 1, 4)' => '1, 2',
		'Candidate(Favs 2, 1, 5)' => '1, 2, 5',
		'union' => '1, 2, 5',//count: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '8',
		'inter' => '8',
		'Candidate(Favs 8, 1, 4)' => '1, 4',
		'Candidate(Favs 8, 1, 5)' => '1, 5',
		'Candidate(Favs 8, 1, 7)' => '1, 7',
		'Candidate(Favs 8, 4, 5)' => '4, 5',
		'Candidate(Favs 8, 4, 7)' => '4, 7',
		'union' => '1, 4, 5, 7',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1',
		'inter' => '1',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 3)' => '1, 2, 3',
		'Candidate(Favs 1, 2, 4)' => '1, 2, 4',
		'Candidate(Favs 1, 2, 5)' => '2, 5',
		'Candidate(Favs 1, 3, 4)' => '1, 3',
		'union' => '1, 2, 3, 4, 5',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '12',
	],
];
