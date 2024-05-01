<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 5)' => '1, 5',
		'Candidate(Favs 1, 3, 4)' => '1, 4',
		'Candidate(Favs 1, 3, 5)' => '1, 5',
		'Candidate(Favs 1, 4, 5)' => '1, 5',
		'Candidate(Favs 1, 4, 6)' => '1, 4',
		'union' => '1, 4, 5',//count: 3
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
		'favorites' => '3',
		'inter' => '3',
		'Candidate(Favs 3, 4, 5)' => '3, 4',
		'Candidate(Favs 3, 4, 6)' => '3, 4',
		'Candidate(Favs 3, 5, 7)' => '3, 7',
		'union' => '3, 4, 7',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'inter' => '5',
		'Candidate(Favs 5, 1, 2)' => '1, 2, 5',
		'Candidate(Favs 5, 1, 6)' => '5, 6',
		'Candidate(Favs 5, 3, 6)' => '5, 6',
		'union' => '1, 2, 5, 6',//count: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '8',
		'inter' => '8',
		'Candidate(Favs 8, 1, 2)' => '1, 2',
		'Candidate(Favs 8, 1, 4)' => '1, 4',
		'Candidate(Favs 8, 1, 5)' => '1, 5',
		'Candidate(Favs 8, 4, 5)' => '4, 5',
		'union' => '1, 2, 4, 5',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3',
		'inter' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'inter' => '1',
		'Candidate(Favs 1, 2, 3)' => '1, 2, 3',
		'Candidate(Favs 1, 2, 4)' => '1, 2, 4',
		'Candidate(Favs 1, 2, 7)' => '2, 7',
		'Candidate(Favs 1, 3, 4)' => '1, 3',
		'Candidate(Favs 1, 4, 7)' => '4, 7',
		'union' => '1, 2, 3, 4, 7',//count: 5
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5',
		'inter' => '5',
		'Candidate(Favs 5, 1, 3)' => '3, 5',
		'Candidate(Favs 5, 2, 3)' => '3, 5',
		'union' => '3, 5',//count: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '10',
		'inter' => '10',
		'Candidate(Favs 10, 1, 5)' => '5, 10',
		'Candidate(Favs 10, 3, 5)' => '3, 5, 10',
		'union' => '3, 5, 10',//count: 3
	],
];
