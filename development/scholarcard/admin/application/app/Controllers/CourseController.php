<?php

namespace App\Controllers;
use App\Models\CourseCategoryModel;

use CodeIgniter\Session\Session;

class CourseController extends BaseController
{
    public function course()
    {
        $model = new CourseCategoryModel;
        $data = $model->orderBy('id','DESC')->findAll();
        return view('course/index', ["data"=>$data,"course"=>"active"]);
    }
    
      public function courseCategory()
    {
        $model = new CourseCategoryModel;
        $data = $model->orderBy('id','DESC')->findAll();
        return view('course-category/index', ["data"=>$data,"courseCategory"=>"active"]);
    }
    public function addCourseCategory()
    {
        if($this->request->getMethod()=="post"){
            $session =  session();
            $model = new CourseCategoryModel;
            $data = array_map("trim", $_POST);
            try {
                if(empty($data['sub_category_id'])){
                    $data['sub_category_id'] = "Main Category";
                }
                $data = $model->save($data);
                $session->setFlashdata('msg', 'Course Category added successfully');
                return redirect()->to('course-category');
            }catch(\Exception $e){
                $session->setFlashdata('msg', 'Error '.$e->getMessage());
                return redirect()->to('course-category/add');
            }
        }else {
            $model = new CourseCategoryModel;
            $data = $model->orderBy('id','DESC')->findAll();
            return view('course-category/add', ["parent_category"=>$data, "addCourseCategory"=>"active"]);
        }
    }

    public function deleteCourseCategory($id)
    {
        $model = new CourseCategoryModel();
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Course Category Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Course Category Could not delete");
        }
        return redirect()->to("course-category");
    }


    public function updateCourseCategory($id=null){
        $session = session();
        if($this->request->getMethod()=="post"){
            $model = new CourseCategoryModel();
            $data = array_map("trim", $_POST);
            $data = $model->update($data['id'], $data);
            if($data){
                $session->setFlashdata('msg', 'Course Category data updated successfully');
            }else {
                $session->setFlashdata('msg', 'Data could not update');
            }
            return redirect()->to('course-category');
        }else {
            $model = new CourseCategoryModel();
            $data = $model->find($id);
            
            $model = new CourseCategoryModel();
            $parent_category = $model->findAll();
            return view('course-category/edit', ['course_category'=>$data, 'parent_category'=>$parent_category]);
        }
    }


}
