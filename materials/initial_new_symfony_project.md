# Create new symfony app

### Check if Composer is installed

```shell
composer
```

**To install composer:**

```shell
brew install composer
```

### Check if symfony is installed

```shell
symfony
```

**To install symfony:**

```shell
brew install symfony-cli/tap/symfony-cli
```

### Install a symfony project

_Symfony project is a git enabled so it must not be install inside a git folder_
**To install a simple project**

```shell
symfony new appname
```

**To install a complete app with more pre build files**

```shell
symfony new fullappname --webapp
```

### Start the app

```shell
symfony serve -d
```

_-d stand for Deamon_

**Or**

```shell
symfony server:start
```

**To stop:**

```shell
symfony server:stop
```
