<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'LoginController@indexLogin');
Route::post('/loginUser','LoginController@loginAuthenticate');
Route::get('/register', 'LoginController@indexRegister');
Route::post('/newUser','LoginController@newUser');
Route::get('/userNotLogged','LoginController@userNotLogged');
Route::get('/logout','LoginController@endSession');
Route::get('/recoveryPassword/{unique_key}','LoginController@indexRecovery');
Route::post('/requestRecoveryPassword','LoginController@forgotPassword');

Route::get('/fbLogin', 'FBAuthController@login');
Route::get('/public/fbCallback', 'FBAuthController@callback');
Route::get('/fbInputPassword/{userEmail}', 'FBAuthController@register');

Route::get('/home', 'HomeController@indexHome');

Route::get('/calendar', 'CalendarController@index');
Route::get('/getCalendar', 'CalendarController@getCalendar');

Route::get('/settings', 'SettingsController@indexSettings');
Route::get('/changeName','SettingsController@changeName');
Route::get('/changeEmail','SettingsController@changeEmail');
Route::get('/changePassword','SettingsController@changePassword');
Route::get('/deleteUser','SettingsController@delete');
Route::get('/passwordChanged/{unique_key}','SettingsController@recoverPassword');

Route::get('/schedule', 'ScheduleController@indexSchedule');
Route::get('/getYears', 'ScheduleController@getYears');
Route::get('/getYear/{yearId}', 'ScheduleController@getYear');
Route::get('/getTerms/{yearId}', 'ScheduleController@getTerms');
Route::get('/getTerm/{termId}', 'ScheduleController@getTerm');
Route::get('/getSubjects/{termId}', 'ScheduleController@getSubjects');
Route::get('/newSchoolYear', 'ScheduleController@createSchoolYear');
Route::get('/editSchoolYear/{yearId}', 'ScheduleController@editSchoolYear');
Route::get('/newSchoolTerm/{yearID}', 'ScheduleController@createSchoolTerm');
Route::get('/editSchoolTerm/{termId}', 'ScheduleController@editSchoolTerm');
Route::get('/newSubject/{schoolTermID}', 'ScheduleController@createSubject');
Route::get('/editSubject/{subjectId}', 'ScheduleController@editSubject');
Route::get('/deleteYear/{yearID}', 'ScheduleController@removeSchoolYear');
Route::get('/deleteTerm/{termID}', 'ScheduleController@removeSchoolTerm');

Route::get('/subject/{subject_id}', 'SubjectController@indexSubject');
Route::get('/getSubject/{subject_id}', 'SubjectController@getSubject');
Route::get('/deleteSubject/{subject_id}', 'SubjectController@deleteSubject');
Route::get('/getSchedules/{subjectId}', 'SubjectController@getSchedules');
Route::get('/getSchedule/{scheduleId}', 'SubjectController@getSchedule');
Route::get('/newSchedule/{subject_id}', 'SubjectController@createSchedule');
Route::get('/editSchedule/{scheduleId}', 'SubjectController@editSchedule');
Route::get('/deleteSchedule/{schedule_id}', 'SubjectController@deleteSchedule');
Route::get('/getTasks/{subjectId}', 'SubjectController@getTasks');
Route::get('/getTask/{taskId}', 'SubjectController@getTask');
Route::get('/newTask/{subject_id}', 'SubjectController@createTask');
Route::get('/editTask/{task_id}', 'SubjectController@editTask');
Route::get('/getExams/{subjectId}', 'SubjectController@getExams');
Route::get('/getExam/{examId}', 'SubjectController@getExam');
Route::get('/newExam/{subject_id}', 'SubjectController@createExam');
Route::get('/editExam/{exam_id}', 'SubjectController@editExam');

Route::get('/tasks/', 'TaskController@index');
Route::get('/getTasks/', 'TaskController@getUserTask');
Route::get('/getTasksWeek/', 'TaskController@getUserPresentTasks');
Route::get('/getTasksPast/', 'TaskController@getUserPastTasks');
Route::get('/getTasksFuture/', 'TaskController@getUserFutureTasks');



Route::get('/getClassesToday/', 'ClassController@getClassesToday');
Route::get('/getExamsWeek/', 'ExamController@getExamsWeek');
