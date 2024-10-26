Clone project.

`composer install`

`./vendor/bin/sail up -d`

`./vendor/bin/sail artisan migrate`

Website working on [127.0.0.1](127.0.0.1).
API endpoint [127.0.0.1/api/quotes](127.0.0.1/api/quotes). You can add `?count=x` param which returns as many quotes as needed. Also, param `token=TOKEN` is required.
Token for api urls is set up in `.env` file `API_TOKEN=kanyequotes`. Correct API URL like [127.0.0.1/api/quotes?token=kanyequotes](127.0.0.1/api/quotes?token=kanyequotes) OR [127.0.0.1/api/quotes?token=kanyequotes&count=3](127.0.0.1/api/quotes?token=kanyequotes&count=3)