FROM nginx:stable

WORKDIR /var/www/html

ENV TZ=Asia/Ho_Chi_Minh

COPY ./nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
