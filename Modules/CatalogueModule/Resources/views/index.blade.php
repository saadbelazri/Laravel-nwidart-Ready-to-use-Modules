@extends('cataloguemodule::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('cataloguemodule.name') !!}
    </p>

    <form action="{{ action('\Modules\CatalogueModule\Http\Controllers\CatalogueModuleController@create') }}" method="post">
    {{ csrf_field() }}
<input type="text" name="ProductName" placeholder="Enter Product name">
<input type="text" name="ProductPrice" placeholder="Enter Product Price">
<input type="text" name="ProductType" placeholder="Enter Product Type">
<input type="text" name="ProductCategory" placeholder="Enter Product Category">
<input type="text" name="ProductTaxClass" placeholder="Enter Product Tax Class">
<input type="text" name="ProductPriceList" placeholder="Enter Product Price List">
<input type="text" name="ProductMeasureUnit" placeholder="Enter Product Measure Unit">
<input type="text" name="ProductDescription" placeholder="Enter Product Description">
<input type="text" name="ProductProductionDate" placeholder="Enter Product Production Date">
<input type="text" name="ProductExpireyDate" placeholder="Enter Product Expirey Date">
<input type="text" name="ProductSKU" placeholder="Enter Product SKU">
<input type="text" name="ProductBrand" placeholder="Enter Product Brand">
<input type="text" name="ProductManufacturer" placeholder="Enter Product Manufacturer">
<input type="submit" value="Send">
</form>


<div class="ShowDataHere">
    {{-- Here i want to show this Data from FORM above, but with using Controller. --}}
</div >
@endsection
