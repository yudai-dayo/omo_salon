@extends('layouts.app')

@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="panel-body">
        <!-- バリデーションエラーの表示 -->
        @include('common.errors')
        <!-- バリデーションエラーの表示 -->
        <!-- 名前：{{Auth::user()->name}}さん -->
        <!-- 本登録フォーム -->
        <form action="{{ url('tribes') }}" method="POST" class="form-horizontal">
            
            {{ csrf_field() }}

            <!-- 本のタイトル -->
            <div class="form-group">
                
                <div class="col-sm-6">
                    <label for="user_name" class="col-sm-3 control-label">名前</label>
                    <input type="text" name="user_name" id="user_name" class="form-control">
                </div>
                
                <div class="col-sm-6">
                  <label class="col-sm-3 control-label" for="user_address">住所（エリア）</label>
                  <div class="col-sm-9">
                    <select name="user_address" id="user_address" class="form-control">
                      <option value="北海道">北海道</option>
                      <option value="東北">東北</option>
                      <option value="関東">関東</option>
                      <option value="中部">中部</option>
                      <option value="近畿">近畿</option>
                      <option value="中国">中国</option>
                      <option value="四国">四国</option>
                      <option value="九州">九州</option>
                      <option value="沖縄">沖縄</option>
                    </select>
                  </div>
                </div>
 

                <div class="col-sm-6">
                    <label for="user_gender" class="col-sm-3 control-label">性別</label>
                    <input type="radio" name="user_gender" id="user_gender" class="form-control" value="man">男性
                    <input type="radio" name="user_gender" id="user_gender" class="form-control" value="women">女性
                  
                </div>
                
                <div class="col-sm-6">
                    <label for="user_birth" class="col-sm-3 control-label">数</label>
                    <input type="date" name="user_birth" id="user_birth" class="form-control">
                </div>
                
                 
                
            </div>

            <!-- 本 登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Save
                    </button>
                </div>
            </div>
        </form>



    <!-- 現在の本 -->
   
    <!-- Book: 既に登録されてる本のリスト -->
    <!-- <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ $tribes->links()}}
        </div>
    </div> -->
    
    </div>
    <!-- 本登録フォームの作成 -->

@endsection
