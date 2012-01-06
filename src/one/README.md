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