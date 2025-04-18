@extends('layouts.master')

@section('title', 'Yeni Blog Ekle')


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
                            <h4 class="mb-sm-0">Post Ekle</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active">Post Ekle</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <form class="custom-validation" action="{{ url('admin/post-create') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="validationCategory" class="form-label">Kategoriler</label>
                                        <select name="category_id" class="form-select" id="validationCategory"
                                            required="">
                                            <option selected="" disabled="" value="">Kategori seçiniz</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            Lütfen bir kategori seçiniz!
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Post Adı</label>
                                        <input type="text" name="name" class="form-control" required
                                            placeholder="Post adını yazınız" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Slug</label>
                                        <input type="text" name="slug" class="form-control" required
                                            placeholder="Post slug yazınız" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Başlık Açıklaması</label>
                                        <input type="text" name="title_description" class="form-control" required
                                            placeholder="Başlık açıklaması Yazınız" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Post Başlık Görseli</label>
                                        <input type="file" name="title_image" class="form-control"
                                            placeholder="Post başlık görseli ekleyiniz" />
                                    </div>

                                    <div class="mb-3">
                                        <label>Post Açıklaması</label>
                                        <div>
                                            <textarea name="description" id="descriptionV" tabindex="0" class="form-control d-none"></textarea>
                                        </div>

                                        <div class="postCreateWrapper my-3 h-100">
                                            <div class="templatesContainer tempLeft w-100 max-width-300px">
                                                <p style="font-weight: bold">Hazır Taslaklar</p>
                                                <div id="tempHP" draggable="true" editor="false" elements="hp"
                                                    class="selectableElement py-1">
                                                    <p class="tempTitle">heading</p>
                                                    <div class="skdefault"></div>
                                                    <div class="w-100">
                                                        <span class="tempTitle">p</span>
                                                        <span class="skeleton">
                                                            <div class="skdefault skfirst"></div>
                                                            <div class="skdefault"></div>
                                                            <div class="skdefault"></div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id="tempDHP" draggable="true" editor="false" elements="hpx2"
                                                    class="selectableElement d-flex py-1">
                                                    <div class="w-100 me-1">
                                                        <p class="tempTitle">heading</p>
                                                        <div class="skdefault"></div>
                                                        <div>
                                                            <span class="tempTitle">p</span>
                                                            <span class="skeleton">
                                                                <div class="skdefault skfirst"></div>
                                                                <div class="skdefault"></div>
                                                                <div class="skdefault"></div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 ms-1">
                                                        <p class="tempTitle">heading</p>
                                                        <div class="skdefault"></div>
                                                        <div>
                                                            <span class="tempTitle">p</span>
                                                            <span class="skeleton">
                                                                <div class="skdefault skfirst"></div>
                                                                <div class="skdefault"></div>
                                                                <div class="skdefault"></div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="tempHPIMG" draggable="true" editor="false" elements="hpimg"
                                                    class="selectableElement d-flex py-1">
                                                    <div class="w-100 me-1">
                                                        <p class="tempTitle">heading</p>
                                                        <div class="skdefault"></div>
                                                        <div>
                                                            <span class="tempTitle">p</span>
                                                            <span class="skeleton">
                                                                <div class="skdefault skfirst"></div>
                                                                <div class="skdefault"></div>
                                                                <div class="skdefault"></div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 ms-1">
                                                        <i class="ri-image-add-line  tempIcon "></i>

                                                    </div>
                                                </div>
                                                <div id="tempHPYOUTUBE" draggable="true" editor="false" elements="hpyoutube"
                                                    class="selectableElement d-flex py-1">
                                                    <div class="w-100 me-1">
                                                        <p class="tempTitle">heading</p>
                                                        <div class="skdefault"></div>
                                                        <div>
                                                            <span class="tempTitle">p</span>
                                                            <span class="skeleton">
                                                                <div class="skdefault skfirst"></div>
                                                                <div class="skdefault"></div>
                                                                <div class="skdefault"></div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="w-100 ms-1">

                                                        <i class="ri-youtube-line tempIcon "></i>
                                                    </div>
                                                </div>
                                                <div id="tempIMG" draggable="true" editor="false" elements="img"
                                                    class="selectableElement withIcon">

                                                    <i class="ri-image-add-line tempIcon"></i>
                                                    <span class="fs-5 fw-bold">Image</span>

                                                </div>
                                                <div id="tempYOUTUBE" draggable="true" editor="false" elements="youtube"
                                                    class="selectableElement withIcon">
                                                    <i class="ri-youtube-line tempIcon"></i>
                                                    <span class="fs-5 fw-bold">Youtube / Video</span>
                                                </div>
                                                <div id="tempBOOKING" draggable="true" editor="false" elements="booking"
                                                    class="selectableElement withIcon">
                                                    <i class="ri-price-tag-2-fill tempIcon"></i>
                                                    <span class="fs-5 fw-bold">Booking</span>
                                                </div>
                                                <div id="tempCONTACT" draggable="true" editor="false" elements="contact"
                                                    class="selectableElement withIcon">
                                                    <i class="ri-customer-service-2-fill tempIcon"></i>
                                                    <span class="fs-5 fw-bold">Contact</span>
                                                </div>

                                            </div>
                                            <div class="my-3">
                                                <div class="divider"></div>
                                            </div>
                                            <div id="templates" class="templatesContainer position-relative w-100 h-100">

                                                <div>
                                                    <span style="font-weight: bold">Eklenen Öğeler</span>
                                                </div>
                                                <div class="w-100 bg-dark" style="height: 2px"></div>
                                                <div class="w-100 dropbox"
                                                    defaultEls="{{ json_encode($defaultPostData) }}">
                                                    <i class="ri-loader-fill loader"></i>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input name="previewTemp" class="form-check-input" type="checkbox"
                                            id="formCheck2">
                                        <label class="form-check-label" for="formCheck2">
                                            Post Açıklaması Önizleme Göster
                                        </label>
                                    </div>
                                    <div class="previewTemp mb-3 d-none d-flex w-100 border rounded-1 flex-column">
                                        <p
                                            class="fs-3 fw-bold w-100 d-flex align-items-center justify-content-center mb-0">
                                            Gösterilecek bir şey yok.</p>
                                    </div>
                                    <h6>SEO Tags</h6>
                                    <br>
                                    <div class="mb-3">
                                        <label for="">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" required />
                                    </div>
                                    <div class="mb-3">
                                        <label>Meta Description</label>
                                        <div>
                                            <textarea name="meta_description" required class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input name="status" class="form-check-input" type="checkbox" id="formCheck1">
                                        <label class="form-check-label" for="formCheck1">
                                            Status
                                        </label>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Kaydet
                                            </button>
                                            <a href="{{ url('admin/post-list') }}" type="button"
                                                class="btn btn-secondary waves-effect">
                                                İptal
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-import')
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
@endsection
