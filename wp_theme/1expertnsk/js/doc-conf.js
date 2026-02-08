const width = 327;
const countShowDocs = 3;
const countShift = 1;

let list = carousel.querySelector('ul');
let listElems = carousel.querySelectorAll('li');
let position = 0;

let list_2 = carousel_2.querySelector('ul');
let listElems_2 = carousel_2.querySelectorAll('li');
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