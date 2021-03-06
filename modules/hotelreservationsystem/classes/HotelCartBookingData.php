<?php
/**
* 2010-2018 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through this link for complete license : https://store.webkul.com/license.html
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
*
*  @author    Webkul IN <support@webkul.com>
*  @copyright 2010-2018 Webkul IN
*  @license   https://store.webkul.com/license.html
*/

class HotelCartBookingData extends ObjectModel
{
    public $id;
    public $id_cart;
    public $id_guest;
    public $id_order;
    public $id_customer;
    public $id_currency;
    public $id_product;
    public $id_room;
    public $id_hotel;
    public $quantity;
    public $booking_type;
    public $comment;
    public $is_refunded;
    public $is_back_order;
    public $date_from;
    public $date_to;
    public $extra_demands;
    public $date_add;
    public $date_upd;

    public static $definition = array(
        'table' => 'htl_cart_booking_data',
        'primary' => 'id',
        'fields' => array(
            'id_cart' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_guest' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_room' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'id_hotel' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'booking_type' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'comment' => array('type' => self::TYPE_STRING),
            'is_refunded' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'is_back_order' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'date_from' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_to' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'extra_demands' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );

    /**
     * [getCountRoomsInCart :: To get How much number of the rooms available in the cart of a customer or guest].
     *
     * @param [int] $id_cart [Id of the cart]
     * @param [int] $guest   [Guest Id of the customer]
     *
     * @return [int|boolean] [Returns number of the rooms available in the cart of a customer or guest if no rooms available returns 0]
     */
    public function getCountRoomsInCart($id_cart, $guest)
    {
        $sql = 'SELECT Count(`id`) FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart` = '.$id_cart.' AND `id_guest` = '.$guest.' AND `id_order` = 0';
        $count_rooms = Db::getInstance()->getValue($sql);

        if ($count_rooms) {
            return $count_rooms;
        } else {
            return 0;
        }
    }

    /**
     * [getCartBookingDetailsByIdCartIdGuest :: To get Booking data from table by id cart and id guest of the customer].
     *
     * @param [int] $id_cart  [Id of the cart which booking information you want to get]
     * @param [int] $id_guest [Id guest of the customer]
     *
     * @return [array|false] [If required information found then returns the array of the information else returns false]
     */
    public function getCartBookingDetailsByIdCartIdGuest($id_cart, $id_guest, $id_lang)
    {
        $sql = 'SELECT cbd.id AS id_cart_book_data, cbd.id_cart, cbd.id_guest, cbd.id_product, cbd.id_room, cbd.id_hotel, cbd.quantity, cbd.date_from, cbd.date_to, ri.room_num, pl.name AS room_type
                FROM `'._DB_PREFIX_.'htl_cart_booking_data` AS cbd
                INNER JOIN `'._DB_PREFIX_.'htl_room_information` AS ri ON (cbd.id_room = ri.id)
                INNER JOIN `'._DB_PREFIX_.'product_lang` AS pl ON (cbd.id_product = pl.id_product AND pl.`id_lang`='.$id_lang.')
                WHERE cbd.id_cart = '.$id_cart.' AND cbd.id_guest = '.$id_guest;
        $cart_book_data = Db::getInstance()->executeS($sql);

        if ($cart_book_data) {
            foreach ($cart_book_data as $key => $value) {
                // By webkul New way to calculate product prices with feature Prices
                $roomTypeDateRangePrice = HotelRoomTypeFeaturePricing::getRoomTypeTotalPrice($value['id_product'], $value['date_from'], $value['date_to']);
                $cart_book_data[$key]['amt_with_qty'] = $roomTypeDateRangePrice['total_price_tax_excl'];
            }

            return $cart_book_data;
        } else {
            return false;
        }
    }

    /**
     * [getOnlyCartBookingData description].
     *
     * @param [type] $id_cart     [description]
     * @param [type] $id_guest    [description]
     * @param [type] $id_product  [description]
     * @param int    $id_customer [description]
     *
     * @return [type] [description]
     */
    public function getOnlyCartBookingData($id_cart, $id_guest, $id_product, $id_customer = 0)
    {
        $sql = 'SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart` = '.$id_cart.' AND `id_product` = '.$id_product;

        if ($id_customer) {
            $sql .=  ' AND `id_customer` = '.$id_customer;
        }

        $cart_book_data = Db::getInstance()->executeS($sql);

        if ($cart_book_data) {
            return $cart_book_data;
        } else {
            return false;
        }
    }

    /**
     * [getCountRoomsByIdCartIdProduct :: To get Number of rooms for a date range(From $date_from TO $date_to) in a cart(which cat cart id is $id_cart) belongs to the same room type(product)].
     *
     * @param [int]  $id_cart    [Id of the cart]
     * @param [int]  $id_product [Id of the product]
     * @param [date] $date_from  [Start date of the booking]
     * @param [date] $date_to    [End date of the booking]
     *
     * @return [int|false] [If data found Returns the number for a date range(From $date_from TO $date_to) in a cart(which cat 			cart id is $id_cart) belongs to a room type(product) else returns false]
     */
    public function getCountRoomsByIdCartIdProduct($id_cart, $id_product, $date_from, $date_to)
    {
        $sql = 'SELECT Count(`id`) FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart` = '.$id_cart.' AND `id_product` = '.$id_product." AND `date_from` <= '$date_from' AND `date_to` >= '$date_to'";

        $count_rooms = Db::getInstance()->getValue($sql);

        if ($count_rooms) {
            return $count_rooms;
        } else {
            return false;
        }
    }

    /**
     * Deprecated
     * [deleteRowById :: To delete Row from the table by its id(primary key)].
     *
     * @param [int] $id [Id(primary key) of the table which row has to be deleted]
     *
     * @return [type] [Returns true if deleted successfully else returns false]
     */
    public function deleteRowById($id)
    {
        $delete = Db::getInstance()->delete('htl_cart_booking_data', '`id`='.(int) $id);

        return $delete;
    }

    /**
     * [getCartCurrentDataByCartId :: To get booking information of the cart by cart id].
     *
     * @param [int] $cart_id [Id of the cart]
     *
     * @return [array|false] [If data found Returns the array containing the information of the cart of the passed cart id else returns false]
     */
    public function getCartCurrentDataByCartId($cart_id)
    {
        $result = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.$cart_id);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * [getCartCurrentDataByCartId :: To get booking information of the cart by Order id].
     *
     * @param [int] $id_order [Id of the order]
     *
     * @return [array|false] [If data found Returns the array containing the information of the cart of the passed order id else returns false]
     */
    public function getCartCurrentDataByOrderId($id_order)
    {
        $result = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_order`='.$id_order);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /*public function deleteRowHotelCustomerCartDetail($id)
    {
        $deleted = Db::getInstance()->delete('htl_cart_booking_data','id='.$id);
        if ($deleted)
            return true;
        return false;
    }

    public function deleteCartDataById($id)
    {
        $deleted = Db::getInstance()->delete('htl_cart_booking_data','id='.$id);
        if ($deleted)
            return true;
        return false;
    }*/

    /**
     * [changeProductDataByRoomId :: To delete the room from the cart when added from the admin side to the cart and update the 								quantity of the product in prestashop cart table].
     *
     * @param [int] $roomid     [Id of the room]
     * @param [int] $id_product [Id of the room type(product)]
     * @param [int] $days_diff  [Number of days between start date and end date of the booking]
     * @param [int] $cart_id    [Id of the cart which products information has to be changed]
     *
     * @return [boolean] [If cart updated with quantity successfully returns true else returns false]
     */
    public function changeProductDataByRoomId($roomid, $id_product, $days_diff, $cart_id)
    {
        $deleted = Db::getInstance()->delete('htl_cart_booking_data', '`id_room` = '.(int) $roomid.' AND `id_cart` = '.(int) $cart_id);

        $cart_product_quantity = Db::getInstance()->getValue('SELECT `quantity` FROM `'._DB_PREFIX_.'cart_product` WHERE `id_cart`='.$cart_id.' AND `id_product`='.$id_product);

        $new_quantity = $cart_product_quantity - $days_diff;

        if ($new_quantity > 0) {
            $update_quantity = Db::getInstance()->update('cart_product', array('quantity' => $new_quantity), '`id_cart`='.$cart_id.' AND `id_product`='.$id_product);
            if ($update_quantity) {
                return true;
            }

            return false;
        } else {
            $delete_product = Db::getInstance()->delete('cart_product', '`id_cart`='.$cart_id.' AND `id_product`='.$id_product);
            if ($delete_product) {
                return true;
            }

            return false;
        }
    }

    /**
     * delete rooms from the cart
     * @param integer $idCart
     * @param integer $idProduct
     * @param integer $idRoom
     * @param integer $dateFrom
     * @param integer $dateTo
     * @param integer $updPsCart
     * @return [number of rooms deleted]
     */
    public function deleteCartBookingData(
        $idCart = 0,
        $idProduct = 0,
        $idRoom = 0,
        $dateFrom = 0,
        $dateTo = 0,
        $updPsCart = 1
    ) {
        $where = '1';
        if ($idCart) {
            $where .= ' AND `id_cart`='.(int) $idCart;
        }
        if ($idProduct) {
            $where .= ' AND `id_product`='.(int) $idProduct;
        }
        if ($idRoom) {
            $where .= ' AND `id_room`='.(int) $idRoom;
        }
        if ($dateFrom) {
            $where .= ' AND `date_from`=\''.pSQL($dateFrom).'\'';
        }
        if ($dateTo) {
            $where .= ' AND `date_to`=\''.pSQL($dateTo).'\'';
        }
        // we have to delete only rows which order is not created
        $where .= ' AND `id_order`= 0';
        // If rooms is deleting from cart the we need to delete the ps_cart quantity of the product from table
        // if product will delete the prestashop will handle
        $numRooms = 0;
        if ($cartBookingInfo = Db::getInstance()->executeS(
            'SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE '.$where
        )) {
            $numRooms = count($cartBookingInfo);
            if ($updPsCart) {
                $objBookingDetail = new HotelBookingDetail();
                $controllerType = Context::getContext()->controller->controller_type;
                foreach ($cartBookingInfo as $bookingRow) {
                    $idPsCart = $bookingRow['id_cart'];
                    $idPsProduct = $bookingRow['id_product'];
                    $objCart = new Cart($idPsCart);
                    $updQty = $objBookingDetail->getNumberOfDays($bookingRow['date_from'], $bookingRow['date_to']);
                    // if room type is deleting from admin then reduce product cart quantity by updating directly table
                    if ($controllerType == 'admin' || $controllerType == 'moduleadmin') {
                        if ($cartQty = Cart::getProductQtyInCart($idPsCart, $idPsProduct)) {
                            //if room type has qty remaining in cart the then update ($cartQty - $updQty)
                            if ($updQty < $cartQty) {
                                Db::getInstance()->update(
                                    'cart_product',
                                    array('quantity' => (int)($cartQty - $updQty)),
                                    '`id_product` = '.(int)$idPsProduct.' AND `id_cart` = '.(int)$idPsCart
                                );
                            } else {
                                //if room type has no qty remaining in cart then delete row
                                Db::getInstance()->delete(
                                    'cart_product',
                                    '`id_product` = '.(int)$idPsProduct.' AND `id_cart` = '.(int)$idPsCart
                                );
                            }
                        }
                    } else {
                        // if room type is deleting from front then reduce product cart qty by $objCart->updateQty()
                        $objCart->updateQty(
                            $updQty,
                            $idPsProduct,
                            null,
                            false,
                            'down',
                            0,
                            null,
                            true
                        );
                    }
                }
            }
            // delete rows from table
            if (!Db::getInstance()->delete('htl_cart_booking_data', $where)) {
                return false;
            }
        }
        // return number of rooms deleted
        return true;
    }

    /**
     * [checkExistanceOfRoomInCurrentCart :: To check Whether a room for a date range(which start date is $date_from and End date 									is $date_to) in current cart is already exists for a customer whose guest id is $id_guest].
     *
     * @param [int]  $id_room   [Id of the room]
     * @param [date] $date_from [Start date of the booking]
     * @param [date] $date_to   [End date of the booking]
     * @param [int]  $id_cart   [Id of the cart]
     * @param [int]  $id_guest  [Customer's guest Id]
     *
     * @return [int|false] [If room already exists in the cart then returns id of the row in the table where entry for this *								room is located else returns false]
     */
    public function checkExistanceOfRoomInCurrentCart($id_room, $date_from, $date_to, $id_cart, $id_guest)
    {
        $result = Db::getInstance()->getValue('SELECT id FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_room`='.$id_room." AND `date_from`='$date_from' AND `date_to`='$date_to' AND `id_cart`=".$id_cart.' AND `id_guest`='.$id_guest);

        if ($result) {
            return $result;
        }

        return false;
    }

    /**
     * [deleteCartDataByIdProductIdCart ::  To delete room from the cart(which cart id is passed) which belong to the room type(									product)(which product id is passed) and booked for the date range(hich start date is 										$date_from and end date is $date_to)].
     *
     * @param [int]  $id_cart    [Id of the cart]
     * @param [int]  $id_product [Id of the product]
     * @param [date] $date_from  [Start date of the booking]
     * @param [date] $date_to    [End date og=f the booking]
     *
     * @return [boolean] [Returns true if deleted successfully else returns false]
     */
    public function deleteCartDataByIdProductIdCart($id_cart, $id_product, $date_from, $date_to)
    {
        $result = Db::getInstance()->delete('htl_cart_booking_data', '`id_cart`='.$id_cart.' AND `id_product`='.$id_product." AND `date_from` = '$date_from' AND `date_to` = '$date_to'");
        if ($result) {
            return true;
        }

        return false;
    }

    /**
     * [deleteRoomDataFromOrderLine :: To delete room from the order line when customer deletes the room from the order line for a 										date range (which start date is $date_from and End date is $date_to) in current cart].
     *
     * @param [int]  $id_cart    [Id of the cart]
     * @param [int]  $id_guest   [Customer's guest Id]
     * @param [int]  $id_product [Id of the product]
     * @param [date] $date_from  [Start date of the booking]
     * @param [date] $date_to    [End date of the booking]
     *
     * @return [boolean] [Returns true if deleted successfully else returns false]
     */
    public function deleteRoomDataFromOrderLine($id_cart, $id_guest, $id_product, $date_from, $date_to)
    {
        $result = Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.$id_cart.' AND `id_guest`='.$id_guest.' AND `id_product`='.$id_product." AND `date_from`= '$date_from' AND `date_to`= '$date_to'");

        $num_rm = Db::getInstance()->NumRows();

        $obj_htl_bk_dtl = new HotelBookingDetail();
        $num_days = $obj_htl_bk_dtl->getNumberOfDays($date_from, $date_to);

        $qty = (int) $num_rm * (int) $num_days;
        if ($qty) {
            $this->context = Context::getContext();
            $update_quantity = $this->context->cart->updateQty($qty, $id_product, null, false, 'down');

            $delete_rooms = Db::getInstance()->delete('htl_cart_booking_data', '`id_cart`='.$id_cart.' AND `id_guest`='.$id_guest.' AND `id_product`='.$id_product." AND `date_from`= '$date_from' AND `date_to`= '$date_to'");
            if ($delete_rooms) {
                return true;
            }

            return false;
        } else {
            return false;
        }
    }

    /**
     * [deleteBookingCartDataNotOrderedByProductId :: To delete the data of the rooms booking from the table Which rooms were 														added to the cart but Not Ordered By there room type(product id)].
     *
     * @param [int] $id_product [Id of the product(room type)]
     *
     * @return [boolean] [If deleted successfully returns true else returns false]
     */
    public function deleteBookingCartDataNotOrderedByProductId($id_product)
    {
        return Db::getInstance()->delete(
            'htl_cart_booking_data',
            '`id_product`='.(int) $id_product.' AND `id_order`= 0'
        );
    }

    /**
     * [updateOrderRefundStatus :: To update the refund status of a room booked in the Cart(htl_cart_booking_data) if amount 									refunded by the admin].
     *
     * @param [int]  $id_cart   [Id of the Cart]
     * @param [date] $date_from [start date of the bookin of the room]
     * @param [date] $date_to   [end date of the bookin of the room]
     * @param [int]  $id_room   [id of the room for which refund is done]
     *
     * @return [boolean] [true if updated otherwise false]
     */
    public function updateOrderRefundStatus($id_cart, $date_from, $date_to, $id_rooms)
    {
        $table = 'htl_cart_booking_data';
        $data = array('is_refunded' => 1);

        foreach ($id_rooms as $key_rm => $val_rm) {
            $where = '`id_cart` = '.$id_cart.' AND `id_room` = '.$val_rm['id_room']." AND `date_from` = '$date_from' AND `date_to` = '$date_to'";
            $result = Db::getInstance()->update($table, $data, $where);
        }

        if ($result) {
            return $result;
        }

        return false;
    }

    /**
     * [getCustomerIdRoomsByIdCartIdProduct :: To get array of rooms ids in the cart booked by a customer for a date range].
     *
     * @param [int]  $id_cart    [Id of the cart]
     * @param [int]  $id_product [Id of the product]
     * @param [date] $date_from  [Start date of the booking]
     * @param [date] $date_to    [End date of the booking]
     *
     * @return [array|false] [If rooms found returns array containing rooms ids else returns false]
     */
    public function getCustomerIdRoomsByIdCartIdProduct($id_cart, $id_product, $date_from, $date_to)
    {
        $rooms_ids = Db::getInstance()->executeS('SELECT `id_room` FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.$id_cart.' AND `id_product`='.$id_product." AND `date_from`='$date_from' AND `date_to`='$date_to'");
        if ($rooms_ids) {
            return $rooms_ids;
        }

        return false;
    }

    /**
     * [deleteRowByCartBookingData : To delete data from the table by given conditions(conditions array in argument)].
     *
     * @param [Array] $cartData [array of the conditions on which row is to be deleted]
     *
     * @return [boolean] [Returns true if successfully updated else returns false]
     */
    public function deleteRowByCartBookingData($cartData)
    {
        if (!is_array($cartData)) {
            return false;
        }

        $dltdata = false;

        $stringArr = array('date_from', 'date_to');

        foreach ($cartData as $c_key => $c_val) {
            if ($dltdata) {
                $dltdata .= ' AND ';
            }

            if (in_array($c_key, $stringArr)) {
                $dltdata .= $c_key."= '$c_val'";
            } else {
                $dltdata .= $c_key.' = '.$c_val;
            }
        }
        $delete = Db::getInstance()->delete('htl_cart_booking_data', $dltdata);

        return $delete;
    }

    /**
     * [updateCartBookingData : To update data in the table with given data and conditions].
     *
     * @param [Array] $updData [array of the data to be updated]
     * @param [Array] $updBy   [Conditions array will be used in where condition]
     *
     * @return [boolean] [Returns true if successfully updated else returns false]
     */
    public function updateCartBookingData($updData, $updBy)
    {
        if (!is_array($updData) && !is_array($updBy)) {
            return false;
        }

        $where = false;
        $stringArr = array('date_from', 'date_to');
        foreach ($updBy as $u_key => $u_val) {
            if ($where) {
                $where .= ' AND ';
            }

            if (in_array($u_key, $stringArr)) {
                $where .= $u_key."= '$u_val'";
            } else {
                $where .= $u_key.' = '.$u_val;
            }
        }
        $update = Db::getInstance()->update('htl_cart_booking_data', $updData, $where);

        return $update;
    }

    /**
     * [getCartFormatedBookinInfoByIdCart : To get cart booking information with some additional information in a custom famated way].
     *
     * @param [Int] $id_cart [Id of the cart]
     *
     * @return [Array|false] [If data found returns cart booking information with some additional information else returns false]
     */
    public function getCartFormatedBookinInfoByIdCart($id_cart)
    {
        $context = Context::getContext();
        $cart_detail_data = $this->getCartCurrentDataByCartId((int) $id_cart);
        if ($cart_detail_data) {
            foreach ($cart_detail_data as $key => $value) {
                $product_image_id = Product::getCover($value['id_product']);

                $productObj = new Product((int) $value['id_product'], false, (int) Configuration::get('PS_LANG_DEFAULT'));

                $link_rewrite = $productObj->link_rewrite;

                if ($product_image_id) {
                    $cart_detail_data[$key]['image_link'] = $context->link->getImageLink($link_rewrite, $product_image_id['id_image'], 'small_default');
                } else {
                    $cart_detail_data[$key]['image_link'] = $context->link->getImageLink($link_rewrite, $context->language->iso_code.'-default', 'small_default');
                }

                $cart_detail_data[$key]['room_type'] = $productObj->name;
                $obj_htl_room_info = new HotelRoomInformation((int) $value['id_room']);
                $cart_detail_data[$key]['room_num'] = $obj_htl_room_info->room_num;
                $cart_detail_data[$key]['date_from'] = $value['date_from'];
                $cart_detail_data[$key]['date_to'] = $value['date_to'];

                $unit_price = Product::getPriceStatic($value['id_product'], true);
                $productPriceWithoutReduction = $productObj->getPriceWithoutReduct(false);
                $feature_price = HotelRoomTypeFeaturePricing::getRoomTypeFeaturePricesPerDay($value['id_product'], $value['date_from'], $value['date_to'], true);
                $feature_price_diff = (float)($productPriceWithoutReduction - $feature_price);
                $cart_detail_data[$key]['product_price'] = $unit_price;
                $cart_detail_data[$key]['feature_price'] = $feature_price;
                $cart_detail_data[$key]['feature_price_diff'] = $feature_price_diff;

                // By webkul New way to calculate product prices with feature Prices
                $roomTypeDateRangePrice = HotelRoomTypeFeaturePricing::getRoomTypeTotalPrice($value['id_product'], $value['date_from'], $value['date_to']);

                $cart_detail_data[$key]['amt_with_qty'] = $roomTypeDateRangePrice['total_price_tax_excl'];
            }
        }
        if ($cart_detail_data) {
            return $cart_detail_data;
        }

        return false;
    }

    /**
     * [updateIdCurrencyByIdCart : To update id_currency in the table By id_cart].
     *
     * @param [Int] $id_cart     [Id of the cart]
     * @param [Int] $id_currency [Id of the currency]
     *
     * @return [Boolean] [Returns true if successfully updated else returns false]
     */
    public function updateIdCurrencyByIdCart($id_cart, $id_currency)
    {
        $update_currency = Db::getInstance()->update('htl_cart_booking_data', array('id_currency' => $id_currency), '`id_cart`='.$id_cart);
        if ($update_currency) {
            return true;
        }

        return false;
    }

    /**
     * [deleteRoomFromOrder : Deletes a row from the table with the supplied conditions].
     *
     * @param [int]  $id_order  [Id of the order]
     * @param [int]  $id_room   [id_of the room]
     * @param [date] $date_from [Start date of the booking]
     * @param [date] $date_to   [End date of the booking]
     *
     * @return [Boolean] [True if deleted else false]
     */
    public function deleteOrderedRoomFromCart($id_order, $id_hotel, $id_room, $date_from, $date_to)
    {
        $delete = Db::getInstance()->delete('htl_cart_booking_data', '`id_order`='.(int) $id_order.' AND `id_hotel`='.(int) $id_hotel.' AND `id_room`='.(int) $id_room." AND `date_from`='$date_from' AND `date_to`='$date_to'");

        return $delete;
    }

    /**
     * [getCartInfoIdCartIdProduct :: Returns Cart Info by id_product].
     *
     * @param [int] $id_cart    [cart id]
     * @param [int] $id_product [product id]
     *
     * @return [array/false] [returns all entries if data found else return false]
     */
    public function getCartInfoIdCartIdProduct($id_cart, $id_product)
    {
        return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.(int) $id_cart.' AND `id_product`='.(int) $id_product);
    }

    /**
     * [getProductFeaturePricePlanByDateByPriority returns priority wise feature price plan on a perticular date].
     *
     * @param [int]  $id_product [id of the product]
     * @param [date] $date       [date for which feature price plan to be returned]
     *
     * @return [array|false] [returns array containg info of the feature plan if foung otherwise returns false]
     */
    public function getProductFeaturePricePlanByDateByPriority($id_product, $date)
    {
        //Get priority
        $featurePricePriority = Configuration::get('HTL_FEATURE_PRICING_PRIORITY');
        $featurePricePriority = explode(';', $featurePricePriority);
        if ($featurePricePriority) {
            foreach ($featurePricePriority as $priority) {
                if ($priority == 'specific_date') {
                    $featurePrice = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'htl_room_type_feature_pricing` WHERE `id_product`='.(int) $id_product.' AND `active`=1 AND `date_selection_type`=2 AND `date_from` = \''.$date.'\'');
                    if ($featurePrice) {
                        return $featurePrice;
                    }
                } elseif ($priority == 'special_day') {
                    $featurePrice = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'htl_room_type_feature_pricing` WHERE `id_product`='.(int) $id_product.' AND `is_special_days_exists`=1 AND `active`=1 AND `date_from` <= \''.$date.'\' AND `date_to` >= \''.$date.'\'');
                    if ($featurePrice) {
                        $specialDays = Tools::jsonDecode($featurePrice['special_days']);
                        if (in_array(strtolower(date('D', strtotime($date))), $specialDays)) {
                            return $featurePrice;
                        }
                    }
                } elseif ($priority == 'date_range') {
                    $featurePrice = Db::getInstance()->getRow('SELECT * FROM `'._DB_PREFIX_.'htl_room_type_feature_pricing` WHERE `id_product`='.(int) $id_product.' AND `date_selection_type`=1 AND `is_special_days_exists`=0 AND `active`=1 AND `date_from` <= \''.$date.'\' AND `date_to` >= \''.$date.'\'');
                    if ($featurePrice) {
                        return $featurePrice;
                    }
                }
            }
        }

        return false;
    }

    /**
     * [getHotelCartBookingData description]
     * @return [type] [description]
     */
    public static function getHotelCartBookingData()
    {
        $cartHotelData = array();
        $context = Context::getContext();
        if ($cartRoomTypes = $context->cart->getProducts()) {
            $idLang = $context->language->id;
            $price_tax = HotelBookingDetail::useTax();
            // create needed objects
            $objCartBooking = new self();
            $objBookingDetail = new HotelBookingDetail();
            $objRoomType = new HotelRoomType();
            $objHotelBranch = new HotelBranchInformation();
            $objHtlFeatures = new HotelFeatures();
            $objCartBookingData = new HotelCartBookingData();
            $objRoomDemands = new HotelRoomTypeDemand();

            foreach ($cartRoomTypes as $prodKey => $product) {
                if (Validate::isLoadedObject(
                    $objProduct = new Product($product['id_product'], false, $idLang)
                )) {
                    $coverImageArr = $objProduct->getCover($product['id_product']);
                    // get cover image link
                    if (!empty($coverImageArr)) {
                        $coverImg = $context->link->getImageLink(
                            $objProduct->link_rewrite,
                            $objProduct->id.'-'.$coverImageArr['id_image'],
                            'small_default'
                        );
                    } else {
                        $coverImg = $context->link->getImageLink(
                            $objProduct->link_rewrite,
                            $context->language->iso_code.'-default',
                            'small_default'
                        );
                    }
                    $unitPrice = Product::getPriceStatic(
                        $product['id_product'],
                        $price_tax,
                        null,
                        6,
                        null,
                        false,
                        true,
                        1
                    );
                    $unitPriceWithoutReduction = $objProduct->getPriceWithoutReduct(!$price_tax);
                    $roomDetail = $objRoomType->getRoomTypeInfoByIdProduct($product['id_product']);
                    $cartHotelData[$prodKey]['adult'] = $roomDetail['adult'];
                    $cartHotelData[$prodKey]['children'] = $roomDetail['children'];
                    $cartHotelData[$prodKey]['total_num_rooms'] = 0;
                    $cartHotelData[$prodKey]['id_product'] = $product['id_product'];
                    $cartHotelData[$prodKey]['cover_img'] = $coverImg;
                    $cartHotelData[$prodKey]['name'] = $objProduct->name;
                    $cartHotelData[$prodKey]['unit_price'] = $unitPrice;
                    $cartHotelData[$prodKey]['unit_price_without_reduction'] = $unitPriceWithoutReduction;
                    $cartHotelData[$prodKey]['extra_demands'] = $objRoomDemands->getRoomTypeDemands(
                        $product['id_product']
                    );

                    // add hotel info of the room
                    if ($hotelInfo = $objHotelBranch->hotelBranchesInfo(false, 2, 1, $roomDetail['id_hotel'])) {
                        $hotelInfo['location'] = $hotelInfo['hotel_name'].', '.$hotelInfo['city'].', '.
                        State::getNameById($hotelInfo['state_id']).', '.
                        Country::getNameById($idLang, $hotelInfo['country_id'])
                        .', '.$hotelInfo['zipcode'];

                        // append hotel features
                        if ($hotelFeaureIds = $objHotelBranch->getFeaturesOfHotelByHotelId($roomDetail['id_hotel'])) {
                            $hotelFeatures = array();
                            foreach ($hotelFeaureIds as $value) {
                                $htlFeatureInfo = $objHtlFeatures->getFeatureInfoById($value['feature_id']);
                                if ($htlFeatureInfo = $objHtlFeatures->getFeatureInfoById($value['feature_id'])) {
                                    $hotelFeatures[] = $htlFeatureInfo['name'];
                                }
                            }
                            if ($hotelFeatures) {
                                $hotelInfo['htl_features'] = $hotelFeatures;
                            }
                        }
                        // append roomtype features
                        $hotelInfo['room_features'] = $objProduct->getFrontFeatures($idLang);

                        $cartHotelData[$prodKey]['hotel_info'] = $hotelInfo;
                    }
                    if (isset($context->customer->id)) {
                        $cartBookingDetails = $objCartBooking->getOnlyCartBookingData(
                            $context->cart->id,
                            $context->cart->id_guest,
                            $product['id_product']
                        );
                    } else {
                        $cartBookingDetails = $objCartBooking->getOnlyCartBookingData(
                            $context->cart->id,
                            $context->cart->id_guest,
                            $product['id_product']
                        );
                    }
                    if (isset($cartBookingDetails) && $cartBookingDetails) {
                        foreach ($cartBookingDetails as $data_k => $data_v) {
                            $dateJoin = strtotime($data_v['date_from']).strtotime($data_v['date_to']);
                            $demandPrice = $objCartBookingData->getCartExtraDemands(
                                $context->cart->id,
                                $data_v['id_product'],
                                $data_v['id_room'],
                                $data_v['date_from'],
                                $data_v['date_to'],
                                1
                            );
                            if (isset($cartHotelData[$prodKey]['date_diff'][$dateJoin])) {
                                $numDays = $objBookingDetail->getNumberOfDays($data_v['date_from'], $data_v['date_to']);
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['demand_price'] += $demandPrice;
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['num_rm'] += 1;
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['num_days'] = $numDays;
                                $varQty = (int) $cartHotelData[$prodKey]['date_diff'][$dateJoin]['num_rm'];
                                $roomTypeDateRangePrice = HotelRoomTypeFeaturePricing::getRoomTypeTotalPrice(
                                    $product['id_product'],
                                    $data_v['date_from'],
                                    $data_v['date_to']
                                );
                                if (!$price_tax) {
                                    $amount = $roomTypeDateRangePrice['total_price_tax_excl'];
                                } else {
                                    $amount = $roomTypeDateRangePrice['total_price_tax_incl'];
                                }
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['amount'] = $amount * $varQty;
                            } else {
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['demand_price'] = $demandPrice;
                                $numDays = $objBookingDetail->getNumberOfDays($data_v['date_from'], $data_v['date_to']);
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['num_rm'] = 1;
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['data_form'] = date(
                                    'Y-m-d',
                                    strtotime($data_v['date_from'])
                                );
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['data_to'] = date(
                                    'Y-m-d',
                                    strtotime($data_v['date_to'])
                                );
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['num_days'] = $numDays;
                                $roomTypeDateRangePrice = HotelRoomTypeFeaturePricing::getRoomTypeTotalPrice(
                                    $product['id_product'],
                                    $data_v['date_from'],
                                    $data_v['date_to']
                                );
                                if (!$price_tax) {
                                    $amount = $roomTypeDateRangePrice['total_price_tax_excl'];
                                } else {
                                    $amount = $roomTypeDateRangePrice['total_price_tax_incl'];
                                }
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['amount'] = $amount;
                                $cartHotelData[$prodKey]['date_diff'][$dateJoin]['link'] = $context->link->getPageLink(
                                    'order-opc',
                                    null,
                                    $idLang,
                                    "id_product=".$product['id_product']."&deleteFromOrderLine=1&date_from=".
                                    $data_v['date_from']."&date_to=".$data_v['date_to']
                                );
                            }
                            if ($price_tax) {
                                $feature_price = HotelRoomTypeFeaturePricing::getRoomTypeFeaturePricesPerDay(
                                    $product['id_product'],
                                    $data_v['date_from'],
                                    $data_v['date_to'],
                                    true
                                );
                            } else {
                                $feature_price = HotelRoomTypeFeaturePricing::getRoomTypeFeaturePricesPerDay(
                                    $product['id_product'],
                                    $data_v['date_from'],
                                    $data_v['date_to'],
                                    false
                                );
                            }
                            $feature_price_diff = (float)($unitPriceWithoutReduction - $feature_price);
                            $cartHotelData[$prodKey]['date_diff'][$dateJoin]['feature_price'] = $feature_price;
                            $cartHotelData[$prodKey]['date_diff'][$dateJoin]['feature_price_diff'] = $feature_price_diff;
                        }
                        foreach ($cartHotelData[$prodKey]['date_diff'] as $key => $value) {
                            $cartHotelData[$prodKey]['total_num_rooms'] += $value['num_rm'];
                        }
                    }
                }
            }
        }
        return $cartHotelData;
    }

    public function getHotelCartDistinctDateRangesByRoomType($id_cart, $id_product)
    {
        return Db::getInstance()->executeS('SELECT DISTINCT `date_from`, `date_to` FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.(int) $id_cart.' AND `id_product`='.(int)$id_product);
    }

    public function getHotelCartRoomsInfoByRoomType($id_cart, $id_product, $date_from, $date_to)
    {
        return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'htl_cart_booking_data` WHERE `id_cart`='.(int) $id_cart.' AND `id_product`='.(int)$id_product.' AND `date_from` = \''.pSQL($date_from).'\' AND `date_to` = \''.pSQL($date_to).'\'');
    }

    public function updateCartProductQuantityInPsCart($id_cart, $id_product, $quantity, $direction='up')
    {
        $cart = new Cart($id_cart);
        $shop = Context::getContext()->shop;
        $containsProduct = $cart->containsProduct($id_product, 0, 0, (int)$cart->id_address_delivery);
        $oldQty = $containsProduct['quantity'];
        /* Update quantity if product already exist */
        if ($containsProduct) {
            if ($direction == 'up') {
                $new_qty = (int)$containsProduct['quantity'] + (int)$quantity;
                $qty = '+ '.(int)$quantity;
            } elseif ($direction == 'down') {
                $new_qty = (int)$containsProduct['quantity'] - (int)$quantity;
                $qty = '- '.(int)$quantity;
            } elseif ($direction == 'fix') {
                $new_qty = (int)$quantity;
            } else {
                return false;
            }
            /* Delete product from cart */
            if ($new_qty <= 0) {
                return $cart->deleteProduct((int)$id_product, 0, (int)0, 0, 0);
            } else {
                Db::getInstance()->execute('
                    UPDATE `'._DB_PREFIX_.'cart_product`
                    SET `quantity` = '.$new_qty.', `date_add` = NOW()
                    WHERE `id_product` = '.(int)$id_product.'
                    AND `id_cart` = '.(int)$id_cart.' AND `id_address_delivery` = '.(int)$cart->id_address_delivery
                );
            }
        } else { /* Add product to the cart */
            $result_add = Db::getInstance()->insert('cart_product', array(
                'id_product' => (int)$id_product,
                'id_product_attribute' => 0,
                'id_cart' => (int)$id_cart,
                'id_address_delivery' => (int)$cart->id_address_delivery,
                'id_shop' => $shop->id,
                'quantity' => (int)$quantity,
                'date_add' => date('Y-m-d H:i:s')
            ));
            if (!$result_add) {
                return false;
            }
        }
        return true;
    }

    /**
     * [getHotelCartInfoIdOrderIdProduct :: Returns Cart Info by id_product]
     * @param  [int] $id_cart    [cart id]
     * @param  [int] $id_product [product id]
     * @return [array/false]     [returns all entries if data found else return false]
     */
    public static function getHotelCartInfoIdOrderIdProduct($id_cart, $id_product)
    {
        return Db::getInstance()->executeS("SELECT * FROM `"._DB_PREFIX_."htl_cart_booking_data` WHERE `id_cart`=".(int) $id_cart." AND `id_product`=".(int) $id_product);
    }

    public function getCartExtraDemands(
        $idCart = 0,
        $idProduct = 0,
        $idRoom = 0,
        $dateFrom = 0,
        $dateTo = 0,
        $getTotalPrice = 0
    ) {
        $context = Context::getContext();
        if (isset($context->currency->id)
            && Validate::isLoadedObject($context->currency)
        ) {
            $idCurrency = (int)$context->currency->id;
        } else {
            $idCurrency = (int)Configuration::get('PS_CURRENCY_DEFAULT');
        }

        if ($getTotalPrice) {
            $totalDemandsPrice = 0;
        }
        $sql = 'SELECT `id`, `id_product`, `id_room`, `extra_demands` FROM `'._DB_PREFIX_.'htl_cart_booking_data`
        WHERE 1';
        if ($idCart) {
            $sql .= ' AND `id_cart`='.(int) $idCart;
        }
        if ($idProduct) {
            $sql .= ' AND `id_product`='.(int) $idProduct;
        }
        if ($idRoom) {
            $sql .= ' AND `id_room`='.(int) $idRoom;
        }
        if ($dateFrom && $dateTo) {
            $sql .= ' AND `date_from` = \''.pSQL($dateFrom).'\' AND `date_to` = \''.pSQL($dateTo).'\'';
        }
        if ($roomTypeDemands = Db::getInstance()->executeS($sql)) {
            $objRoomDemandPrice = new HotelRoomTypeDemandPrice();
            foreach ($roomTypeDemands as &$demand) {
                if ($getTotalPrice) {
                    if ($demand['extra_demands']
                        && ($extraDemand = Tools::jsonDecode($demand['extra_demands'], true))
                    ) {
                        $totalDemandsPrice += $objRoomDemandPrice->getRoomTypeDemandsTotalPrice(
                            $demand['id_product'],
                            $extraDemand
                        );
                    }
                } else {
                    $demand['extra_demands'] = Tools::jsonDecode(
                        $demand['extra_demands'],
                        true
                    );
                }
            }
        }
        if ($getTotalPrice) {
            return $totalDemandsPrice;
        } else {
            return $roomTypeDemands;
        }
    }
}
