@extends('monitor::layouts.master')

@section('content')
    <div id="example"></div>
@stop

<script type="text/babel">
    var xingming = {hehe};
    ReactDOM.render(
            <h1>{xingming}</h1>,
            document.getElementById('example')
    );
</script>