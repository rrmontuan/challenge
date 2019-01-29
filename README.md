# StarCorp Challenge - Backend Developer

### Directory Structure

    src/                classes of the this project
    tests/              folder containing the unit tests
        bootstrap.php   bootstrap file used for autoloading classes during tests
    phpunit.xml.dist    configuration file for phpunit
    composer.json       dependencies of this project
    index.php           index file

### Requirements
For using this project you need the following requirements:


- PHP >= 7.0
- Composer
- GIT (In case you want to clone this repository)

### Installing the project
You can install this project in two ways, downloading an archive file or cloning this repository using the following command:

```sh
$ git clone git@github.com:rrmontuan/challenge.git
```

After that, using the terminal, access the folder containing this project and run the following command to install the dependencies:

```sh
$ composer install
```

### Testing

You can run the unit tests running one of the following commands:

```sh
$ vendor/bin/phpunit
```

or

```sh
$ composer tests
```

License
----

MIT

