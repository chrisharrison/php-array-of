# php-array-of

[![Build Status](https://travis-ci.org/chrisharrison/php-array-of.svg?branch=master)](https://travis-ci.org/chrisharrison/php-array-of)

Implement an array of a defined type. Generics replacement for PHP.

## Requirements ##

Requires PHP >= 7.1

## Installation ##

Through Composer, obviously:

```
composer require chrisharrison/php-array-of
```

## Why? ##

PHP 7 has pretty good support for type declarations, both in arguments and returns. It now also handles primitives as well as class names. For example:

```php
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

```php
public function getIntegers() : ArrayOfInteger;
```

An `ArrayOfInteger` can be created:

```php
$integers = ArrayOfInteger([1,1,2,3,5,8,13]);
```

and used like an array:

```php
$sum = $integers[5] + $integers[6]; // equals 21
```

### Implementing your own type ###

You can create your own `ArrayOf`s for your own types.

```php
final class ArrayOfCard extends ArrayOf
{
    protected function typeToEnforce(): string
    {
        return Card::class;
    }
}
```

An `ArrayOfCard` can be created thus:

```php
$aceOfSpades = new Card('spades', 'ace');
$threeOfClubs = new Card('clubs', '3');

$cards = ArrayOfCard([$aceOfSpades, $threeOfClubs]);
```

## Other concerns ##

### Enforcement ###

Members of an `ArrayOf` are enforced as being of the type specified in the `typeToEnforce` abstract method. This enforcement occurs on instantiation at runtime. If you try to instantiate with a member of a non-matching type, an exception will be thrown.

### Permissible types ###

Only PHP [scalars](http://php.net/manual/en/function.is-scalar.php) and objects can be members of an `ArrayOf`. So no `callable`s and no `array`s. 

### Immutability ###

`ArrayOf`s are mutable. This library provides the capability to define immutable objects in the form of `ImmutableArrayOf`s. These objects extend from `ArrayOf` and work in the same way except after the initial instantiation, no further changes can be made to the object. If you try to perform a write operation (e.g. `unset`) on it, an exception will be thrown. All of the scalar types are also provided in immutable form:

* `ImmutableArrayOfInteger`
* `ImmutableArrayOfFloat`
* `ImmutableArrayOfString`
* `ImmutableArrayOfBoolean`
