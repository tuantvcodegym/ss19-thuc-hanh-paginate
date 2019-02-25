<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0">
    <tr>
        <td width="30px">Id</td>
        <td width="100px">Ten khach hang</td>
        <td width="100px">Ngay sinh</td>
        <td width="100px">Email</td>
        <td width="100px">Tinh Thanh</td>
    </tr>
    @foreach($task as $key=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->Ten_khach_hang}}</td>
            <td>{{$value->Ngay_sinh}}</td>
            <td>{{$value->Email}}</td>
            <td>{{$value->Tinh_Thanh}}</td>
            <th width="50px"><a href="#">Sua</a></th>
            <th width="50px"><a href="#">Xoa</a></th>
        </tr>
    @endforeach
</table>
{{$task->links()}}
<a href="#">Them moi</a>
</body>
</html>