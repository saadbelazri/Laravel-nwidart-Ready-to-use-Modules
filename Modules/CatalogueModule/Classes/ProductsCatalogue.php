<?php
namespace Modules\CatalogueModule\Classes;
use Illuminate\Http\Request;
// AN ABSTRACTION TO MAKE FACTORIES USING FACTORY PATTERN

   abstract class ProductsCatalogue{

    abstract public function CreateProduct(Request $data);
    public function ReadProduct(){}
    public function UpdateProduct(){}
    public function DeleteProduct(){}
}
?>