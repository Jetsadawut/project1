@extends('layout.master')

@section('content')
    <h1>ผู้ใช้งาน</h1>
<a href="/post/create">+ เพิ่มข่าวใหม่</a>

    <table>
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>หัวข้อ</td>
                <td>รูปประจำข่าว</td>
                <td>หมวดหมู่ข่าว</td>
                <td>ผู้เขียนข่าว</td>
                <td>สร้างเมื่อ</td>
                <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td><img src="{{storage_path}}"</td>
                <td>{{$item->categoey_id}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->created_at}}</td>
                <td><a href="/user/edit/{{$item->id}}">เเก้ไข</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
