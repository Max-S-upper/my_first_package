Extend a class from MyFirstPackage (app/MyFirstPackage.php)
Call method: info, debug, notice, warning, error, alert, emergency to send a log to telegram receiver AND set a parameter message
Call method setTelegramReceiver(chat_id, HTTP_API) to set up where your logs will be sent, by default it's @eshop_logs_bot