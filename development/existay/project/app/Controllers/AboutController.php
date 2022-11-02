<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\StateModel;
use App\Models\TestimonialModel;

class AboutController extends BaseController
{
    public function home()
    {

        $testimonial = new TestimonialModel();
        $testimonial = $testimonial->orderBy('id','desc')->findAll();
        $data = [
            "state"=>$this->getState(),
            "testimonial"=>$testimonial
        ];
        return view("about", $data);
    }

    public function sendEmail(){
        if($this->request->getPost()){
            $adminModel = new AdminModel();
            $data = $adminModel->first();

            $message = '
                    <table style="width:55%; margin:0 auto; text-align:left; border-collapse: collapse;">
                        <thead>
                        <tr>
                        <td colspan="2" style="background-color:#0661b0; text-align:center; padding:10px; color:white;border: 1px solid grey; font-weight: 800;
                        font-size: 20px;">Existay Contact Form</td>
                        </tr>
                        <tr style="padding:10px">
                            <th style="border:1px solid grey; padding:10px">NAME </th>
                            <td style="border:1px solid grey; padding:10px">'.ucwords($this->request->getVar("name")).'</td>
                        </tr>
                    
                        <tr style="padding:10px">
                            <th style="border:1px solid grey; padding:10px">EMAIL </th>
                            <td style="border:1px solid grey; padding:10px">'.ucwords($this->request->getVar("email")).'</td>
                        </tr>
                    
                        <tr style="padding:10px">
                            <th style="border:1px solid grey; padding:10px"> PHONE NUMBER </th>
                            <td style="border:1px solid grey; padding:10px">'.$this->request->getVar("phone").'</td>
                        </tr>
                        <tr style="padding:10px">
                            <th style="border:1px solid grey; padding:10px"> MESSAGE </th>
                            <td style="border:1px solid grey; padding:10px">'.ucwords($this->request->getVar("message")).'</td>
                        </tr>
                        </thead>
                    </table>
                    <br>
                    <strong style="color:red">Note : </strong> Please reply to click here <a href="mailto:sajid.globalheight@gmail.com" style="color:darkblue"> sajid.globalheight@gmail.com </a>
                    <footer style="margin-top:5px;">
                        Thanks!
                    </footer>
                    ';
            $email = \Config\Services::email();
            $email->setFrom('sajid.globalheight@gmail.com', 'Global Height Service');
            $email->setTo($this->request->getVar("email"));
            $email->setSubject('Existay Contact Form');
            $email->setMessage($message);

            if($email->send()){
                return redirect()->to("thanks");
            }else {
                redirect()->to("about")->withInput()->with("err", "Mail could not sent, Please try again later");

            }
        }
    }

    public function thanks(){
        return view("thanks");
    }
}
