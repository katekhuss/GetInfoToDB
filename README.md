# Проект: Форма Заявки с Логированием

Проект представляет собой простую, но эффективную форму заявки, которая позволяет вашим клиентам легко отправлять свои контактные данные для дальнейшего общения с вами. Плюс, добавилена функциональность для записи данных заявок в CSV-файл для последующего анализа.

## Описание

На странице представлена форма заявки, где клиенты могут указать своё имя и номер телефона. После отправки формы данные проходят валидацию и отправляются на обработку скрипту submit.php. Затем эти данные записываются в файл CSV вместе с датой и временем отправки, IP-адресом клиента и источником, с которого пришла заявка.

### Особенности проекта:

- **Простая форма заявки**: Удобная форма, где клиенты могут быстро и легко отправить вам свои контактные данные.
- **Логирование заявок**: Данные заявок сохраняются в файл CSV для последующего анализа или обработки.
- **Безопасность**: Данные проходят обработку и валидацию перед записью в файл, обеспечивая безопасность и защиту от ошибок.
- **Интерфейс обратной связи**: После успешной отправки заявки клиенты получают уведомление о том, что заявка успешно отправлена.

## Использование

1. Поместите файл index.html на ваш сервер, где он будет доступен по URL.
2. При необходимости, измените параметры $demandDirectory в файле submit.php для указания пути к директории, где будут храниться файлы заявок.
3. Откройте страницу с формой заявки в браузере и начните принимать заявки!

## Требования

Веб-сервер с поддержкой PHP для обработки формы.
