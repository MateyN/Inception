# ==> Create a container from DEBIAN
FROM mariadb:latest

# ==> MAJ of apt-get, to get the last version of packages
RUN apt-get update && apt-get upgrade -y

# ==> Install MariaDB server (MySQL)
RUN apt-get install mariadb-server -y

# ==> Copy into the container the config file of MariaDB from folder conf
COPY conf/conf.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

# ==> Execute the bash script to create the database and the user
#ENTRYPOINT ["bash", "mariadb.sh"]

# ==> Expose the only port allowed by the subject (MySQL)
EXPOSE 3306