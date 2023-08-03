FROM debian:buster

RUN apt-get update && apt-get upgrade -y && \
    apt-get install nginx openssl -y && \
    openssl req -newkey rsa:4096 -days 42 -nodes -x509 \
    -subj "/C=CH/ST=Lausanne/L=Renens/O=42/OU=42/CN=mnikolov.42.fr/UID=mnikolov" \
    -out /etc/ssl/certs/inception.crt \
    -keyout /etc/ssl/private/inception.key && \
    mkdir -p /var/www/html && chmod 755 /var/www/html && \
    chown -R www-data:www-data /var/www/html

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
