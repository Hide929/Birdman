<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>鳥人間.com</title>
    </head>
    <body>
        <h1>入力フォーム</h1>
        <form action="/posts/save" method="POST">
            @csrf
            <div class="year">
                <h2>year</h2>
                <input type="text" name="records[year_id]" placeholder="年度を入力" value="{{ old('name.title') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('record.year_id') }}</p>
            </div>
            <div class="team">
                <h2>team_id</h2>
                <input type="text" name="records[team_id]" placeholder="チームを入力" value="{{ old('name.title') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('record.team_id') }}</p>
            </div>
            <div class="university">
                <h2>university_id</h2>
                <input type="text" name="records[university_id]" placeholder="大学を入力" value="{{ old('name.title') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('record.team_id') }}</p>
            </div>
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="records[player_name]" placeholder="名前を入力" value="{{ old('name.title') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('record.name') }}</p>
            </div>
            <div class="age">
                <h2>年齢</h2>
                <input type="text" name="records[Age]" placeholder="年齢を入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('record.title') }}</p>
            </div>
             <div class="distance">
                <h2>distance</h2>
                <input type="text" name="records[distance]" placeholder="距離を入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('record.title') }}</p>
            </div>
             <div class="award">
                <h2>award_id</h2>
                <input type="text" name="records[award_id]" placeholder="賞を入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('record.title') }}</p>
            </div>
            
            <div class="rank">
                <h2>rank</h2>
                <input type="text" name="records[rank]" placeholder="順位を入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('record.title') }}</p>
            </div>
            
             <div class="other">
                <h2>other</h2>
                <input type="text" name="records[rank]" placeholder="備考を入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('record.title') }}</p>
            </div>
            
            

            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>