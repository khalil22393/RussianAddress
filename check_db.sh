#!/bin/bash

echo "Waiting for MySQL to be ready..."

until mysql -h"$DB_HOST" -u"$DB_USERNAME" -p"$DB_PASSWORD" -e 'SELECT 1' > /dev/null 2>&1; do
    sleep 3
    echo "Waiting for database connection..."
done

echo "MySQL is available. Continuing..."
