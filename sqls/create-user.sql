-- create a dataabse
CREATE DATABASE myblog;
-- create a `admin` user
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, ALTER, INDEX ON ''@'locahost' IDENTIFIED BY '';
--