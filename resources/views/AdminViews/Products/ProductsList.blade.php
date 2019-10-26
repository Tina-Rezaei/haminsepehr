@extends('AdminViews.master')
@section('content')
    <div class="row" >
        <div class="col-md-12 col-sm-12 col-xs-12" >
            <div class="x_panel" style="overflow: auto">
                <div class="x_title">
                    <h2> محصولات</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <table class="table">
                        <colgroup>
                            <col span="1" style="width: 10%;">
                            <col span="1" style="width: 10%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 20%;">
                            <col span="1" style="width: 7%;">
                            <col span="1" style="width: 8%;">
                            <col span="1" style="width: 15%;">
                        </colgroup>
                        <thead>
                            <th></th>
                            <th>کد محصول</th>
                            <th style="max-width: 100px">نام محصول</th>
                            <th> دسته بندی</th>
                            <th>توضیحات</th>
                            <th>قیمت (ریال)</th>
                            <th>موجودی</th>
                            <th>عملیات</th>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td style="vertical-align:middle"><div  style="background-image:url('{{asset($product["image"])}}');max-width:100%;height: 80px" class="mygallery" alt="project image"></td>
                                <td style="vertical-align:middle">{{ $product['products_code'] }}</td>
                                <td style="vertical-align:middle">{{ $product['name'] }}</td>
                                <td style="vertical-align:middle">{{ $product['category_name'] }}</td>
                                <td style="vertical-align:middle">{{ strip_tags($product['description']) }}</td>
                                <td style="vertical-align:middle">{{ $product['price'] }}</td>
                                <td style="vertical-align:middle">{{ $product['counts_in_stock'] }}</td>
                                <td style="vertical-align:middle">
                                    <form action="{{route('products.destroy',$product['id'])}}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="btn-group">
                                            <button type="submit"  class="btn btn-danger btn-sm "><span class="glyphicon glyphicon-trash"></span></button>
                                            <a  class="btn btn-success btn-sm" href="{{route('products.edit',$product['id'])}}" role="button" style="display: inline-block"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a  class="btn btn-warning btn-sm" href="{{route('products.show',$product['id'])}}" role="button" style="display: inline-block"><span class="glyphicon glyphicon-search"></span></a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="display: flex;justify-content: center;">
            {{ $products->links() }}
        </div>
    </div>

@endsection
