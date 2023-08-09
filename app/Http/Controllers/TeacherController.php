<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('backend.teachers.create');
    }

    public function store(Request $request, Teacher $teacher)
    {
        $teacher->fill([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'surname' => $request->surname,
            'specialize' => $request->specialize,
            'description' => $request->description,
            'visible' => $request->visible,
        ])->save();
        return redirect()->route('teacher.index');

    }
    public function show(Teacher $teacher)
    {
        return view('backend.teachers.show', compact('teacher'));
    }
    public function edit(Teacher $teacher)
    {
        return view('backend.teachers.edit', compact('teacher'));
    }
    public function update(Teacher $teacher)
    {
        $data = request()->validate([
            'name' => '',
            'lastname' => '',
            'surname' => '',
            'specialize' => '',
            'description' => '',
            'visible' => '',
        ]);
        $teacher->update($data);
        return redirect()->route('teachers.show',$teacher->id);

    }
    public function destroy (Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
