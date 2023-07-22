@extends('admin_layout')
@section('title','Quản lý user')
@section('menu-name','Quản lý User')
@section('body')
<main class="main">
    <div class="container_body">

        <div class="content">
            <div class="admin">
                <div class="admin__control__search">
                    <form action="" class="form-search">
                        <input type="text" placeholder="Nhập gì đó để tìm kiếm ..." />
                        <button type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </div>
            <div class="admin__control">
                <div class="admin__control__text">
                    <span>
                        <a href="{{URL::to('/quanlyuser')}}" class="link_add">Tất cả </a>
                    </span>
                    <span>
                        <a href="{{URL::to('/quanlyadmin')}}" class="link_add">Danh sách Admin</a>
                    </span>
                </div>
                <?php

                use Illuminate\Support\Facades\Session;

                $message = Session::get('message');
                if ($message) {
                    echo '<span style="font-size:25px ; color : green;"> ' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="admin__data">
                    <table>
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>tên user</td>
                                <td>email</td>
                                <td>ngày tạo</td>
                                <td>trạng thái</td>

                                <td colspan="2">Chức năng</td>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($all as $tt)

                            <tr>
                                <td>{{$tt->id}}</td>
                                <td>{{$tt->name}}</td>
                                <td>{{$tt->email}}</td>
                                <td>{{ date('M d, Y',strtotime($tt->created_at)) }}</td>
                                <td>
                                    <?php
                                    if ($tt->trangthai == 0) {
                                    ?>
                                        <a href="{{URL::to('/unactiveUser/'.$tt->id)}}">Ngừng hoạt động</a>
                                    <?php
                                    } else {



                                    ?>
                                        <a href="{{URL::to('/activeUser/'.$tt->id)}}">Hoạt động</a>

                                    <?php

                                    }
                                    ?>

                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa user này?')" href="{{URL::to('/xoauser'.$tt->id)}}">
                                        <button class="btn-6 custom-btn">Xóa</button>
                                </td>
                                </a>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection