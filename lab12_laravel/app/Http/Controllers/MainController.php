<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalcOperation;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function manual()
    {
        return view('manual');
    }
    public function manual_result(Request $request)
    {
        $firstValue = $request->input('firstValue');
        $secondValue = $request->input('secondValue');
        $operation = $request->input('operation');
        if ($operation == '/' && $secondValue == 0) {
            return redirect('/Calc/Manual')->with('error', 'error: Division by zero');
        }
        $result = match ($operation) {
            '+' => $firstValue + $secondValue,
            '-' => $firstValue - $secondValue,
            '*' => $firstValue * $secondValue,
            '/' => number_format($firstValue / $secondValue, 3, '.',''),
            default => null,
        };
        return redirect('/Calc/Manual')->with([
            'firstValue' => $firstValue,
            'secondValue' => $secondValue,
            'operation' => $operation,
            'result' => $result,
        ]);
    }
    public function manualSeparateHandler()
    {
        return view('manualWithSeparateHandler');
    }
    public function manualSeparateHandler_result(Request $request)
    {
        $firstValue = $request->input('firstValue');
        $secondValue = $request->input('secondValue');
        $operation = $request->input('operation');
        if ($operation == '/' && $secondValue == 0) {
            return redirect('/Calc/ManualWithSeparateHandlers')->with('error', 'error: Division by zero');
        }
        $result = match ($operation) {
            '+' => $firstValue + $secondValue,
            '-' => $firstValue - $secondValue,
            '*' => $firstValue * $secondValue,
            '/' => number_format($firstValue / $secondValue, 3, '.',''),
            default => null,
        };
        return redirect('/Calc/ManualWithSeparateHandlers')->with([
            'firstValue' => $firstValue,
            'secondValue' => $secondValue,
            'operation' => $operation,
            'result' => $result,
        ]);
    }
// Вычисления используя модель
    public function modelParameters()
    {
        return view('modelInParameters');
    }
    public function modelParameters_result(Request $request)
    {
        $firstValue = $request->input('firstValue');
        $secondValue = $request->input('secondValue');
        $operation = $request->input('operation');
        if ($operation == '/' && $secondValue == 0) {
            return redirect('/Calc/ModelBindingInParameters')->with('error', 'error: Division by zero');
        }
        $result = match ($operation) {
            '+' => CalcOperation::add($firstValue, $secondValue),
            '-' => CalcOperation::subtract($firstValue, $secondValue),
            '*' => CalcOperation::multiply($firstValue, $secondValue),
            '/' => CalcOperation::divide($firstValue, $secondValue),
            default => null,
        };
        return redirect('/Calc/ModelBindingInParameters')->with([
            'firstValue' => $firstValue,
            'secondValue' => $secondValue,
            'operation' => $operation,
            'result' => $result,
        ]);
    }
    public function modelSeparateModel()
    {
        return view('modelInSeparateModel');
    }
    public  function modelSeparateModel_result(Request $request)
    {
        $firstValue = $request->input('firstValue');
        $secondValue = $request->input('secondValue');
        $operation = $request->input('operation');
        if ($operation == '/' && $secondValue == 0) {
            return redirect('/Calc/ModelBindingInSeparateModel')->with('error', 'error: Division by zero');
        }
        $result = match ($operation) {
            '+' => CalcOperation::add($firstValue, $secondValue),
            '-' => CalcOperation::subtract($firstValue, $secondValue),
            '*' => CalcOperation::multiply($firstValue, $secondValue),
            '/' => CalcOperation::divide($firstValue, $secondValue),
            default => null,
        };
        return redirect('/Calc/ModelBindingInSeparateModel')->with('result', $result);
    }

}
