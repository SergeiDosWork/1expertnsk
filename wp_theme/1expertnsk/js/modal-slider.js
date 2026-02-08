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