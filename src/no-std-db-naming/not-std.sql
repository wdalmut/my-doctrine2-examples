CREATE TABLE User (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    name            VARCHAR(100) NOT NULL
);
 
CREATE TABLE GGroup (
    id              INTEGER PRIMARY KEY AUTOINCREMENT,
    name            VARCHAR(100) NOT NULL
);
 
CREATE TABLE User_has_Group (
    Group_id          INTEGER NOT NULL REFERENCES bugs,
    User_id           INTEGER NOT NULL REFERENCES products,
    PRIMARY KEY       (Group_id, User_id)
);
