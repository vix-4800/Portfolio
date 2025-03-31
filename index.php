<?php

declare(strict_types=1);

require_once "./data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
	<style type="text/tailwindcss">
		@layer components {
			.badge {
				@apply inline-block px-2 py-1 rounded-full text-sm;
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
				<img src="/assets/img/avatar.png" alt="Avatar" class="w-52 h-52 rounded-full mx-auto mb-4">
				<h1 class="text-3xl font-bold">Anton</h1>
				<span class="bg-blue-500 text-white badge mt-2">
					Full-stack developer
				</span>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Contacts</h3>
				<ul>
					<?php foreach ($contacts as $contact) : ?>
						<li class="flex items-center"><?= $contact; ?></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Personal</h3>
				<ul>
					<li class="flex items-center" id="age"></li>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Social Networks</h3>
				<ul class="flex justify-center space-x-4 flex-col">
					<?php foreach ($socialNetworks as $network => $link) : ?>
						<li>
							<a href="<?= $link; ?>" target="_blank"><?= $network; ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div>
				<h3 class="text-xl font-bold mb-2">Languages</h3>

				<?php foreach ($languages as $language) : ?>
					<ul>
						<li class="flex items-center">
							<?= $language; ?>
						</li>
					</ul>
				<?php endforeach; ?>
			</div>
		</aside>

		<!-- Right Content -->
		<main class="md:w-3/4 pl-8 space-y-8">
			<section id="about">
				<h2 class="text-2xl font-bold mb-4 border-l-4 border-purple-900 pl-2">About Me</h2>
				<p class="mb-2 text-center">
					Hi, I'm <span class="font-bold">Anton</span> 👋
					<br>
					I am a passionate full-stack developer.
					<br>
					I specialize in <span class="font-bold text-blue-500">PHP</span>
					with a focus on the
					<a href="https://laravel.com/" class="font-bold text-red-500" target="_blank">
						Laravel
					</a>
					framework
				</p>
			</section>

			<section id="skills">
				<h2 class="text-2xl font-bold mb-4 border-l-4 border-purple-900 pl-2">Skills</h2>

				<div class="space-y-4">
					<?php foreach ($skillGroups as $skillGroupName => $skillGroup) : ?>
						<div>
							<h3 class="text-lg font-semibold mb-3 text-gray-400"><?= $skillGroupName; ?></h3>
							<div class="flex flex-wrap gap-3">
								<?php foreach ($skillGroup as $skill => $skillColor) : ?>
									<span class="bg-<?= $skillColor; ?> badge"><?= $skill; ?></span>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section id="experience">
				<h2 class="text-2xl font-bold mb-4 border-l-4 border-purple-900 pl-2">Experience</h2>

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

			<section class="space-y-4" id="projects">
				<h2 class="text-2xl font-bold mb-4 border-l-4 border-purple-900 pl-2">Projects</h2>
			</section>
		</main>
	</div>

	<script src="/assets/scripts/age.js"></script>
</body>

</html>