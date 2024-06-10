<?php
$create = $data['subpage'] == 'create'; ?>

<div class="container" style="margin-top: 1rem; margin-bottom: 5rem">
    <form action="<?= BASE_URL ?>/a/user/<?php if ($create):
          echo 'store';
      else:
          echo 'update/' . $data['user']['id'];
      endif; ?>" method="post">
        <div class="input-group">
            <label for="name">Email :</label>
            <input type="email" name="email" id="email" required placeholder="Cth: afrizal@stis.ac.id" <?php if (isset($data['user'])):
                echo 'value="' . $data['user']['email'] . '"';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Nama Lengkap :</label>
            <input type="text" name="name" id="name" required placeholder="Cth: Muh. Nur Afrizal" <?php if (
                isset($data['user'])
            ):
                echo 'value="' . $data['user']['name'] . '"';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Password :</label>
            <?php if (!$create) : ?>
            <p style="color: red">*Kosongi jika tidak ingin merubah password</p>
            <?php endif; ?>
            <input type="password" name="password" id="password" <?php if (
                $create
            ):
                echo 'required';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Konfirmasi Password :</label>
            <?php if (!$create) : ?>
            <p style="color: red">*Kosongi jika tidak ingin merubah password</p>
            <?php endif; ?>
            <input type="password" name="confirm_password" id="confirm_password" <?php if (
                $create
            ):
                echo 'required';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">No. HP :</label>
            <input type="number" name="phone" id="phone" required placeholder="Cth: 08231234567" <?php if (
                isset($data['user'])
            ):
                echo 'value="' . $data['user']['phone'] . '"';
            endif; ?>>
        </div>
        <div class="input-group">
            <label for="name">Hak Akses :</label>
            <select required name="role" id="role">
                <option <?php if (isset($data['user'])):
                        echo $data['user']['role'] == 'USER'
                            ? 'selected'
                            : '';
                    else :
                        echo 'selected';
                    endif; ?> value="USER">
                    USER
                </option>
                <option <?php if (isset($data['user'])):
                        echo $data['user']['role'] == 'ADMIN'
                            ? 'selected'
                            : '';
                    endif; ?> value="ADMIN">
                    ADMIN
                </option>
                <option <?php if (isset($data['user'])):
                        echo $data['user']['role'] == 'CANTEEN'
                            ? 'selected'
                            : '';
                    endif; ?> value="CANTEEN">
                    KANTIN
                </option>
            </select>
        </div>
        <div>
            <input type="submit" class="btn" id="button" value="Tambah" />
        </div>
    </form>
</div>