@extends('layouts.master')

@section('title', 'Blog Pages')

@section('content')
    {{-- ============================================================== --}}
    {{-- Start right Content here --}}
    {{-- ============================================================== --}}
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                {{-- start page title --}}
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Blog Yazıları</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                    <li class="breadcrumb-item active">Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end page title --}}

                <a href="{{ url('admin/post-create-new') }}" type="button"
                    class="btn btn-outline-success waves-effect waves-light">
                    <span style="font-weight:bold">Yeni Makale Ekle </span><i class="fas fa-plus"></i>
                </a>
                {{-- <a href="{{ url('admin/dashboard') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light float-end">
                        <i class="fa-solid fa-circle-arrow-left"></i> Geri
                    </a> --}}
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Makale Listesi</h4>
                                @if (session('message'))
                                    <div class="alert alert-success">{{ session('message') }}</div>
                                @endif
                                <div
                                    class="w-100 min-h-500px d-flex align-items-center justify-content-center datatableLoader ">
                                    {{-- <i class="ri-loader-fill loader fs-1"></i> --}}
                                    <img loading="lazy" src="{{ asset('assets/admin/images/users/avatar-13.jpg') }}"
                                        class="profileLoadingContainer pp1" alt="Başlık Görseli">
                                    <img loading="lazy" src="{{ asset('assets/admin/images/users/avatar-11.jpg') }}"
                                        class="profileLoadingContainer pp2" alt="Başlık Görseli">
                                    <img loading="lazy" src="{{ asset('assets/admin/images/users/avatar-10.jpg') }}"
                                        class="profileLoadingContainer pp3" alt="Başlık Görseli">
                                    <img loading="lazy" src="{{ asset('assets/admin/images/users/avatar-9.jpg') }}"
                                        class="profileLoadingContainer pp4" alt="Başlık Görseli">
                                    <img loading="lazy" src="{{ asset('assets/admin/images/users/avatar-12.jpg') }}"
                                        class="profileLoadingContainer pp5" alt="Başlık Görseli">
                                </div>
                                <div class="table-responsive d-none">
                                    <table id="selection-datatable"
                                        class="table table-editable table-nowrap align-middle table-edits">
                                        <thead class="table-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Resim</th>
                                                <th>Kategori</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th class="text-center">İşlemler</th>
                                                {{-- <th>Description</th> --}}
                                                {{-- <th>Image</th> --}}
                                                {{-- <th>Meta Title</th>
                                                    <th>Meta Description</th>
                                                    <th>Meta Keyword</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($posts as $post)
                                                <tr data-id="1">
                                                    <td data-field="id" style="width: 80px">{{ $post->id }}</td>
                                                    <td data-field="title_image">
                                                        <img loading="lazy"
                                                            src="{{ asset('uploads/blogs/' . $post->title_image) }}"
                                                            width="50px" height="50px" alt="Başlık Görseli">
                                                    </td>
                                                    <td data-field="category_name">
                                                        {{-- @if ($post->category->name == null)
                                                            
                                                        @endif --}}
                                                        {{ $post->category->name }}</td>
                                                    <td data-field="name">{{ $post->name }}</td>
                                                    <td data-field="slug d-flex align-items-center">{{ $post->slug }}

                                                        <a href="{{ url('blog-sayfasi/' . $post->slug) }}" target="_blank"
                                                            class="btn btn-sm btn-outline-dark  ms-2" title="Görüntüle">
                                                            TR
                                                        </a>
                                                        <a href="{{ url('blog-page/' . $post->slug) }}" target="_blank"
                                                            class="btn btn-sm btn-outline-dark  " title="Görüntüle">
                                                            EN
                                                        </a>
                                                        <a href="{{ url('blog-stranica/' . $post->slug) }}" target="_blank"
                                                            class="btn btn-sm btn-outline-dark  " title="Görüntüle">
                                                            RU
                                                        </a>
                                                        <a href="{{ url('blog-seite/' . $post->slug) }}" target="_blank"
                                                            class="btn btn-sm btn-outline-dark  " title="Görüntüle">
                                                            DE
                                                        </a>



                                                    </td>
                                                    {{-- <td data-field="description">{!! $post->description !!}</td> --}}
                                                    <td data-field="created_by">{{ $post->created_by }}
                                                    </td>
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
                                                    {{-- <td data-field="image">
                                                        <img src="{{ asset('uploads/post/'.$post->image) }}" width="50px" height="50px" alt="Img">
                                                    </td> --}}
                                                    <td style="width: 100px">
                                                        <a href="{{ url('admin/post-edit-new/' . $post->id) }}"
                                                            class="btn btn-md btn-warning m-2" title="Düzenle">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        {{-- Modal --}}
                                                        <div class="modal fade" id="myModal-{{ $post->id }}"
                                                            tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                            data-bs-backdrop="static" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel">Uyarı
                                                                        </h5>
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
                                                        {{-- End Modal --}}
                                                        <a href="{{ url('admin/post-delete/' . $post->id) }}"
                                                            class="btn btn-md btn-danger" data-bs-toggle="modal"
                                                            data-bs-target="#myModal-{{ $post->id }}" title="Sil">
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
                    </div> {{-- end col --}}
                </div> {{-- end row --}}

            </div>
        </div>
    </div>
@endsection
