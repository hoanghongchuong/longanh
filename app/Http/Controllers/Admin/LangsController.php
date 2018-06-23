<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LangsRequest;

use Illuminate\Http\Request;
use App\Langs;
use Input, File;
use Validator;



class langsController extends Controller {
    
	public function getDanhSach()
    {
        if($_GET['type']=='langs') $trang='ngôn ngữ';
        else if($_GET['type']=='dich-vu') $trang='dich vụ';
        else if($_GET['type']=='bai-viet') $trang='dịch vụ & hỗ trợ';
        else $trang = "bài viết";
        $data = Langs::all();
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $data = Langs::select()->where('com' , $com)->orderBy('stt','asc')->get();
    	return view('admin.langs.list', compact('data','trang'));
    }
    public function getAdd()
    {
        if($_GET['type']=='langs') $trang='ngôn ngữ';
        else if($_GET['type']=='dich-vu') $trang='dich vụ';
        else if($_GET['type']=='bai-viet') $trang='dịch vụ & hỗ trợ';
        else $trang = "bài viết";

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $parent = Langs::select()->where('com' , $com)->get()->toArray();
    	return view('admin.langs.add', compact('parent','trang'));
    }
    public function postAdd(langsRequest $request)
    {
        $com= $request->txtCom;
    	$cate = new Langs;
        $cate->name_vi = $request->txtName_vi;
        $cate->title_vi = $request->txtTitle_vi;
        $cate->name_en = $request->txtName_en;
        $cate->title_en = $request->txtTitle_en;
        $cate->alias = $request->txtAlias;


        $cate->keyword = $request->txtKeyword;
        $cate->description = $request->txtDescription;
        $cate->stt = $request->stt;
        $cate->com = $com;

        if($request->status=='on'){
            $cate->status = 1;
        }else{
            $cate->status = 0;
        }
        $cate->save();
        return redirect('backend/langs?type='.$com)->with('status','Thêm mới thành công !');
    }
    public function getEdit(Request $request)
    {
        if($_GET['type']=='langs') $trang='ngôn ngữ';
        else if($_GET['type']=='dich-vu') $trang='dich vụ';
        else if($_GET['type']=='bai-viet') $trang='dịch vụ & hỗ trợ';
        else $trang = "bài viết";

        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id= $request->get('id');
        //Tìm article thông qua mã id tương ứng
        $data = Langs::find($id);
        if(!empty($data)){
            if($request->get('hienthi')>0){
                if($data->status == 1){
                    $data->status = 0; 
                }else{
                    $data->status = 1; 
                }
                $data->update();
                return redirect('backend/langs?type='.$com)->with('status','Cập nhật thành công !');
            }
            
           // Gọi view edit.blade.php hiển thị bải viết
            return view('admin.langs.edit',compact('data','id','trang'));
        }else{
            $data = Langs::all();
            //return redirect()->route('admin.langs.index')->with('status','Dữ liệu không có thực');
            return redirect('backend/langs?type='.$com)->with('status','Dữ liệu không có thực !');
        }
    }

    public function update(Request $request)
    {
        $this->validate($request,
            ["txtName_vi" => "required"],
            ["txtName_vi.required" => "Bạn chưa nhập tên danh mục"]
        );
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $id=$request->get('id');
        $news_cate = Langs::find($id);
        if(!empty($news_cate)){

            $news_cate->name_vi = $request->txtName_vi;
            $news_cate->title_vi = $request->txtTitle_vi;
            $news_cate->name_en = $request->txtName_en;
            $news_cate->title_en = $request->txtTitle_en;


            $news_cate->alias = $request->txtAlias;


            $news_cate->keyword = $request->txtKeyword;
            $news_cate->description = $request->txtDescription;
            $news_cate->stt = $request->stt;
            $news_cate->com = $request->txtCom;
            if($request->status=='on'){
                $news_cate->status = 1;
            }else{
                $news_cate->status = 0;
            }

            $news_cate->save();

            return redirect('backend/langs/edit?id='.$id.'&type='.$com)->with('status','Cập nhật thành công');
        }else{
            return redirect()->back()->with('status','Dữ liệu không có thực');
        }
    }
    public function getDelete($id)
    {
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $product = Langs::findOrFail($id);
        $product->delete();
        return redirect('backend/langs?type='.$com)->with('status','Xóa thành công');
    }
    public function getDeleteList($id){
        if($_GET['type']=='langs') $trang='ngôn ngữ';
        else if($_GET['type']=='dich-vu') $trang='dich vụ';
        else if($_GET['type']=='bai-viet') $trang='dịch vụ & hỗ trợ';
        else $trang = "bài viết";
        
        if(!empty($_GET['type'])){
            $com=$_GET['type'];
        }else{
            $com='';
        }
        $listid = explode(",",$id);
        foreach($listid as $listid_item){
            $product = Langs::findOrFail($listid_item);
            $product->delete();
        }
        return redirect('backend/langs?type='.$com)->with('status','Xóa thành công');
    }
}
