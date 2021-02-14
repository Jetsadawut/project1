@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/category/store/" methods="post">
        @csrf
        ชื่อ-สกุล: <input type="text" name="name" required>
        username: <input type="text" name="username" required>
        email: <input type="text" name="email" required>
        password: <input type="password" name="passeord" required>
        <button type="submit">บันทึก</button>
    </form>
@endsection
