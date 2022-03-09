<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Setting;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::get();
        return view('admin.orders.index', compact('orders'));
    }

    public function new(Request $request){
        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->comment = $request->comment;
        $order->type = $request->type;
        $order->save();

        $email = Setting::where('key', 'email')->first()['value'];

        if($email != NULL) {
            $to = $email;
        }else{
            $to = 'test@gmail.com';
        }

        $subject = "Everest заявка!";
        $message = ' <p>Имя: '.$order->name.'</p>  </br> <p>Телефон: '.$order->phone.'</p> <br> <p>Комментарий: '.$order->comment.'</p><br><p>Тип: '.$order->type.'</p>';
        $headers  = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: <info@wpfl.site>\r\n";

        mail($to, $subject, $message, $headers);

        return 'Заявка создана';
    }
}
