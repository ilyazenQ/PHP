<?php

namespace App\Models;

class Order extends Model
{

    public function getAllOrders() {

        $query = 'SELECT `employees`.`company`,`ship_name`,`ship_city`,`product_name`,`quantity`,`unit_price` FROM `orders`
                  JOIN `employees` ON `employees`.`id` = `orders`.`employee_id`
                  JOIN `customers` ON `customers`.`id` = `orders`.`customer_id`
                  JOIN 
                        (
                        SELECT `products`.`product_name`,`quantity`,`unit_price`,`order_details`.`id` as `id_t` from `order_details`
                        JOIN `products` on `products`.`id` = `order_details`.`product_id`
                        ) as `x` on `x`.`id_t` = `orders`.`id`';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();

    }
    public function getSearchOrders(string $productName) {

        ///переделать
        $query = 'SELECT `employees`.`company`,`ship_name`,`ship_city`,`product_name`,`quantity`,`unit_price` FROM `orders`
                  JOIN `employees` ON `employees`.`id` = `orders`.`employee_id`
                  JOIN `customers` ON `customers`.`id` = `orders`.`customer_id`
                  JOIN 
                        (
                        SELECT `products`.`product_name`,`quantity`,`unit_price`,`order_details`.`id` as `id_t` from `order_details`
                        JOIN `products` on `products`.`id` = `order_details`.`product_id`
                        ) as `x` on `x`.`id_t` = `orders`.`id`
                    WHERE `product_name` LIKE'."'%$productName%'";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

}