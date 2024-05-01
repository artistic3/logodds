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
		'favorites' => '3',
		'Candidate(Favs 3, 2, 6)' => '2, 6',
		'Candidate(Favs 3, 4, 5)' => '4, 5',
		'union' => '2, 4, 5, 6',//count: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '12',
		'inter' => '12',
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
		'favorites' => '6',
		'inter' => '6',
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
		'favorites' => '4',
		'inter' => '4',
		'Candidate(Favs 4, 1, 3)' => '1, 3',
		'Candidate(Favs 4, 1, 6)' => '4, 6',
		'Candidate(Favs 4, 2, 6)' => '4, 6',
		'union' => '1, 3, 4, 6',//count: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2',
		'inter' => '2',
		'Candidate(Favs 2, 3, 5)' => '3, 5',
		'Candidate(Favs 2, 3, 6)' => '2, 3',
		'Candidate(Favs 2, 4, 5)' => '4, 5',
		'Candidate(Favs 2, 4, 6)' => '4, 6',
		'union' => '2, 3, 4, 5, 6',//count: 5
	],
];
