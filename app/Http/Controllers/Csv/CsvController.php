<?php

namespace App\Http\Controllers\Csv;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CsvController extends Controller
{
    public function index()
    {
        return view('csv/index',[
            'message' => 'CSVファイルをアップロードしてください',
        ]);
    }

    public function finish(Request $request)
    {

        // ファイルバリデーション
        $validation_array = [
            'csv_file' => [
                        'required', // 必須
                        'max:1024', // ファイルサイズ上限は設定値以下か
                        'file', // file属性でアップロードされたファイルか
                        'mimes:csv,txt', // 拡張子がcsvか,
            ],
        ];

        $validator = Validator::make($request->all(), $validation_array);

        if ($validator->fails()) {
            return redirect('/csv/')
                        ->withErrors($validator);
        };

        //ファイル名取得
        $csv_name = $request->file('csv_file')->getClientOriginalName();

        // ファイル保存
        $csv_path = $request->file('csv_file')->storeAs('csv_data', $csv_name);

        // CSV情報の取得
        $csv_content = new \SplFileObject(storage_path('app/csv_data/'.$csv_name));
 
        $csv_content->setFlags(
          \SplFileObject::READ_CSV |      // CSVとして行を読み込み
          \SplFileObject::READ_AHEAD |    // 先読み／巻き戻しで読み込み
          \SplFileObject::SKIP_EMPTY |    // 空行を読み飛ばす
          \SplFileObject::DROP_NEW_LINE   // 行末の改行を読み飛ばす
        );

        // 配列に変換
        $csv_data = [];

        foreach($csv_content as $value) {

            // 文字コード変換
            $value = mb_convert_encoding($value, "UTF-8");

            // 項目行を省く        
            if($value[0] == "名前"){
                continue;
            }

            $csv_data[] = [
                'name' => $value[0],
                'age' => $value[1],
                'email' => $value[2],
            ];
        } 

        // 登録処理
        DB::beginTransaction();
        try {

            foreach($csv_data as $value){
                $user_data = DB::table('csv_imports')->insert([
                    'name' => $value['name'],
                    'age' => $value['age'],
                    'email' => $value['email'],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }

            DB::commit();

            $message = "登録処理が完了しました。";

        } catch (Throwable $e) {

            DB::rollBack();
            $message = "登録処理に失敗しました。";

        }

        // CSVファイルの削除
        Storage::delete('csv_data/'.$csv_name);
        
        return view('/csv/index',[
            'message' => $message,
        ]);
    }

}
