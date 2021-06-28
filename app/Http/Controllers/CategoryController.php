<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\category;
use App\Model\sub_category;
use Session;

class CategoryController extends Controller
{
    public function index()
    {
        if(session()->has('admin')){
            $subcat = sub_category::all();
            $maincat = category::all();
            return view('admin/category/category')->with('category', ['main' => $maincat, 'sub' => $subcat]);
        }
        else{
            return redirect('/admin');
        }
        
    }
    public function add(Request $data)

    {
        if(session()->has('admin')){
            $category = new category;
            if ($data->cat_name) {
                $category->name = $data->cat_name;
                if ($category->save()) {
                    Session::flash('msg', 'Main category add successfully!');
                    return back();
                } else {
                    Session::flash('error', 'Somthing went wrong try again!');
                    return back();
                }
            }
            else {
            Session::flash('empty', 'you ender empty data!');
            return back();
            }
        }
        else{
            return redirect('/');
        }
        
    }

    public function addSub(Request $data)
    {
        if(session()->has('admin')){
            $subCategory = new sub_category;
            if ($data->cat_name && $data->main_cat_name) {
                $subCategory->name = $data->cat_name;
                $subCategory->catid = $data->main_cat_name;

                if ($subCategory->save()) {
                    Session::flash('submsg', 'Sub category add successfully!');
                    return back();
                } else {
                    Session::flash('suberror', 'Somthing went wrong try again!');
                    return back();
                }
            } else {
                Session::flash('subempty', 'you ender empty data!');
                return back();
            }
        }
        else{
            return redirect('/admin');
        }
    }

    public function deletecategory($id){
        if(session()->has('admin')){
            $subcat = sub_category::where('catid',$id)->first();
            if($subcat!= null){
                $subcat->delete();
            }     
            $maincat= category::findOrFail($id);
            $maincat->delete();
            return back();
        }
        else{
            return redirect('/');
        }
    }
    public function deletesubcategory($id){
        if(session()->has('admin')){
            $subcat= sub_category::findOrFail($id);
            $subcat->delete();
            return back();
        }
        else{
            return redirect('/');
        }
    }

    public function editCategory(Request $data){
        $subcat = sub_category::where('catid',$data->header('main'))->get();
        $maincat= category::findOrFail($data->header('main'));
        return response()->json(['main'=>$maincat,'sub'=>$subcat]);
    }

    public function editMaincatName(Request $data){
        $update=category::where('catid', $data->catid)->update(array('name' =>$data->name));
        if($update){
            return back();
        }
    }
    public function editSubcatName(Request $data){
        $update=sub_category::where('subid', $data->sub_cat_name)->update(array('name' =>$data->edit_sub_cat));
        if($update){
            return back();
        }
    }
    public function getSubCategory(Request $data){
        $subcat = sub_category::where('catid',$data->header('main'))->get();
        return response()->json(['sub'=>$subcat]); 
    }


    
}