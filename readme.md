# Phapi Exception

[![Build status](https://img.shields.io/travis/phapi/exception.svg?style=flat-square)](https://travis-ci.org/phapi/exception)
[![Code Climate](https://img.shields.io/codeclimate/github/phapi/exception.svg?style=flat-square)](https://codeclimate.com/github/phapi/exception)
[![Test Coverage](https://img.shields.io/codeclimate/coverage/github/phapi/exception.svg?style=flat-square)](https://codeclimate.com/github/phapi/exception/coverage)

Package contains a set of exceptions matching HTTP error responses. Phapi will take care of logging the error and sending a proper error response when throwing these exceptions.

## Installation
The package is installed by default by the Phapi framework. Installing the package to use is separately can be done by using composer:

```shell
$ composer require phapi/exception:1.*
```

## Included exceptions
* BadGateway
* BadRequest
* Conflict
* Forbidden
* Gone
* InternalServerError
* Locked
* MethodNotAllowed
* NotAcceptable
* NotFound
* NotImplemented
* PaymentRequired
* RequestEntityTooLarge
* RequestTimeout
* ServiceUnavailable
* TooManyRequests
* Unauthorized
* UnprocessableEntity
* UnsupportedMediaType

## License
Phapi Exception is licensed under the MIT License - see the [license.md](https://github.com/phapi/exception/blob/master/license.md) file for details

## Contribute
Contribution, bug fixes etc are [always welcome](https://github.com/phapi/exception/issues/new).
