<?php
namespace Modules\CatalogueModule\Classes\Factories;
// This Class is a factory of simpleProducts it inherits the ProductsCatalogue Abstract Class Methods CRUD
// Using Factory Pattern and the SOLID principles to make the code more readable and more maintainable
use Illuminate\Http\Request;
use Modules\CatalogueModule\Classes\ProductsCatalogue;
use Modules\CatalogueModule\Classes\Products\SimpleProduct;

class SimpleProductsFactory extends ProductsCatalogue{
        
    //Here we override the method of Object Creation ProductsCatalogue Abstract Class
    public function CreateProduct(Request $data){
        //Here we create an object of a SimpleProduct
        return new SimpleProduct($data);
        
    }

}


?>