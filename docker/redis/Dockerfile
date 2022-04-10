FROM redis:6.2-alpine

LABEL maintainer="David Li"

USER root

COPY ./redis.conf /etc/redis.conf

ENTRYPOINT [ "redis-server", "/etc/redis.conf" ]

EXPOSE 6379