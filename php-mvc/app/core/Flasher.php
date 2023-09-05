<?php

class Flasher
{
    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' d-flex justify-content-between" role="alert" style="width: auto;">
            <div>Data siswa  <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '</div>
            <button type="button" class="btn btn-close" data-dismiss="alert" aria-label="close" aria-hidden="true">
            </button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
}
