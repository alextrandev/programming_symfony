# Symfony tips

- MakerBundle: generate file templates
  _File name's nouns should always be singular_

```shell
# install
composer require --dev symfony/maker-bundle

#show all commands
symfony console list make

#create a file
symfony console make:controller
```

- Profiler: debugging

```shell
# install
composer require --dev symfony/profiler-pack
```

- Show all symfony services:

```shell
php bin/console debug:autowiring
```
