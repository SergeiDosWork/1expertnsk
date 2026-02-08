let arrImageDocsOrgModal = [];
const slidesDocsOrgModal = document.getElementById('swiper-wrapper-modal-org');
const arrUrlDocsOrgModal = [
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

for (let i = 0; i < arrUrlDocsOrgModal.length; i++) {
    arrImageDocsOrgModal[i] = new Image();
    arrImageDocsOrgModal[i].src = arrUrlDocsOrgModal[i];
    arrImageDocsOrgModal[i].className = "img-swiper-modal";

    let div = document.createElement('div');
    div.className = "swiper-slide";
    div.append(arrImageDocsOrgModal[i]);
    slidesDocsOrgModal.append(div);
}