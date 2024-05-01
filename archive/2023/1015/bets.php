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
		'favorites' => '5',
		'inter' => '5',
		'Candidate(Favs 5, 1, 4)' => '5, 4',
		'Candidate(Favs 5, 3, 4)' => '3, 4',
		'Candidate(Favs 5, 4, 6)' => '5, 4',
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
		'favorites' => '13',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12',
		'inter' => '12',
		'Candidate(Favs 12, 1, 6)' => '1, 12',
		'union' => '1, 12',//count: 2
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
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 2, 3)' => '2, 3',
		'Candidate(Favs 6, 2, 4)' => '4, 6',
		'Candidate(Favs 6, 3, 5)' => '3, 5',
		'Candidate(Favs 6, 4, 5)' => '4, 5',
		'union' => '2, 3, 4, 5, 6',//count: 5
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 4, 5)' => '3, 4',
		'union' => '3, 4',//count: 2
	],
];
