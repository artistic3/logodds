<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '11',
		'inter' => '11',
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
		'favorites' => '6',
		'inter' => '6',
		'Candidate(Favs 6, 1, 4)' => '4, 6',
		'Candidate(Favs 6, 2, 4)' => '4, 6',
		'union' => '4, 6',//count: 2
	],
];
