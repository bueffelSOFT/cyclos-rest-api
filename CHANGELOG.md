# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.4.0] - TBD
### Added
- some endpoints added
### Changed
- require PHP >= 8.2
- require Guzzle >= 7.4

## [1.3.2] - 2023-06-26
### Fixed
- fixes failure w/ cyclos 4.16[.1] where the empty Bearer header is no longer allowed

## [1.3.1] - 2022-03-30
### Fixed
- use secure guzzle/psr version

## [1.3.0] - 2022-03-04
### Changed
- allow PHP8

## [1.2.3] - 2021-08-31
### Fixed
- compatibility with guzzlehttp/psr7:2.0

## [1.2.2] - 2021-08-31
### Fixed
- compatibility with guzzlehttp/psr7:2.0

## [1.2.1] - 2021-07-27
### Fixed
- urlencode() all identifiers used in the request URL

## [1.2.0] - 2021-07-14
### Changed
- allows Guzzle 6 (for Typo3 support)

## [1.1.0] - 2021-03-07
### Added
- methods getUserAccountHistory, getUserAccountByType

### Fixed
- timeout after 20 seconds for API requests

## [1.0.0] - 2020-11-05

First working version.