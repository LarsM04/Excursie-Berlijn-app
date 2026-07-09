<?php

function app_db_config(): array
{
	return [
		'host' => '127.0.0.1',
		'port' => 3306,
		'dbname' => 'excursie_berlijn_app',
		'user' => 'root',
		'pass' => '',
	];
}

function app_db(): ?PDO
{
	static $pdo = null;
	static $initialized = false;

	if ($initialized) {
		return $pdo;
	}

	$initialized = true;
	$config = app_db_config();

	try {
		$dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=utf8mb4', $config['host'], $config['port'], $config['dbname']);
		$pdo = new PDO($dsn, $config['user'], $config['pass'], [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		]);
	} catch (PDOException $exception) {
		$pdo = null;
	}

	return $pdo;
}

function app_fetch_all(string $sql, array $params = []): array
{
	$pdo = app_db();

	if ($pdo === null) {
		return [];
	}

	$statement = $pdo->prepare($sql);
	$statement->execute($params);

	return $statement->fetchAll();
}

function app_fetch_one(string $sql, array $params = []): ?array
{
	$pdo = app_db();

	if ($pdo === null) {
		return null;
	}

	$statement = $pdo->prepare($sql);
	$statement->execute($params);
	$row = $statement->fetch();

	return $row === false ? null : $row;
}

function app_h($value): string
{
	return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function app_asset(string $path, string $base = ''): string
{
	if ($path === '') {
		return '';
	}

	if (preg_match('#^(https?:)?//#', $path) === 1 || str_starts_with($path, '/')) {
		return $path;
	}

	return $base . ltrim($path, '/');
}
