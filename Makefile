install:
	composer install

run:
	 ./bin/brain-games

validate:
	 composer validate

lint:
	 composer exec --verbose phpcs -- --standard=PSR12 src bin
