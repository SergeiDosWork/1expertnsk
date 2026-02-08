const slidesUl = document.getElementById('slides_docs_1');
const slidesUl_2 = document.getElementById('slides_docs_2');
const arrUrlDocsOrg = [
    'images/documents/docs_organization/01_Cвидетельство о постановке на учет.jpg',
    'images/documents/docs_organization/02_Сертификат ОСЭ.jpg',
    'images/documents/docs_organization/03_приложение к сертификату ОСЭ 2020 1.jpg',
    'images/documents/docs_organization/04_приложение к сертификату ОСЭ 2020 2.jpg',
    'images/documents/docs_organization/05_приложение к сертификату ОСЭ 2020 3.jpg',
    'images/documents/docs_organization/06_приложение к сертификату ПЭБ-1.jpg',
    'images/documents/docs_organization/07_приложение к сертификату ПЭБ-2.jpg',
    'images/documents/docs_organization/08_приложение к сертификату ПЭБ-3.jpg',
    'images/documents/docs_organization/09_Страховка оценочной деятельности-1.jpg',
    'images/documents/docs_organization/10_Страховка оценочной деятельности-2.jpg'];
const arrUrlDocsEmp = [
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
    'images/documents/docs_employees/Павлова  свидетельство СРО ОКИС 2019.jpg',
    'images/documents/docs_employees/Павлова ДИПЛОМ эксперт.jpg',
    'images/documents/docs_employees/Павлова Диплом.jpg',
    'images/documents/docs_employees/Павлова М.В_Аттестат КИ.jpg',
    'images/documents/docs_employees/Павлова НОПРИЗ.jpg',
    'images/documents/docs_employees/Павлова повышение квалификации ОКИС.jpg',
    'images/documents/docs_employees/Павлова Повышение квалификации.jpg',
    'images/documents/docs_employees/Пестелев - Выписка из реестра .jpg',
    'images/documents/docs_employees/Пестелев Диплом .jpg',
    'images/documents/docs_employees/Пестелев Свидетельство.jpg',
    'images/documents/docs_employees/Пискунова - Диплом  о переподготовке_1.jpg',
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
let arrImageDocsOrg = [];
let arrImageDocsEmp = [];


for (let i = 0; i < arrUrlDocsOrg.length; i++) {
    arrImageDocsOrg[i] = new Image();
    arrImageDocsOrg[i].src = arrUrlDocsOrg[i];
    arrImageDocsOrg[i].className = "carousel images";

    let li = document.createElement('li');
    li.style.marginLeft = "0px"
    li.append(arrImageDocsOrg[i]);
    slidesUl.append(li);
    li.onclick = function () {
        openModal();
        currentSlide(i + 1);
    }
}

for (let i = 0; i < arrUrlDocsEmp.length; i++) {
    arrImageDocsEmp[i] = new Image();
    arrImageDocsEmp[i].src = arrUrlDocsEmp[i];
    arrImageDocsEmp[i].className = "carousel images";

    let li = document.createElement('li');
    li.append(arrImageDocsEmp[i]);
    slidesUl_2.append(li);
    li.onclick = function () {
        openModal_2();
        currentSlide_2(i + 1);
    }
}


/* конфигурация */
const width = 327;
const countShowDocs = 3;
const countShift = 1;

let list = carousel.querySelector('ul');
let listElems = carousel.querySelectorAll('li');
let list_2 = carousel_2.querySelector('ul');
let listElems_2 = carousel_2.querySelectorAll('li');

let position = 0;
let position_2 = 0;


carousel.querySelector('.prev').onclick = function () {
    // сдвиг влево
    position += width * countShift;
    position = Math.min(position, 0)
    list.style.marginLeft = position + 'px';
};

carousel.querySelector('.next').onclick = function () {
    // сдвиг вправо
    position -= width * countShift;
    position = Math.max(position, -width * (listElems.length - countShowDocs));
    list.style.marginLeft = position + 'px';
};

carousel_2.querySelector('.prev').onclick = function () {
    // сдвиг влево
    position_2 += width * countShift;
    position_2 = Math.min(position_2, 0)
    list_2.style.marginLeft = position_2 + 'px';
};

carousel_2.querySelector('.next').onclick = function () {
    // сдвиг вправо
    position_2 -= width * countShift;
    position_2 = Math.max(position_2, -width * (listElems_2.length - countShowDocs));
    list_2.style.marginLeft = position_2 + 'px';
};


function openModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

function openModal_2() {
    document.getElementById('myModal_2').style.display = "block";
}

function closeModal_2() {
    document.getElementById('myModal_2').style.display = "none";
}


let div_content = document.getElementById("modal_content");
for (let i = 0; i < arrUrlDocsOrg.length; i++) {
    arrImageDocsOrg[i] = new Image();
    arrImageDocsOrg[i].src = arrUrlDocsOrg[i];
    arrImageDocsOrg[i].className = "modal_images";

    let div = document.createElement('div');
    div.className = "mySlides";
    div.append(arrImageDocsOrg[i]);

    div_content.append(div);
}

let div_content_2 = document.getElementById("modal_content_2");
for (let i = 0; i < arrImageDocsEmp.length; i++) {
    arrImageDocsEmp[i] = new Image();
    arrImageDocsEmp[i].src = arrUrlDocsEmp[i];
    arrImageDocsEmp[i].className = "modal_images";

    let div = document.createElement('div');
    div.className = "mySlides_2";
    div.append(arrImageDocsEmp[i]);

    div_content_2.append(div);
}


let slideIndex = 1;
let slideIndex_2 = 1;
showSlides(slideIndex);
showSlides_2(slideIndex_2);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function plusSlides_2(n) {
    showSlides_2(slideIndex_2 += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function currentSlide_2(n) {
    showSlides_2(slideIndex_2 = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

function showSlides_2(n) {
    let slides_2 = document.getElementsByClassName("mySlides_2");
    if (n > slides_2.length) { slideIndex_2 = 1 }
    if (n < 1) { slideIndex_2 = slides_2.length }
    for (let i = 0; i < slides_2.length; i++) {
        slides_2[i].style.display = "none";
    }
    slides_2[slideIndex_2 - 1].style.display = "block";
}


document.addEventListener('keydown', function (e) {
    document.getElementById("next_button").click();
});