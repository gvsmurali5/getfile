  FROM php:7.0-apache  
  
 COPY /web/ /var/www/html
 
 

 # ENV APACHE_DOCUMENT_ROOT=C:/Users/venkata.gangisetti/Project/web
 
 #RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
 
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
  
  COPY php.ini /usr/local/etc/php/
   
 #COPY php.ini /var/www/html

 #RUN rm -v /etc/apache2/sites-enabled/000-default.conf
 
 #COPY /000-default.conf/ /etc/apache2/sites-enabled/
 
 #RUN apt-get update && \
   #apt-get install -y \
      #zlib1g-dev \
       # && docker-php-ext-install zip
	   
	   RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip
	   
	#RUN apt-get install php7.0-zip

 #RUN ln -sf /dev/stdout /var/log/apache2/access.log &&  ln -sf /dev/stderr /var/log/apache2/error.log

 EXPOSE 80

 #CMD /usr/sbin/apache2ctl -D FOREGROUND
 
 #RUN service apache2 restart
 
# CMD echo "ServerName localhost" >> /etc/apache2/apache2.conf
#CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]