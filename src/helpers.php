<?php

declare(strict_types=1);

/**
 * Returns an absolute path to an image.
 *
 * @param string $path The relative path to the image.
 *
 * @return string The absolute path to the image.
 */
function image_path(string $path = ''): string
{
	return "/assets/img/{$path}";
}
