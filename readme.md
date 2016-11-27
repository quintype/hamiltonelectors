# Starter App for Quintype (Laravel)

### Setup Instructions

* Follow the prerequisites for your platform (below)
* Clone the repo and pull the libraries required. All future commands will be issued from inside this new directory.
```shell
git clone https://github.com/quintype/pina-colada.git
cd pina-colada
```
* Install all external libraries
```shell
composer install # Install PHP Libraries
npm install # Install Javascript dependencies
```

* Create an environment file, and a secret key for your local machine
```shell
cp .env.example .env
php artisan key:generate
```

### Compiling assets
In order to compile assets (javascripts and CSS), you will need to run gulp.
```shell
./node_modules/.bin/gulp
```

### Running the app
To get the application running, run the app as follows

```shell
php artisan serve
```

You can now visit the site at [http://localhost:8000](http://localhost:8000)

### Prerequisites

#### OSX
* Install homebrew (`/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"`)
* Install git (Which comes with XCode)
* Install composer from https://getcomposer.org/doc/00-intro.md (see below)
* Install node 6.4 (`brew install node`)

#### Windows
* Install [Git (and Git Bash)](https://git-scm.com/download/win).
* Install [XAMPP for Windows](https://www.apachefriends.org/index.html).
* Install [Composer](https://getcomposer.org/doc/00-intro.md#installation-windows).
* Install [Node and NPM](https://nodejs.org/en/). Please install Node 6+ onwards.

#### Composer

To install composer use command :- 
```shell
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
sudo chmod +x composer
```


After installing all the above, please close and reopen all terminals (or just reboot your system). All the commands above can be run in "Git BASH", when launched as Administrator.
