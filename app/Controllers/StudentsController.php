<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentsModel;

class StudentsController extends BaseController
{
    public function index()
    {
        $fetchStudent = new StudentsModel();
        $data['students'] = $fetchStudent->findAll();
        return view('students/list', $data);
    }

    public function createStudent()
    {
        $data['studentNumber'] = '20000_'.uniqid();
        return view('students/add', $data);
    }

    public function storeStudent()
    {
        $insertStudents = new StudentsModel();

        $data = array(
            'name' => $this->request->getPost('studentName'),
            'student_id' => $this->request->getPost('studentNum'),
            'course' => $this->request->getPost('studentCourse'),
            'email' => $this->request->getPost('studentEmail'),
            'address' => $this->request->getPost('studentAddress'),
        );

        $insertStudents->insert($data);

        return redirect()->to('/students')->with('success', 'Added Successfully!');
        // return view('students/list');
    }

    public function editStudent($id)
    {
        $editStudent = new StudentsModel();
        $data['student'] = $editStudent->where('id', $id)->first();

        return view('students/edit', $data);
    }

    public function updateStudent($id)
    {
        $updateStudent = new StudentsModel();
        $db = \Config\Database::connect();
        $data = array(
            'name' => $this->request->getPost('studentName'),
            'student_id' => $this->request->getPost('studentNum'),
            'course' => $this->request->getPost('studentCourse'),
            'email' => $this->request->getPost('studentEmail'),
            'address' => $this->request->getPost('studentAddress'),
        );

        $updateStudent->update($id, $data);

        return redirect()->to('/students')->with('success', 'Updated Successfully!');
        // return view('students/edit');
    }

    public function deleteStudent($id)
    {
        $deleteStudent = new StudentsModel();
        $deleteStudent->delete($id);

        return redirect()->to('/students')->with('success', 'Student Deleted!');
        // return view('students/edit');
    }
}
