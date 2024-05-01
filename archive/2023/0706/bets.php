<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '10',
		'inter' => '10',
		'Candidate(Favs 10, 1, 3)' => '1, 10',
		'Candidate(Favs 10, 1, 4)' => '1, 4, 10',
		'Candidate(Favs 10, 1, 5)' => '1, 5',
		'Candidate(Favs 10, 3, 4)' => '4, 10',
		'union' => '1, 4, 5, 10',//count: 4
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
		'favorites' => '7',
		'inter' => '7',
		'Candidate(Favs 7, 1, 2)' => '1, 7',
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
		'favorites' => '6',
		'inter' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 2, 3)' => '2, 6',
		'union' => '2, 6',//count: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 3, 4)' => '1, 3',
		'Candidate(Favs 1, 3, 5)' => '3, 5',
		'Candidate(Favs 1, 4, 6)' => '4, 6',
		'union' => '1, 3, 4, 5, 6',//count: 5
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
];
