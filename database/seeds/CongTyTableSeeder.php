<?php

use Illuminate\Database\Seeder;

class CongTyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cong_ties')->delete();
        \DB::table('cong_ties')->insert(array (
        	0=>
        	array(
        		'id' =>1,
        		'ten_cong_ty' => 'Laguna Lăng Cô',
        		'dia_chi' => 'thôn Cù Dù, xã Lộc Vĩnh, huyện Phú Lộc, tỉnh Thừa Thiên Huế',
        		'so_dien_thoai' =>'0234 3695 881',
        		'email' => 'laguna@lagunalangco.com',
        		'mo_ta' => 'Laguna Lăng Cô là điểm đến nghỉ dưỡng đẳng cấp quốc tế và là sự lựa chọn hàng đầu cho nhu cầu sở hữu ngôi nhà thứ hai tại miền Trung Việt Nam của Tập đoàn Banyan Tree. Dự án này là khu nghỉ dưỡng phức hợp đẳng cấp quốc tế đầu tiên tại Việt Nam. Khu nghỉ dưỡng rộng 280 héc-ta này nằm kề bên Vịnh Lăng Cô, được bao bọc bởi bờ biển dài 3 ki-lô-mét tại Khu Kinh Tế Chân Mây với tầm nhìn hướng thẳng Biển Đông. Đây là một khu vực nổi tiếng với bãi biển nguyên sơ, khung cảnh thiên nhiên kỳ vĩ và nằm ngay trên Con đường Di sản miền Trung huyền thoại với các di sản văn hóa thế giới được UNESCO công nhận.',
        		'mo_ta_2' => 'Laguna Lăng Cô là bước đột phá đầu tiên của Banyan Tree tại thị trường Việt Nam, mô phỏng lại nhiều nét đặc trưng của Laguna Phuket, khu nghỉ dưỡng phức hợp hàng đầu của Tập đoàn tại miền Nam Thái Lan. Dự án bao gồm các khách sạn, khu dịch vụ Spa mang thương hiệu Banyan Tree và Angsana, sân golf 18 lỗ do Ngài Nick Faldo thiết kế, các biệt thự riêng biệt và khu dân cư cao cấp sẵn sàng được chào bán, trung tâm hội nghị và hàng loạt các hoạt động giải trí cho khách hàng ở mọi lứa tuổi.',
        		'logo' => 'asset/img/laguna.jpg',
        		'website' => 'http://www.lagunalangco.com/',
        		'created_at' => '2021-01-14 04:24:01',
        		'updated_at' => '2021-01-15 04:33:51',
        	),
        	
        ));
    }
}
