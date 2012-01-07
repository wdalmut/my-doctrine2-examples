# Tables specification by words.
 
```User``` table is very simple just a list of users.

```GGroup``` is the same concept of ```User``` table.

Users and groups table are link together by ```User_has_Group``` table 
that is the many-to-many support table.

This schema use not conventional table naming for checking long entity descriptions.

## Description

Folder ```lib``` contains example useful models and proxies. 

Other folders are examples.

## Database

You have to use ```sqlite``` database for run this examples. See file
```not-std.sql```

In this folder run:

```
sqlite3 db-not-std.sqlite < not-std.sql 
```

Now you can run examples
