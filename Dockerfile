FROM httpd

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]