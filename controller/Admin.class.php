<?php
class Admin extends Controller
{

    function ongoing()
    {
        $model = $this->loadModel('AdminModel');
        $ongoingPesanan = $model->getOngoingPesanan();
        $this->loadView('ongoing.php', ['pesanan' => $ongoingPesanan]);
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $model = $this->loadModel('AdminModel');

            $user = $model->login($username, $password);
            
            if ($user) {
                $_SESSION['admin_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                header("Location: index.php?c=Admin&m=ongoing");
            } else {
                $error = "Username atau password salah.";
                include 'view/login.php'; 
            }
        } else {
            include 'view/login.php'; 
        }
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

    function getRiwayatFiltered()
    {
        $filter = $_GET['filter'] ?? 'all';
        $model = $this->loadModel('AdminModel');
        $riwayatPesanan = $model->getRiwayatPesananByFilter($filter);
        
        header('Content-Type: application/json');
        echo json_encode($riwayatPesanan);
        exit;
    }

    function konfirmasiSelesai()
    {
        $id = $_GET['id'];
        if (!$id) echo "Invalid ID";

        $model = $this->loadModel('AdminModel');
        $result = $model->updateStatusPesanan($id, 'completed');

        if ($result) {
            echo "Pesanan selesai!";
            header("Location: index.php?c=Admin&m=riwayat");
        } else {
            echo "Terjadi kesalahan saat mengubah status pesanan.";
        }
    }

    function hapusPesanan()
    {
        $id = $_GET['id'];
        if (!$id) echo "Invalid ID";

        $model = $this->loadModel('AdminModel');
        $result = $model->hapusPesanan($id);

        if ($result) {
            echo "Pesanan berhasil dihapus!";
            header("Location: index.php?c=Admin&m=riwayat");
        } else {
            echo "Terjadi kesalahan saat menghapus pesanan.";
        }
    }

    public function logout() {
        session_unset();
        
        session_destroy();
        
        header("Location: index.php?c=Admin&m=login");
        exit();
    }
}