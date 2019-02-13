-- Creates a new database
CREATE DATABASE LOGINCREDENTIALS;

-- The USE statement is used to select any existing database in the SQL schema
USE LOGINCREDENTIALS

-- CREATE TABLE is used to create a new table
-- In the brackets comes the list defining each column in the table adn what sort of data type it is.

CREATE TABLE login_credentials {
  id int(11) NOT NULL auto_increment,
  Name varchar(255) NOT NULL default '',
  EntryDate datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY (id)
}









-- Information Source: https://www.tutorialspoint.com/sql/sql-select-database.htm
