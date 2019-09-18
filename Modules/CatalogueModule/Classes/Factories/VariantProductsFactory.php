<?php

// This Class is a factory of variantProducts it inherits the ProductsCatalogue Abstract Class Methods CRUD
// Using Factory Pattern and the SOLID principles to make the code more readable and more maintainable

use App\Modules\CatalogueModule\Classes\ProductsCatalogue;
use App\Modules\CatalogueModule\Classes\Products\VariantProduct;

class VariantProductsFactory extends ProductsCatalogue{
        
    //Here we override the method of Object Creation ProductsCatalogue Abstract Class
    public function CreateProduct($data){
        //Here we create an object of a VariantProduct
        return new VariantProduct($data);
        
    }

}


?>