# Production Container Definition for team-collab-php-blade-v16
FROM alpine:3.19
RUN apk add --no-cache bash curl
WORKDIR /app
COPY . /app
CMD ["echo", "team-collab-php-blade-v16 container active"]
