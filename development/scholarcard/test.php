<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\FAQSModel;
use CodeIgniter\Session\Session;

class FAQSController extends BaseController
{
    public function index()
    {
        $model = new FAQSModel;
        $data = $model->orderBy('id','DESC')->findAll();
        return view('admin/faqs', ["data"=>$data,"course"=>"active"]);
    }

    public function addCourseCategory()
    {
        if($this->request->getMethod()=="post"){
            $session =  session();
            $model = new FAQSModel;
            $data = array_map("trim", $_POST);
            try {
                if(empty($data['sub_category_id'])){
                    $data['sub_category_id'] = "Main Category";
                }
                $data = $model->save($data);
                $session->setFlashdata('msg', 'Course Category added successfully');
                return redirect()->route('admin/faqs');
            }catch(\Exception $e){
                $session->setFlashdata('msg', 'Error '.$e->getMessage());
                return redirect()->back();
            }
        }else {
            $model = new FAQSModel;
            $data = $model->orderBy('id','DESC')->findAll();
            return view('admin/faqs/add', ["parent_category"=>$data, "addCourseCategory"=>"active"]);
        }
    }

    public function deleteCourseCategory($id)
    {
        $model = new FAQSModel();
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Course Category Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Course Category Could not delete");
        }
        return redirect()->route("admin/faqs");
    }


    public function updateCourseCategory($id=null){
        $session = session();
        if($this->request->getMethod()=="post"){
            $model = new FAQSModel();
            $data = array_map("trim", $_POST);
            if(empty($data['sub_category_id'])){
                $data['sub_category_id'] = "Main Category";
            }
            $data = $model->update($data['id'], $data);
            if($data){
                $session->setFlashdata('msg', 'Course Category data updated successfully');
                return redirect()->route('admin/faqs');
            }else {
                $session->setFlashdata('msg', 'Data could not update');
                return redirect()->back();
            }
        }else {
            $model = new FAQSModel();
            $data = $model->find($id);
            $model = new FAQSModel();
            $parent_category = $model->findAll();
            return view('admin/faqs/edit', ['course_category'=>$data, 'parent_category'=>$parent_category]);
        }
    }


}
