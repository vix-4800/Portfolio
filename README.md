## Start the application

```bash
docker compose up -d
```

## Stop the application

```bash
docker compose down
```

## Create password file

```bash
htpasswd -c ./config/nginx/.htpasswd <username>
```
