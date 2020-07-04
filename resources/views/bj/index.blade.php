#布局<br/>

@yield('title')
1.yield 灭有内容：可以显示<br/>

@section('abc')
    2.section 中的价格<br/>
    2.section 中的内容无法显示<br/>
@endsection

@section('content')
    4.show 的内容：在定义的时候就可以显示<br/>
@show
