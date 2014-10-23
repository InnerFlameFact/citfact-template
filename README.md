Шаблон сайта для 1C-Bitrix
===

## Требования:

 - PHP версия >= 5.3.3
 - Bitrix версия >= 14
 - Node.js >= 0.10.25

## Установка

``` bash
# Устанавливаем глобально необходимые модули
npm install -g bower
npm install -g gulp

# Переходим в папку проекта
cd /to/path/project/

# Если нету папки "local/templates", то создаем ее
mkdir local && mkdir local/templates

# Клонируем репозиторий и переходим в установленную директорию
cd local/templates/
git clone https://github.com/studiofact-js/citfact-template.git
cd citfact-template

# Устанавливаем необходимые зависимости
npm install
bower install

# Запускаем сборщик проекта
gulp dist
```
