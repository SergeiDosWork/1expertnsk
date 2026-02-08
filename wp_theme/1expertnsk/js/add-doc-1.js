let arrImageDocsOrg = [];
const slidesUl = document.getElementById('slides_docs_1');
const arrUrlDocsOrg = [
    'images/documents/docs_organization/00_ЭкспертИзыскания_1.jpg',
    'images/documents/docs_organization/00_ЭкспертИзыскания_2.jpg',
    'images/documents/docs_organization/00_ИСО.jpg',
    'images/documents/docs_organization/01_Cвидетельство о постановке на учет.jpg',
    'images/documents/docs_organization/02_Сертификат ОСЭ.jpg',
    'images/documents/docs_organization/03_приложение к сертификату ОСЭ 2020 1.jpg',
    'images/documents/docs_organization/04_приложение к сертификату ОСЭ 2020 2.jpg',
    'images/documents/docs_organization/05_приложение к сертификату ОСЭ 2020 3.jpg',
    'images/documents/docs_organization/06_Договор Ингосстрах_1.jpg',
    'images/documents/docs_organization/07_Договор Ингосстрах_2.jpg',
    'images/documents/docs_organization/08_Договор Ингосстрах_3.jpg',
    'images/documents/docs_organization/09_Страховка оценочной деятельности-1.jpg',
    'images/documents/docs_organization/10_Страховка оценочной деятельности-2.jpg'];

for (let i = 0; i < arrUrlDocsOrg.length; i++) {
    arrImageDocsOrg[i] = new Image();
    arrImageDocsOrg[i].src = arrUrlDocsOrg[i];
    arrImageDocsOrg[i].className = "carousel images";

    let li = document.createElement('li');
    li.append(arrImageDocsOrg[i]);
    slidesUl.append(li);
    li.onclick = function () {
        openModal();
        currentSlide(i + 1);
    }
}