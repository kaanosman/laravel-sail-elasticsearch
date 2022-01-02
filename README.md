# Laravel Sail Elasticsearch

A restful api for elasticsearch

## Prerequest

docker, docker compose

## Installation & Usage

```bash
git clone git@github.com:kaanosman/laravel-sail-elasticsearch
cd laravel-sail-elasticsearch
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan db:seed
http://localhost/api/search?query=test
```
