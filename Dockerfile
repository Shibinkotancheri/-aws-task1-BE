FROM ubuntu:20.04
RUN apt update && \
    apt install nginx -y && \
    apt install php-fpm php-mysql -y
ADD config/default /etc/nginx/sites-available/default
ADD api /var/www/html/
#ENTRYPOINT ["nginx","-g","daemon off;"," && ","/usr/sbin/php-fpm7.4","--nodaemonize"]
CMD ["/bin/bash", "-c", "/usr/sbin/service php7.4-fpm start && nginx -g 'daemon off;'"]

