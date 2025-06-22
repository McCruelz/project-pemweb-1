<?php
class AdminModel extends Model
{
     public function login($username, $password) {
        $sql = "SELECT * FROM users WHERE username = ? AND role = 'admin'";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return null;
    }
    
    function getOngoingPesanan()
    {
        $sql = "SELECT o.order_id, o.customer_name, o.order_time, t.table_number, o.status 
                FROM orders o
                JOIN tables t ON o.table_id = t.table_id
                WHERE o.status = 'ongoing'";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function getPesananById($id)
    {
        $sql = "SELECT o.order_id, o.customer_name, o.order_time, o.status, t.table_number
                FROM orders o
                JOIN tables t ON o.table_id = t.table_id
                WHERE o.order_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);  
        $stmt->execute();
        $result = $stmt->get_result();
        $order = $result->fetch_assoc();

        if ($order) {
            $sql_items = "SELECT oi.order_item_id, i.name AS item_name, oi.quantity, oi.subtotal
                        FROM order_items oi
                        JOIN items i ON oi.item_id = i.item_id
                        WHERE oi.order_id = ?";
            $stmt_items = $this->db->prepare($sql_items);
            $stmt_items->bind_param('i', $id);
            $stmt_items->execute();
            $result_items = $stmt_items->get_result();
            $items = $result_items->fetch_all(MYSQLI_ASSOC);

            $order['items'] = $items;

            $order['total'] = array_sum(array_column($items, 'subtotal'));
        }

        return $order;
    }

    function updateStatusPesanan($id, $status)
    {
        $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('si', $status, $id);
        return $stmt->execute();
    }

    function hapusPesanan($id)
    {
        $sql = "DELETE FROM order_items WHERE order_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);
        if (!$stmt->execute()) {
            return false;
        }

        $sql = "DELETE FROM orders WHERE order_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    function getRiwayatPesanan()
    {
        $sql = "SELECT o.order_id, o.customer_name, o.order_time, t.table_number, o.status
                FROM orders o
                JOIN tables t ON o.table_id = t.table_id
                WHERE o.status = 'completed'
                ORDER BY o.order_time DESC";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function getRiwayatPesananByFilter($filter)
    {
        $whereClause = "WHERE o.status = 'completed'";
        
        switch ($filter) {
            case '1day':
                $whereClause .= " AND o.order_time >= DATE_SUB(NOW(), INTERVAL 1 DAY)";
                break;
            case '1week':
                $whereClause .= " AND o.order_time >= DATE_SUB(NOW(), INTERVAL 1 WEEK)";
                break;
            case '1month':
                $whereClause .= " AND o.order_time >= DATE_SUB(NOW(), INTERVAL 1 MONTH)";
                break;
            case 'all':
            default:
                break;
        }

        $sql = "SELECT o.order_id, o.customer_name, o.order_time, t.table_number, o.status
                FROM orders o
                JOIN tables t ON o.table_id = t.table_id
                $whereClause
                ORDER BY o.order_time DESC";

        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function getAllCategories() {
        $sql = "SELECT * FROM categories";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    function getItems($category_id) {
        $sql = "SELECT * FROM items where category_id = '$category_id'";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    function getDetailItem($item_id) {
        $sql = "SELECT * FROM items where item_id = '$item_id'";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
    
    function updateStock($stock, $item_id) {
        $sql = "UPDATE items SET stock = '$stock' " 
        . "WHERE item_id = '$item_id'";
        return $this->db->query($sql);
    }

    function searchKategori($keyword) {
        $sql = "SELECT * FROM categories WHERE name LIKE '%$keyword%'";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function getRiwayatPesananById($id)
    {
        return $this->getPesananById($id);
    }
}