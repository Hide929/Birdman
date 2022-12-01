<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>鳥人間.com</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    

   

    
    <table>
     <thead>
        <tr>
          <th>年度</th>
        　<th>部門</th>
          <th>順位</th>
          <th>記録</th>
          <th>チーム名</th>
          <th>氏名</th>
          <th>年齢</th>
          <th>備考</th>
        </tr>
      </thead>
        <tbody>
            <h1>大会の歴史</h1>
            
            
            <form method="GET" action="/posts/history">
                <label for="years">年度
                <div>
                    <select id="year"  name="year">
                        <option value="">全て</option>
                        @foreach($years_list as $years_item)
                            <option value="{{ $years_item -> id }}" @if($year == $years_item -> id) selected @endif>{{ $years_item -> name }}</option>
                        @endforeach
                    </select>
                </div>
                </label>
                
                <label for="">部門
                <div>
                    <select name="award">
                        <option value="">全て</option>
                        @foreach($awards_list as $awards_item)
                            <option value="{{ $awards_item -> id }}") @if($award == $awards_item -> id) selected @endif>{{ $awards_item -> name }}</option>
                        @endforeach
                    </select>
                </div>
                </label>
                
                
                 <label for="">キーワード
                    <div>
                    <input type="text" placeholder="チーム名・氏名を入力" name="keyword" value="{{ $keyword }}">
                    </div>
                    @csrf
                    <div>
                       <input type="submit" class="btn" value=検索>
                    </div>
                </label>
            </form>
            
            <a href='/posts/add'>add</a>
            
            <div class='records'>
              
                @foreach ($records as $record)
                    <tr>
                        <td> {{ $record->year->name }} </td>
                        <td> {{ $record->award->name }} </td>
                        <td> {{ $record->rank}} </td>
                        <td> {{ $record->distance  }}  </td>
                        <td> {{ $record->team_name }} </td>
                        <td> {{ $record->player_name }} </td>
                        <td> {{ $record->Age }} </td>
                        <td> {{ $record->other }} </td>
                        
                    </tr>
                @endforeach
               
                
                <div class='paginate'>{{ $records->links('pagination::bootstrap-4') }}</div>
            </div>
            
            
            
            
            
        </tbody>
    </table>
    
            <div class="footer">
                <a href="/">戻る</a>
            </div>
    
            
    
</html>