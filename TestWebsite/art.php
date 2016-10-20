<?php
include 'layout_head.php';
//unset ($_SESSION['cart_items']);
//var_dump($_SESSION['cart_items']);
        // select products from database
$query = "SELECT productsonesize.ProductID, colormaterialcombination.colName AS Color, colormaterialcombination.matName AS Material, sizes.sizeName AS Size, names.Name AS Name, productsonesize.Price AS Price, productsonesize.Image AS Image, description.Description AS Description, productsonesize.Stock AS Stock
FROM productsonesize
LEFT JOIN sizes ON productsonesize.sizeID=sizes.sizeID
LEFT JOIN colormaterialcombination ON productsonesize.colMatID=colormaterialcombination.colMatID
LEFT JOIN names ON productsonesize.nameID=names.nameID
LEFT JOIN description ON productsonesize.DescriptionID=description.descriptionID
Where productID IN (1, 9, 11, 13)";
                
$stmt = $con->prepare( $query );
$stmt->execute();
 
// count number of products returned
$num = $stmt->rowCount();
 
if($num>0){
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            //creating new table row per record
      echo "<div class=". "cell_1" .">";
      echo "<div id='imageBox'>";
            echo "<img class='image' id={$ProductID} src={$Image}>";
      echo "</div>";
      echo "<div id='details'>";
            echo "<p class='product-id' style='display:none;'>{$ProductID}</p>";
            echo "<p >{$Name}</p>";
            echo "<p >{$Size}</p>";
            echo "<p class='material'>{$Material}</p>";
            echo "<select id='selectColor{$ProductID}' class='select{$ProductID}'>
                    <option disabled selected value></option>
                    <option value='natural'>Натурален</option>
                    <option value='black'>Черен</option>
                    </select>";
            echo "<p class='price'>";
                echo number_format($Price, 2, '.' , ',') . "лв.";
            echo "</p>";
            echo "<p>{$Description}</p>";
            echo "<p>{$Stock}</p>";
                    echo "<p>";
                        echo "<input type='number' name='quantity' id='quantity' value='1' class='form-control' />";
                        echo "<input type='submit' class='add-to-cart' value='Добави'/>";
                    echo "</p>";
      echo "</div>";
    echo "</div>";
echo "<div class='pswp' tabindex='-1' role='dialog' aria-hidden='true'>";

    echo "<div class='pswp__bg'></div>";

    echo "<div class='pswp__scroll-wrap'>";

        echo "<div class='pswp__container'>";
            echo "<div class='pswp__item'></div>";
            echo "<div class='pswp__item'></div>";
            echo "<div class='pswp__item'></div>";
        echo "</div>";
        echo "<div class='pswp__ui pswp__ui--hidden'>";

            echo "<div class='pswp__top-bar'>";

                echo "<div class='pswp__counter'></div>";

                echo "<button class='pswp__button pswp__button--close' title='Close (Esc)'></button>";

                echo "<div class='pswp__preloader'>";
                    echo "<div class='pswp__preloader__icn'>";
                      echo "<div class='pswp__preloader__cut'>";
                        echo "<div class='pswp__preloader__donut'></div>";
                      echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div class='pswp__share-modal pswp__share-modal--hidden pswp__single-tap'>";
                echo "<div class='pswp__share-tooltip'></div> ";
            echo "</div>";

            echo "<button class='pswp__button pswp__button--arrow--left' title='Previous (arrow left)'>";
            echo "</button>";

            echo "<button class='pswp__button pswp__button--arrow--right' title='Next (arrow right)'>";
            echo "</button>";

            echo "<div class='pswp__caption'>";
                echo "<div class='pswp__caption__center'></div>";
            echo "</div>";

          echo "</div>";

        echo "</div>";

echo "</div>";
        }
}
$stmt = null;

// select products from database
$query = "SELECT productsonesize.ProductID, colormaterialcombination.colName AS Color, colormaterialcombination.matName AS Material, sizes.sizeName AS Size, names.Name AS Name, productsonesize.Price AS Price, productsonesize.Image AS Image, description.Description AS Description, productsonesize.Stock AS Stock
FROM productsonesize
LEFT JOIN sizes ON productsonesize.sizeID=sizes.sizeID
LEFT JOIN colormaterialcombination ON productsonesize.colMatID=colormaterialcombination.colMatID
LEFT JOIN names ON productsonesize.nameID=names.nameID
LEFT JOIN description ON productsonesize.DescriptionID=description.descriptionID
Where productID IN (3)";

$stmt = $con->prepare( $query );
$stmt->execute();
 
// count number of products returned
$num = $stmt->rowCount();
 
if($num>0){
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            //creating new table row per record
      echo "<div class=". "cell_1" .">";
      echo "<div id='imageBox'>";
            echo "<img class='image' id={$ProductID} src={$Image}>";
      echo "</div>";
      echo "<div id='details'>";
            echo "<p class='product-id' style='display:none;'>{$ProductID}</p>";
            echo "<p>{$Name}</p>";
            echo "<p><select id='selectSize{$ProductID}' class='select{$ProductID}'> 
                  <option disabled selected value></option>
                  <option value='10'>10см</option>
                  <option value='12.5'>12.5см</option>
                  <option value='15'>15см</option>
                  </select>
                  </p>";
            echo "<p class='material'>{$Material}</p>";
            echo "<p><select id='selectColor{$ProductID}' class='select{$ProductID}'> 
                  <option disabled selected value></option>
                  <option value='natural'>Натурален</option>
                  <option value='black'>Черен</option>
                  </select>
                  </p>";
            echo "<p class='price{$ProductID}'>";
                echo number_format($Price, 2, '.' , ',') . "лв.";
            echo "</p>";
            echo "<p>{$Description}</p>";
            echo "<p>{$Stock}</p>";
                    echo "<p>";
                        echo "<input type='number' name='quantity' id='quantity' value='1' class='form-control' />";
                        echo "<input type='submit' class='add-to-cart' value='Добави'/>";
                    echo "</p>";
      echo "</div>";
    echo "</div>";
echo "<div class='pswp' tabindex='-1' role='dialog' aria-hidden='true'>";

    echo "<div class='pswp__bg'></div>";

    echo "<div class='pswp__scroll-wrap'>";

        echo "<div class='pswp__container'>";
            echo "<div class='pswp__item'></div>";
            echo "<div class='pswp__item'></div>";
            echo "<div class='pswp__item'></div>";
        echo "</div>";
        echo "<div class='pswp__ui pswp__ui--hidden'>";

            echo "<div class='pswp__top-bar'>";

                echo "<div class='pswp__counter'></div>";

                echo "<button class='pswp__button pswp__button--close' title='Close (Esc)'></button>";

                echo "<div class='pswp__preloader'>";
                    echo "<div class='pswp__preloader__icn'>";
                      echo "<div class='pswp__preloader__cut'>";
                        echo "<div class='pswp__preloader__donut'></div>";
                      echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div class='pswp__share-modal pswp__share-modal--hidden pswp__single-tap'>";
                echo "<div class='pswp__share-tooltip'></div> ";
            echo "</div>";

            echo "<button class='pswp__button pswp__button--arrow--left' title='Previous (arrow left)'>";
            echo "</button>";

            echo "<button class='pswp__button pswp__button--arrow--right' title='Next (arrow right)'>";
            echo "</button>";

            echo "<div class='pswp__caption'>";
                echo "<div class='pswp__caption__center'></div>";
            echo "</div>";

          echo "</div>";

        echo "</div>";

echo "</div>";
        }
}
$stmt = null;
$con = null;
?>
</div>
</body>
</html>