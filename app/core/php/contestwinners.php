<?php
require_once '../content/initialize.php';

require(__DIR__ . '/../../repositories/repositorymanager.php');
require(__DIR__ . '/../../services/GameFeedService.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;

$gameRepository = RepositoryManager::get()->getGameRepository();

$gameFeed = new GameFeedService($gameRepository);

echo $gameFeed->generateFeedForContestWinners($id);
