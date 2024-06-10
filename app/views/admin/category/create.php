<?php
$create = $data['subpage'] == 'create'; ?>

<div class="container" style="margin-top: 1rem; margin-bottom: 5rem">
    <form action="<?= BASE_URL ?>/a/category/<?php if ($create):
          echo 'store';
      else:
          echo 'update/' . $data['category']['id'];
      endif; ?>" method="post">
        <div class="input-group">
            <label for="name">Nama Kategori :</label>
            <input type="text" name="name" id="name" onkeyup="nameToSlug(this, 'slug')"
                placeholder="Cth: Makanan Ringan" <?php if (isset($data['category'])):
                echo 'value="' . $data['category']['name'] . '"';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="slug">Slug :</label>
            <input type="text" name="slug" id="slug" placeholder="Cth: makanan-ringan" <?php if (
                isset($data['category'])
            ):
                echo 'value="' . $data['category']['slug'] . '"';
            endif; ?>>
        </div>
        <div>
            <input type="submit" class="btn" id="button" value="Tambah" />
        </div>
    </form>
</div>