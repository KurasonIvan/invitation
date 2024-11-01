document.getElementById('acceptButton').addEventListener('click', function (e) {
    e.preventDefault(); // Остановим переход по ссылке
    var video = document.getElementById('butterflyVideo');

    // Показываем видео
    video.style.display = 'block';

    // Запускаем видео
    video.play().catch(function (error) {
        console.error('Ошибка при попытке воспроизвести видео:', error);
    });

    // Скрываем видео после завершения
    video.addEventListener('ended', function () {
        video.style.display = 'none';
    });
});