FROM php:8.2-cli

WORKDIR /app

COPY calculator.php .

CMD ["php", "calculator.php"]

