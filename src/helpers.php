<?php

declare(strict_types=1);

/**
 * Dumps the given data.
 *
 * @param mixed $data The data to dump.
 */
function dd($data): void
{
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
}

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

/**
 * Returns the currently selected language.
 *
 * @return string The currently selected language.
 */
function get_language(): string
{
	$default = 'en';

	if (isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		setcookie('lang', $lang, time() + 86400 * 30, "/");

		return $lang;
	} elseif (isset($_COOKIE['lang'])) {
		return $_COOKIE['lang'];
	}

	return $default;
}

/**
 * Translates the given key using the active language.
 *
 * @param string $key The key to translate.
 * @param array $args An array of arguments to replace in the translated string.
 *
 * @return string The translated string.
 */
function translate(string $key, array $args = []): string
{
	static $lang;

	if (!$lang) {
		$lang_code = get_language();
		$lang_file = "./lang/{$lang_code}.php";
		$lang = file_exists($lang_file) ? include_once $lang_file : include_once './lang/en.php';
	}

	$translatedString = $lang[$key] ?? $key;

	if (!empty($args)) {
		$variables = preg_match_all('/\{(.+?)\}/', $translatedString, $matches);

		if ($variables) {
			foreach ($matches[0] as $placeholder) {
				$translatedString = str_replace($placeholder, $args[$matches[1][array_search($placeholder, $matches[0])]], $translatedString);
			}
		}
	}

	return $translatedString;
}

/**
 * An alias for the translate function.
 *
 * @param string $key The key to translate.
 * @param array $args An array of arguments to replace in the translated string.
 *
 * @return string The translated string.
 */
function trans(string $key, array $args = []): string
{
	return translate($key, $args);
}
