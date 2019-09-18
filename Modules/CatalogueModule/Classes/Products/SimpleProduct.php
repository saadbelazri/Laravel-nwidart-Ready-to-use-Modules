<?php

namespace Modules\CatalogueModule\Classes\Products;
use Illuminate\Http\Request;

Class SimpleProduct{

     public $ProductName;
     public $ProductPrice;
     public $ProductCategory;
     public $ProductTaxClass;
     public $ProductPriceList;
     public $ProductMeasureUnit;
     public $ProductDescription;
     public $ProductProductionDate;
     public $ProductExpireyDate;
     public $ProductSKU;
     public $ProductBrand;
     public $ProductManufacturer;

  public function __construct(Request $data){
    echo "\n I m here in simple product class";
    echo $data->input('ProductName');
    $this->ProductName = $data->input('ProductName');
    $this->ProductPrice = $data->input('ProductPrice');
    $this->ProductCategory = $data->input('ProductCategory');
    $this->ProductTaxClass = $data->input('ProductTaxClass');
    $this->ProductPriceList = $data->input('ProductPriceList');
    $this->ProductMeasureUnit = $data->input('ProductMeasureUnit');
    $this->ProductDescription = $data->input('ProductDescription');
    $this->ProductProductionDate = $data->input('ProductProductionDate');
    $this->ProductExpireyDate = getDate(strtotime($data->input('ProductExpireyDate')));
    $this->ProductSKU = $data->input('ProductSKU');
    $this->ProductBrand = $data->input('ProductBrand');
    $this->ProductManufacturer = $data->input('ProductManufacturer');
  }
}
?>