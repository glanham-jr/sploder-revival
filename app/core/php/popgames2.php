<?php
require_once '../content/initialize.php';

require_once(__DIR__ . '/../../repositories/repositorymanager.php');
require_once(__DIR__ . '/../../services/GameFeedService.php');

$gameRepository = RepositoryManager::get()->getGameRepository();

$gameFeed = new GameFeedService($gameRepository);

echo $gameFeed->generateFeedForWeirdPopularGames();

