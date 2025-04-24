FROM mysql:latest

COPY ../databasebackups/databases/Prometeudb.sql /

RUN mysql -u root -p12345 Prometeudb < Prometeudb.sql
