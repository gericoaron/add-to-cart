<?php

function component($productname, $productprice, $productimage){
    $element ="
    
                    <div class=\"product\">
                      <img class=\"product__image\" src=\"$productimage\" name=\"productimage\">
                      <h2 class=\"product__name\" name=\"productname\">$productname</h2>
                      <h3 class=\"product__price\" name=\"productprice\">$productprice</h3>
                      <button class=\"btn btn--primary-add\" data-action=\"ADD_TO_CART\" >Add</button>
                    </div> 
                    
";                  
echo $element;
}


