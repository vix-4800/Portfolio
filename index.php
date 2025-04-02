<?php

declare(strict_types=1);

require_once "./data.php";
require_once "./src/helpers.php";

$title = 'Portfolio';

$name = 'Anton';
$age = date_diff(date_create('2001-02-02'), date_create())->format('%y');
$profession = 'Full-stack developer';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		<?= $title; ?>
	</title>

	<link rel="apple-touch-icon" sizes="180x180" href="<?= image_path('apple-touch-icon.png'); ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= image_path('favicon-32x32.png'); ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= image_path('favicon-16x16.png'); ?>">
	<link rel="manifest" href="/site.webmanifest">

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
				@apply border-b border-gray-700 my-4;
			}

			.info-list {
				@apply flex justify-center space-x-4 space-y-1 flex-col;
			}
		}

		:root {
			--main-purple-gradient: rgba(106, 13, 173, 0.25);
		}
	</style>
</head>

<body class="bg-black text-white">
	<div class="container mx-auto px-4 py-8 flex flex-col md:flex-row max-w-6xl">
		<!-- Left Sidebar -->
		<aside
			class="md:w-1/3 pr-8 mb-8 md:mb-0 space-y-8 bg-gradient-to-b from-black via-[var(--main-purple-gradient)] to-black p-4">
			<div class="text-center mb-8">
				<img src="/assets/img/avatar.png" alt="Avatar" class="w-52 h-52 rounded-full drop-shadow-md mx-auto mb-4">
				<h1 class="text-3xl font-bold">
					<?= $name; ?>
				</h1>
				<span class="bg-blue-500 text-white badge mt-2">
					<?= $profession; ?>
				</span>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Contacts</h3>
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
				<h3 class="text-xl font-bold mb-2">Personal</h3>
				<ul class="info-list">
					<li class="flex items-center">
						<?= $age; ?> years old
					</li>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Social Networks</h3>
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
				<h3 class="text-xl font-bold mb-2">Languages</h3>
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
			<section id="about">
				<div class="text-center mb-8">
					<h2 class="text-3xl font-bold">Hi, I'm <?= $name; ?> 👋</h2>
				</div>

				<h2 class="section-title-border">About Me</h2>
				<p class="mb-2">
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
				<h2 class="section-title-border">Skills</h2>

				<div class="space-y-4">
					<?php foreach ($skillGroups as $skillGroupName => $skillGroup) : ?>
						<div>
							<h3 class="text-lg font-semibold mb-3 text-gray-400"><?= $skillGroupName; ?></h3>
							<div class="flex flex-wrap gap-3">
								<?php foreach ($skillGroup as $skill) : ?>
									<span class="bg-<?= $skill->color; ?> badge"><?= $skill->name; ?></span>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="section-divider">

			<section id="experience">
				<h2 class="section-title-border">Experience</h2>

				<div class="space-y-4">
					<?php foreach ($experiences as $job) : ?>
						<div>
							<a href="<?= $job->link; ?>" target="_blank"
								class="text-lg block font-semibold mb-2 text-purple-800">
								<?= $job->company ?>
							</a>
							<p class="mb-2 text-gray-400">
								<span class="font-bold">Position:</span> <?= $job->position; ?>
								<br>
								<span class="font-bold">Duration:</span> <?= $job->duration; ?>
								<br>
								<span class="font-bold">Description:</span> <?= $job->description; ?>
								<br>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="section-divider">

			<section id="interests">
				<h2 class="section-title-border">Interests</h2>

				<p class="text-gray-400">
					This section is currently empty. It will be updated soon.
				</p>
			</section>

			<hr class="section-divider">

			<section class="space-y-4" id="projects">
				<h2 class="section-title-border">Projects</h2>

				<p class="text-gray-400">
					This section is currently empty. It will be updated soon.
				</p>
			</section>
		</main>
	</div>
</body>

</html>