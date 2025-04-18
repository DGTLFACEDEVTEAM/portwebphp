@extends('layouts.master')

@section('title', 'Blog Edit Test Page')

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
                            <h4 class="mb-sm-0">Post Düzenle</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Postler</a></li>
                                    <li class="breadcrumb-item active">Post Düzenle</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ url('admin/post-list') }}" type="button" class="btn btn-md btn-outline-primary waves-effect waves-light mb-3">
                    <i class="fa-solid fa-circle-arrow-left"></i> Geri
                </a>
                {{-- end page title --}}
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $errors }}</li>
                                        @endforeach
                                    </div>
                                @endif
                                <h4 class="card-title">Post Bilgileri</h4>
                                <br>
                                <form class="custom-validation" action="{{ url('admin/post-update/' . $post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="validationCategory" class="form-label">Kategori</label>
                                        <select name="category_id" class="form-select" id="validationCategory" required="">
                                            <option selected="" disabled="" value="">Kategori Seç</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Adı</label>
                                        <input type="text" name="name" value="{{ $post->name }}" class="form-control" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Slug</label>
                                        <input type="text" name="slug" value="{{ $post->slug }}" class="form-control" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Başlık Açıklaması</label>

                                        <input type="text" name="title_description" value="{{ $post->title_description }}" class="form-control" required />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Başlık Görseli</label>
                                        <input type="file" name="title_image" value="{{ $post->title_image }}" class="form-control" />
                                        @if ($post->title_image)
                                            <img src="{{ asset('uploads/blogs/' . $post->title_image) }}" width="250px" height="150px" alt="Post Başlık Görseli">
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label>Post Açıklaması</label>
                                        @if (strpos($post->description, 'dgtlNewBlogSystem') !== false)
                                            <div>
                                                <textarea name="description" id="descriptionV" tabindex="0" class="form-control d-none">{!! $post->description !!}</textarea>
                                            </div>
                                            @include('admin.post.components.newblog', ['values' => $post])
                                            {{-- include admin.post.components.newblog and send post.description to that page --}}

                                        @else
                                            <div>
                                                <textarea name="description" id="ckeditor-dev" tabindex="0" class="form-control">{!! $post->description !!}</textarea>
                                            </div>
                                        @endif

                                    </div>

                                    @if (strpos($post->description, 'dgtlNewBlogSystem') !== false)
                                        <div class="form-check mb-3">
                                            <input name="previewTemp" class="form-check-input" type="checkbox" id="formCheck2">
                                            <label class="form-check-label" for="formCheck2">
                                                Post Açıklaması Önizleme Göster
                                            </label>
                                        </div>
                                        <div class="previewTemp mb-3 d-none d-flex w-100 border rounded-1 flex-column">
                                            <p class="fs-3 fw-bold w-100 d-flex align-items-center justify-content-center mb-0">
                                                Gösterilecek bir şey yok.</p>
                                        </div>
                                    @else
                                        <br>
                                    @endif
                                    <h6>SEO Tags</h6>
                                    <br>
                                    <div class="mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" value="{{ $post->meta_title }}" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <div>
                                            <textarea name="meta_description" required class="form-control" rows="3">{!! $post->meta_description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <label class="form-check-label" for="formCheck1">Status</label>
                                        <input class="form-check-input" type="checkbox" id="formCheck1" name="status" {{ $post->status == '1' ? 'checked' : '' }}>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Değişiklikleri Kaydet
                                            </button>
                                            <a href="{{ url('admin/post-list') }}" type="button" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> {{-- end col --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-import')
    @if (strpos($post->description, 'dgtlNewBlogSystem') !== false)
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script>
            function getRandomInt(max) {
                return Math.floor(Math.random() * max);
            }
            let randomNum = getRandomInt(100000);
            // call assets/admin/js/pages/postTest.js file with random number
            let postTestJs = document.createElement('script');
            postTestJs.src = "{{ asset('assets/admin/js/pages/postHandle.js') }}?v=" + randomNum;
            document.body.appendChild(postTestJs);
        </script>
    @else
        <script type="text/javascript" src="{{ asset('assets/admin/libs/ckeditor/ckeditor.js') }}"></script>
        <script>
            CKEDITOR.replace('ckeditor-dev');
        </script>
    @endif
@endsection
