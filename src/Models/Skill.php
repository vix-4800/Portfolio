<?php

declare(strict_types=1);

final class Skill
{
	public function __construct(
		public string $name,
		public string $color,
		public string $colorStep = '500',
	) {
		// 
	}
}
