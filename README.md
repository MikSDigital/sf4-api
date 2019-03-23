Inspired of the tutorial [thecodingmachine.io/building-a-single-page-application-with-symfony-4-and-vuejs](https://thecodingmachine.io/building-a-single-page-application-with-symfony-4-and-vuejs).

# Quick start

If you want to try out the project just follow these steps.

```bash
$ docker-compose up -d
$ docker-compose exec app bash # executing bash inside app service
$ composer install
$ yarn install
$ yarn dev
$ php bin/console doctrine:migration:migrate
$ php bin/console doctrine:fixtures:load
```

Update your `/etc/hosts` file with:

```
0.0.0.1   app.localhost
0.0.0.1   phpmyadmin.app.localhost
```

You may now go to [http://app.localhost/](http://app.localhost/)

https://www.udemy.com/creating-rest-api-in-symfony/learn/v4/t/lecture/8489098?start=345
