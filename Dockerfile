FROM php:8.2
WORKDIR /app
COPY . /app/
EXPOSE 3000
CMD ["php", "-S", "0.0.0.0:3000"]