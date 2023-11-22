/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
    // Diğer yapılandırmalar...

    // İzin verilen resim türleri (Görsel Ekleme ve Dosya Tarayıcı)
    config.filebrowserImageAllowedTypes = ['jpeg', 'jpg', 'png', 'gif', 'webp'];
    config.fileAllowedTypes = 'jpeg,jpg,png,gif,webp';
    config.uploadImage_supportedTypes = /image\/(webp|jpeg)/;
    // Eklentinin kendisine özgü yapılandırma ayarlarını da burada belirtebilirsiniz.
    

    // Diğer yapılandırmalar devam edebilir...
};

