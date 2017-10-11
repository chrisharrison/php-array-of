# php-array-of

[![Build Status](https://travis-ci.org/chrisharrison/php-array-of.svg?branch=master)](https://travis-ci.org/chrisharrison/php-array-of)

Implement an array of a defined type. Generics replacement for PHP.

## Requirements ##

Requires PHP 7.1

## Installation ##

Through Composer, obviously:

```
composer require chrisharrison/php-array-of
```

## Why? ##

PHP 7 has pretty good support for type declarations, both in arguments and returns. It now also handles primitives as well as class names. For example:

```
public function dealCard(string $cardName): Card;
```

One thing is still lacking. Array generics. There's an [RFC](https://wiki.php.net/rfc/arrayof) for implementing 'Array Of'. It's been around for quite a while and was roundly rejected.

This library is a workaround for that. It allows you to make type declarations for arrays of a particular type.

## Usage ##

### Using an existing implementation ###

The library comes with `ArrayOf` implementations for all of the PHP scalar types. i.e.:

* `ArrayOfInteger`
* `ArrayOfFloat`
* `ArrayOfString`
* `ArrayOfBoolean`

These can then be used in a type declaration:

```
public function getIntegers() : ArrayOfInteger;
```

An `ArrayOfInteger` can be created:

```
$integers = ArrayOfInteger([1,1,2,3,5,8,13]);
```

and used like an array:

```
$sum = $integers[5] + $integers[6]; // 21
```

### Implementing your own type ###

You can create your own `ArrayOf`s for your own types.

```
use ChrisHarrison\ArrayOf\ArrayOf;

final class ArrayOfCard extends ArrayOf
{
    protected function typeToEnforce(): string
    {
        return Card::class;
    }
}
```

An `ArrayOfCard` can be created thus:

```
$aceOfSpades = new Card('spades', 'ace');
$threeOfClubs = new Card('clubs', '3');

$cards = ArrayOfCard([$aceOfSpades, $threeOfClubs]);
```
