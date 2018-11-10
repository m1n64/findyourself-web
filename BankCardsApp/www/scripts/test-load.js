$(document).load(load());


function load(){

try {
    var prof = {
        prof1: [
            "Автомеханик",
            "Егерь",
            "Кондитер",
            "Пасечник",
            "Радиооператор",
            "Астроном",
            "Бактериолог",
            "Зоолог",
            "Минеролог",
            "Гувернантка",
            "Священник",
            "Консультант по профориентации",
            "Финансовый контролер",
            "Шифровальщик",
            "Директор магазина",
            "Горный инженер",
            "Животновод",
            "Маляр",
            "Охотовед",
            "Электротехник",
            "Биолог",
            "Вирусолог",
            "Генетик",
            "Гидробиолог",
            "Воспитатель детского сада",
            "Инструктор по плаванию",
            "Медицинская сестра",
            "Наборщик типографии",
            "Переписчик нот",
            "Начальник стройки",
            "Машинист тепловоза",
            "Портной",
            "Рулевой-моторист",
            "Штукатур",
            "Садовник",
            "Редактор научного журнала",
            "Физик-теоретик",
            "Ихтиолог",
            "Ученый-теоретик",
            "Преподаватель ин. яз.",
            "Тренер по лечебной физкультуре",
            "Социальный работник",
            "Продюсер телевидения"
        ],
        prof2: [
            "Авиаконструктор",
            "Интервьюер",
            "Делопроизводитель",
            "Администратор",
            "Актер",
            "Гид-экскурсовод",
            "Корректор текстов",
            "Брокер",
            "Актер цирка",
            "Работник архива",
            "Глава администрации",
            "Драматург",
            "Директор",
            "Искусствовед",
            "Композитор",
            "Биофизик",
            "Репетитор",
            "Составитель каталогов",
            "Директор рынка",
            "Карикатурист",
            "Семейный врач",
            "Контролер-кассир",
            "Менеджер",
            "Писатель",
            "Чертежник",
            "Начальник отдела сбыта",
            "Манекенщица",
            "Оптовый торговец",
            "Музыкальный аранжировщик",
            "Музыкант-исполнитель",
            "Инженер-исследователь",
            "Консультант службы знакомств",
            "Регистратор",
            "Предприниматель",
            "Танцор",
            "Учитель",
            "Копировальщик чертежей",
            "Президент банка",
            "Художник по интерьеру",
            "Контролер качества продукции",
            "Снабженец",
            "Художник-мультипликатор",
            "Режиссер"
        ],
        len: 43
    };
    
    if (prof.prof1.length !== prof.prof2.length){
        throw new Error("Object \'prof\' is invalid!");
    }
    else if (prof.prof1.length !== prof.len || prof.prof2.length !== prof.len)
        throw new Error("Object \'prof\' is invalid!");
    else {
        var elem = $(".before");
        for (var i = 0; i < prof.len; i++){
            var text = "<div class=\"main-test-p col s12\"><b>Вопрос "+(i+1)+":</b></div>\n<div class=\"b" + i + " center-block\">\n<div class=\"col s12\">\n\t<label>\n\t\t<input class=\"with-gap variant\" from=\"a\" type=\"radio\" name=\"q" + (i + 1) + "\" id=\"q" + (i + 1) + "\"/>\n\t\t<span to=\"q" + (i + 1) + "\">" + prof.prof1[i] +"</span>\n\t</label>\n</div>\n<div class=\"col s12\">\n\t<label>\n\t\t<input class=\"with-gap variant\" from=\"b\" type=\"radio\" name=\"q"+(i+1)+"\" id=\"q"+(i+1)+"\"/>\n\t\t<span to=\"q"+(i+1)+"\">"+prof.prof2[i]+"</span>\n\t</label>\n</div>\n</div>";
            $(elem).before(text);
        }
    }
}
catch (ex){
    //let $errorelem = $(".js-error > #error");
    showError(ex);
}
}