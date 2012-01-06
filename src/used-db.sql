CREATE TABLE users (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    name            VARCHAR(100) NOT NULL
);
 
CREATE TABLE products (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    name            VARCHAR(100) NOT NULL
);
 
CREATE TABLE bugs (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    description     VARCHAR(100),
    created         DATETIME,
    status          VARCHAR(100),
    engineer_id     INTEGER,
    reporter_id     INTEGER
);
 
CREATE TABLE bug_product (
    bug_id            INTEGER NOT NULL REFERENCES bugs,
    product_id        INTEGER NOT NULL REFERENCES products,
    PRIMARY KEY       (bug_id, product_id)
);
