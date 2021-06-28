<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use App\Model\category;
use App\Model\sub_category;
use App\Model\product;

class ProductController extends Controller
{
    public function index()
    {
        $subcat =sub_category::all();
        $maincat =category::all();
        $product = product::paginate(9);
        return view('product')->with('category', ['product' => $product ,'mainCategory'=>$maincat,'subCategory'=>$subcat,'type'=>'P-D']);
    }

    public function showMainCategory($main){
        $maincat = category::where('name', $main)->get();
        
        if($maincat){
            $catid=json_decode($maincat)['0']->catid; 
            $subcat = category::find($catid)->subCategory;
            $products = product::where('catid',$catid)->paginate(9);
        
            if ($products) {
                return view('product')->with('category', ['product' => $products, 'mainCategory' =>$maincat, 'subCategory' =>  $subcat,'type'=>'P-M']);
            }
        }
        else {
            return back();
        }
    }
    public function showSubCategory($main,$sub,$id){
        $products = product::where('subid', $id)->paginate(9);
        $subcat = sub_category::where('subid', $id)->get();
        $maincatid = json_decode($subcat)[0]->catid;
        $maincat = category::where('catid', $maincatid)->get();

        if ($products) {
            return view('product')->with('category', ['product' => $products, 'mainCategory' =>$maincat, 'subCategory' =>  $subcat,'type'=>'P-S']);
        } else {
            return back();
        }
    }


    public function manageproduct()
    {
        if (session()->has('admin')) {
            $allproduct = product::paginate(10);
            $maincatname = category::all('catid', 'name');
            $subcatname = sub_category::all('subid', 'name');
            return view('./admin/product/product')->with('manageproduct', ['product' => $allproduct, 'maincat' => $maincatname, 'subcat' => $subcatname]);
        } else {
            return redirect('/admin');
        }
    }
    public function addproduct()
    {
        if (session()->has('admin')) {
            $maincat = category::all();
            return view('./admin/product/addproduct')->with('category', ['main' => $maincat]);
        } else {
            return redirect('/');
        }
    }

    public function storeproduct(Request $data)
    {
        $store = new product;
        $store->catid = $data->catid;
        $store->subid = $data->subid;
        $store->name = $data->name;
        $store->stock = $data->stock;
        $store->brand = $data->brand;
        $store->model = $data->model;
        $store->pcode = $data->pcode;
        $store->price = $data->price;
        $store->description = $data->description;
        $store->created_at = date('Y-m-d H:i:s');
        $store->editerdesc=$data->editerdisc;

        $image = $data->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $storepath = public_path('./products');

        $image->move($storepath,  $imageName);
        $store->image = $imageName;
        if ($store->save()) {
            Session::flash('productSave', 'ok');
            return back();
        } else {
            Session::flash('productSave', 'no');
            return back();
        }
    }
    
    public function storeUpdates(Request $data){
        $storepath = public_path('./products');
        
        if(isset($data->image)){
            //delete preivious image
            $getimg = product::find($data->pid, ['image']);
            File::delete(public_path("products/".$getimg['image']));
            //set new image
            $image = $data->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move($storepath,  $imageName);
            product::where('pid', $data->pid)->update(array(
                'image'=>$imageName
            ));
        }
       
       
        if($data->name){
            $name=$data->name;
        }
        else{
            $name = 0;
        }
        
        
        if($data->description){
            $description = $data->description;
        }
        else{
            $description = 0;
        }
        
        
        if($data->editerdisc){
            $editerdisc = $data->editerdisc; 
        }
        else{
            $editerdisc = 0;
        }
        
        
        if($data->price){
            $price = $data->price; 
        }
        else{
            $price = 0;
        }    
        
        
        $update=product::where('pid', $data->pid)->update(array(
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'editerdesc' => $editerdisc
        ));
        
        if($update){
            return back();
        }
    }

    public function find_subcat($id)
    {
        $maincat = category::find($id)->subCategory;
        return response()->json(['data' => $maincat]);
    }

    /*delete product*/
    public function deleteproduct(Request $data)
    {
        $del = product::findOrFail($data->pid);
        $getimg = product::find($data->pid, ['image']);
        $del->delete();
        File::delete(public_path("products/{$getimg['image']}"));
        return back();
    }



    public function show_main_category_product($name)
    {
        $catname=preg_replace('~-~',' ', $name);#it will replace - into ' ';
        $maincat = category::where('name', $catname)->get();
        if($maincat){
            $catid=json_decode($maincat)['0']->catid;
            $subcat = category::find($catid)->subCategory;
            $products = product::where('catid',$catid)->paginate(9);
        
            if ($products) {
                return view('category/maincategory')->with('products', ['main' => $products, 'subcatid' => $subcat, 'maincat' => $maincat]);
            }
        }
        else {
            return back();
        }
    }
    public function testmain($id)
    {
        $products = product::where('catid', $id)->get();
        $subcat = category::find($id)->subCategory;
        $maincat = category::where('catid', $id)->get();
        if ($products) {
            return response()->json($products);
        } else {
            return back();
        }
    }
    public function show_sub_category_product($sub,$id)
    {
        $products = product::where('subid', $id)->paginate(2);
        $subcat = sub_category::where('subid', $id)->get();
        $maincatid = json_decode($subcat)[0]->catid;
        $maincat = category::where('catid', $maincatid)->get();

        if ($products) {
            return view('category/subcategory')->with('products', ['sub' => $products, 'maincat' => $maincat, 'subcat' => $subcat]);
        } else {
            return back();
        }
    }


    public function productinfo($name,$id)
    {
        $products = product::where('pid', $id)->get();
        if ($products) {
            $data = json_decode($products);
            $catid = 0;
            $subid = 0;
            foreach ($data as $value) {
                $catid = $value->catid;
                $subid = $value->subid;
            }
            $catname = category::where('catid', $catid)->get();
            $subcat = sub_category::where('subid', $subid)->get();
            return view('productinfo')->with('productsinfo', ['data' => $products, 'catname' => $catname, 'subcat' => $subcat]);
        } else {
            return back();
        }
    }

    public function listCategory(){
        $subcat =json_decode(sub_category::all());
        $maincat =json_decode(category::all());
        return response()->json(['mainCategory'=>$maincat,'subCategory'=>$subcat]);
    }

    public function showProductsData(Request $request){
        $typeData=$request->header('type-data');
        switch ($typeData) {
            case 'default':
                $product = product::paginate(2);
                return response()->json(['products'=>$product]);
                break;
            case 'maincategory':                
                $maincat = category::where('name', $request->header('productName'))->get();
                
                if($maincat){
                    $catid=json_decode($maincat)['0']->catid;
                    $products = product::where('catid',$catid)->paginate(2);
                    return response()->json(['products'=>$products]);
                }
                else {
                    return back();
                }
                break;
            case 'subcategory':
                $products = product::where('subid', $request->header('subcatid'))->get();
                if ($products) {
                    return response()->json(['products'=>$products]);
                } else {
                    return back();
                }
                break;
        }
        
    }

    public function search(Request $data){

        if($data->header('catid')==0){
            $products = product::where('name','LIKE','%'.$data->header('query').'%')->get(); 
        }
        else{
            $query="%".$data->header('query')."%";
            $sql="SELECT * FROM products WHERE catid=".$data->header('catid')." AND name LIKE "."'".$query."'";
            $products = DB::select($sql);
        }
        
        $pname=[];
        if(!count($products)==0){
            
            for ($i=0; $i < count($products) ; $i++) {
                $maincat = category::where('catid',$products[$i]->catid)->get();
                for ($j=0; $j < count($maincat) ; $j++) { 
                    $pname[$j]=$maincat[$j];
                }
            }
            return response()->json(['product'=>$products,'status'=>'ok','pname'=>$pname]);
        }
        else{
            return response()->json(['product'=>'empty','status'=>'no']);
        }
        
    }

    public function searchList(Request $query){

        $products = product::where('name','LIKE','%'.$query->q.'%')->get(); 
        $pname=[];
        if(!count($products)==0){
            
            for ($i=0; $i < count($products) ; $i++) {
                $maincat = category::where('catid',$products[$i]->catid)->get();
                for ($j=0; $j < count($maincat) ; $j++) { 
                    $pname[$j]=$maincat[$j];
                }
            }
            return view('product')->with('category', ['product' => $products, 'mainCategory' =>$pname,'type'=>'search']);
        }
        else{
            Session::flash('nodata', 'no');
            return back();
        }
    }
    
    public function editProduct(Request $data){
        
        $product=product::where('pid',$data->pid)->get();
        $mainCatName=category::where('catid',$product[0]->catid)->get();
        $subCat=sub_category::where('catid',$product[0]->catid)->get();
        
        return response()->json(['product'=>$product,'main'=>$mainCatName,'sub'=>$subCat,'status'=>'ok']);
    }

    
}