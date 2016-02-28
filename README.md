# iPlayer Coding Exercise
Coding exercise set for 
[https://github.com/iplayer/hiring/blob/master/azListing.md](https://github.com/iplayer/hiring/blob/master/azListing.md)

## Install
Install dependencies using [Composer](https://getcomposer.org):
```
composer install
```

Start server:
```
php -S localhost:8080 -t public/
```

Visit [http://localhost:8080](http://localhost:8080) in your browser.

## Tests
The tests use PHPUnit and [Selenium WebDriver](http://docs.seleniumhq.org/projects/webdriver/). You will first need to download Selenium WebDriver. To run the test suite

Start server (if not already running):
```
php -S localhost:8080 -t public/
```

Start Selenium WebDriver in the background (note, you may need to adapt this command based on the filename and place you are storing the jar file):
```
java -jar /usr/local/bin/selenium-server-standalone-2.48.2.jar&
```

With the server and selenium both running, start the PHPUnit tests:
```
vendor/bin/phpunit --configuration phpunit.xml
```

## Overview
This project uses the [Slim 2.8 Framework](http://www.slimframework.com) with open source [Slim Controller](https://github.com/fortrabbit/slimcontroller) extension to allow separate controller classes. I also used [Guzzle](http://docs.guzzlephp.org/en/latest/#) to abstract the calls to the API. The front end uses [Foundation 6](http://foundation.zurb.com) for responsive design.

## Improvements and To Dos (roughly in order of importance)
1. Unit testing, in particular allowing testing without having to hit the real API but instead mocking the API responses. I couldn't come up with a good test strategy for this. One option to try would be to add a wrapper to the API response that parses the content and returns Programme Objects. This would also give further benefits such as abstracting data from the JSON (think `getTitle()` and `getSmallImage()`). Alternatively, you could try mocking the Guzzle Client and passing it in through the DI container.
2. Add error validation (for example when no results are found or invalid urls such as `http://localhost:8080/invalidstring/2`)
3. Change from using the Foundation grid system for the list of A-Z options and instead replicate [iPlayer](http://www.bbc.co.uk/iplayer/a-z/a) more closely as this is better looking and a more effecient use on space
4. Slightly more advance [pagination](http://www.bbc.co.uk/programmes/styleguide/pagination) to follow BBC guidelines
5. Prettier URLs for the first page of results (`http://localhost:8080/a/1` can just be `http://localhost:8080/a`)
