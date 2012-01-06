# First usage

The first example have a complete database structure.

 * Bugs table
 * Users table
 * Products table
 
## Tables specification by words.
 
```Users``` tables is very simple just a list of users.

```Products``` is the same concept of ```Users``` table.

```Bugs``` is quite complicated because the table have a ```reporter``` 
column that is a link with ```User``` (one-to-one) and the same
concept is applied to ```engineer``` column.
After that consider that Bugs and Product is connected with a many-to-many
relation.

This schema is extracted and modified from ```Zend_Db_Table``` docs.

## Example

```
$ sqlite3 db.sqlite < used-db.sql #create the schema

$ php create-users.php #create users
...
$ php create-product.php #create products
...
$ php create-bugs.php #create bugs with product and user links!
...
```

Check your sqlite database. Now you have 2 users, 1 product and one bug linked 
with users and product.

## Example results

```
$ php get-user-info.php
User name: gmittica
Assigned bug id: This is the description on 06-01-2012 14:35:18
 - Products
     Product: My Product
Assigned bug id: This is the description on 06-01-2012 14:36:02
 - Products
     Product: My Product
Assigned bug id: This is the description on 06-01-2012 14:36:32
 - Products
     Product: My Product
Assigned bug id: This is the description on 06-01-2012 14:45:16
 - Products
     Product: My Product
Assigned bug id: This is the description on 06-01-2012 15:02:49
 - Products
     Product: My Product
```
