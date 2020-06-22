<?php

// GOAL: nell'ottica di quanto visto a lezione questa mattina generare prima il db (model + factory + migration + seeder) e poi le viste per eseguire una index + edit di task sulle seguenti entita':
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

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index')->name('home');
Route::get('/edit_task/{id}', 'TaskController@edit')->name('edit_task');
Route::post('/update/{id}', 'TaskController@update')->name('update_task');
Route::get('/delete/{id}', 'TaskController@delete')->name('delete_task');
