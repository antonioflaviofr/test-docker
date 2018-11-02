FROM httpd:latest

COPY apache-config.conf /usr/local/apache2/conf/apache-config.conf
RUN echo "Include /usr/local/apache2/conf/apache-config.conf" \
    >> /usr/local/apache2/conf/httpd.conf
RUN mkdir -p /var/log/apache2
RUN chown -R www-data:www-data /var/log/apache2