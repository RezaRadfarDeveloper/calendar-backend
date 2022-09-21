@extends('layouts.master')

@section('title', 'Centers')
 @section('style')  
 <style>
    .center-side {
        width: 24%;
        height: 550px;
        position: sticky;
        top: 110px;
        background-color: white;
    }

    .center-content-wrapper {
        width: 76%;
        height: 1488px;
        background-color:white;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-content: flex-start;
    }

    .centers-content {
        width: 100%;
        height: 1488px;
        background-color: white;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-content: flex-start;
    }
    .center {
        width: 32%;
        height: 450px;
        margin-bottom: 20px;
        background-color: #e8e8e8;
        padding: 10px 10px 15px 10px;
    }

    .content-nav {
        margin-top: 20px;
        width: 100%;
        height: 30px;
        margin-bottom: 2px;
    }

    .center-img {
        width: 100%;
        height: 217px;
        background-color: aqua;
    }

    .center-content {
        width: 90%;
        height: 235px;
        background-color:white;
        padding: 10px 0;
        margin: auto;
        margin-top: -10%;
    }

    .center-result {
        line-height: 23.2px;
        font-size: 18px;
    }


</style> 
@endsection

@section('content')
<div class="d-flex">
    <div class="center-side"></div>
    <div class="center-content-wrapper">
        <div class="content-nav">
            <span class="center-result">1-9 Of 107 results</span>
        </div>
        <div class="centers-content">
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
            <div class="center">
                    <div class="center-img"></div>
                    <div class="center-content"></div>
            </div>
        </div>
    </div>
</div>
@endsection