<?php

namespace Modules\CatalogueModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\CatalogueModule\Http\Controllers\SimpleProductsController;




class CatalogueModuleController extends Controller
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
        //Products are beeing sent to Factories in the way the controller decides by 
        //VALIDATING DATA STEP
       // if($this.validateInput($type,$data)=="OK"){}
         echo "I m here in create";
         $type = $data->input('ProductType');
         echo $type;
            try{
            if($type == "Simple"){

                   $Controller = new SimpleProductsController();
                   $Controller->create($data);
                // $simpleProduct = new Factories\SimpleProductsFactory($data);
                // $Product = new SimpleProductsFactory();
                // $simpleProduct = $Product->CreateProduct($data);
                // $this->store($simpleProduct);

            }elseif($type == "Variant"){

                 $variantProduct = new Factories/VariantProductsFactory($data);
                 $this->store($variantProduct);
            }elseif($type == "Bundled"){

                 $bundledProduct = new Factories/BundledProductsFactory($data);
                 $this->store($bundledProduct);
            }

        }catch(Exception $e){

            //The exception treatment goes here
            echo "Error happend here";
        }

        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store($Product)
    {
        /*
        $newProduct = new SimpleProduct();
        $newProduct->ProductName= $Product->ProductName;
        $newProduct->ProductPrice = $Product->ProductPrice;
        $newProduct->save();*/

       
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

    private function validateInput($type,$data){

        // validate data for object creation
        
    }
}
