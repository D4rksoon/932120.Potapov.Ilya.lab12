@extends('layout')

@section('title') PassUsingViewBag @endsection
@section('main_content')
    @if(session('result') === null)
        <div class="header-container">
            <p>ModelBindingInParameters<p>
        </div>
        <form method="post" action="/Calc/ModelBindingInParameters" class="calc-container">
            @csrf
            <input type="number" name="firstValue" id="firstValue" required>
            <br>
            <select name="operation" id="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <br>
            <input type="number" name="secondValue" id="secondValue" required>
            <br>
            <button type="submit">Submit</button>
        </form>
        @if(session('error'))
            <p style="color: #ff625f">{{ session('error') }}</p>
        @endif
    @else
        <div class="header-container">
            <p>Result</p>
        </div>
        {{--Вывод ответа--}}
        <p style="font-size: 22px;">
            {{ session('result') }}
        </p>
    @endif
@endsection
