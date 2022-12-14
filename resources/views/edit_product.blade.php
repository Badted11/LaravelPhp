<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body style="background-color: #00FA9A">
{{--<div class="container">--}}
{{--    <form action="{{route('editSave', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        <input type="text" placeholder="Input product name" name="name" value="{{$product->name}}">--}}
{{--        <select name="category_id">--}}
{{--            <option value="{{$product->category_id}}" class="select-control"></option>--}}
{{--            @foreach($categories as $category)--}}
{{--                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--        <textarea placeholder="Input description" name="description">{{$product->description}}</textarea>--}}
{{--        <input type="number" placeholder="Input price" name="price" value="{{$product->price}}">--}}
{{--        <input type="file" placeholder="Choose image" name="imageUrl">--}}
{{--        <input type="submit" value="Add">--}}
{{--    </form>--}}
{{--</div>--}}


<div class="container">
    <nav class="navbar navbar-expand-lg" style="background-color: #FF0000">
        <div class="container-fluid">
            <span style="background-color: black; font-size: 24px; color: white; padding-left: 5px; padding-right: 5px;
            border-radius: 7px">MS</span>
            <a class="navbar-brand" href="#">Moto Salon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Мотоциклы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Корзина</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-6 mx-auto">


    <form action="{{route('editSave', ['product' => $product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
{{--        <input type="hidden" name="id" value="<?php echo $game['id']; ?>">--}}


            <div class="row mt-3">
                <div class="col-12">
                    <label>MOTO NAME:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" placeholder="Insert name" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <label>CATEGORY:</label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <select name="category_id" class="form-control">
                        <option value="{{$product->category_id}}">{{$product->category->name}}</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>ABOUT PRODUCT:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <textarea class="form-control" name="description"  placeholder="About product">{{$product->description}}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>PRODUCT PRICE:</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <input type="number" name="price" class="form-control" value="{{$product->price}}" placeholder="Insert price" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <label>IMAGE:</label>
                </div>
            </div>
            <div class="row mt-2 mb-3">
                <div class="col-12">
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="imageUrl">
                </div>
            </div>
{{--            <div class="row mt-2">--}}
{{--                <div class="col-12">--}}
{{--                    <input class="btn btn-success" type="submit" value="Сохранить">--}}
{{--                </div>--}}
{{--            </div>--}}
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a class="btn btn-danger" href="{{route('product', ['product' => $product->id])}}">Отменить</a>


    </form>

    </div>
</div>
</div>

</body>
</html>
