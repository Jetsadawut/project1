@extends('layout.master')

@section('content')
    <h1>หมวดหมู่ข่าว</h1>
    <a href="/category/create">+ เพิ่มหมวดหมู่ใหม่</a>
    <table>
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อหมวดหมู่</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->cteated_at}}</td>
                <td>แก้ไข | ลบ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
