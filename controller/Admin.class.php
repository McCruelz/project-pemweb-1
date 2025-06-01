<?php
class Admin extends Controller
{

    function ongoing()
    {
        $model = $this->loadModel('AdminModel');
        $ongoingPesanan = $model->getOngoingPesanan();
        $this->loadView('ongoing.php', ['pesanan' => $ongoingPesanan]);
    }

    function pesanan()
    {
        $id = $_GET['id'];
        if (!$id) echo "Invalid ID";
        $model = $this->loadModel('AdminModel');
        $detailPesanan = $model->getPesananById($id);
        $this->loadView('pesanan.php', ['pesanan' => $detailPesanan]);
    }

    function riwayat()
    {
        $model = $this->loadModel('AdminModel');
        $riwayatPesanan = $model->getRiwayatPesanan();
        $this->loadView('riwayat.php', ['pesanan' => $riwayatPesanan]);
    }

    function riwayatPesanan()
    {
        $id = $_GET['id'];
        if (!$id) echo "Invalid ID";
        $model = $this->loadModel('AdminModel');
        $detailRiwayat = $model->getPesananById($id);
        $this->loadView('riwayat-pesanan.php', ['pesanan' => $detailRiwayat]);
    }
}
