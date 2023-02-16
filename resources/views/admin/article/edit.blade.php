@extends('layouts.dashboard')
@section('title', 'Редагувати сторінку')
@section('content')
    <!-- Content Wrapper. Contains articles content -->
    <div class="content-wrapper">
        <!-- Content Header (articles header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('mainAdmin') }}">Головна</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-12">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                            </div>
                        @endif
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title') - {{ $articles['title'] }}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form enctype="multipart/form-data" action="{{ route('articles.update', $articles['id']) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Заголовок</label>
                                        <input type="text" name="title" value="{{ $articles['title'] }}" class="form-control" placeholder="Введіть назву" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Текст статті</label>
                                        <textarea id="content" name="content" class="form-control" rows="4">{{ $articles['content'] }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Опис (SEO)</label>
                                        <input type="text" name="description" value="{{ $articles['description'] }}" class="form-control" id="exampleInputName" placeholder="Введіть опис" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Адреса сторінки (url)</label>
                                        <input type="text" name="slug" class="form-control"  value="{{ $articles['slug'] }}" readonly>
                                    </div>

                                </div>

                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Зберегти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

