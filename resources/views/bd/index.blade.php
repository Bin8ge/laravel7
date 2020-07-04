<form action="bdtj" method="post">
    账号：<input type="text" name="name" ><br/>
    密码：<input type="password" name="password"><br/>
    <input type="submit" value="提交">
</form>

<h1>Create Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

