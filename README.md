<h1 align="center"> twapi </h1>

<p align="center"> Twitter API.</p>


![StyleCI build status](https://github.styleci.io/repos/503515961/shield) 

## Installing

```shell
$ composer require jerrkill/twapi -vvv
```

## Usage

.env

```shell
TWITTER_CONSUMER_KEY=
TWITTER_CONSUMER_SECRET=
TWITTER_ACCESS_TOKEN=
TWITTER_ACCESS_TOKEN_SECRET=
TWITTER_BEARERTOKEN=
```


```php
$twitter = new Twapi(config('twapi.CONSUMER_KEY'), config('twapi.CONSUMER_SECRET'), config('twapi.BEARERTOKEN'));
$params = [
    'tweet.fields' => 'id,text,author_id,attachments,created_at,public_metrics,referenced_tweets',
    'expansions' => 'author_id',
    'user.fields' => 'id,name,username,description,created_at'
];
$response = $twitter->request('GET', "/2/lists/{$listId}/tweets", $params);
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/jerrkill/twapi/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/jerrkill/twapi/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT