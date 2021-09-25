<section class="pt-12">
    <div class="gallery">
        <img src="./img/gallery/1.png" alt="Obrázek galerie 1">
        <img src="./img/gallery/2.png" alt="Obrázek galerie 2">
        <img src="./img/gallery/3.png" alt="Obrázek galerie 3">
        <img src="./img/gallery/4.png" alt="Obrázek galerie 4">
        <img src="./img/gallery/5.png" alt="Obrázek galerie 5">
        <img src="./img/gallery/6.png" alt="Obrázek galerie 6">
        <img src="./img/gallery/7.png" alt="Obrázek galerie 7">
        <img src="./img/gallery/8.png" alt="Obrázek galerie 8">
        <img src="./img/gallery/9.png" alt="Obrázek galerie 9">
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        $('.gallery').slick({
            infinite: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            centerPadding: '0',
            variableWidth: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>