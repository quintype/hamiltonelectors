FROM quintype/docker-base:php-nginx

MAINTAINER Quintype Developers <dev-core@quintype.com>

EXPOSE 3000

RUN ln -s /app/log /var/log/pina-colada

ADD . /app

WORKDIR /app

RUN git log -n1 --pretty="Commit Date: %aD%nBuild Date: `date --rfc-2822`%n%h %an%n%s%n" > public/round-table.txt

RUN rm -rf tmp vendor node_modules
RUN composer install
RUN npm install
RUN ./node_modules/.bin/gulp --production

RUN chown -R www-data.www-data /app

CMD ["./docker/start-in-container.sh"]
