[![Build Status](https://travis-ci.org/pascualstromsnes/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/pascualstromsnes/chuck-norris-jokes)

# Chuck Norris Jokes

Create Chuck Norris jokes in your next PHP project.

## Installation

Require the package using composer:

```bash
composer require pascualstromsnes/chuck-norris-jokes 
```

## Usage

```php
use Pascualstromsnes\ChuckNorrisJokes\JokeFactory; 

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
