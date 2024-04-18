# Symfony file structure

### bin/

- Contains files for the bin/console command. Ex: php bin/console <command>

### config/

- Contains all configuration files such as routes, services and packages

### public/

- It is the document root of the project where any publicly accessible files are contained
  **Contain index.php which render the whole project**

### src/

- This is the main working folder

- Contains all PHP code

### var/

- Contains all automatically-created files like cache files and logs

### vendor/

- Contains all third-party libraries.
- These are downloaded via the Composer package manager

### Root files:

- .env: contain evironment variable
- \*.lock and \*.json files: pakages manager

### Optional: templates/

- Contains all Twig templates

### Opstional: migrations/

- Contains all doctrine migration class files
