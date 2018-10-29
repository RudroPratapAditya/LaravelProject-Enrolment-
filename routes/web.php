<?php


//ogout

Route::get('/logout','AdminController@logout');


Route::get('/', function () {
    return view('student_login');
});


//admin login route
Route::get('/backend', function () {
    return view('admin.admin_login');
});

Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/profile','Admincontroller@profile');
Route::get('/settings','Admincontroller@settings');


//addstudent
Route::get('/addstudent','addstudentsController@addstudent');
Route::post('/save_student','addstudentsController@savestudent');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');
Route::get('/tuitionfee','TuitionController@tuitionfee');
Route::get('/agriculture','AgricultureController@agriculture');
Route::get('/cse','CSEController@cse');
Route::get('/bam','BAMController@bam');
Route::get('/ansvm','ANSVMController@ansvm');
Route::get('/fisheries','FisheriesController@fisheries');
Route::get('/dm','DMController@dm');
Route::get('/nfs','NFSController@nfs');
Route::get('/lma','LMAController@lma');
Route::get('search/{faculty}','Faculty@search');

Route::get('student/{id}/delete','AllstudentsController@delete');
Route::get('student/{id}/edit','AllstudentsController@getEdit')->name('get.student.edit');
Route::post('student/{id}/edit','AllstudentsController@postEdit')->name('post.student.edit');

Route::get('/allteachers','TeacherController@allteachers')->name('show.teachers');
Route::get('addteacher','TeacherController@addForm');
Route::post('addteacher','TeacherController@postTeacher')->name('post.teacher');
Route::get('teacher/{id}/delete','TeacherController@delete')->name('delete.teacher');
Route::get('teacher/{id}/edit','TeacherController@getEdit')->name('get.teacher.edit');
Route::post('teacher/{id}/edit','TeacherController@postEdit')->name('post.teacher.edit');

