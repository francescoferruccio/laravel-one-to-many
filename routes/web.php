<?php

// GOAL-1: nell'ottica di quanto visto a lezione questa mattina generare prima il db (model + factory + migration + seeder) e poi le viste per eseguire una index + edit di task sulle seguenti entita':
// Employee <-1---N-> Task
// Per ogni employee diversi tasks, per ogni task esattamente un employee
// Employee:
// - firstname
// - lastname
// - dateOfBirth
// - role
// Task:
// - name
// - description
// - deadline
// N.B.: naturalmente ad ogni entita' va aggiunto il necessario per le chiavi primarie e le chiavi esterne
// BONUS: creare il necessario anche per eseguire update + delete
//-----------------------------------------------------------------------------
// GOAL-2: continuando l'esercizio inizito ieri, definire index + edit aggiungendo relazione molti-a-molti tra employee e location. Definire il db come segue:
// Location <-N---M-> Employee <-1---N-> Task
// Per ogni location 0, 1 o piu' employee; per ogni employee 0, 1 o piu' location
// Per ogni employee diversi tasks, per ogni task esattamente un employee
// Location:
// - street
// - city
// - state
// Employee:
// - firstname
// - lastname
// - dateOfBirth
// - role
// Task:
// - name
// - description
// - deadline
// N.B.: naturalmente ad ogni entita' va aggiunto il necessario per le chiavi primarie e le chiavi esterne + tabella ponte tra location e employee
// BONUS: creare il necessario anche per eseguire update + delete

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index')->name('home');
Route::get('/edit_task/{id}', 'TaskController@edit')->name('edit_task');
Route::post('/update/{id}', 'TaskController@update')->name('update_task');
Route::get('/delete/{id}', 'TaskController@delete')->name('delete_task');
Route::get('/create', 'TaskController@create')->name('create_task');
Route::post('/store', 'TaskController@store')->name('store_task');

Route::get('/show/{id}', 'EmployeeController@show')->name('show_empl');
Route::get('/edit_empl/{id}', 'EmployeeController@edit')->name('edit_empl');
Route::post('/update/{id}', 'EmployeeController@update')->name('update_empl');

Route::get('/locations', 'LocationController@index')->name('home_loc');
