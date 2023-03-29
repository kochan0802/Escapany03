
<x-masteradmin>
    <x-slot name="title">コーチリスト</x-slot>
  
    <x-slot name="content">

        <!--=================================================
        Form
        ==================================================-->
        
       @section('content')
        <form action="{{ route('admin.list') }}" method="get" role="form">
            @csrf

            <div class="form-group">
                <label for="number" class="control-label col-xs-2">ジャンル</label>
                <div class="col-xs-10">
                    <select name="category_name" class="form-control select select-primary mbl">
                        <option value="やりたいこと探し" {{ $category_name == 'やりたいこと探し' ? 'selected' : '' }}>やりたいこと探し</option> 
                        <option value="起業" {{ $category_name == '起業' ? 'selected' : '' }}>起業</option>
                        <option value="副業" {{ $category_name == '副業' ? 'selected' : '' }}>副業</option>
                        <option value="資格取得" {{ $category_name == '資格取得' ? 'selected' : '' }}>資格取得</option>
                        <option value="パラレルワーク" {{ $category_name == 'パラレルワーク' ? 'selected' : '' }}>パラレルワーク</option>
                        <option value="クリエイター" {{ $category_name == 'クリエイター' ? 'selected' : '' }}>クリエイター</option>
                        <option value="自分に合った働き方" {{ $category_name == '自分に合った働き方' ? 'selected' : '' }}>自分に合った働き方</option>
                        <option value="趣味" {{ $category_name == '趣味' ? 'selected' : '' }}>趣味</option>
                         <option value="海外移住" {{ $category_name == '海外移住' ? 'selected' : '' }}>海外移住</option>
                        <option value="その他" {{ $category_name == 'その他' ? 'selected' : '' }}>その他</option>
                    </select>
                </div>

            <div class="form-group">
                <label for="number" class="control-label col-xs-2">性格診断</label>
                <div class="col-xs-10">
                    <select name="personalities" class="form-control select select-primary mbl">
                        <optgroup label="分析家">
                            <option value="建築家" {{ $personality == '建築家' ? 'selected' : '' }}>建築家</option>
                            <option value="論理学者" {{ $personality == '論理学者' ? 'selected' : '' }}>論理学者</option>
                            <option value="指揮官" {{ $personality == '指揮官' ? 'selected' : '' }}>指揮官</option>
                            <option value="討論者" {{ $personality == '討論者' ? 'selected' : '' }}>討論者</option>
                        </optgroup>
                        <optgroup label="外交官">
                            <option value="提唱者" {{ $personality == '提唱者' ? 'selected' : '' }}>提唱者</option>
                            <option value="仲介者" {{ $personality == '仲介者' ? 'selected' : '' }}>仲介者</option>
                            <option value="主人公" {{ $personality == '主人公' ? 'selected' : '' }}>主人公</option>
                            <option value="広報運動家" {{ $personality == '広報運動家' ? 'selected' : '' }}>広報運動家</option>
                        </optgroup>
                        <optgroup label="番人">
                            <option value="管理者" {{ $personality == '提唱者' ? 'selected' : '' }}>提唱者</option>
                            <option value="擁護者" {{ $personality == '仲介者' ? 'selected' : '' }}>仲介者</option>
                            <option value="幹部" {{ $personality == '主人公' ? 'selected' : '' }}>主人公</option>
                            <option value="領事館" {{ $personality == '領事館' ? 'selected' : '' }}>領事館</option>
                        </optgroup>
                         <optgroup label="探検家">
                            <option value="巨匠" {{ $personality == '巨匠' ? 'selected' : '' }}>巨匠</option>
                            <option value="冒険者" {{ $personality == '冒険者' ? 'selected' : '' }}>冒険者</option>
                            <option value="起業家" {{ $personality == '起業家' ? 'selected' : '' }}>起業家</option>
                            <option value="エンターテイナー" {{ $personality == 'エンターテイナー' ? 'selected' : '' }}>エンターテイナー</option>
                        </optgroup>
                        </select>
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 text-center">
                <button type="submit" class="btn btn-default">検索</button>
              </div>
            </div>
            </form>
       
            @endsection
            
            @section('table')
            
            <table class="table table-striped">
              <tr>
                <th>名前</th>
                <th>ジャンル</th>
                <th>性格診断</th>
                <th>キャリア</th>
                <th>資格</th>
               
              </tr>
              <!-- loop -->
              @foreach($coaches as $coach)
              <tr>
                <td>{{ $coach->name }}</td>
                <td>{{ $coach->category_name }}</td>
                <td>{{ $coach->personalities }}</td>
                <td>{{ $coach->career }}</td>
                <td>{{ $coach->license }}</td>
              </tr>
              @endforeach
            </table>
            <div class="paginate text-center">
              {!! $coaches->appends(['category_name' => $category_name, 'personalities' => $personality])->render() !!}
            </div>
            @endsection
            
</x-masteradmin>