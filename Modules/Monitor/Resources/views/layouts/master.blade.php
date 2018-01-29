<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--react.min.js - React 的核心库--}}
        {{--react-dom.min.js - 提供与 DOM 相关的功能--}}
        {{--babel.min.js - Babel 可以将 ES6 代码转为 ES5 代码，这样我们就能在目前不支持 ES6 浏览器上执行 React 代码。Babel 内嵌了对 JSX 的支持。通过将 Babel 和 babel-sublime 包（package）一同使用可以让源码的语法渲染上升到一个全新的水平。--}}
        <script src="https://cdn.bootcss.com/react/15.4.2/react.min.js"></script>
        <script src="https://cdn.bootcss.com/react/15.4.2/react-dom.min.js"></script>
        <script src="https://cdn.bootcss.com/babel-standalone/6.22.1/babel.min.js"></script>
        <script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>

        {{--开发环境--}}
        {{--<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>--}}
        {{--<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>--}}
        {{--生产环境--}}
        {{--<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>--}}
        {{--<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>--}}

        <title>Module Monitor</title>
    </head>
    <body>
        @yield('content')
    </body>
</html>
