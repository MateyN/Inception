FROM debian:bullseye

RUN apt-get update \
	&& apt-get install -y \
	nginx \
	openssl

COPY ./conf/nginx.conf /etc/nginx/sites-available/default
COPY ./conf/nginx.conf /etc/nginx/sites-enabled/default

EXPOSE 443

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt \
	-subj "/C=CH/ST=Lausanne/L=Renens/O=42/OU=42/CN=mnikolov.42.fr/UID=mnikolov"

CMD ["nginx", "-g", "daemon off;"]