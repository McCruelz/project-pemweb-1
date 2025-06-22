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

    function kategori() {
        $model = $this->loadModel('AdminModel');
        $data = $model->getAllCategories();
        $this->loadView('kategori.php', ['categories' => $data]);
    }

    function list() {
        $category_id = $_GET['category_id'] ?? null;
        $model = $this->loadModel('AdminModel');
        $data = $model->getItems($category_id);
        $categories = $model->getAllCategories();
        $this->loadView('list.php', ['items' => $data, 'categories' => $categories]);
    }

    function detail() {
        $item_id = $_GET['item_id'] ?? null;
        $model = $this->loadModel('AdminModel');
        $items = $model->getDetailItem($item_id);
        $this->loadView('detail.php', ['items' => $items]);
    }

    function edit() {
        $item_id = $_GET['item_id'] ?? null;
        $model = $this->loadModel('AdminModel');
        $items = $model->getDetailItem($item_id);
        $this->loadView('edit.php', ['items' => $items]);
    }

    function update() {
        $item_id = $_POST['item_id'];
        $stock = $_POST['stock'];
        $model = $this->loadModel('AdminModel');
        $result = $model -> updateStock($stock, $item_id);
        if ($result) {
            header("location: index.php?c=AppController&m=detail&item_id=$item_id&updated=1");
        } else {
            header("location: index.php?c=AppController&m=detail&item_id=$item_id&error=0");
        }
        exit;
    }

    function searchKategori() {
        $keyword = $_GET['search_kategori'] ?? '';
        $model = $this->loadModel('AdminModel');
        $data = $model->searchKategori($keyword);
        $this->loadView('kategori.php', ['categories' => $data]);
    }

    public function logout() {
        session_unset();
        
        session_destroy();
        
        header("Location: index.php?c=Admin&m=login");
        exit();
    }
}