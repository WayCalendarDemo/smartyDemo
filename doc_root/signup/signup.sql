-- Creates a new database
CREATE DATABASE LOGINCREDENTIALS;

-- The USE statement is used to select any existing database in the SQL schema
USE LOGINCREDENTIALS

-- CREATE TABLE is used to create a new table
-- In the brackets comes the list defining each column in the table adn what sort of data type it is.
-- NOT NULL signifies that these fields cannot be NULL while creating records in this table.
CREATE TABLE LOGINCREDENTIALS {
  id int(11) NOT NULL auto_increment,
  Name varchar(255) NOT NULL default '',
  EntryDate datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY (id),
  KEY EntryDate (EntryDate)
} TYPE=MyISAM

GRANT All ON LOGINCREDENTIALS.* TO 









-- Information Source: https://www.tutorialspoint.com/sql/sql-select-database.htm
