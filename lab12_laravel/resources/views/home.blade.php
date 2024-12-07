@extends('layout')

@section('title') Home Page @endsection

@section('main_content')
    <p class="header-container">Form parameters parsing demo<p>
    <nav>
        <ul>
            <li><a href="/Calc/Manual">Manual parsing in single action</a></li>
            <li><a href="/Calc/ManualWithSeparateHandlers">Manual parsing in separate action</a></li>
            <li><a href="/Calc/ModelBindingInParameters">Model binding (parameters)</a></li>
            <li><a href="/Calc/ModelBindingInSeparateModel">Model binding (separate model)</a></li>
        </ul>
    </nav>
@endsection
