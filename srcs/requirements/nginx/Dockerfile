FROM debian:buster

RUN apt-get update && apt-get upgrade -y

RUN apt-get install openssl -y

RUN mkdir -p /etc/nginx/ssl

RUN openssl req -newkey rsa:4096 -days 42 -nodes -x509 \
-subj "/C=CH/ST=Lausanne/L=Renens/O=42/OU=42/CN=mnikolov.42.fr/UID=mnikolov" \
-out /etc/nginx/ssl/inception.crt \
-keyout /etc/nginx/ssl/inception.key

COPY conf/nginx.conf /etc/nginx/nginx.conf

RUN mkdir -p /var/www/html

RUN chmod 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

EXPOSE 443

CMD [ "nginx", "-g", "daemon off;" ]
