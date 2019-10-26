@extends('AdminViews.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>دسته بندی</h2>
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
                            <col span="1" style="width: 20%;">
                            <col span="1" style="width: 45%;">
                            <col span="1" style="width: 15%;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>شناسه</th>
                                <th>نام شاخه</th>
                                <th>شاخه پدر</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{ $category->id }}
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                    {{ $category->parent_name }}
                                </td>
                                <td>
                                    <form method="POST" action="{{route('categories.destroy',$category->id)}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="btn-group">
                                            <button type="submit"  class="btn btn-danger btn-sm "><span class="glyphicon glyphicon-trash"></span></button>
                                            <a  class="btn btn-success btn-sm" href="{{ route('categories.edit',$category->id) }}" role="button" style="display: inline-block"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a  id="add" class="btn btn-warning btn-sm" href="{{ route('categories.create',$category->id) }}" role="button" style="display: inline-block" onclick="addrow"><span class="glyphicon glyphicon-plus"></span></a>
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
    </div>


@endsection
@section('script')
    <script>
        $(document).ready(function() {
            const select = document.querySelector('*[name="categories"]');
            select.className += 'col-md-12';
            for (const option of select.options){
                const paddingLength = option.text.match(/^[\s]*/)[0].length;
                const prefix = '&nbsp;';
                const padding = `${prefix.repeat(paddingLength*2)}`;
                option.innerHTML = `${padding} ${option.text.trim()}`;
            }
            $(select).select2({ width:'100%'});
        });
    </script>
@endsection
