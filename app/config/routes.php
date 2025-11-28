<?php

use app\controllers\AccountsController;
use app\controllers\AvatarController;
use app\controllers\AwardsController;
use app\controllers\CommentsController;
use app\controllers\CoreController;
use app\controllers\DashboardController;
use app\controllers\FeedsController;
use app\controllers\FriendsController;
use app\controllers\GamesController;
use app\controllers\GamesModerationController;
use app\controllers\GraphicsController;
use app\controllers\LegalController;
use app\controllers\MakeController;
use app\controllers\MembersController;
use app\controllers\MessagesController;
use app\controllers\MusicController;
use app\controllers\PhpController;
use app\controllers\UpdateController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

/**
 * @var Router $router
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {
    /*
	$router->get('/', function() use ($app) {
		$app->render('welcome', [ 'message' => 'You are gonna do great things!' ]);
	});

	$router->get('/hello-world/@name', function($name) {
		echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
	});

	$router->group('/api', function() use ($router) {
		$router->get('/users', [ ApiExampleController::class, 'getUsers' ]);
		$router->get('/users/@id:[0-9]', [ ApiExampleController::class, 'getUser' ]);
		$router->post('/users/@id:[0-9]', [ ApiExampleController::class, 'updateUser' ]);
	});
    */

	// ==================== CORE ROUTES ====================
	$router->get('/index.php', [ CoreController::class, 'index' ]);
	$router->get('/credits.php', [ CoreController::class, 'credits' ]);
	$router->get('/staff.php', [ CoreController::class, 'staff' ]);

	// ==================== ACCOUNTS ROUTES ====================
	$router->get('/accounts/account.php', [ AccountsController::class, 'account' ]);
	$router->get('/accounts/avatar.php', [ AccountsController::class, 'avatar' ]);
	$router->post('/accounts/check.php', [ AccountsController::class, 'check' ]);
	$router->get('/accounts/checkmigrationownership.php', [ AccountsController::class, 'checkmigrationownership' ]);
	$router->post('/accounts/checkmigrationownership.php', [ AccountsController::class, 'checkmigrationownership' ]);
	$router->get('/accounts/discord.php', [ AccountsController::class, 'discord' ]);
	$router->get('/accounts/login.php', [ AccountsController::class, 'login' ]);
	$router->get('/accounts/logout.php', [ AccountsController::class, 'logout' ]);
	$router->post('/accounts/logout.php', [ AccountsController::class, 'logout' ]);
	$router->get('/accounts/migrationcheck.php', [ AccountsController::class, 'migrationcheck' ]);
	$router->post('/accounts/migrationcheck.php', [ AccountsController::class, 'migrationcheck' ]);
	$router->get('/accounts/register.php', [ AccountsController::class, 'register' ]);
	$router->post('/accounts/registerdatabase.php', [ AccountsController::class, 'registerdatabase' ]);
	$router->get('/accounts/registerpassword.php', [ AccountsController::class, 'registerpassword' ]);
	$router->post('/accounts/registerpassword.php', [ AccountsController::class, 'registerpassword' ]);
	$router->get('/accounts/registersuccess.php', [ AccountsController::class, 'registersuccess' ]);

	// ==================== DASHBOARD ROUTES ====================
	$router->get('/dashboard/index.php', [ DashboardController::class, 'index' ]);
	$router->get('/dashboard/my-games.php', [ DashboardController::class, 'mygames' ]);
	$router->get('/dashboard/my-graphics.php', [ DashboardController::class, 'mygraphics' ]);
	$router->get('/dashboard/profile-edit.php', [ DashboardController::class, 'profileedit' ]);
	$router->post('/dashboard/profile-update.php', [ DashboardController::class, 'profileupdate' ]);
	$router->post('/dashboard/tag-graphic.php', [ DashboardController::class, 'taggraphic' ]);
	$router->get('/dashboard/trash.php', [ DashboardController::class, 'trash' ]);

	// ==================== GAMES ROUTES ====================
	$router->get('/games/challenges.php', [ GamesController::class, 'challenges' ]);
	$router->get('/games/contest.php', [ GamesController::class, 'contest' ]);
	$router->get('/games/featured.php', [ GamesController::class, 'featured' ]);
	$router->get('/games/game-tags.php', [ GamesController::class, 'gametags' ]);
	$router->get('/games/make-review.php', [ GamesController::class, 'makereview' ]);
	$router->post('/games/make-review.php', [ GamesController::class, 'makereview' ]);
	$router->get('/games/members.php', [ GamesController::class, 'members' ]);
	$router->get('/games/multiplayer.php', [ GamesController::class, 'multiplayer' ]);
	$router->get('/games/newest.php', [ GamesController::class, 'newest' ]);
	$router->get('/games/play.php', [ GamesController::class, 'play' ]);
	$router->get('/games/reviews.php', [ GamesController::class, 'reviews' ]);
	$router->get('/games/search.php', [ GamesController::class, 'search' ]);
	$router->get('/games/tags.php', [ GamesController::class, 'tags' ]);
	$router->get('/games/view-review.php', [ GamesController::class, 'viewreview' ]);

	// ==================== GAMES MODERATION ROUTES ====================
	$router->get('/games/moderation/admin.php', [ GamesModerationController::class, 'admin' ]);
	$router->post('/games/moderation/admin.php', [ GamesModerationController::class, 'admin' ]);
	$router->get('/games/moderation/banned.php', [ GamesModerationController::class, 'banned' ]);
	$router->get('/games/moderation/index.php', [ GamesModerationController::class, 'index' ]);
	$router->get('/games/moderation/ipcheck.php', [ GamesModerationController::class, 'ipcheck' ]);
	$router->get('/games/moderation/logs.php', [ GamesModerationController::class, 'logs' ]);
	$router->get('/games/moderation/pending.php', [ GamesModerationController::class, 'pending' ]);

	// ==================== MAKE (GAME CREATION) ROUTES ====================
	$router->get('/make/algo.php', [ MakeController::class, 'algo' ]);
	$router->get('/make/arcade.php', [ MakeController::class, 'arcade' ]);
	$router->get('/make/description.php', [ MakeController::class, 'description' ]);
	$router->post('/make/description.php', [ MakeController::class, 'description' ]);
	$router->get('/make/graphics.php', [ MakeController::class, 'graphics' ]);
	$router->get('/make/help_inline.php', [ MakeController::class, 'helpinline' ]);
	$router->get('/make/index.php', [ MakeController::class, 'index' ]);
	$router->get('/make/plat.php', [ MakeController::class, 'plat' ]);
	$router->get('/make/ppg.php', [ MakeController::class, 'ppg' ]);
	$router->get('/make/publish.php', [ MakeController::class, 'publish' ]);
	$router->post('/make/publish.php', [ MakeController::class, 'publish' ]);
	$router->get('/make/shooter.php', [ MakeController::class, 'shooter' ]);
	$router->get('/make/tags.php', [ MakeController::class, 'tags' ]);
	$router->post('/make/tags.php', [ MakeController::class, 'tags' ]);

	// ==================== AWARDS ROUTES ====================
	$router->get('/awards/all.php', [ AwardsController::class, 'all' ]);
	$router->get('/awards/creator.php', [ AwardsController::class, 'creator' ]);
	$router->get('/awards/index.php', [ AwardsController::class, 'index' ]);
	$router->post('/awards/php/accept.php', [ AwardsController::class, 'accept' ]);
	$router->post('/awards/php/decline.php', [ AwardsController::class, 'decline' ]);
	$router->post('/awards/php/materials.php', [ AwardsController::class, 'materials' ]);
	$router->post('/awards/php/revoke.php', [ AwardsController::class, 'revoke' ]);
	$router->post('/awards/php/send.php', [ AwardsController::class, 'send' ]);

	// ==================== FRIENDS ROUTES ====================
	$router->get('/friends/all.php', [ FriendsController::class, 'all' ]);
	$router->get('/friends/index.php', [ FriendsController::class, 'index' ]);
	$router->post('/friends/php/accept.php', [ FriendsController::class, 'accept' ]);
	$router->post('/friends/php/best.php', [ FriendsController::class, 'best' ]);
	$router->post('/friends/php/ignore.php', [ FriendsController::class, 'ignore' ]);
	$router->post('/friends/php/request.php', [ FriendsController::class, 'request' ]);
	$router->post('/friends/php/revoke.php', [ FriendsController::class, 'revoke' ]);
	$router->post('/friends/php/unbest.php', [ FriendsController::class, 'unbest' ]);
	$router->post('/friends/php/unfriend.php', [ FriendsController::class, 'unfriend' ]);

	// ==================== MESSAGES ROUTES ====================
	$router->get('/messages/index.php', [ MessagesController::class, 'index' ]);

	// ==================== GRAPHICS ROUTES ====================
	$router->post('/graphics/add-tag.php', [ GraphicsController::class, 'addtag' ]);
	$router->get('/graphics/feedback.php', [ GraphicsController::class, 'feedback' ]);
	$router->get('/graphics/getlist.php', [ GraphicsController::class, 'getlist' ]);
	$router->get('/graphics/graphic-tags.php', [ GraphicsController::class, 'graphictags' ]);
	$router->get('/graphics/index.php', [ GraphicsController::class, 'index' ]);
	$router->post('/graphics/put.php', [ GraphicsController::class, 'put' ]);
	$router->get('/graphics/tags.php', [ GraphicsController::class, 'tags' ]);
	$router->get('/graphics/verify.php', [ GraphicsController::class, 'verify' ]);

	// ==================== MEMBERS ROUTES ====================
	$router->get('/members/all.php', [ MembersController::class, 'all' ]);
	$router->get('/members/index.php', [ MembersController::class, 'index' ]);
	$router->get('/members/search.php', [ MembersController::class, 'search' ]);

	// ==================== COMMENTS ROUTES ====================
	$router->get('/comments/include.js.php', [ CommentsController::class, 'includejs' ]);
	$router->get('/comments/index.php', [ CommentsController::class, 'index' ]);

	// ==================== PHP (API) ROUTES ====================
	$router->get('/php/allstaff.php', [ PhpController::class, 'allstaff' ]);
	$router->get('/php/avatarproxy.php', [ PhpController::class, 'avatarproxy' ]);
	$router->get('/php/challenges.php', [ PhpController::class, 'challenges' ]);
	$router->post('/php/challenges.php', [ PhpController::class, 'challenges' ]);
	$router->get('/php/contest.php', [ PhpController::class, 'contest' ]);
	$router->get('/php/contestwinners.php', [ PhpController::class, 'contestwinners' ]);
	$router->post('/php/delete_graphic.php', [ PhpController::class, 'deletegraphic' ]);
	$router->post('/php/delete.php', [ PhpController::class, 'delete' ]);
	$router->post('/php/delete-review.php', [ PhpController::class, 'deletereview' ]);
	$router->post('/php/feature.php', [ PhpController::class, 'feature' ]);
	$router->post('/php/gameevent.php', [ PhpController::class, 'gameevent' ]);
	$router->get('/php/gameresults.php', [ PhpController::class, 'gameresults' ]);
	$router->get('/php/getgamedata.php', [ PhpController::class, 'getgamedata' ]);
	$router->post('/php/getgamedata.php', [ PhpController::class, 'getgamedata' ]);
	$router->get('/php/getgameprops.php', [ PhpController::class, 'getgameprops' ]);
	$router->post('/php/getgameprops.php', [ PhpController::class, 'getgameprops' ]);
	$router->get('/php/getleaderboard.php', [ PhpController::class, 'getleaderboard' ]);
	$router->get('/php/getproject.php', [ PhpController::class, 'getproject' ]);
	$router->post('/php/getproject.php', [ PhpController::class, 'getproject' ]);
	$router->get('/php/getprojects.php', [ PhpController::class, 'getprojects' ]);
	$router->post('/php/getprojects.php', [ PhpController::class, 'getprojects' ]);
	$router->post('/php/idlecheck.php', [ PhpController::class, 'idlecheck' ]);
	$router->get('/php/info.php', [ PhpController::class, 'info' ]);
	$router->get('/php/onlinelist.php', [ PhpController::class, 'onlinelist' ]);
	$router->post('/php/online.php', [ PhpController::class, 'online' ]);
	$router->post('/php/permadelete.php', [ PhpController::class, 'permadelete' ]);
	$router->post('/php/ping.php', [ PhpController::class, 'ping' ]);
	$router->get('/php/popgames2.php', [ PhpController::class, 'popgames2' ]);
	$router->get('/php/popgames.php', [ PhpController::class, 'popgames' ]);
	$router->post('/php/restore.php', [ PhpController::class, 'restore' ]);
	$router->post('/php/savegamedata2.php', [ PhpController::class, 'savegamedata2' ]);
	$router->post('/php/savegamedata3.php', [ PhpController::class, 'savegamedata3' ]);
	$router->post('/php/savegamedata5.php', [ PhpController::class, 'savegamedata5' ]);
	$router->post('/php/savegamedata7.php', [ PhpController::class, 'savegamedata7' ]);
	$router->post('/php/savegamedata.php', [ PhpController::class, 'savegamedata' ]);
	$router->post('/php/saveproject2.php', [ PhpController::class, 'saveproject2' ]);
	$router->post('/php/saveproject3.php', [ PhpController::class, 'saveproject3' ]);
	$router->post('/php/saveproject5.php', [ PhpController::class, 'saveproject5' ]);
	$router->post('/php/saveproject7.php', [ PhpController::class, 'saveproject7' ]);
	$router->post('/php/saveproject.php', [ PhpController::class, 'saveproject' ]);
	$router->post('/php/savethumb.php', [ PhpController::class, 'savethumb' ]);
	$router->get('/php/thumbnails/thumb.php', [ PhpController::class, 'thumb' ]);
	$router->get('/php/url.php', [ PhpController::class, 'url' ]);
	$router->get('/php/usernamecheck.php', [ PhpController::class, 'usernamecheck' ]);
	$router->post('/php/usernamecheck.php', [ PhpController::class, 'usernamecheck' ]);
	$router->post('/php/userstatus.php', [ PhpController::class, 'userstatus' ]);
	$router->post('/php/verifyscore.php', [ PhpController::class, 'verifyscore' ]);
	$router->post('/php/vote.php', [ PhpController::class, 'vote' ]);
	$router->post('/make/php/keepalive.php', [ PhpController::class, 'keepalive' ]);

	// ==================== LEGAL ROUTES ====================
	$router->get('/legal/privacypolicy.php', [ LegalController::class, 'privacypolicy' ]);
	$router->get('/legal/termsofservice.php', [ LegalController::class, 'termsofservice' ]);

	// ==================== AVATAR ROUTES ====================
	$router->get('/avatar/av.php', [ AvatarController::class, 'av' ]);

	// ==================== MUSIC ROUTES ====================
	$router->get('/music/author_redirect.php', [ MusicController::class, 'authorredirect' ]);

	// ==================== UPDATE ROUTES ====================
	$router->get('/update/index.php', [ UpdateController::class, 'index' ]);
	$router->post('/update/upload.php', [ UpdateController::class, 'upload' ]);

	// ==================== FEEDS ROUTES ====================
	$router->get('/feeds/featured/index.php', [ FeedsController::class, 'featured' ]);

}, [ SecurityHeadersMiddleware::class ]);
