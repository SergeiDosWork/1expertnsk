let arrImageDocsEmpModal = [];
const slidesDocsEmpModal = document.getElementById('swiper-wrapper-modal-emp');
const arrUrlDocsEmpModal = [
    'images/documents/docs_employees/Галимов 2020 Магистратура БГПУ.jpg',
    'images/documents/docs_employees/Галимов Диплом КМН.jpg',
    'images/documents/docs_employees/Галимов Сертификат - 2016.jpg',
    'images/documents/docs_employees/Галимов Сертификат СМЭ - 2017.jpg',
    'images/documents/docs_employees/Кашапов АиР - Сертификат - Реаним.jpg',
    'images/documents/docs_employees/Кашапов Диплом об окончании БГМУ.jpg',
    'images/documents/docs_employees/Кашапов Диплом.jpg',
    'images/documents/docs_employees/Кашапов Наркология Сертификат Спб-1.jpg',
    'images/documents/docs_employees/Кашапов судебная психология - Сербский.jpg',
    'images/documents/docs_employees/Кашапов Токсикология сертификат (знак).jpg',
    'images/documents/docs_employees/Павлова свидетельство СРО ОКИС 2019.jpg',
    'images/documents/docs_employees/Павлова ДИПЛОМ эксперт.jpg',
    'images/documents/docs_employees/Павлова Диплом.jpg',
    'images/documents/docs_employees/Павлова М.В_Аттестат КИ.jpg',
    'images/documents/docs_employees/Павлова НОПРИЗ.jpg',
    'images/documents/docs_employees/Павлова повышение квалификации ОКИС.jpg',
    'images/documents/docs_employees/Павлова Повышение квалификации.jpg',
    'images/documents/docs_employees/Пестелев - Выписка из реестра.jpg',
    'images/documents/docs_employees/Пестелев Диплом.jpg',
    'images/documents/docs_employees/Пестелев Свидетельство.jpg',
    'images/documents/docs_employees/Пискунова - Диплом о переподготовке_1.jpg',
    'images/documents/docs_employees/Пискунова Диплом о высшем образовании_1.jpg',
    'images/documents/docs_employees/Пискунова Е.С. аттестат_1.jpg',
    'images/documents/docs_employees/Пискунова Е.С. аттестат_2.jpg',
    'images/documents/docs_employees/Пискунова Е.С. ОДИ_1.jpg',
    'images/documents/docs_employees/Пискунова Е.С. ОДИ_2.jpg',
    'images/documents/docs_employees/Пискунова Е.С._1.jpg',
    'images/documents/docs_employees/Пискунова Е.С._2.jpg',
    'images/documents/docs_employees/Пискунова Страховка 2019.jpg',
    'images/documents/docs_employees/Репин Выписка.jpg',
    'images/documents/docs_employees/Репин Диплом.jpg',
    'images/documents/docs_employees/Силютин А - Диплом специалиста Инженер-Архитектор.jpg',
    'images/documents/docs_employees/Силютин А -Удостоверение о кпк Сметное дело.jpg'];

for (let i = 0; i < arrUrlDocsEmpModal.length; i++) {
    arrImageDocsEmpModal[i] = new Image();
    arrImageDocsEmpModal[i].src = arrUrlDocsEmpModal[i];
    arrImageDocsEmpModal[i].className = "img-swiper-modal";

    let div = document.createElement('div');
    div.className = "swiper-slide";
    div.append(arrImageDocsEmpModal[i]);
    slidesDocsEmpModal.append(div);
}