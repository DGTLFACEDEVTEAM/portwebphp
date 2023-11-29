@extends('layouts.master')

@section('title', 'Admin Dashboard')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Admin Panel</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card" style="width: 80vw!important;">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Blog Listesi</h4>

                                <div class="table-responsive">
                                    <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Created @</th>
                                                <th>Kategori</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th class="text-center">İşlemler</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr data-id="1">
                                                    <td data-field="id" style="width: 80px">{{ $post->id }}</td>
                                                    <td data-field="id" style="width: 80px">{{ $post->created_at }}</td>
                                                    <td data-field="category_name">{{ $post->category->name }}</td>
                                                    <td data-field="name">{{ $post->name }}</td>
                                                    <td data-field="slug">{{ $post->slug }}</td>
                                                    <td data-field="created_by">{{ Auth::user()->name }}</td>
                                                    <td data-field="status">
                                                        @if ($post->status == '1')
                                                            <div class="font-size-13">
                                                                <i
                                                                    class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>ACTİVE
                                                            </div>
                                                        @else
                                                            <div class="font-size-13">
                                                                <i
                                                                    class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>PASİVE
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td style="width: 100px">
                                                        <a href="{{ url('admin/post-edit/' . $post->id) }}"
                                                            class="btn btn-md btn-warning m-2" title="Düzenle">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                            aria-labelledby="myModalLabel" data-bs-backdrop="static"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">Uyarı</h5>
                                                                        <button type="button" class="close"
                                                                            data-bs-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Silmek istediğinize emin misiniz?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="{{ url('admin/post-delete/' . $post->id) }}"
                                                                            type="button" class="btn btn-danger">Evet,
                                                                            sil!</a>
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">İptal</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <a href="" class="btn btn-md btn-danger"
                                                            data-bs-toggle="modal" data-bs-target="#myModal" title="Sil">
                                                            <i class="far fa-trash-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Tüm Hakları Saklıdır.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Coding with <i class="mdi mdi-heart text-danger"></i> by Dgtlface Software Team
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection
