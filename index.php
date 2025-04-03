<?php

declare(strict_types=1);
ob_start();

require_once "./src/helpers.php";
require_once "./data.php";

$current_lang = get_language();

$name = 'Anton';
$age = date_diff(date_create('2001-02-02'), date_create())->format('%y');
$profession = 'Full-stack developer';

$title = "{$name}'s portfolio";
$description = "{$name}'s portfolio - {$profession}";
$keywords = "{$name}, {$profession}, portfolio, {$name}'s portfolio, {$name}'s {$profession} portfolio";
$url = 'https://vix-profile.ru';

?>

<!DOCTYPE html>
<html lang="<?= $current_lang; ?>">

<head>
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="<?= $name; ?>">
	<meta name="description" content="<?= $description; ?>">
	<meta name="keywords" content="<?= $keywords; ?>">

	<title><?= $title; ?></title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?= image_path('apple-touch-icon.png'); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= image_path('favicon-32x32.png'); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= image_path('favicon-16x16.png'); ?>">
	<link rel="manifest" href="/site.webmanifest">

	<!-- Open Graph -->
	<meta property="og:title" content="<?= $title; ?>">
	<meta property="og:type" content="profile">
	<meta property="og:image" content="<?= image_path('avatar.png'); ?>">
	<meta property="og:url" content="<?= $url; ?>" />
	<meta property="og:description" content="<?= $description; ?>" />

	<meta property="og:site_name" content="<?= $name; ?>'s Portfolio">
	<meta property="og:locale" content="en_US">
	<meta property="profile:first_name" content="<?= $name; ?>">

	<!-- Styles -->
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<style type="text/tailwindcss">
		@layer components {
			.badge {
				@apply inline-block px-2 py-1 rounded-full text-sm drop-shadow-md;
			}

			.section-title-border {
				@apply text-2xl font-bold mb-4 border-l-4 border-purple-900 pl-2;
			}

			.section-divider {
				@apply border-b border-gray-700;
			}

			.info-list {
				@apply flex justify-center space-x-4 space-y-1 flex-col;
			}

			.selected-language {
				@apply font-bold text-purple-500;
			}
		}

		:root {
			--main-purple-gradient: rgba(106, 13, 173, 0.25);
		}
	</style>

	<!-- Flags -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@7.2.3/css/flag-icons.min.css" />
</head>

<body class="bg-black text-white">
	<div class="container mx-auto px-4 py-8 flex flex-col md:flex-row max-w-6xl">
		<!-- Left Sidebar -->
		<aside
			class="md:w-1/3 pr-8 mb-8 md:mb-0 space-y-8 bg-gradient-to-b from-black via-[var(--main-purple-gradient)] to-black p-4">
			<div class="text-center mb-8">
				<img src="<?= image_path('avatar.png'); ?>" alt="<?= $name; ?>`s avatar" class="w-52 h-52 rounded-full drop-shadow-md mx-auto mb-4" loading="lazy">
				<h1 class="text-3xl font-bold">
					<?= $name; ?>
				</h1>
				<span class="bg-blue-500 text-white badge mt-2">
					<?= $profession; ?>
				</span>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2"><?= translate('Contacts'); ?></h3>
				<ul class="info-list">
					<?php foreach ($contacts as $contact) : ?>
						<li class="flex items-center">
							<?php if ($contact->link) : ?>
								<a href="<?= $contact->link; ?>" target="_blank">
									<?= $contact->name; ?>
								</a>
							<?php else : ?>
								<?= $contact->name; ?>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2"><?= translate('Personal'); ?></h3>
				<ul class="info-list">
					<li class="flex items-center">
						<?= translate('age', ['age' => $age]); ?>
					</li>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2"><?= translate('Social networks'); ?></h3>
				<ul class="info-list">
					<?php foreach ($socialNetworks as $socialNetwork) : ?>
						<li>
							<a href="<?= $socialNetwork->link; ?>" target="_blank">
								<?= $socialNetwork->name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2"><?= translate('Languages'); ?></h3>
				<ul class="info-list">
					<?php foreach ($languages as $language) : ?>
						<li class="flex items-center">
							<?= $language; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</aside>

		<!-- Right Content -->
		<main class="md:w-3/4 pl-8 space-y-8">
			<div class="flex justify-end space-x-4">
				<ul class="border border-gray-700 flex space-x-4 px-4 py-2 rounded">
					<?php foreach (['en', 'ru'] as $language) : ?>
						<li>
							<a href="?lang=<?= $language; ?>" class="<?= $current_lang === $language ? 'selected-language' : '' ?>">
								<span class="fi fi-<?= $language === 'en' ? 'us' : 'ru' ?> mr-1"></span>
								<?= strtoupper($language); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="text-center mb-8">
				<h2 class="text-3xl font-bold">Hi, I'm <?= $name; ?> 👋</h2>
			</div>

			<section id="about">
				<h2 class="section-title-border"><?= translate('About Me'); ?></h2>
				<p>
					I am a passionate <span class="font-bold"><?= $profession; ?></span>.
					<br>
					I specialize in <span class="font-bold text-blue-500">PHP</span>
					with a focus on the
					<a href="https://laravel.com/" class="font-bold text-red-500" target="_blank">
						Laravel
					</a>
					framework
				</p>
			</section>

			<hr class="section-divider">

			<section id="skills">
				<h2 class="section-title-border"><?= translate('Skills'); ?></h2>

				<div class="space-y-4">
					<?php foreach ($skillGroups as $skillGroupName => $skillGroup) : ?>
						<div>
							<h3 class="text-lg font-semibold mb-3 text-gray-400"><?= $skillGroupName; ?></h3>
							<div class="flex flex-wrap gap-3">
								<?php foreach ($skillGroup as $skill) : ?>
									<span class="bg-<?= $skill->color; ?>-<?= $skill->colorStep; ?> badge"><?= $skill->name; ?></span>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="section-divider">

			<section id="experience">
				<h2 class="section-title-border"><?= translate('Experience'); ?></h2>

				<div class="space-y-4">
					<?php foreach ($experiences as $job) : ?>
						<div>
							<a href="<?= $job->link; ?>" target="_blank"
								class="text-lg block font-semibold mb-2 text-purple-800">
								<?= $job->company ?>
							</a>
							<p class="mb-2 text-gray-400">
								<span class="font-bold"><?= translate('Position'); ?>:</span> <?= $job->position; ?>
								<br>
								<span class="font-bold"><?= translate('Duration'); ?>:</span> <?= $job->duration; ?>
								<br>
								<span class="font-bold"><?= translate('Description'); ?>:</span> <?= $job->description; ?>
								<br>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="section-divider">

			<section id="interests">
				<h2 class="section-title-border"><?= translate('Interests'); ?></h2>

				<p class="text-gray-400">
					<?= translate('Empty section'); ?>
				</p>
			</section>

			<hr class="section-divider">

			<section class="space-y-4" id="projects">
				<h2 class="section-title-border"><?= translate('Projects'); ?></h2>

				<p class="text-gray-400">
					<?= translate('Empty section'); ?>
				</p>
			</section>
		</main>
	</div>
</body>

</html>