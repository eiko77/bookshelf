@if(count($errors)>0)
<!--From Error List-->
<div class="alert alert-danger">
    <div>
        <strong>入力した文字を訂正して下さい。</strong>
    </div>
<div>
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
</div>
@endif