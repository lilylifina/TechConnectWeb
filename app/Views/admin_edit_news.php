<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-4">
        <h4 class="mb-4">Edit Berita</h4>

        <form action="" method="post" id="text-editor">
            <input type="hidden" name="id" value="<?= $news['id'] ?>" />

            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" name="title" id="title" class="form-control rounded-3" 
                    placeholder="Judul berita" value="<?= $news['title'] ?>" required>
            </div>

            <div class="mb-4">
                <label for="content" class="form-label">Isi Berita</label>
                <textarea name="content" id="content" class="form-control rounded-3" 
                    rows="10" placeholder="Tulis berita yang menarik..."><?= $news['content'] ?></textarea>
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
