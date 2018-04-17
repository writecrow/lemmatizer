# Lemmatizer

[![Circle CI](https://circleci.com/gh/writecrow/lemmatizer.svg?style=shield)](https://circleci.com/gh/writecrow/lemmatizer)

A PHP library for getting a lemma from a given word, and getting a list of words
that map to a lemma.

## Usage in an application
The included `index.php` file contains a generation form demo.

Make your code aware of the Lemmatizer class via your favorite method
(e.g., `use writecrow\Lemmatizer\Lemmatizer;`)

Then pass a word into one of the two methods
```php
print Lemmatizer::getLemma('leaves');
// Will print 'leaf'

print Lemmatizer::getWordsFromLemma('leaf');
// Will print 'leaves,leafing,leafed,leafs'
```

## Testing
Unit Tests can be run (after ```composer install```) by executing ```vendor/bin/phpunit```