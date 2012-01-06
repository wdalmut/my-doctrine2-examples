# Tables specification by words.
 
```Users``` tables is very simple just a list of users.

```Products``` is the same concept of ```Users``` table.

```Bugs``` is quite complicated because the table have a ```reporter``` 
column that is a link with ```User``` (many-to-one) and the same
concept is applied to ```engineer``` column.
After that consider that Bugs and Product is connected with a many-to-many
relation.

This schema is extracted and modified from ```Zend_Db_Table``` docs.

## Description

Folder ```lib``` contains example useful models and proxies. 

Other folders are examples.

## Database

You have to use ```sqlite``` database for run this examples. See file
```used-db.sql```

In this folder run:

```
sqlite3 db.sqlite < used-db.sql 
```

Now you can run examples

###Not standard database name convention

Into folder ```no-std-db-naming``` an example of Doctrine2 usage with not standard
naming of tables and fields.