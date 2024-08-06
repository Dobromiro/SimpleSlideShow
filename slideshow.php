        <?php
			$var = 0;
			$slide_qty = 8;
            while ($var <= $slide_qty) {
                //$imageName = basename($image);
                //echo '<img class="slides" src="' . $folderPath . '/' . $imageName . '" alt="Zdjęcie ' . ($var + 1) . '">';
				
				echo '<img class="slides" src="img/Slajd' . ($var + 1) . '.jpg" alt="Zdjęcie ' . ($var + 1) . '">';
				$var++;
            }
        
        ?>
		
		
