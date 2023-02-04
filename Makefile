dev:
	npm run dev
watch:
	npm run watch
install:
	npm install
test:
	php artisan test --parallel
autoload:
	composer dump-autoload -o
route:
	php artisan route:list --columns=Name   --columns=Action --columns=Uri
ide-helper:
	php artisan ide-helper:meta
	php artisan ide-helper:generate
	php artisan ide-helper:models
migrate-refresh:
	php artisan migrate:refresh --seed
analyse:
	./vendor/bin/psalm --show-info=true
serve:
	php artisan serve
