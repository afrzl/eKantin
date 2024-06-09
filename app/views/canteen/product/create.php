<?php
$create = $data['subpage'] == 'create'; ?>

<div class="container" style="margin-top: 1rem; margin-bottom: 5rem">
    <form action="<?= BASE_URL ?>/c/product/<?php if ($create):
          echo 'store';
      else:
          echo 'update/' . $data['product']['id'];
      endif; ?>" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label for="name">Nama Produk :</label>
            <input type="text" name="name" onkeyup="nameToSlug(this, 'slug')" id="name" required
                placeholder="Cth: Ayam Geprek" <?php if (!$create):
                    echo 'value="' . $data['product']['name'] . '"';
                endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Slug :</label>
            <input type="text" name="slug" id="slug" required placeholder="Cth: ayam-geprek" <?php if (
                !$create
            ):
                echo 'value="' . $data['product']['slug'] . '"';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Category :</label>
            <select required name="category_id" id="">
                <option value="">-- Pilih Kategori --</option>
                <?php foreach ($data['categories'] as $category) { ?>
                    <option <?php if (!$create):
                        echo $data['product']['category_id'] == $category['id']
                            ? 'selected'
                            : '';
                    endif; ?> value="<?= $category['id'] ?>">
                        <?= $category['name'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="input-group">
            <label for="name">Deskripsi :</label>
            <textarea name="description" required id=""><?php if (!$create):
                echo $data['product']['description'];
            endif; ?></textarea>
        </div>
        <div class="input-group">
            <label for="name">Gambar :</label>
            <?php if (!$create):
                echo '<img style="width: 20%" src="' . ASSETS . '/images/products/' . $data['product']['image'] . '" alt="">';
                echo '<span style="color: red">*Upload ulang gambar jika ingin merubah</span>';
            endif; ?>
            <input type="file" <?= $create ? 'required' : '' ?> name="image">
        </div>
        <div class="input-group">
            <label for="name">Harga :</label>
            <input type="number" name="price" <?php if (!$create):
                echo 'value="' . $data['product']['price'] . '"';
            endif; ?> required placeholder="Cth: Rp10.000">
        </div>
        <div class="input-group">
            <label for="name">Stok :</label>
            <input type="number" name="stock" <?php if (!$create):
                echo 'value="' . $data['product']['stock'] . '"';
            endif; ?> required placeholder="Cth: 10">
        </div>
        <div>
            <input type="submit" class="btn" id="button" value="Tambah" />
        </div>
    </form>
</div>