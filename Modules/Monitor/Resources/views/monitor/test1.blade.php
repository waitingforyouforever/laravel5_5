@extends('monitor::layouts.master')

@section('content')
    <div id="example"></div>
@stop

<script type="text/babel">
    {{--var Counter = React.createClass({--}}
        {{--getInitialState: function () {--}}
            {{--return { clickCount: 0, hehe: '' };--}}
        {{--},--}}
        {{--handleClick: function () {--}}
            {{--/*this.replaceState(function(state) {--}}
                {{--return {clickCount: state.clickCount + 1};--}}
            {{--});*/--}}
            {{--this.replaceState(--}}
                {{--{clickCount: 8}--}}
            {{--);--}}
        {{--},--}}
        {{--render: function () {--}}
            {{--return (<h2 onClick={this.handleClick}>点我! 点击次数为{this.state.clickCount} <button>{this.state.hehe}</button></h2>);--}}
        {{--}--}}
    {{--});--}}
    {{--ReactDOM.render(--}}
            {{--<Counter />,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var Hello = React.createClass({--}}
        {{--getInitialState: function () {--}}
            {{--return { opacity: 1.0 };--}}
        {{--},--}}

        {{--componentDidMount: function () {--}}
            {{--this.timer = setInterval(function () {--}}
                {{--var opacity = this.state.opacity;--}}
                {{--opacity -= .05;--}}
                {{--if (opacity < 0.1) {--}}
                    {{--opacity = 1.0;--}}
                {{--}--}}
                {{--this.setState({--}}
                    {{--opacity: opacity--}}
                {{--});--}}
            {{--}.bind(this), 1000);--}}
        {{--},--}}

        {{--render: function () {--}}
            {{--return (--}}
                    {{--<div style=@{{ opacity: this.state.opacity }}>--}}
                        {{--Hello {this.props.name}--}}
                    {{--</div>--}}
            {{--);--}}
        {{--}--}}
    {{--});--}}

    {{--ReactDOM.render(--}}
            {{--<Hello name="world"/>,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var Button = React.createClass({--}}
        {{--getInitialState: function() {--}}
            {{--return {--}}
                {{--data:0--}}
            {{--};--}}
        {{--},--}}
        {{--setNewNumber: function() {--}}
            {{--this.setState({data: this.state.data + 1})--}}
        {{--},--}}
        {{--render: function () {--}}
            {{--return (--}}
                    {{--<div>--}}
                        {{--<button onClick = {this.setNewNumber}>INCREMENT</button>--}}
                        {{--<Content myNumber = {this.state.data} />--}}
                    {{--</div>--}}
            {{--);--}}
        {{--}--}}
    {{--});--}}
    {{--var Content = React.createClass({--}}
        {{--componentWillMount:function() {--}}
            {{--console.log('Component WILL MOUNT!')--}}
        {{--},--}}
        {{--componentDidMount:function() {--}}
            {{--console.log('Component DID MOUNT!')--}}
        {{--},--}}
        {{--componentWillReceiveProps:function(newProps) {--}}
            {{--console.log('Component WILL RECEIVE PROPS!')--}}
        {{--},--}}
        {{--shouldComponentUpdate:function(newProps, newState) {--}}
            {{--console.log("shouldComponentUpdate")--}}
            {{--return true;--}}
        {{--},--}}
        {{--componentWillUpdate:function(nextProps, nextState) {--}}
            {{--console.log('Component WILL UPDATE!');--}}
        {{--},--}}
        {{--componentDidUpdate:function(prevProps, prevState) {--}}
            {{--console.log('Component DID UPDATE!')--}}
        {{--},--}}
        {{--componentWillUnmount:function() {--}}
            {{--console.log('Component WILL UNMOUNT!')--}}
        {{--},--}}

        {{--render: function () {--}}
            {{--return (--}}
                    {{--<div>--}}
                        {{--<h3>{this.props.myNumber}</h3>--}}
                    {{--</div>--}}
            {{--);--}}
        {{--}--}}
    {{--});--}}
    {{--ReactDOM.render(--}}
            {{--<div>--}}
                {{--<Button />--}}
            {{--</div>,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var UserGist = React.createClass({--}}
        {{--getInitialState: function() {--}}
            {{--return {--}}
                {{--username: '',--}}
                {{--lastGistUrl: ''--}}
            {{--};--}}
        {{--},--}}

        {{--componentDidMount: function() {--}}
            {{--this.serverRequest = $.get(this.props.source, function (result) {--}}
                {{--var lastGist = result[0];--}}
                {{--this.setState({--}}
                    {{--username: lastGist.owner.login,--}}
                    {{--lastGistUrl: lastGist.html_url--}}
                {{--});--}}
            {{--}.bind(this));--}}
        {{--},--}}

        {{--componentWillUnmount: function() {--}}
            {{--this.serverRequest.abort();--}}
        {{--},--}}

        {{--render: function() {--}}
            {{--return (--}}
                    {{--<div>--}}
                        {{--{this.state.username} 用户最新的 Gist 共享地址：--}}
                        {{--<a href={this.state.lastGistUrl}>{this.state.lastGistUrl}</a>--}}
                    {{--</div>--}}
            {{--);--}}
        {{--}--}}
    {{--});--}}

    {{--ReactDOM.render(--}}
            {{--<UserGist source="https://api.github.com/users/octocat/gists" />,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var HelloMessage = React.createClass({--}}
        {{--getInitialState: function() {--}}
            {{--return {value: 'Hello Runoob!'};--}}
        {{--},--}}
        {{--handleChange: function(event) {--}}
            {{--this.setState({value: event.target.value});--}}
        {{--},--}}
        {{--render: function() {--}}
            {{--var value = this.state.value;--}}
            {{--return <div>--}}
                {{--<input type="text" value={value} onChange={this.handleChange} />--}}
                {{--<h4>{value}</h4>--}}
            {{--</div>;--}}
        {{--}--}}
    {{--});--}}
    {{--ReactDOM.render(--}}
            {{--<HelloMessage />,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var Content = React.createClass({--}}
        {{--render: function() {--}}
            {{--return  <div>--}}
                {{--<input type="text" value={this.props.myDataProp} onChange={this.props.updateStateProp} />--}}
                {{--<h4>{this.props.myDataProp}</h4>--}}
            {{--</div>;--}}
        {{--}--}}
    {{--});--}}
    {{--var HelloMessage = React.createClass({--}}
        {{--getInitialState: function() {--}}
            {{--return {value: 'Hello Runoob!'};--}}
        {{--},--}}
        {{--handleChange: function(event) {--}}
            {{--this.setState({value: event.target.value});--}}
        {{--},--}}
        {{--render: function() {--}}
            {{--var value = this.state.value;--}}
            {{--return <div>--}}
                {{--<Content myDataProp = {value}--}}
                         {{--updateStateProp = {this.handleChange}></Content>--}}
            {{--</div>;--}}
        {{--}--}}
    {{--});--}}
    {{--ReactDOM.render(--}}
            {{--<HelloMessage />,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    {{--var HelloMessage = React.createClass({--}}
        {{--getInitialState: function() {--}}
            {{--return {value: 'Hello Runoob!'};--}}
        {{--},--}}
        {{--handleChange: function(event) {--}}
            {{--this.setState({value: '菜鸟教程'})--}}
        {{--},--}}
        {{--render: function() {--}}
            {{--var value = this.state.value;--}}
            {{--return <div>--}}
                {{--<button onClick={this.handleChange}>点我</button>--}}
                {{--<h4>{value}</h4>--}}
            {{--</div>;--}}
        {{--}--}}
    {{--});--}}
    {{--ReactDOM.render(--}}
            {{--<HelloMessage />,--}}
            {{--document.getElementById('example')--}}
    {{--);--}}

    var MyComponent = React.createClass({
        handleClick: function () {
            this.refs.myInput.focus();
        },
        render: function () {
            return (
                    <div>
                        <input type="text" ref="myInput" />
                        <input type="button" value="点我输入框获取焦点"
                        onClick={this.handleClick} />
                    </div>
            );
        }
    });
    ReactDOM.render(
            <MyComponent />,
            document.getElementById('example')
    );
</script>