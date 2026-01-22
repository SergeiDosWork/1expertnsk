<?php get_header(); ?>

<div class="container_page">
  <p id="text_documents">
    Документы организации:
  </p>

  <div id="carousel" class="carousel">
    <div class="gallery">
      <ul id="slides_docs_1">
        <!-- Documents will be loaded dynamically -->
        <script src="<?php echo get_template_directory_uri(); ?>/scripts/add-doc-1.js"></script>
      </ul>
    </div>
    <a class="prev">❮</a>
    <a class="next">❯</a>
  </div>

  <p id="text_documents">
    Документы, подтверждающие <br> компетенцию наших специалистов:
  </p>

  
  <div style="text-align:center;">
    <img class="cards_img" src="<?php echo get_template_directory_uri(); ?>/images/documents/docs_employees/Ведутся работы.png">
  </div>
  

  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div id="modal_content" class="modal_content">

      <!-- Next/previous controls -->
      <a class="prev" id="prev_button" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" id="next_button" onclick="plusSlides(1)">&#10095;</a>

      <!-- Caption text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>

    </div>
  </div>


  <div id="myModal_2" class="modal">
    <span class="close cursor" onclick="closeModal_2()">&times;</span>
    <div id="modal_content_2" class="modal_content">
      <a class="prev" onclick="plusSlides_2(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides_2(1)">&#10095;</a>
      <div class="caption-container">
        <p id="caption_2"></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>