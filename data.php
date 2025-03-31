<?php

declare(strict_types=1);

require_once './src/Job.php';

$languages = [
	'Russian',
	'English',
];

$skillGroups = [
	'Backend' => [
		'PHP' => 'blue-500',
		'Laravel' => 'red-500',
		'REST API' => 'pink-500',
	],
	'Frontend' => [
		'JavaScript' => 'yellow-500',
		'Vue' => 'green-500',
		'Nuxt' => 'teal-500',
		'HTML' => 'red-500',
		'CSS' => 'blue-500',
		'Tailwind CSS' => 'purple-500',
		'TypeScript' => 'indigo-500',
	],
	'Databases' => [
		'MySQL' => 'blue-800',
		'PostgreSQL' => 'yellow-800',
		'Redis' => 'red-800',
	],
	'DevOps & Tools' => [
		'Docker' => 'blue-600',
		'Git' => 'gray-600',
		'Postman' => 'orange-500',
		'Vite' => 'teal-700',
		'Linux' => 'red-700',
		'GitHub Actions' => 'indigo-700',
	],
];

/** @var Job[] */
$experiences = [
	new Job('Интернет-Агентство КЛЕВЕР', 'Back-end developer (Intern)', 'https://clever-as.ru/', 'Jun 2023 - Jan 2024', 'Back-end development using PHP, Laravel, MySQL, Redis, and Docker.'),
	new Job('WhiteCursorRu', 'Full-stack developer (Junior)', 'https://white-cursor.ru/', 'Jan 2024 - Jul 2024', 'Full-stack development using PHP, Laravel, MySQL, PostgreSQL, Redis, Docker, and GitHub Actions.'),
	new Job('ООО "ИНФиН"', 'Full-stack developer (Junior+/Middle)', 'https://isfas.ru/', 'Sep 2024 - Feb 2025', 'Full-stack development using PHP, Laravel, MySQL, PostgreSQL, Redis, Docker, and GitHub Actions.'),
];

$socialNetworks = [
	'Github' => 'https://github.com/vix-4800',
	'Linkedin' => 'https://www.linkedin.com/in/vix4800',
];

$contacts = [
	'Gordan.ei@protonmail.ch',
];
