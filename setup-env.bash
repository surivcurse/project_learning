#!/usr/bin/env bash

cp env .env
echo "app.baseURL = 'https://lms.bestpro.work'" >> .env
echo "CI_ENVIRONMENT = production" >> .env
echo "database.default.hostname = localhost" >> .env
echo "database.default.database = therest_project" >> .env
echo "database.default.username = therest_project" >> .env
echo "database.default.password = w2lYy64_" >> .env
echo "database.default.DBDriver = MySQLi" >> .env