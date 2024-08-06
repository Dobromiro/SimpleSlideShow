<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Zdjęć</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
            background-color: black; /* Tło dla lepszego efektu */
        }

        .slideshow {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slides {
            position: absolute;
            max-width: 100%;
            max-height: 100%;
            width: 1920px;
            height: 1080px;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .active {
            opacity: 1;
        }
    </style>
</head>
<body>

	
    <div class="slideshow">
 
		<?php
			require_once "slideshow.php";
		?>
	</div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slides');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        showSlide(currentSlide);
        setInterval(nextSlide, 15000); // 15 sekund
    </script>
</body>
</html>
