<?php

declare(strict_types=1);

require_once 'Skill.php';

final class Project
{
	/**
	 * @param Skill[] $technologies
	 */
	public function __construct(
		public string $name,
		public string $description,
		public string $link,
		public string $image,
		public array $technologies,
	) {
		// 
	}
}
