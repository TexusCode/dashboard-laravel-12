import './bootstrap';
import Toastify from 'toastify-js';
import "toastify-js/src/toastify.css";

Toastify({
    text: 'data.title',               // Текст уведомления
    duration: 3000,                 // Время показа
    newWindow: true,                // Открывать в новом окне (необязательно)
    close: true,                    // Кнопка закрытия
    gravity: "bottom",              // Позиция: сверху или снизу
    position: "center",             // Расположение: слева, по центру или справа
    stopOnFocus: true,              // Остановка при фокусе
    style: {
        background: "linear-gradient(to right, #00b09b, #96c93d)",  // Цвет фона
    },
}).showToast();