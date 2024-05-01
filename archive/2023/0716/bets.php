<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
		'inter' => '5',
		'Candidate(Favs 5, 1, 2)' => '1, 5',
		'Candidate(Favs 5, 1, 3)' => '1, 5',
		'Candidate(Favs 5, 1, 4)' => '1, 5',
		'Candidate(Favs 5, 2, 3)' => '2, 5',
		'Candidate(Favs 5, 2, 4)' => '2, 5',
		'union' => '1, 2, 5',//count: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 1, 6)' => '2, 6',
		'Candidate(Favs 2, 3, 6)' => '2, 6',
		'Candidate(Favs 2, 4, 5)' => '4, 5',
		'union' => '2, 4, 5, 6',//count: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 3)' => '1, 3',
		'Candidate(Favs 1, 3, 4)' => '3, 4',
		'Candidate(Favs 1, 3, 6)' => '1, 3',
		'Candidate(Favs 1, 4, 5)' => '4, 5',
		'union' => '1, 3, 4, 5',//count: 4
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 2)' => '1, 2',
		'union' => '1, 2',//count: 2
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
		'favorites' => '1',
		'inter' => '1',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '14',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 3, 5)' => '3, 5',
		'Candidate(Favs 2, 4, 6)' => '4, 6',
		'union' => '3, 4, 5, 6',//count: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1',
		'inter' => '1',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 3, 5)' => '3, 4',
		'union' => '3, 4',//count: 2
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '2',
		'inter' => '2',
	],
];
