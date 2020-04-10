<?php

// route 関数の第一引数はルート名です。ルーティングの際に get メソッドに続けて呼び出した name メソッドの引数がそのルートの名前です。route 関数の第二引数として渡している配列は、ルート URL のうち変数になっている部分（ここでは {id}）に実際の値を埋める役割です。
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');