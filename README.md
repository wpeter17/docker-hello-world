```sh
# Build Container
docker build -t hello-books .
```

```sh
# Run Container
docker run -p 80:80 -v ~/projects/php/hello-books/src/:/var/www/html/ hello-books
```