	<?php

require_once('twitter_proxy.php');

// Twitter OAuth Config options
$oauth_access_token = '725789234594983937-4ULtMJkArFKQmNIt3QIKRcPfX9muRT5
';
$oauth_access_token_secret = 'EUGpchXQCrLFc3wRJoRu3gzZP0PFFWmNfdyxYId2zYwUv
';
$consumer_key = 'A7PWruSZ7fMVNBzGm8mhoRepx';
$consumer_secret = 'REZ7PJ2aDZpeMbxLsFmi0p4GNcZsMsuHlxE8dwVvw7LLjDoz9k';
$user_id = '725789234594983937';
$screen_name = 'parallax';
$count = 5;

$twitter_url = 'statuses/user_timeline.json';
$twitter_url .= '?user_id=' . $user_id;
$twitter_url .= '&screen_name=' . $screen_name;
$twitter_url .= '&count=' . $count;

// Create a Twitter Proxy object from our twitter_proxy.php class
$twitter_proxy = new TwitterProxy(
	$oauth_access_token,			// 'Access token' on https://apps.twitter.com
	$oauth_access_token_secret,		// 'Access token secret' on https://apps.twitter.com
	$consumer_key,					// 'API key' on https://apps.twitter.com
	$consumer_secret,				// 'API secret' on https://apps.twitter.com
	$user_id,						// User id (http://gettwitterid.com/)
	$screen_name,					// Twitter handle
	$count							// The number of tweets to pull out
);

// Invoke the get method to retrieve results via a cURL request
$tweets = $twitter_proxy->get($twitter_url);

echo $tweets;

?>