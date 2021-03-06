@extends('admin.layout.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content-header">
            <h1>
                Kategorije

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Dodaj Kategoriju</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <form method="POST" action="{{url('/ctg/create')}}">
                                {{ csrf_field() }}
                                <div class="input-group margin">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-warning">DODAJ KATEGORIJU</button>
                                    </div>
                                    <input type="text" id="dodaj_kategoriju" name="name" class="form-control">
                                </div>
                            </form>

                            <div class="box-tools">

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naziv</th>
                                    <th>Status</th>
                                    <th>Opis</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td><span class="label label-success">AKTIVNA</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                        <td><a href="{{url('/admin/category/edit/')}}/{{ $category->id }}"><span
                                                        class="label label-warning">UREDI</span></a>
                                            <a href="{{url('/admin/ctg/delete/')}}/{{ $category->id }}"><span
                                                        class="label label-danger">OBRIŠI</span></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <div class="pull-right">
                <button class="btn btn-success">SPREMI SVE</button>

            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection