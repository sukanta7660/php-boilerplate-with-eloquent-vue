# PHP Boilerplate With Eloquent-Vue

#

### How to use:

* Just clone the repository and keep on your server directory (htdocs) or anything else.
* run command $` npm i` to install node
* run command $` composer install` to install composer
* run command $` cp .env.example .env`
* Set you database credentials in .env file
* run command $` composer dump-autoload` for refresh autoload files
* run command $` npx mix watch` for compile vue files
* Run command $` php -S localhost:3000` to start server

### Migrate Database
```
localhost:3000/migrate
```

[//]: # (355841112680663/67,)

[//]: # (8947007212624302483)
### Drop Database Tables
```
localhost:3000/drop
```

### Seed Database
```
localhost:3000/seed
```
```
Default User:
email: admin@gmail.com
password: 123456
```
