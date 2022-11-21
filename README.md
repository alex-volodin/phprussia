# Приложение к докладу «Апгрейд и рефакторинг PHP-проектов - теперь это просто!»

## Полезные ресурсы:
- [Проект Rector](https://github.com/rectorphp/rector)
- [Блог Томаса](https://tomasvotruba.com/blog/)
- [Книга «Rector - The Power of Automated Refactoring»](https://leanpub.com/rector-the-power-of-automated-refactoring)

## Примеры из доклада:
- [Тот самый cms-bundle](https://github.com/skyeng/marketing-cms-bundle)
- [Пример конфига из проекта, который использует этот бандл](https://github.com/alex-volodin/phprussia/-/blob/master/example)

## Вопросы, которые можно по-изучать подробнее
- [Как настроить Rector в Symfony проекте](https://github.com/rectorphp/rector-symfony)
- [Как писать тесты для своих правил Rector'а](https://github.com/rectorphp/rector/blob/main/docs/how_to_add_test_for_rector_rule.md)

## Полезные инструменты:

### PHP Parser

Это инструмент, с помощью которого Rector парсит код в AST.

Скорее всего установка не нужна, так он уже есть у вас в проекте.

Можно использовать для парсинга конкретного php-файла, чтобы проанализировать, из каких узлов он состоит.

`vendor/bin/php-parse -j <source-file>`

### PHP Parser Instantiation Printer

Отображает AST в виде объектов PHP Parser. Так можно быстрее определить тип узла и из-чего он состоит, так как они имеют полные неймспейсы и реальное состояние на момент парсинга.

[Ссылка на git проекта](https://github.com/matthiasnoback/php-parser-instantiation-printer)

Установка:

`composer require matthiasnoback/php-parser-instantiation-printer --dev`

Использование:

`vendor/bin/print-node-instantiation-code <source-file>`
