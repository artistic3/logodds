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
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 5, 6)' => '5, 6',
		'union' => '5, 6',//count: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 4)' => '1, 2',
		'Candidate(Favs 1, 3, 4)' => '1, 3, 4',
		'Candidate(Favs 1, 3, 5)' => '1, 3, 5',
		'Candidate(Favs 1, 3, 6)' => '1, 3',
		'Candidate(Favs 1, 4, 5)' => '1, 4, 5',
		'Candidate(Favs 1, 4, 6)' => '1, 4',
		'union' => '1, 2, 3, 4, 5',//count: 5
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '7',
		'inter' => '7',
		'Candidate(Favs 7, 1, 3)' => '1, 3, 7',
		'Candidate(Favs 7, 1, 6)' => '1, 7',
		'Candidate(Favs 7, 3, 4)' => '3, 7',
		'Candidate(Favs 7, 3, 6)' => '6, 7',
		'Candidate(Favs 7, 4, 6)' => '6, 7',
		'union' => '1, 3, 6, 7',//count: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 2)' => '1, 2, 4',
		'Candidate(Favs 4, 1, 3)' => '1, 3',
		'Candidate(Favs 4, 2, 3)' => '2, 3',
		'Candidate(Favs 4, 2, 5)' => '2, 5',
		'union' => '1, 2, 3, 4, 5',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '8',
		'inter' => '8',
		'Candidate(Favs 8, 1, 3)' => '1, 3',
		'Candidate(Favs 8, 1, 4)' => '1, 4',
		'Candidate(Favs 8, 2, 3)' => '3, 8',
		'Candidate(Favs 8, 2, 4)' => '2, 4, 8',
		'Candidate(Favs 8, 2, 6)' => '6, 8',
		'Candidate(Favs 8, 3, 4)' => '3, 8',
		'Candidate(Favs 8, 3, 5)' => '3, 8',
		'Candidate(Favs 8, 3, 6)' => '6, 8',
		'Candidate(Favs 8, 4, 5)' => '4, 8',
		'Candidate(Favs 8, 4, 6)' => '4, 6, 8',
		'union' => '1, 2, 3, 4, 6, 8',//count: 6
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
		'favorites' => '2',
		'inter' => '2',
	],
];
