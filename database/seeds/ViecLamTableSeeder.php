<?php

use Illuminate\Database\Seeder;

class ViecLamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('viec_lams')->delete();
        
        \DB::table('viec_lams')->insert(array (
        	0 =>
        	array(
        		'id' =>1,
        		'cong_ty' =>1,
        		'ten_viec_lam' =>'GIÁM SÁT KỸ THUẬT ĐIỆN LẠNH VÀ THIẾT BỊ NHÀ BẾP',
        		'ten_nganh_nghe' => 1,
        		'mo_ta' =>'Giám sát, bảo trì, bảo dưỡng hệ thống điều hòa, bếp. Thực hiện các công việc khác do quản lý trực tiếp giao.',
        		'mo_ta_2' => '𝐏𝐇𝐔́𝐂 𝐋𝐎̛̣𝐈
        						Phòng ở tại thị trấn Lăng Cô cho các nhân viên ở xa.
        						Xe đưa đón đi làm.Cung cấp đồng phục.
        						2 bữa ăn/ ca làm việc.
        						Thời gian làm việc: 9.5h/ ngày
        						Được đóng tất cả các bảo hiểm theo Luật Lao động. 
        						Đặc biệt có bảo hiểm Chăm sóc sức khỏe Bảo Việt.
        						Được trải nghiệm nghỉ dưỡng tại các khách sạn/ resort thuộc tập đoàn Banyan Tree trên toàn thế giới.',
        		'luong' => 'thỏa thuận',
        		'yeu_cau' =>'Có kinh nghiệm ở vị trí liên quan là một lợi thế. Ưu tiên ứng viên người địa phương, từng làm việc trong các khách sạn, resort',
        		'dia_chi' =>'thôn Cù Dù, xã Lộc Vĩnh, huyện Phú Lộc, tỉnh Thừa Thiên Huế',
        		'ngay_het_han' =>'2021-03-10',
        		'created_at' => '2021-01-10 04:24:01',
        		'updated_at' => '2021-01-15 04:33:51',
        	),
        	1 =>
        	array(
        		'id' =>2,
        		'cong_ty' =>1,
        		'ten_viec_lam' =>'NHÂN VIÊN HỖ TRỢ HÀNH LÝ',
        		'ten_nganh_nghe' => 3,
        		'mo_ta' =>'Hỗ trợ khách hàng các công việc vặt khi mang đồ và dẫn khách lên phòng
        				Thông báo với khách hàng về các thủ tục nhận phòng cũng như giúp đỡ họ quen với việc sử dụng các cơ sở vật chất của khách sạn.
        				Giới thiệu một số địa điểm tham quan cũng như các món ăn ngon trong khu vực cho khách.
        				Chịu trách nhiệm giúp khách hàng chuyển fax, tin nhắn, các bưu kiện,... trong thời gian nhanh nhất, đồng thời không quên ghi chép lại đầy đủ trong sổ nhât ký.
        				Đảm bảo khu vực tiền sảnh luôn được gọn gàng, đủ nhân lực phục vụ khách và giữ thái độ vui vẻ, nhiệt tình, chuyên nghiệp để khách được vui vẻ nhất.',
        		'mo_ta_2' => '𝐏𝐇𝐔́𝐂 𝐋𝐎̛̣𝐈
        						Phòng ở tại thị trấn Lăng Cô cho các nhân viên ở xa.
        						Xe đưa đón đi làm.Cung cấp đồng phục.
        						2 bữa ăn/ ca làm việc.
        						Thời gian làm việc: 9.5h/ ngày
        						Được đóng tất cả các bảo hiểm theo Luật Lao động. 
        						Đặc biệt có bảo hiểm Chăm sóc sức khỏe Bảo Việt.
        						Được trải nghiệm nghỉ dưỡng tại các khách sạn/ resort thuộc tập đoàn Banyan Tree trên toàn thế giới.',
        		'luong' => 'thỏa thuận',
        		'yeu_cau' =>'Sức khỏe tốt
        					Kỹ năng giao tiếp tốt 
        					Khả năng sử dụng tiếng Anh
        					Khả năng chịu đựng áp lực
        					Sự tỉ mỉ, cẩn thận',
        		'dia_chi' =>'thôn Cù Dù, xã Lộc Vĩnh, huyện Phú Lộc, tỉnh Thừa Thiên Huế',
        		'ngay_het_han' =>'2021-03-10',
        		'created_at' => '2021-01-10 04:24:01',
        		'updated_at' => '2021-01-15 04:33:51',
        	),
        	2 =>
        	array(
        		'id' =>3,
        		'cong_ty' =>1,
        		'ten_viec_lam' =>'NHÂN VIÊN PHỤ BẾP',
        		'ten_nganh_nghe' => 2,
        		'mo_ta' =>' Hỗ trợ Bếp Chính/ Bếp Trưởng các công việc trong bếp: Sơ chế, Chuẩn bị NVL, làm món (Bếp nóng & Bếp lạnh)
        					Giữ vệ sinh khu vực làm việc, đảm bảo vệ sinh ATTP.
        					Cung cấp món ăn tươi ngon trong thời gian nhanh nhất.
        					Thực hiện các công việc khác theo yêu cầu của cấp trên.',
        		'mo_ta_2' => '𝐏𝐇𝐔́𝐂 𝐋𝐎̛̣𝐈
        						Phòng ở tại thị trấn Lăng Cô cho các nhân viên ở xa.
        						Xe đưa đón đi làm.Cung cấp đồng phục.
        						2 bữa ăn/ ca làm việc.
        						Thời gian làm việc: 9.5h/ ngày
        						Được đóng tất cả các bảo hiểm theo Luật Lao động. 
        						Đặc biệt có bảo hiểm Chăm sóc sức khỏe Bảo Việt.
        						Được trải nghiệm nghỉ dưỡng tại các khách sạn/ resort thuộc tập đoàn Banyan Tree trên toàn thế giới.',
        		'luong' => 'thỏa thuận',
        		'yeu_cau' =>'Siêng năng, chăm chỉ.
        					Ham học hỏi.
        					Quan sát tốt, có óc sáng tạo.
        					Nhiệt tình, trung thực.
        					Chịu đựng được cường độ làm việc cao trong giờ cao điểm.
        					Có tình yêu với nghề Bếp.',
        		'dia_chi' =>'thôn Cù Dù, xã Lộc Vĩnh, huyện Phú Lộc, tỉnh Thừa Thiên Huế',
        		'ngay_het_han' =>'2021-03-10',
        		'created_at' => '2021-01-10 04:24:01',
        		'updated_at' => '2021-01-15 04:33:51',
        	),



        ));
    }
}
