# Symfony tips

## MakerBundle: generate file templates
  _File name's nouns should always be singular_

```shell
# install
composer require --dev symfony/maker-bundle

#show all commands
symfony console list make

#create a file
symfony console make:controller
```

## Profiler: debugging

```shell
# install
composer require --dev symfony/profiler-pack
```

- Show all symfony services:

```shell
php bin/console debug:autowiring
```

## Doctrine: database communication

- Installation
```shell
composer require doctrine
```
- After installation, setup .env file with db url : 
```.env
DATABASE_URL="mysql://USERNAME:PASSWORD@DB:HOST/crudlist?serverVersion=16&charset=utf8"
```

- Create the db inside docker container by open docker terminal, cd inside the workDir(with package.json), then:
```shell
symfony console doctrine:database:create
```

- Create entity
_Entity is a PHP Object that mapped to a db table with each property mapped to a table column_
```shell
symfony console make:entity
```
Follow the prompt to create entity for all the db table field
If any mistake happens, edit the php entity file inside Entity folder

- Create migration inside the docker container, open the image terminal, cd inside the WorkDir (with package.json), then:
_Migration means version control but for db, make migration create a version of the db, doctrine migrate apply the version_
```shell
symfony console make:migration
```

Run the migrate:
```shell
symfony console doctrine:migrations:migrate
```