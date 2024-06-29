@extends('layout.app')

@section('title', 'evaluation')

@section('content')
<div class="content">
    <div class="header">
        <h1>STUDENT EVALUATION </h1>
    </div>
    <div class="dashboard-welcome">
        <h2>WELCOME ADMIN!!</h2>
    </div>
   
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #84C7F2;
        color: white;
        margin: 0;
    }
    .content {
        padding: 15px;
    }
    .header {
        background-color: #2A91A9;
        padding: 5px;
        text-align: center;
    }
    .dashboard-welcome {
        text-align: center;
        margin: 20px 0;
    }
    .stats {
        display: flex;
        justify-content: center;
        gap: 20px;
    }
    .stats .card {
        background-color: #f39c12;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        width: 150px;
    }
    .stats .card.teachers {
        background-color: #1abc9c;
    }
</style>
@endsection
