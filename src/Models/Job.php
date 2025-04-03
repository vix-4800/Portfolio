<?php

declare(strict_types=1);

final class Job
{
	public function __construct(
		public string $company,
		public string $position,
		public string $link,
		public string $duration,
		public string $description,
	) {
		// 
	}
}
