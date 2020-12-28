# virtual-wellness-open-source

[![standard-readme compliant](https://img.shields.io/badge/standard--readme-OK-green.svg?style=flat-square)](https://github.com/RichardLitt/standard-readme)

# OPTIONAL BADGES NOT DECIDED ON YET
[![PHP Censor](http://ci.php-censor.info/build-status/image/2?branch=master&label=PHPCensor&style=flat-square)](http://ci.php-censor.info/build-status/view/2?branch=master)
[![Travis CI](https://img.shields.io/travis/php-censor/php-censor/master.svg?label=TravisCI&style=flat-square)](https://travis-ci.org/php-censor/php-censor?branch=master)
[![Codecov](https://img.shields.io/codecov/c/github/php-censor/php-censor.svg?label=Codecov&style=flat-square)](https://codecov.io/gh/php-censor/php-censor)
[![Latest Version](https://img.shields.io/packagist/v/php-censor/php-censor.svg?label=Version&style=flat-square)](https://packagist.org/packages/php-censor/php-censor)
[![Total downloads](https://img.shields.io/packagist/dt/php-censor/php-censor.svg?label=Downloads&style=flat-square)](https://packagist.org/packages/php-censor/php-censor)
[![License](https://img.shields.io/packagist/l/php-censor/php-censor.svg?label=License&style=flat-square)](https://packagist.org/packages/php-censor/php-censor)
   
   

This is the official open source repository for the Virtual Wellness System at UPEI.

TODO: Fill out this long description.

## Table of Contents

- [Security](#security)
- [Background](#background)
- [Install](#install)
- [Usage](#usage)
- [API](#api)
- [Maintainers](#maintainers)
- [Contributing](#contributing)
- [License](#license)

## Security

## Background

The Virtual Wellness System at its core is a tool for researchers to create, publish, collect, and display researcher study results. It will have additional functionality in a forum that will give participants and researchers a communication tool within the group. There will also be a chat widget for quick communication between people operating the website. Additionally, we will add a tool to allow for tracking and updating of wellness goals, and a tool for uploading an applications data that is related to wellness information. 

The Virtual Wellness overall project scope is shown below in graphical form. There are two main components research and healthcare. Researchers can login, create questionnaires, edit their profiles, upload application data, and display reporting. Healthcare providers can pick a patient, enter a diagnosis, or display a diagnosis. Research participants can login and fill out a questionnaire for their participated projects. Healthcare participants can login and fill out a diagnosis or upload their device data to partake in healthcare services. There are provided a number of Webulators that act as research tools for performing statistical analysis included. There are two static pages, about us and contact detailing the provided services. There is a simple main page allowing to login for participants, healthcare providers, and researchers. Authentication is handled by auth0, a third-party provider, to successfully add properly handled user security, and password encryption. A forum will exist and be from Flarum. There will be a chat widget on the site that is from Converse.js.
Out of scope items include SSL encryption (it will be provided), the server installed PHP language, Apache, a Linux or Windows operating system, and the database will be installed on the production environment. A Mysql database is preferred.

## Install


### Step One
Install git cli locally on your development computer

On Mac:

A Mac OS binary installer is available at: [Mac OS Binary Installer](https://git-scm.com/download/mac)

On Windows:
Likely the easiest way to install via Windows is by installing Github Desktop, a GUI solution for git that includes git cli, it is available here: 
[Github Desktop](https://desktop.github.com/)

### Step Two
Next go into the desired directory you wish to install git into on your machine. Then type:

```
git clone https://github.com/CodeItQuick/VWS-Open-Source.git
```

### Step Three
Next install docker.

On Mac:
Docker desktop for mac is available on [Get Docker Desktop for Mac on Dockerhub](https://hub.docker.com/editions/community/docker-ce-desktop-mac/)

On Windows:
Docker desktop for mac is available on [Get Docker Desktop for Windows on Dockerhub](https://hub.docker.com/editions/community/docker-ce-desktop-windows/)

### Step Four
Finally, spin up the database, and then the VWS PHP CodeIgniter server with the following console commands

```
docker-compose up -d mariadb
docker-compose up -d myapp
```

### Other Useful Commands & Information
To check what ports these two services are running on the following console command will run them:
```
docker-compose ps
```

Visit localhost:8000 to see the current website!

At any time if you wish to take down the website this is done with the command:

```
docker-compose down
```

## Usage

```
```

## API

## Maintainers

[@CodeItQuick](https://github.com/CodeItQuick)

## Contributing

See [the contributing file](contributing.md)!

PRs accepted.

Small note: If editing the README, please conform to the [standard-readme](https://github.com/RichardLitt/standard-readme) specification.

## License

MIT © 2020 Evan
