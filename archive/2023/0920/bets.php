<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 1, 5)' => '1, 5',
		'Candidate(Favs 2, 3, 5)' => '2, 5',
		'Candidate(Favs 2, 3, 7)' => '2, 3',
		'Candidate(Favs 2, 4, 5)' => '2, 5',
		'Candidate(Favs 2, 5, 7)' => '2, 5',
		'union' => '1, 2, 3, 5',//count: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 1, 2)' => '2, 6',
		'Candidate(Favs 6, 2, 3)' => '2, 6',
		'Candidate(Favs 6, 4, 5)' => '4, 5',
		'union' => '2, 4, 5, 6',//count: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		'inter' => '7',
		'Candidate(Favs 7, 1, 3)' => '1, 3',
		'Candidate(Favs 7, 3, 5)' => '3, 7',
		'union' => '1, 3, 7',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '9',
		'inter' => '9',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 1, 4)' => '1, 3, 4',
		'Candidate(Favs 3, 1, 5)' => '1, 3, 5',
		'Candidate(Favs 3, 1, 6)' => '1, 3',
		'Candidate(Favs 3, 4, 5)' => '3, 4, 5',
		'Candidate(Favs 3, 4, 6)' => '3, 4',
		'union' => '1, 3, 4, 5',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '9',
		'inter' => '9',
		'Candidate(Favs 9, 1, 3)' => '1, 9',
		'Candidate(Favs 9, 1, 6)' => '1, 9',
		'Candidate(Favs 9, 2, 3)' => '2, 9',
		'Candidate(Favs 9, 2, 6)' => '2, 9',
		'Candidate(Favs 9, 3, 6)' => '6, 9',
		'union' => '1, 2, 6, 9',//count: 4
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
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 1, 4)' => '4, 6',
		'Candidate(Favs 6, 2, 4)' => '4, 6',
		'union' => '4, 6',//count: 2
	],
];
