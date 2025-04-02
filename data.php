<?php

declare(strict_types=1);

require_once './src/Job.php';
require_once './src/Skill.php';
require_once './src/SocialNetwork.php';
require_once './src/Contact.php';

$languages = [
	'Russian',
	'English',
];

/** @var array<string, array<Skill>> */
$skillGroups = [
	'Backend' => [
		new Skill('PHP', 'blue', '500'),
		new Skill('Laravel', 'red', '500'),
		new Skill('REST API', 'pink', '500'),
	],
	'Frontend' => [
		new Skill('JavaScript', 'yellow', '500'),
		new Skill('Vue', 'green', '500'),
		new Skill('Nuxt', 'teal', '500'),
		new Skill('HTML', 'red', '500'),
		new Skill('CSS', 'blue', '500'),
		new Skill('Tailwind CSS', 'purple', '500'),
		new Skill('TypeScript', 'indigo', '500'),
	],
	'Databases' => [
		new Skill('MySQL', 'blue', '800'),
		new Skill('PostgreSQL', 'yellow', '800'),
		new Skill('Redis', 'red', '800'),
	],
	'DevOps & Tools' => [
		new Skill('Docker', 'blue', '600'),
		new Skill('Git', 'gray', '600'),
		new Skill('Postman', 'orange', '500'),
		new Skill('Vite', 'teal', '700'),
		new Skill('Linux', 'red', '700'),
		new Skill('GitHub Actions', 'indigo', '700'),
	],
];

/** @var Job[] */
$experiences = [
	new Job('Интернет-Агентство КЛЕВЕР', 'Back-end developer (Intern)', 'https://clever-as.ru/', 'Jun 2023 - Jan 2024', 'Back-end development using PHP, Laravel, MySQL, Redis, and Docker.'),
	new Job('WhiteCursorRu', 'Full-stack developer (Junior)', 'https://white-cursor.ru/', 'Jan 2024 - Jul 2024', 'Full-stack development using PHP, Laravel, MySQL, PostgreSQL, Redis, Docker, and GitHub Actions.'),
	new Job('ООО "ИНФиН"', 'Full-stack developer (Junior+/Middle)', 'https://isfas.ru/', 'Sep 2024 - Feb 2025', 'Full-stack development using PHP, Laravel, MySQL, PostgreSQL, Redis, Docker, and GitHub Actions.'),
];

/** @var SocialNetwork[] */
$socialNetworks = [
	new SocialNetwork('Github', 'https://github.com/vix-4800'),
	new SocialNetwork('Linkedin', 'https://www.linkedin.com/in/vix4800'),
	new SocialNetwork('Telegram', 'https://t.me/vix_4800'),
];

/** @var Contact[] */
$contacts = [
	new Contact('Gordan.ei@protonmail.ch', 'mailto:Gordan.ei@protonmail.ch'),
	new Contact('work@vix-profile.ru', 'mailto:work@vix-profile.ru'),
];
