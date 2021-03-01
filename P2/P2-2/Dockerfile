# we will inherit from  the Debian image on DockerHub
FROM debian

# set timezone so files' timestamps are correct
ENV TZ=Europe/Madrid

# install apache and php 7.3
# we include procps and telnet so you can use these with shell.sh prompt
RUN apt-get update -qq >/dev/null && apt-get install -y -qq procps telnet apache2 php7.3 -qq >/dev/null

# HTML server directory
WORKDIR /var/www/html
COPY public_html/* entrypoint.sh /var/www/html/

# The PHP app is going to save its state in /data so we make a /data inside the container
RUN mkdir /data && chown -R www-data /data && chmod 755 /data & chmod 777 -R /var/www/html/
RUN mkdir /var/www/html/protected 
RUN chmod 777 -R /var/www/html/protected
COPY auth.php /var/www/html/protected
RUN mkdir /etc/htpasswd
RUN htpasswd -c -b /etc/htpasswd/.htpasswd mario 'qwerty'
RUN htpasswd -b /etc/htpasswd/.htpasswd juan '123456'

COPY protected.conf /etc/apache2/sites-available/protected.conf


RUN a2ensite protected.conf

# we run a script to stat the server; the array syntax makes it so ^C will work as we want
CMD  ["./entrypoint.sh"]
