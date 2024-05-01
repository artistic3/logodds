<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 3)' => '1, 4',
		'Candidate(Favs 4, 1, 5)' => '1, 5',
		'Candidate(Favs 4, 1, 6)' => '1, 4',
		'Candidate(Favs 4, 2, 5)' => '2, 5',
		'union' => '1, 2, 4, 5',//count: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 6)' => '2, 6',
		'union' => '2, 6',//count: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 3)' => '3, 4',
		'Candidate(Favs 4, 1, 5)' => '4, 5',
		'Candidate(Favs 4, 3, 5)' => '3, 4',
		'Candidate(Favs 4, 3, 6)' => '3, 4',
		'Candidate(Favs 4, 5, 6)' => '4, 5',
		'union' => '3, 4, 5',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 4)' => '1, 2',
		'Candidate(Favs 1, 2, 5)' => '1, 2, 5',
		'Candidate(Favs 1, 5, 6)' => '5, 6',
		'union' => '1, 2, 5, 6',//count: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '9',
		'inter' => '9',
		'Candidate(Favs 9, 1, 4)' => '1, 4',
		'Candidate(Favs 9, 1, 5)' => '1, 5',
		'Candidate(Favs 9, 4, 5)' => '4, 5',
		'union' => '1, 4, 5',//count: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '4',
		'inter' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 1, 2)' => '1, 2, 3',
		'Candidate(Favs 3, 1, 4)' => '1, 3',
		'Candidate(Favs 3, 2, 4)' => '2, 3',
		'Candidate(Favs 3, 2, 6)' => '2, 6',
		'union' => '1, 2, 3, 6',//count: 4
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 3, 4)' => '1, 3',
		'Candidate(Favs 1, 3, 5)' => '3, 5',
		'Candidate(Favs 1, 3, 7)' => '1, 3',
		'Candidate(Favs 1, 4, 7)' => '1, 4',
		'union' => '1, 3, 4, 5',//count: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '8',
		'inter' => '8',
		'Candidate(Favs 8, 1, 2)' => '1, 8',
		'Candidate(Favs 8, 1, 5)' => '5, 8',
		'Candidate(Favs 8, 2, 3)' => '3, 8',
		'Candidate(Favs 8, 2, 5)' => '5, 8',
		'Candidate(Favs 8, 3, 5)' => '3, 5, 8',
		'union' => '1, 3, 5, 8',//count: 4
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2',
		'inter' => '2',
	],
];
