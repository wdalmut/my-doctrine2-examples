# DataBase generation example

Generate database from your models instead generate your database first!

## Install all dependencies

```shell
$ curl -s http://getcomposer.org/installer | php
$ php composer.phar install
```

## Generate your database

```shell
$ cd src/db-generation/generation
$ ../../../vendor/doctrine/orm/bin/doctrine orm:schema-tool:create
```

That's all now try it!

```shell
$ php eg-1.php
New post created
$ sqlite3 db.sqlite
sqlite> select * from posts;
1|Hello World
```

