<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<!-- Load TinyMCE lokal -->
<script src="<?= base_url('assets/tinymce/tinymce.min.js') ?>"></script>

<!-- Inisialisasi TinyMCE -->
<script src="<?= base_url('assets/tinymce/tinymce.min.js') ?>"></script>
<script>
    tinymce.init({
        selector: '#content',
        height: 400,
        menubar: false,
        plugins: 'lists link image code paste',
        toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image | code',
        branding: false,
        paste_as_text: true,
        content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",

        // Untuk upload gambar secara base64
        images_upload_url: false,
        automatic_uploads: true,
        images_upload_handler: function (blobInfo, success, failure) {
            success("data:" + blobInfo.blob().type + ";base64," + blobInfo.base64());
        }
    });
</script>


<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <h4 class="mb-4">Tulis Berita Baru</h4>

        <form action="" method="post" id="text-editor">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" name="title" id="title" class="form-control rounded-3" 
                       placeholder="Judul berita" required>
            </div>

            <div class="mb-4">
                <label for="content" class="form-label">Isi Berita</label>
                <textarea name="content" id="content" class="form-control rounded-3" 
                          rows="10" placeholder="Tulis berita yang menarik..."></textarea>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" name="status" value="published" class="btn btn-primary px-4">
                    <i class="bi bi-upload"></i> Publish
                </button>
                <button type="submit" name="status" value="draft" class="btn btn-outline-secondary px-4">
                    <i class="bi bi-save"></i> Simpan Draft
                </button>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
