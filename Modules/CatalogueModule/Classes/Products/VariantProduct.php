<?php

namespace Modules\CatalogueModule\Classes\Products;
use Illuminate\Http\Request;
use Modules\CatalogueModule\Classes\Products\SimpleProduct;

Class VariantProduct extends SimpleProduct{

    public $color; // this attribute stands for the variety of colors for a product e.g : Orange , Black , Purple...
    public $size; // this attribute is for the diffrent Sizes like for a shirt its : S M L XL ...
    public $flavour; // Taste or flavour for food products e.g (a Yougurt may have Strawberry, Mango , Vanilla flavours...)
    public $material; // a product maybe made of Plastic, Metal ...

    public function set_variant_attributes(Request $data){

      $this->color= $data->input('ProductColor');
      $this->size= $data->input('ProductSize');
      $this->flavour = $data->input('ProductFlavour');
      $this->material = $data->input('ProductMaterial');
    }
} 

?>