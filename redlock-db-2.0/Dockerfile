# Menggunakan official image MySQL 8.0
FROM mysql:8.0

# Menetapkan password untuk root MYSQL
ENV MYSQL_ROOT_PASSWORD=root

# Copy backup file SQL 
COPY redlock-db.sql /docker-entrypoint-initdb.d/redlock-db.sql
