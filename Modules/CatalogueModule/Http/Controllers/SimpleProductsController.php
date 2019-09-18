<?php

namespace Modules\CatalogueModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CatalogueModule\Classes\ProductsCatalogue;
use Modules\CatalogueModule\Classes\Factories\SimpleProductsFactory;//Helps using the classes from Factories Package
use Modules\CatalogueModule\Entities\SimpleProduct;

class SimpleProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('cataloguemodule::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create(Request $data)
    {
        //return view('cataloguemodule::create');
        $Product = new SimpleProductsFactory();
        $simpleProduct = $Product->CreateProduct($data);
        $this->store($simpleProduct);

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store($Product)
    {
        $newProduct = new SimpleProduct();
        $newProduct->ProductName= $Product->ProductName;
        $newProduct->ProductPrice = $Product->ProductPrice;
        $newProduct->ProductCategory = $Product->ProductCategory;
        $newProduct->ProductTaxClass = $Product->ProductTaxClass;
        $newProduct->ProductPriceList = $Product->ProductPriceList;
        $newProduct->ProductMeasureUnit = $Product->ProductMeasureUnit;
        $newProduct->ProductDescription = $Product->ProductDescription;
        $newProduct->ProductProductionDate = $Product->ProductProductionDate;
        $newProduct->ProductExpireyDate = $Product->ProductExpireyDate;
        $newProduct->ProductSKU = $Product->ProductSKU;
        $newProduct->ProductBrand = $Product->ProductBrand;
        $newProduct->ProductManufacturer = $Product->ProductManufacturer;
        $newProduct->save();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('cataloguemodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('cataloguemodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
