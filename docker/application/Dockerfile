FROM centos:7

LABEL maintainer="David Li"

USER root

COPY ./docker-enrtypoint.sh /bin/docker-enrtypoint.sh

RUN chmod +x /bin/docker-enrtypoint.sh && \
    yum install -y epel-release && \
    yum install -y php && \
    yum install -y php-fpm && \
    yum install -y php-mysql && \
    yum install -y php-pecl-redis && \
    yum install -y nginx && \
    mkdir -p /php && \
    yum clean all && \
    rm -rf /var/cache/yum

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./php.conf /etc/php-fpm.d/php.conf

VOLUME ["/php"]

EXPOSE 8080

ENTRYPOINT ["/bin/docker-enrtypoint.sh"]
