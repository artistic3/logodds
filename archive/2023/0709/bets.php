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
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 6)' => '2, 6',
		'union' => '2, 6',//count: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 1, 3)' => '1, 3',
		'union' => '1, 3',//count: 2
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
		'favorites' => '7',
		'inter' => '7',
		'Candidate(Favs 7, 1, 3)' => '1, 3, 7',
		'Candidate(Favs 7, 1, 4)' => '1, 4, 7',
		'Candidate(Favs 7, 1, 5)' => '1, 5',
		'Candidate(Favs 7, 1, 6)' => '1, 7',
		'Candidate(Favs 7, 3, 4)' => '3, 4, 7',
		'Candidate(Favs 7, 3, 5)' => '3, 5',
		'Candidate(Favs 7, 3, 6)' => '3, 7',
		'Candidate(Favs 7, 4, 5)' => '4, 5',
		'Candidate(Favs 7, 4, 6)' => '4, 7',
		'union' => '1, 3, 4, 5, 7',//count: 5
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2',
		'inter' => '2',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 2)' => '1, 2, 4',
		'Candidate(Favs 4, 1, 7)' => '4, 7',
		'Candidate(Favs 4, 2, 5)' => '2, 5',
		'Candidate(Favs 4, 2, 7)' => '2, 4, 7',
		'union' => '1, 2, 4, 5, 7',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '10',
		'inter' => '10',
		'Candidate(Favs 10, 2, 4)' => '2, 4',
		'union' => '2, 4',//count: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 2, 5)' => '3, 5',
		'Candidate(Favs 3, 2, 6)' => '2, 3',
		'Candidate(Favs 3, 5, 6)' => '3, 5',
		'union' => '2, 3, 5',//count: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1',
		'inter' => '1',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '14',
		'inter' => '14',
	],
];
