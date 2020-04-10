<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
    {
        // すべてのフォルダデータをデータベースから取得
        $folders = Folder::all();

        // view 関数でテンプレートに取得したデータを渡した結果を返却
        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
        ]);
    }
}