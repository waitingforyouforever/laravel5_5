@extends('monitor::layouts.master')

@section('content')
    <div id="example"></div>
@stop

<script type="text/babel">
    var i = 1;
    var myStyle = {
        fontSize : 10,
        color: '#FF00000'
    };
    var arr  = [
        <h1>菜鸟教程</h1>,
        <h2>呵呵</h2>
    ];
    var myDivElement = <div className="foo" />;
    var HelloMessage = React.createClass({
        render: function() {
            return <h1>Hello {this.props.name}</h1>;
        }
    });
    var WebSite = React.createClass({
        render: function() {
            return (
                    <div>
                        <Name name={this.props.name} />
                        <Link site={this.props.site} />
                    </div>
            );
        }
    });
    var Name = React.createClass({
        render: function() {
            return (
                    <h1>
                        {this.props.name}
                    </h1>
            );
        }
    });
    var Link = React.createClass({
        render: function() {
            return (
                    <a href={this.props.site}>
                        {this.props.site}
                    </a>
            );
        }
    });
    var LikeButton = React.createClass({
        getInitialState: function() {
            return {liked: false};
        },
        handleClick: function(event) {
            this.setState({liked: !this.state.liked});
        },
        render: function() {
            var text = this.state.liked ? '喜欢' : '不喜欢';
            return (
                    <p onClick={this.handleClick}>
                        你<b>{text}</b>我。点我切换状态。
                    </p>
            );
        }
    });
    ReactDOM.render(
            {{--<h1>{i == 1 ? 'true' : 'false'}</h1>,--}}
            {{--<h1 style={myStyle}>--}}
                {{--{/**注释。。。**/}--}}
            {{--</h1>,--}}
            {{--<div>{arr}</div>--}}
            {{--<WebSite name="菜鸟教程" site="http://www.baidu.com" />--}}
            <LikeButton />
            ,
            document.getElementById('example')
    );
</script>